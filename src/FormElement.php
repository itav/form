<?php

namespace Itav\Component\Form;

class FormElement implements FormElementInterface
{

    protected $id;
    protected $class;
    protected $name;
    protected $error;
    protected $attributes;
    protected $validRules = [];
    protected $template = 'formelement.twig';
    
    
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

    public function setRequired()
    {
        $this->validRules['required'] = true;
        return $this;
    }

    public function setMin($min)
    {
        $this->validRules['minlength'] = $min;
        return $this;
    }

    public function setMax($max)
    {

        $this->validRules['maxlength'] = $max;
        return $this;
    }

    public function getValidRules()
    {
        return $this->validRules;
    }

    /**
     * @param array $validRules
     * @return $this
     */
    public function addCustomValidRules($validRules)
    {
        $this->validRules = array_merge($this->validRules, $validRules);
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getError()
    {
        return $this->error;
    }

    public function setError($error)
    {
        $this->error = $error;
        return $this;
    }
}
