Oops 
* Object oriented programming- creating objects that contains both data and function. 
* Procedural Programming- Write functions that perform on data


* Oops is faster and easier to execute
* Oops help keep PHP code DRY "Dont repeat yourself" and make code easier to maintain and debug
* Best for medium and large size project

class
* A class is a blueprint of an object.
* It define property and behaviour of a category (eg- fruit)

Object (Apple,banana,mango)
* It is an instance of a class

Instance- It capture detail information about the particular category

//class calculator{
	public $a,$b,$c;   // access specifier public,private,protected

	function sum(){
		$this->c= $this->a+$this->b;
		return $this->c;
	}

	function sub(){
		$this->c= $this->a-$this->b;
		return $this->c;
	}
}


$c1= new calculator();
$c1->a= 20;  $c1->b=5;

echo $c1->sum();
echo "<br/>";
echo $c1->sub();



// constructor
* Automatically call properties on object initialization

class person{
	public $name,$age;

	function __construct($n,$a)  // local scope variable $n,$a
	{
         $this->name= $n;
         $this->age= $a;
	}

	function show()
	{
		echo $this->name.'-'.$this->age;
	}
}

$p= new person('anil',30);
$p->show();


// Inheritance
* Child class will inherit all the public and protected properties and method from parent class.
* child if required can overwrite methods.

class fruits{
	// properties and methods
}

class veg extends fruits{
	// access properties and methods from parent class
}

$f= new fruits();
$v= new veg();







