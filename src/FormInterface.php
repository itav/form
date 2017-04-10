<?php

namespace Itav\Component\Form;

interface FormInterface
{
    /**
     * @return FormElementInterface[]
     */
    public function getElements();
    /**
     * @param FormElementInterface $element
     * @param string $index
     * @return self
     */
    public function addElement($element, $index);
    /**
     * @param FormElementInterface[] $elements
     * @return self
     */
    public function setElements($elements);
    /**
     * @return bool
     */
    public function isValid();
}