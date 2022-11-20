<?php
    class Calculadora{
        private $value1;
        private $value2;
        private $operator;
        function getValue1(){
            return $this->value1;
        }
        function getValue2(){
            return $this->value2;
        }
        function getOperation(){
            return $this->operator;
        }
        function setValue1($value1){
            $this->value1 = $value1;
        }
        function setValue2($value2){
            $this->value2 = $value2;
        }
        function setOperator($operator){
            $this->operator = $operator;
        }
        function calcular() {
            switch($this->operator){
                case "+":
                    return $this->value1 + $this->value2;
                    break;
                case "-":
                    return $this->value1 - $this->value2;
                    break;
                case "*":
                    return $this->value1 * $this->value2;
                    break;
                case "/":
                    return $this->value1 / $this->value2;
                    break;
            }
        }
    }
    $result = $_GET["value1"];
    echo $result;
?>