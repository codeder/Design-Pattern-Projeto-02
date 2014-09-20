<?php

namespace ES\Form;
use ES\Form\Request;

class Validator {
    
    private $request;
    
    function __construct(Request $request) {
        $this->request = $request;
    }

    
}
