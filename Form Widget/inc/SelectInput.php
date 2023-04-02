<?php

/**
 * class SelectInput
 */
class SelectInput extends BaseInput{
    public string $label;
    public string $name;
    public string $value;
    public array $options = [];
    public array $optionData = [];

    public function __construct( string $label, string $name, string $value, array $options ){
        $this->label = $label;
        $this->name = $name;
        $this->value = $value;
        $this->options = $options;
    }

    public function renderInput(): string{
        foreach( $this->options as $value ){
            $temData = '<option value="'.$value.'">' . ucwords( $value ) . '</option>';
            array_push( $this->optionData,  $temData );
        }

        $optionTempData = implode( '', $this->optionData );

        return sprintf( '<div>
            <select name="%s" value="%s">
                %s
            </select>
        </div>', $this->name, $this->value, $optionTempData );
    }
}