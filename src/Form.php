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
        $this->template = 'form.php';
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
        $this->elements[] = $element;
    }

    public function setElements($elements)
    {
        $this->elements = $elements;
        return $this;
    }

}
