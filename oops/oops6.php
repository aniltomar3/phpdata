<?php 

/*
Interface- Iterface allow you to specify what methods a class should implement.
* Iterface can't have properties, while abstract classes can.
* Interface method must be public while abstract class methods is public or protected.
* Classes can implement interface while inheriting from another class at same time.
* When one or more classes use the same interface, it's polymorphism.


*/
interface Base{
    function add($a,$b);
}

interface Base2{
    function sub($a,$b);
}


class C implements Base,Base2{
    function add($a,$b){
         return $a+$b;
    }

    function sub($a,$b){
       return $a-$b;
    }
}

$obj= new C();
echo $obj->add(7,5); 
echo "<br/>";
echo $obj->sub(7,5); 


/*
Traits- For Multiple inheritance
* Traits is used to declare methods or abstract methods that can be used in multiple classes.
* Methods can have access specifier Public, Private, Protected.
*/

trait hello{
    public function sayHello(){
        echo "hello everyone";
    }
}

trait bye{
    public function saybye(){
        echo "Bye Bye Everyone";
    }
}

class Base{
    use hello,bye;  
}

class Base2{
    use hello,bye;
}

$obj= new Base();
$obj->sayHello(); 
$obj->saybye();