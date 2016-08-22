<?php

namespace Itav\Component\Form;

class OptGroup extends FormElement
{
    private $disabled;
    private $label;
    /**
     *
     * @var Option[]
     */
    private $options = [];
    
    public function __construct($label = null, $options = null) {
        $this->label = $label;
        $this->options = $options;
        $this->template = 'optgroup.twig';
    }    


    public function isDisabled() {
        return (bool)$this->disabled;
    }

    public function getLabel() {
        return $this->label;
    }

    public function setDisabled($disabled) {
        $this->disabled = (bool)$disabled;
        return $this;
    }

    public function setLabel($label) {
        $this->label = $label;
        return $this;
    }
    public function getOptions() {
        return $this->options;
    }

    public function setOptions(array $options) {
        $this->options = $options;
        return $this;
    }
  
}