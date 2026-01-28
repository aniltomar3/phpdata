<?php

// constant- Constants cannot be changed once it is declared.

class Demo{
   public const MSG= "Hello How are you";
   function show(){
      echo self::MSG;
   }
}

$obj= new Demo();
echo $obj::MSG;
//$obj->show();

echo "<br/><br/><br/>";



// Magic Method- Automatically run based on condition
//Overriding/Overloading
// Overriding- It is used to replace parent properties, method in child class
// Overloading- When multiple methods are defined with the same name,the concept is method Overloading.
// __call

class Base{
  public $name= 'parent class';
  const PI= 3.14;
    // overloading
  public function calc($a,$b){
  	return $a*$b;
  }

 // public static function __callStatic($fn,$arg){ }  - for static function overloading
  public function __call($fn,$arg){
    if($fn=="area"){
                      $count= count($arg);
                      switch($count){ 
                          case 0:
                              return 0; 
                              break;
                          case 1:  
                              return self::PI *$arg[0] * $arg[0];
                              break;
                          case 2:
                              return $arg[0] * $arg[1];     
                      }  

                   }

  } // call function ends



}

class child extends Base{
   public $name= 'child class';
   public function calc($a,$b){
  	return $a+$b;
  }
}

echo "----------------- overriding start-----------------------";
echo "<br/>";
 $obj= new child();
 echo $obj->name."<br/>";
 echo $obj->calc(3,4);
 echo "<br/>";
echo "----------------- overriding ends-----------------------";
echo "<br/>";echo "<br/>";

echo "----------------- Overloading start-----------------------";
echo "<br/>";
echo $circle= $obj->area(5);
echo "<br/>";
echo $rect= $obj->area(5,4); 
echo "<br/>";
echo "----------------- Overloading ends-----------------------";






