<?php

namespace Itav\Component\Form;

use Itav\Component\Form\FormElement;

class Option extends FormElement {

    private $label;
    private $value;
    private $selected;
    private $disabled;

    public function __construct($label = '', $value = null, $selected = false) {
        $this->setLabel($label);
        $this->setValue($value);
        $this->setSelected($selected);
    }

    public function getLabel() {
        return $this->label;
    }

    public function getValue() {
        return $this->value;
    }

    public function getSelected() {
        return $this->selected;
    }

    public function setLabel($label) {
        $this->label = $label;
        return $this;
    }

    public function setValue($value) {
        $this->value = $value;
        return $this;
    }

    public function setSelected($selected) {
        $this->selected = $selected;
        return $this;
    }

    public function isDisabled() {
        return (bool) $this->disabled;
    }

    public function setDisabled($disabled) {
        $this->disabled = (bool) $disabled;
        return $this;
    }

}
