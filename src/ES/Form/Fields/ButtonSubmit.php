<?php

namespace ES\Form\Fields;
use ES\Form\Interfaces\iRender;

class ButtonSubmit implements iRender {
    
    private $value;
    
    function __construct($value) {
        $this->value = $value;
    }
    
    public function Render(){
        $html = "<button class=\"btn btn-primary\" value=\"{$this->value}\">{$this->value}</button>";
        return $html;
    }

    public function setName($name) {
        
    }

}
