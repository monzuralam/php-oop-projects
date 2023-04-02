<?php

class Button extends BaseInput{
    public string $text;

    /**
     * Constructor
     *
     * @param string $text
     */
    public function __construct( string $text ){
        $this->text = $text;
    }

    public function renderInput(): string{
        return sprintf( 
            '<button>%s</button>',
            $this->text
        );
    }

}