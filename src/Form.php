<?php

namespace Itav\Component\Form;

use Itav\Component\Form\FormElement;

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

    public function addElement($element)
    {
        if ($element instanceof \Itav\Component\Form\Form) {
            foreach ($element->getElements() as $element) {
                $this->elements[] = $element;
            }
            return $this;
        }
        $this->elements[] = $element;
        return $this;
    }

    public function delElement($index)
    {
        if (key_exists($index, $this->elements)) {
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
            if ($element instanceof \Itav\Component\Form\Form) {
                foreach ($element->getElements() as $element) {
                    $this->elements[] = $element;
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
    }

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
            if (($element instanceof \Itav\Component\Form\Input) && ($element->getType() === Input::TYPE_SUBMIT)) {
                $obj->delElement($key);
            }
            if (isset($element) && ($element instanceof \Itav\Component\Form\Button) && ($element->getType() === Button::TYPE_SUBMIT)) {
                $obj->delElement($key);
            }
            if( isset($element) && ($element instanceof \Itav\Component\Form\FieldSet)){
                $this->deleteSubmits($element);
            }
        }
        $obj->reindexElements();
    }

}
