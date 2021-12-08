<?php
namespace App;

class MagicClass{
    private $prop1 = 1;
    public $prop10 = 10;
    static function ForExample(){
        echo "Вызван метод ForExample\n";
    }
    public function __construct(){
        echo "Вызван метод __construct\n";
    }
    public function __destruct(){
        echo "Вызван метод __destruct\n";
    }
    public function __get($property){
        echo "Вызван метод __get\n";
        return $property;
    }
    public function __set($property, $value){
        echo "Вызван метод __set\n";
    }
    public function  __isset($property)
    {
        echo "Вызван метод __isset\n";
        return isset($this->$property);
    }
    public function __unset($property)
    {
        echo "Вызван метод __unset\n";
        unset($this->$property);
    }
    public function __toString()
    {
        echo "Вызван метод __toString\n";
        return "Вызван метод __toString\n";
    }
    public function __clone(){
        echo "Вызван метод __clone\n";
    }
    public function __call($methodName, $arguments){
        echo "Вызван метод __call\n";
    }
    public function __invoke(){
        echo "Вызван метод __invoke\n";
    }
    public function __debugInfo(){
        echo "Вызван метод __idebugInfo\n";
        return array('prop10'=>$this->prop10);
    }
    public static function __set_state(array $array){
        echo "Вызван метод __set_state\n";

        $ob = new MagicClass;
        #$ob->prop1 = $array['prop1'];
        $ob->prop10 = $array['prop10'];

        return $ob;

    }
}