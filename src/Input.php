<?php

namespace Itav\Component\Form;

use Itav\Component\Form\FormElement;

class Input extends FormElement {

    const TYPE_TEXT = 'text';
    const TYPE_PASSWORD = 'password';
    const TYPE_CHECKBOX = 'checkbox';
    const TYPE_RADIO = 'radio';
    const TYPE_SUBMIT = 'submit';
    const TYPE_RESET = 'reset';
    const TYPE_FILE = 'file';
    const TYPE_HIDDEN = 'hidden';
    const TYPE_IMAGE = 'image';
    const TYPE_BUTTON = 'button';

    private $type;
    private $name;
    private $value;
    private $checked;
    private $disabled;
    private $readonly;
    private $size;
    private $maxlength;
    private $src;
    private $alt;
    private $usemap;
    private $ismap;
    private $tabindex;
    private $accesskey;
    private $onfocus;
    private $onblur;
    private $onselect;
    private $onchange;
    private $accept;

    public function getType() {
        return $this->type;
    }

    public function getName() {
        return $this->name;
    }

    public function getValue() {
        return $this->value;
    }

    public function getChecked() {
        return $this->checked;
    }

    public function getDisabled() {
        return $this->disabled;
    }

    public function getReadonly() {
        return $this->readonly;
    }

    public function getSize() {
        return $this->size;
    }

    public function getMaxlength() {
        return $this->maxlength;
    }

    public function getSrc() {
        return $this->src;
    }

    public function getAlt() {
        return $this->alt;
    }

    public function getUsemap() {
        return $this->usemap;
    }

    public function getIsmap() {
        return $this->ismap;
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

    public function getOnselect() {
        return $this->onselect;
    }

    public function getOnchange() {
        return $this->onchange;
    }

    public function getAccept() {
        return $this->accept;
    }

    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function setValue($value) {
        $this->value = $value;
        return $this;
    }

    public function setChecked($checked) {
        $this->checked = $checked;
        return $this;
    }

    public function setDisabled($disabled) {
        $this->disabled = $disabled;
        return $this;
    }

    public function setReadonly($readonly) {
        $this->readonly = $readonly;
        return $this;
    }

    public function setSize($size) {
        $this->size = $size;
        return $this;
    }

    public function setMaxlength($maxlength) {
        $this->maxlength = $maxlength;
        return $this;
    }

    public function setSrc($src) {
        $this->src = $src;
        return $this;
    }

    public function setAlt($alt) {
        $this->alt = $alt;
        return $this;
    }

    public function setUsemap($usemap) {
        $this->usemap = $usemap;
        return $this;
    }

    public function setIsmap($ismap) {
        $this->ismap = $ismap;
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

    public function setOnselect($onselect) {
        $this->onselect = $onselect;
        return $this;
    }

    public function setOnchange($onchange) {
        $this->onchange = $onchange;
        return $this;
    }

    public function setAccept($accept) {
        $this->accept = $accept;
        return $this;
    }

}
