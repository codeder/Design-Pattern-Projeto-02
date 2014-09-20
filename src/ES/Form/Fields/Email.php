<?php

namespace ES\Form\Fields;
use ES\Form\Interfaces\iRender;

class Email implements iRender {

    private $label;
    private $name;
    private $placeholder;
        
    function __construct($label, $name, $placeholder = NULL) {
        $this->label = $label;
        $this->name = $name;
        $this->placeholder = $placeholder;
    }
    
    public function Render() {
        $html = "<div class=\"form-group\">";
        $html .= "<label>{$this->label}";
        $html .= "<input class=\"form-control\" type=\"email\" name=\"{$this->name}\" placeholder=\"{$this->placeholder}\">";
        $html .= "</label>";
        $html .= "</div>";
        return $html;
    }

}
