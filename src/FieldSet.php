<?php

namespace Itav\Component\Form;

class FieldSet extends FormElement {

    private $elements = [];
    
    public function __construct()
    {
        $this->template = 'fieldset.tpl';
    }

    public function getElements() {
        return $this->elements;
    }

    public function addElement($element, $index = null) {

        if ($index) {
            $this->elements[$index] = $element;
            return $this;
        }

        $this->elements[] = $element;
        return $this;
    }
    
    public function delElement($index)
    {
        if (array_key_exists($index, $this->elements)){
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
