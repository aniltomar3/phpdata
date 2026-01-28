<?php
// Serailize- Representation of an object as a string to store in session,DB,cookie
class Abc{
  public  $course="PHP";
  private $fname;
  private $lname;

public function __toString(){
	return "You can't print object as a string";
}

public function showData($fname,$lname){
	$this->fname= $fname;
	$this->lname= $lname;
}

public function __sleep(){
	return array('course','fname','lname');
}

public function __wakeup(){
	echo "I am re connected";
}

}

$obj= new Abc();  //echo $obj;
$obj->showData('sam','kalra');

$res= serialize($obj);
echo $res; echo "<br/>";
$unres= unserialize($res);

echo "<pre>";
print_r($unres);



class DB{
	private $table;
	private $connection=null;


}


class B{
	public $y=100;
}

class A{
	public $x=10;
	public $obj;
	public function __construct(){
      $this->obj= new B();
	}
	function __clone(){
		$this->obj= clone $this->obj;
	}
}

$obj1= new A();
$obj2= $obj1;

//$obj2->x=300;
echo $obj1->x;
echo "<br/>";
echo $obj2->x;
echo "<br/>";
echo "<br/>";
echo $obj1->obj->y;  echo "<br/>";
echo $obj2->obj->y;  echo "<br/>";


$obj3= clone $obj2;
$obj3->x=200;
echo $obj2->x; echo "<br/>";
echo $obj3->x;echo "<br/>";echo "<br/>";

$obj3->obj->y= 500;
echo $obj3->obj->y;
echo "<br/>";
echo $obj2->obj->y;
