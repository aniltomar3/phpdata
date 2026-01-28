<?php 

// require_once("classes/first.php");
// require_once("classes/second.php");


function myfn($class){
	require "classes/".$class.".php";
}

spl_autoload_register('myfn');
$obj= new first();
echo "<br/>";
$obj= new second();

class Abc{
    private $name;
	private $arr= array('fname'=>'sam','salary'=>'100000');
	public function __get($property){
		//echo "You are accessing Private or Non-existing property-> {$property}";
		if(!array_key_exists($property,$this->arr)){ return null; }
		return $this->arr[$property];
	}
 
    public function show(){
    	echo $this->name;
    }
	public function __set($property,$value){
		if(property_exists($this,$property)){
              $this->$property= $value;
		}else{
			echo "This is non-existing or private property: $property ";
		}
	}

   public function __isset($property){
   	  return isset($this->arr[$property]);
   }

   public function __unset($property){
   	unset($this->arr[$property]);
   }

} // class ends

echo "<br/><br/><br/>";
$obj= new Abc();
$obj->name="websoftonic";
echo $obj->show();
 
echo isset($obj->salary);
unset($obj->fname);
print_r($obj);