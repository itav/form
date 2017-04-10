<?php

namespace Itav\Component\Form;

class FieldSet extends FormElement implements FormElementInterface, FormInterface
{

    /**
     * @var FormElementInterface[]
     */
    private $elements = [];
    
    public function __construct()
    {
        $this->template = 'fieldset.twig';
    }

    /**
     * @return FormElementInterface[]
     */
    public function getElements() {
        return $this->elements;
    }

    /**
     * @param FormElementInterface $element
     * @param string $index
     * @return $this
     */
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

    /**
     * @param FormElementInterface[] $elements
     * @return $this
     */
    public function setElements($elements) {
        $this->elements = $elements;
        return $this;
    }

    public function isValid()
    {
        if (isset($this->error)) {
            return (bool)$this->error;
        }
        foreach ($this->elements as $element) {
            if ($element instanceof FormInterface) {
                if (!$element->isValid()) {
                    $this->error = true;
                    return false;
                }
            }
            if ((bool)$element->getError()) {
                $this->error = true;
                return false;
            }
        }
        $this->error = false;
        return true;
    }
}
