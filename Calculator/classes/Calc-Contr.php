<?php

class CalcController {
    // ini_set('display_errors', '1');
    // ini_set('display_startup_errors', '1');
    // error_reporting(E_ALL);
    public $old;
    public $num = '';
    public $operators = array('+', '-', '*', '/', '%', '.', '=');

    public function __construct($old, $num, $operators) {
        $this->old = $old;
        $this->num = $num;
        $this->operators = $operators;
    }
    public function calcMethod() {
        switch($this->operators){
            case 'equal':
                $last = '';
                if(strlen($this->old)>0) {
                    $last = substr($this->old, -1);
                }
                if($this->old != '' AND !in_array($last, $this->operators)){
                $out = eval("return ($this->old);");
                } else {
                    $out = $this->old;
                }
            break;
            case 'operation':
                $last = '';
                if(strlen($this->old)>0) {
                    $last = substr($this->old, -1);
                }
                //echo $last;
                if( in_array($last, $this->operators) AND in_array($this->num, $this->operators) ){
                    
                        $out = $this->old;
                //for Decimal
                } else if($this->old == '' AND in_array($this->num, $this->operators) AND $this->num != '.'){
                    $out = '';
                } else {
                    $out = $this->old.$this->num;
                }
                //for Percentage 
                if($out!='' AND $this->num === '%' AND !in_array($last, $this->operators)){
                    $out= eval("return ($this->old)/100;");
                }
            break;
            default: $out = $this->old;
        }
        return $out;
    }
}