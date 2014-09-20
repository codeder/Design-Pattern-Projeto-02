<?php

namespace ES\Form\Fields;
use ES\Form\Interfaces\iRender;


class InputText implements iRender {
    
    private $name, $label;

    function __construct($label, $name) {
        $this->label = $label;
        $this->name = $name;        
    }

    
    function getName()
    {
        return $this->name;
    }

    function getlabel()
    {
        return $this->label;
    }

    public function Render()
    {
        $html = "<div class=\"form-group\">";
        $html .= "<label>{$this->label}";
        $html .= "<input type=\"text\" name=\"{$this->name}\">";
        $html .= "</label>";
        $html .= "</div>";
        
        return $html;
    }
    
}
