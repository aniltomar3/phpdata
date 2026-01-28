<?php 
// Abstract class- When it has name method but need it's child classes to fill out the tasks.
abstract class Parentclass{
	public $name;
	abstract protected function cacl($a,$b);
}


class Child extends Parentclass{
 
   public function cacl($a,$b){
   	 return $a+$b;
   }
}

$obj= new Child();
echo $obj->cacl(5,10);

// school management
// fees, library, cyclestand


// call by value
echo "<br/>";echo "<br/>";
function increment($n){
	$n= $n+1;
	echo "$n"."<br/>";
}

$n=1;
increment($n);
echo $n;