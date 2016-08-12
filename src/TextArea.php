<?php

namespace Itav\Component\Form;

class TextArea extends FormElement {

    private $label;
    private $name;
    private $value;
    private $rows;
    private $cols;
    private $disabled;
    private $readonly;
    private $tabindex;
    private $accesskey;
    private $onfocus;
    private $onblur;
    private $onselect;
    private $onchange;
    private $templateLabel;
    private $templateWidget;
    
    public function __construct($label = null, $name = null, $value = null) {
        $this->label = $label;
        $this->name = $name;
        $this->value = $value;
        $this->id = $name;
        $this->template = 'textarea.tpl';
        $this->templateLabel = 'label.tpl';
        $this->templateWidget = 'input_widget.tpl';
    }
    
    public function getLabel()
    {
        return $this->label;
    }

    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    public function getName() {
        return $this->name;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    public function getRows() {
        return $this->rows;
    }

    public function getCols() {
        return $this->cols;
    }

    public function getDisabled() {
        return (bool) $this->disabled;
    }

    public function getReadonly() {
        return (bool) $this->readonly;
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

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function setRows($rows) {
        $this->rows = $rows;
        return $this;
    }

    public function setCols($cols) {
        $this->cols = $cols;
        return $this;
    }

    public function isDisabled($disabled) {
        $this->disabled = (bool) $disabled;
        return $this;
    }

    public function isReadonly($readonly) {
        $this->readonly = (bool) $readonly;
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

}
