<?php

/**
 * class BaseInput
 */
abstract class BaseInput extends HtmlElement{
    public string $label = '';
    public string $name;
    public string $value;

    /**
     * BaseInput Constructor
     *
     * @param string $label
     * @param string $name
     * @param string $value
     */
    public function __construct( string $label = '', string $name, string $value = '' ){
        $this->label = $label;
        $this->name  = $name;
        $this->value = $value;
    }

    /**
     * Render Method
     *
     * @return string
     */
    public function render(): string {
        return sprintf( '<div>
                <label>%s</label>
                <br>
                %s
            </div>', $this->label, $this->renderInput() 
        );
    }

    abstract public function renderInput(): string;
}