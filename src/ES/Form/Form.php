<?php

namespace ES\Form;

use ES\Form\Interfaces\iRender;
use ES\Form\Validator;

class Form {

    private $title, $name, $action, $method, $fields = array(), $validator;

    public function __construct(Validator $validator) {
        $this->validator = $validator;
    }

    public function CreateField(iRender $fields) {
        array_push($this->fields, $fields);
        return $this;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setAction($action) {
        $this->action = $action;
    }

    function setMethod($method) {
        $this->method = $method;
    }

    function setTitle($title) {
        $this->title = $title;
    }

    public function Render() {
        
        $html = '<div class="container">';
        $html .= '<div class="row">';
        $html .= "<h1>{$this->title}</h1>";
        $html .= '<form name="'.$this->name.'" action="' . $this->action . '" method="' . $this->method . '">';
        
        foreach ($this->fields as $fields) {
            $html .= $fields->Render() . "\n";
        }
        
        $html .= '</form>';
        $html .= '</div>';
        $html .= '</div>';
        
        return $html;
    }

}
