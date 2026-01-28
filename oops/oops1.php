<?php
/*           class itself      outside class         derived class(child)
 public          yes                yes                  yes
 protected       yes                no                   yes  
 private         yes                no                   no

// Private properties are not inherited so in child class new property created with same name
// It prevents outside code modifying property
*/
class Demo{
    public $public = 'Public';
    protected $protected = 'Protected';
    private $private = 'Private';

     function Display()
    {
        echo $this->public;
        echo $this->protected;
        echo $this->private;
    }
}

Class Test extends Demo{
    function show(){
        echo $this->public; echo "<br/>";
        echo $this->protected; echo "<br/>";
        echo $this->private;  echo "<br/>";
    }
}

$obj= new Demo();
$obj->public;
//$obj->protected;
//$obj->private;
$obj->Display(); 
echo "<br/>";

$obj= new Test;
$obj->show();




class Base{
   public $name;
   protected $dad= "Tom";
   private $grandpa="Alfred";

   public function display(){
    echo $this->name.'-'.$this->dad.'-'.$this->grandpa."<br/>";
   }  
}


class Child extends Base{
      public $dad; public $grandpa;
        public function display1(){
    echo $this->name.'-'.$this->dad.'-'.$this->grandpa."<br/>";
   } 
}

$obj= new Base();
$obj->name= "Hari";
$obj->display();


$obj= new Child();
$obj->name= "Harry";
$obj->dad= "Harry1";
$obj->grandpa= "Harry2";
$obj->display();
$obj->display1();


/* PublicProtectedPrivate
Hari-Tom-Alfred
Harry-Harry1-Alfred
Harry-Harry1-Harry2 */




////////////// contructor and destructor  //////////////////////////
// Contructor-It is a member function of a class that has the same name as the class name. overloaded
// Destructor- Same name as class name preceded by (~) operator.~ClassName. It can't be overloaded
class Fruits{
    protected $name;
    protected $color;

    function __construct($n,$c){
        $this->name= $n; $this->color=$c;
    }

    protected function show(){
        echo $this->name; echo $this->color;
    }

}

class Children extends Fruits{
    function __destruct(){
        echo "the fruit id {$this->name} and color is {$this->color}";
    }
}

$b= new Children('Banana','Yellow');