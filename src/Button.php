<?php

namespace Itav\Component\Form;

use Itav\Component\Form\FormElement;

class Button extends FormElement {

    const TYPE_SUBMIT = 'submit';
    const TYPE_BUTTON = 'button';
    const TYPE_RESET = 'reset';

    private $name;
    private $value;
    private $type;
    private $label;
    private $disabled;
    private $tabindex;
    private $accesskey;
    private $onfocus;
    private $onblur;

    public function __construct($label = null, $name = null, $type = self::TYPE_BUTTON,  $value = null) {

        $this->label = $label;
        $this->name = $name;
        $this->id = $name;
        $this->type = ($type) ? $type : self::TYPE_SUBMIT;
        $this->value = $value;
        $this->label = ($label) ? $label : (($name) ? $name : $this->type);
        $this->template = 'button.php';
        
    }

    public function getName() {
        return $this->name;
    }

    public function getValue() {
        return $this->value;
    }

    public function getType() {
        return $this->type;
    }

    public function isDisabled() {
        return (bool) $this->disabled;
    }

    public function getTabindex() {
        return $this->tabindex;
    }

    public function getAccesskey() {
        return $this->accesskey;
    }

    public function getOnfocus() {
        return $this->onfocus;
    }

    public function getOnblur() {
        return $this->onblur;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function setValue($value) {
        $this->value = $value;
        return $this;
    }

    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    public function setDisabled($disabled) {
        $this->disabled = (bool) $disabled;
        return $this;
    }

    public function setTabindex($tabindex) {
        $this->tabindex = $tabindex;
        return $this;
    }

    public function setAccesskey($accesskey) {
        $this->accesskey = $accesskey;
        return $this;
    }

    public function setOnfocus($onfocus) {
        $this->onfocus = $onfocus;
        return $this;
    }

    public function setOnblur($onblur) {
        $this->onblur = $onblur;
        return $this;
    }

    public function getLabel() {
        return $this->label;
    }

    public function setLabel($label) {
        $this->label = $label;
        return $this;
    }

}
