   php (hypertext preprocessor)<br/>
created by canadian programmer Rasmus lerdorf in 1994 <br/>
* It allows web developers to create dynamic content that interact with databases.<br/>
* It is used for developing web based software applications<br/><br/>

1) Easy and simple to learn<br/> 
2) Extremely flexible- if change occur don't write fresh code.<br/>
3) Cost Efficient- open source language<br/>
<br/><br/> 
Disadvantages
1) Security issues<br/>
* xss- cross site scripting<br/>
* sql injection<br/>

Data type in php

1) Integer   2
2) Float //double   2.5  
3) String   "websoftonic"  '123'
4) Boolean   // true false 
5) Null (special data type having only one value NULL)
6) Array
7) Object 

/*
Arthimetic operators 
+,-,*,/,%,**(exponentian)  

Assignment Operators 
x+=y , x= x+y
x-=y,  x= x-y
x*=y   x= x*y 



Comparison Operator 
== Equal            != Not equal <>
>greater than,      < less than 
>=greater equal      <= less than equal 
<=> spaceship  (PHP 7).It returns -1, 0 or 1 
print( 1 <=> 1);print("<br/>");      // 0
print( 1.5 <=> 1.5);print("<br/>");  // 0
print( "a" <=> "b");print("<br/>");  // -1


Increment Decrement 
++$x pre-increment   Increment $x by one then return $x    
$x++ post-increment  return $x, then increment $x by one
  

$res= ++$x + $y++;  (2+2) =4
$res= ++$x + $x++;  (2+2) =4


Logical Operator 
and &&- true if both x nad y are true 
or  ||- true if either x or y is true 
xor  -  true if either x or y is true, but not both(false) 
$x = 100;  
$y = 50;
 
if ($x == 100 xor $y == 80) {
    echo "Hello world!";
}

*/


String
1) strlen- return length of the string
echo strlen('hello');   //5
2) str_word_count('hello world');  //2
3 strrev('hello'); // olleh
4) strpos('hello world','world'); //6 starts with 0
5) str_replace('world','dolly','hello world');
6)strstr($string,$search1);     //first occurence of word return world till last 
                                  return false if not found
  $x= 'demo@gmail.com';
  $res= strstr($x,'@',false);  echo $res;  // @gmail.com                               
7)str_split($str,3);    //hello PHP  0=>hel 1=>lo   2=>PHP
8)str_repeat('.',10);  // ..........
9)strtolower(),strtoupper() //
10) sprintf('i am %d years old',$age);  //$age=25 works with echo
trim()- remove whitespace from begining and end of string


Array
It is used to hold multiple values of similar type in single variable

1) Index Array/ Numeric Array
$season= array('summer','winter','spring','autumn');
       
2nd way
$season[0]='summer';
$season[1]='winter';
$season[2]='spring';
$season[3]='autumn';

2) Associative array
$salary= array('sonu'=>20000,'deepa'=>15000,'mohit'=>30000);
   
3) Multidimensional array
$cars= array(  
  array('volvo',22,8),
  array('wagonr',30,15),
  array('swift',50,10)
);

array function
1) explode- string to array
$str= "I like programming";
$res= explode(" ",$str);  //[0]=>I ,[1]=>like

2) Implode- array to string
$arr= array('pen','pencil','paper');
echo implode(",",$arr)   //pen,pencil,paper

3) array_combine- make arr1 key and arr2 value
$arr1= array('pen','pencil','paper');
$arr2= array(2,4,6);
$res= array_combine($arr1,$arr2);  


4) array_diff- comapre values and return values in arr1 which are not present in any other array
$arr1= array('one'=>'pen','two'=>pencil','three'=>'paper');
$arr2= array('two'=>'pen','three'=>rubber');
$arr3= array('three'=>pen','four'=>pencil');
$res= array_diff($arr1,$arr2,$arr3);  //paper

array_diff_key- compare the keys
array_diff_assoc- compare both key and values
array_intersect() returns values present in all arguments.

5) array_keys- return new array with array keys as value
$arr1= array('one'=>'pen','two'=>'pencil','three'=>'paper');
$c= array_keys($arr1); // array('one','two','three')

6) array_fill(position_start,filling_number,value)
$arr= array_fill(3,3,'blue'); // 3=>'blue',4=>'blue',5=>'blue'
 
array_fill_keys($arr_keys,value) // $array_keys become keys and value same for all

7)array_flip($arr) // Reverse array keys and value

8) array_filter- Filter values with callback function
$arr= array(1,2,3,4,5);
$res= array_filter($arr,'testing');
function testing($val){ return($val>1)}  //2,3,4,5

9)array_merge- merge two or more arrays

10) sort,rsort,asort,arsort,ksort,krsort   // r means reverse
$arr= array('img12.png','img10.png','img2.png','img3.png');
natsort($arr);   print_r($arr);  // arrange in ASC order

11) array_map('callable_func',arr1,arr2);
$first_names = ["John", "Jane", "Bob"];
$last_names  = ["Doe", "Smith", "Jones"];

$full_names = array_map(function($first, $last) {
    return "$first $last";
}, $first_names, $last_names);
// $full_names is now: ["John Doe", "Jane Smith", "Bob Jones"]

$employeeNames = ['john', 'mark', 'lisa'];
$employeeEmails = ['john@example.com', 'mark@example.com', 'lisa@example.com'];
$results = array_map(null, $employeeNames, $employeeEmails);
print_r($results);
Array
(
    [0] => Array
        (
            [0] => john
            [1] => john@example.com
        )

    [1] => Array
        (
            [0] => mark
            [1] => mark@example.com
        )

    [2] => Array
        (
            [0] => lisa
            [1] => lisa@example.com
        )

)

12. array_walk(&$arr,'callback',$arg); //modify the original array directly in-place

$arr= ['Laptop','Mouse','Keyboard'];
$prefix='Electronics';
array_walk($arr,'applyCategory',$prefix);
function applyCategory(&$value,$key,$prefix){
    return $value = $prefix.'-'.$value;
}
echo "<pre>"; print_r($arr);
    Array
(
    [0] => electronics-Laptop
    [1] => electronics-Mouse
    [2] => electronics-Keyboard
)


13. array_column($arr,'key_name')  // use in multidimensional array
$arr= [
 ['id'=>11,'name'=>'demo1','email'=>'demo1@gmail.com'],
 ['id'=>12,'name'=>'demo2','email'=>'demo2@gmail.com'],
 ['id'=>13,'name'=>'demo3','email'=>'demo3@gmail.com'],
];
$res= array_column($arr,'name','id');  // 'id' -specify key name otherwise 0,1,2
echo "<pre>"; print_r($res);
Array
(
    [11] => demo1
    [12] => demo2
    [13] => demo3
)

14. array_chunk($arr,2,true)  // if you want to preserve array keys in associative array

$arr= array('one','two','three','four','five','six'); // 
$res= array_chunk($arr,2);
echo "<pre>"; print_r($res); // Multidimensional array
array_filter($res,'show');
function show($v){
    foreach($v as $key=>$val){
    echo '<div style="border:1px solid #ccc">';
    echo $val;
    echo '</div>';
  }
}

15. array_reduce($arr,'callback_func',$initial)

$numbers=[1,2,3,4,5];
$res= array_reduce($numbers,function($carry,$item){ return $carry= $carry + $item; },0);
echo "<pre>"; print_r($res);   // 15  $carry= 0 here then after 0+1= 1