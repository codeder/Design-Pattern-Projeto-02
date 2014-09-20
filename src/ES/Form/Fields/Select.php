<?php

namespace ES\Form\Fields;
use ES\Form\Interfaces\iRender;
use ES\Form\Interfaces\iOptions;

class Select implements iRender, iOptions {
    
    private $label;
    private $name;
    private $options = array();
    
    function __construct($label, $name) {
        $this->label = $label;
        $this->name = $name;
    }
    
    public function Render() {

        $html = "<div class=\"form-group\">";
        $html .= "<label>{$this->label}";
        $html .= "<select class=\"form-control\" name='{$this->name}'>";

        foreach($this->options as $options){
            $html .= "<option value=\"$options\">".$options."</option>";
        }
        
        $html .= "</select>";
        $html .= "</label>";
        $html .= "</div>";

        return $html;
    }

    public function setOptions($options) {
        $this->options[] = $options;
    }

}
