<?php

require_once('MagicClass.php');

$obj = new \App\MagicClass;  //вызов __construct
$obj->prop1;                 //Вызов __get
$obj->prop1 = 3;             //Вызов __set
echo $obj;                   //Вызов __toString
$obj->getCall();             //Вызов __сall
echo isset($obj->prop2);     //Вызов __isset
unset($obj->prop1);          //Вызов __unset
$obj();                      //Вызов __invoke
$obj1 = clone $obj;          //Вызов __clone
var_dump($obj1);             //Вызов __debugInfo
var_export($obj);

?>