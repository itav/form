<?php

namespace Itav\Component\Form;

class Form extends FormElement implements FormElementInterface, FormInterface
{
    const METHOD_GET = 'get';
    const METHOD_POST = 'post';
    const ENCTYPE_FILE = 'multipart/form-data';
    const ENCTYPE_NORMAL = 'application/x-www-form-urlencoded';

    private $method;
    private $action;
    private $enctype;
    private $onSubmit;
    private $onReset;
    private $acceptCharset;
    /** @var FormElementInterface[] */
    private $elements = [];
    private $templateOpen;
    private $templateClose;

    public function __construct($name = '', $action = null, $method = null)
    {
        if ($name) {
            $this->name = $name;
            $this->id = $name;
        }
        if ($action) {
            $this->action = $action;
        }
        $this->template = 'form.twig';
        $this->templateOpen = 'form_open.twig';
        $this->templateClose = 'form_close.twig';
        $this->method = $method ? $method : self::METHOD_POST;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function getAction()
    {
        return $this->action;
    }

    public function getEnctype()
    {
        return $this->enctype;
    }

    public function getOnSubmit()
    {
        return $this->onSubmit;
    }

    public function getOnReset()
    {
        return $this->onReset;
    }

    public function getAcceptCharset()
    {
        return $this->acceptCharset;
    }

    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    public function setAction($action)
    {
        $this->action = $action;
        return $this;
    }

    public function setEnctype($enctype)
    {
        $this->enctype = $enctype;
        return $this;
    }

    public function setOnSubmit($onSubmit)
    {
        $this->onSubmit = $onSubmit;
        return $this;
    }

    public function setOnReset($onReset)
    {
        $this->onReset = $onReset;
        return $this;
    }

    public function setAcceptCharset($acceptCharset)
    {
        $this->acceptCharset = $acceptCharset;
        return $this;
    }

    /**
     * @return FormElementInterface[]
     */
    public function getElements()
    {
        return $this->elements;
    }

    /**
     * @param FormElementInterface $element
     * @param string $index
     * @return $this
     */
    public function addElement($element, $index = null)
    {
        //Add form to form
        if ($element instanceof Form) {
            //add element as Filedset
            if ($index) {
                $fs = new FieldSet();
                foreach ($element->getElements() as $key => $elem) {
                    $fs->addElement($elem, $key);
                }
                $this->elements[$index] = $fs;
                return $this;
            }
            //add element as normal
            foreach ($element->getElements() as $key => $elem) {
                $this->elements[$key] = $elem;
            }
            return $this;
        }
        if ($index) {
            $this->elements[$index] = $element;
            return $this;
        }
        $this->elements[] = $element;
        return $this;
    }

    public function delElement($index)
    {
        if (array_key_exists($index, $this->elements)) {
            unset($this->elements[$index]);
        }

        return $this;
    }

    public function reindexElements()
    {
        $this->elements = array_values($this->elements);
    }

    /**
     * @param FormElementInterface[] $elements
     * @return $this
     */
    public function setElements($elements)
    {
        if (!is_array($elements)) {
            return $this;
        }
        if (count($elements) <= 0) {
            return $this;
        }
        foreach ($elements as $element) {
            if ($element instanceof Form) {
                foreach ($element->getElements() as $el) {
                    $this->elements[] = $el;
                }
            } else {
                $this->elements[] = $element;
            }
        }
        return $this;
    }

    public function removeSubmits()
    {
        $this->deleteSubmits($this);
        return $this;
    }

    /**
     * Funkcja zbiera do jednej tablicy validRules ze wszystkich obiektów i zwraca je jako JSON
     * @return string
     */
    public function getValidation()
    {
        $rules = [];
        $elementRules = $this->getElementValidRules($this);
        if (!empty($elementRules)) {
            $rules['rules'] = $elementRules;
        }
        return json_encode($rules);
    }

    /**
     * @param Form | FieldSet $obj
     */
    private function deleteSubmits($obj)
    {
        $elements = $obj->getElements();
        if (!is_array($elements)) {
            return;
        }
        if (count($elements) <= 0) {
            return;
        }
        foreach ($elements as $key => $element) {
            if (($element instanceof Input) && ($element->getType() === Input::TYPE_SUBMIT)) {
                $obj->delElement($key);
            }
            if (isset($element) && ($element instanceof Button) && ($element->getType() === Button::TYPE_SUBMIT)) {
                $obj->delElement($key);
            }
            if (isset($element) && ($element instanceof FieldSet)) {
                $this->deleteSubmits($element);
            }
        }
    }

    /**
     * Funkcja rekurencyjna zwracająca zmergowaną tablice wszystkich validRules w wszystkich elementów formularza..
     *
     * @param FormInterface $obj
     * @return array
     */
    private function getElementValidRules($obj)
    {
        $rules = [];
        foreach ($obj->getElements() as $element) {
            if ($element instanceof FieldSet) {
                $rules = array_merge($rules, $this->getElementValidRules($element));
                continue;
            }
            if (!empty($element->getValidRules())) {
                $rules[$element->getName()] = $element->getValidRules();
            }
        }
        return $rules;
    }

    public function isValid()
    {
        if (isset($this->error)) {
            return (bool)$this->error;
        }
        foreach ($this->elements as $element) {
            if ($element instanceof FormInterface) {
                if (!$element->isValid()) {
                    $this->error = true;
                    return false;
                }
            }
            if ((bool)$element->getError()) {
                $this->error = true;
                return false;
            }
        }
        $this->error = false;
        return true;
    }
}