<?php

namespace ES\Form\Fields;

use ES\Form\Interfaces\iRender;
use ES\Form\Interfaces\iRadio;

class RadioButton implements iRender, iRadio {

    private $label;
    private $name;
    private $values = array();
    
    function __construct($label, $name) {
        $this->label = $label;
        $this->name = $name;
    }

    
    public function Render() {
        $html = "<div class=\"radio\">";
        $html .= "<strong>{$this->label}</strong><br>";
        
        foreach ($this->values as $value) {
            $html .= "<label>";
            $html .= "<input type=\"radio\" name='{$this->name}' value='{$value}' />";
            $html .= $value;
            $html .= "</label><br>";
        }
        $html .= "</div>";
        return $html;
    }

    public function setValues($values) {
        $this->values[] = $values;
    }

}
