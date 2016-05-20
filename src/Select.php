<?php

namespace Itav\Component\Form;

use Itav\Component\Form\FormElement;

class Select extends FormElement {

    private $name;
    private $label;
    private $size;
    private $multiple;
    private $disabled;
    private $onfocus;
    private $onblur;
    private $onchange;

    /**
     *
     * @var Option[]
     */
    private $options;

    public function getName() {
        return $this->name;
    }

    public function getLabel() {
        return $this->label;
    }

    public function getOptions() {
        return $this->options;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function setLabel($label) {
        $this->label = $label;
        return $this;
    }

    public function setOptions(array $options) {
        $this->options = $options;
        return $this;
    }

    public function getSize() {
        return $this->size;
    }

    public function getMultiple() {
        return $this->multiple;
    }

    public function isDisabled() {
        return (bool) $this->disabled;
    }

    public function setSize($size) {
        $this->size = $size;
        return $this;
    }

    public function setMultiple($multiple) {
        $this->multiple = $multiple;
        return $this;
    }

    public function setDisabled($disabled) {
        $this->disabled = (bool) $disabled;
        return $this;
    }

    public function getOnfocus() {
        return $this->onfocus;
    }

    public function getOnblur() {
        return $this->onblur;
    }

    public function getOnchange() {
        return $this->onchange;
    }

    public function setOnfocus($onfocus) {
        $this->onfocus = $onfocus;
        return $this;
    }

    public function setOnblur($onblur) {
        $this->onblur = $onblur;
        return $this;
    }

    public function setOnchange($onchange) {
        $this->onchange = $onchange;
        return $this;
    }

}
