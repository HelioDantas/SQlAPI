<?php

include_once("TSqlExpression.class.php");

class Tfilter extends TSqlExpression{

    private $variavel;
    private $expression;
    private $value;

    public function __construct($variavel, $expression, $value){

        $this->variavel = $variavel;
        $this->expression = $expression;    
        $this->value = $this->transform($value);
    }

    private function transform($value){

        if(is_array($value)){

            foreach($value  as $key){

                if(is_integer($key)){

                    $array[] = $key;

                }else if(is_string($key)){

                    $array[] = "'$key'";

                }


            }

            $result = '('. implode(',', $array) .')';

        }else if (is_string($value)){

                $result = "'$value'";
                
                 }else if(is_null($value)){

                     $result = "NULL";

                 }else if (is_bool($value)){

                     $result = $value ? 'TRUE':'FALSE';

                 }else{

                     $result = $value;
                 }

          return $result;  
    
    }


    public function dump(){

        return " {$this->variavel} {$this->expression}  {$this->value}";


    }

}