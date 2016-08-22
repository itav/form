<?php

namespace Itav\Component\Form;

interface FormElementInterface {

    public function getId();

    public function getClass();

    public function getAttributes();

    public function getTemplate();

    public function setId($id);

    public function setClass($class);

    public function addClass($class);

    public function removeClass($class);

    public function setAttributes($attributes);

    public function setTemplate($template);

    public function setRequired();

    public function setMin($min);

    public function setMax($max);

    public function addCustomValidRules($rules);

    public function getValidRules();

    public function getName();

    public function setName($name);
}
