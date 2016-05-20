<?php

namespace Itav\Component\Form;

class FormElement {

    protected $id;
    protected $class;
    protected $attributes;
    protected $template;

    public function getId() {
        return $this->id;
    }

    public function getClass() {
        return $this->class;
    }

    public function getAttributes() {
        return $this->attributes;
    }

    public function getTemplate() {
        return $this->template;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function setClass($class) {
        $this->class = $class;
        return $this;
    }

    public function addClass($class) {
        $this->class .= " $class";
        return $this;
    }

    public function removeClass($class) {
        $this->class = str_replace($class, '', $this->class);
        return $this;
    }

    public function setAttributes($attributes) {
        $this->attributes = $attributes;
        return $this;
    }

    public function setTemplate($template) {
        $this->template = $template;
        return $this;
    }

}
