<?php

namespace Itav\Component\Form;

use Itav\Component\Form\FormElement;

class FieldSet extends FormElement {

    private $elements = [];
    
    public function __construct()
    {
        $this->template = 'fieldset.tpl';
    }

    public function getElements() {
        return $this->elements;
    }

    public function addElement($element) {
        $this->elements[] = $element;
        return $this;
    }
    
    public function delElement($index)
    {
        if (key_exists($index, $this->elements)){
            unset($this->elements[$index]);
        }
        return $this;
    }    
    
    public function reindexElements()
    {
        $this->elements = array_values($this->elements);
    }    

    public function setElements(array $elements) {
        $this->elements = $elements;
        return $this;
    }

}
