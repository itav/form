<?php

namespace Itav\Component\Form;

use Itav\Component\Form\FormElement;

class FieldSet extends FormElement {

    private $elements = [];
    
    public function __construct()
    {
        $this->template = 'fieldset.php';
    }

    public function getElements() {
        return $this->elements;
    }

    public function addElement($element) {
        $this->elements[] = $element;
    }

    public function setElements(array $elements) {
        $this->elements = $elements;
        return $this;
    }

}
