<?php
/**
 * class Form
 */
class Form extends HtmlElement{
    public string $action;
    public string $method;

    /**
     * @var \@BaseInput[]
     */
    private array $elements = [];

    /**
     * Form Constractor
     *
     * @param string $action
     * @param string $method
     */
    public function __construct( string $action = '', string $method = '' ){
        $this->action = $action;
        $this->method = $method;
    }

    public function addElement( HtmlElement $el ){
        $this->elements[] = $el;
    }
    
    /**
     * Render function
     *
     * @return string
     */
    public function render(): string{
        $inputs = implode( PHP_EOL, array_map( fn( $el ) => $el->render(), $this->elements ) );

        return sprintf( '<form action="%s" method="%s">
            %s
        </form>', $this->action, $this->method, $inputs );
    }

}