<?php

namespace Itav\Component\Form;

class Form extends FormElement
{
    const METHOD_GET = 'get';
    const METHOD_POST = 'post';
    const ENCTYPE_FILE = 'multipart/form-data';
    const ENCTYPE_NORMAL = 'application/x-www-form-urlencoded';

    private $method;
    private $action;
    private $enctype;
    private $name;
    private $onSubmit;
    private $onReset;
    private $acceptCharset;
    private $elements;
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
        $this->template = 'form.tpl';
        $this->templateOpen = 'form_open.tpl';
        $this->templateClose = 'form_close.tpl';
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

    public function getName()
    {
        return $this->name;
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

    public function setName($name)
    {
        $this->name = $name;
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

    public function getElements()
    {
        return $this->elements;
    }

    public function addElement($element, $index = null)
    {
        //Add form to form
        if ($element instanceof Form) {
            foreach ($element->getElements() as $key => $element) {
                if(!array_key_exists($key, $this->elements)){
                    $this->elements[$key] = $element;
                }
                $this->elements[] = $element;
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
        $obj->reindexElements();
    }
}