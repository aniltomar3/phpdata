// String are used for storing and manipulating text.

// length- return length of string
var x= "apple,mango,banana";
console.log(x.length);  //18

// indexOf()
 var x= "anil find anil occurrence anil what you get";
 var res= x.indexOf('anil',4);
 console.log(res); // 10

// lastIndexof()
 var res= x.lastIndexOf('anil',14);
 console.log(res); //0 

 // search
 var res= x.search(new RegExp("ANIL","i"));
 console.log(res);
 var res= x.match("anil"); console.log(res); // match result else null
 console.log('search ends');

 // slice- Extract part of a string and returns the extracted part in a new string.
var x= "apple,mango,banana";
 var res= x.slice(6,11); console.log(res);
   console.log("hello".slice(-5,-2)); // 5-5=>0  5-2=>3 (0,3)


 // substring()- same as slice but can't accept negative values. startindex>endindex- index swapped
  console.log("hello".substring(4,0));

 // substr()- Second part specify the length of extracted part.
  console.log(x.substr(6,11));

// replace()- It returns new string. Replace method replaces only first part.
  console.log(x.replace("mango","grapes"));

// split- convert string to array
var x=("a,b,c,d,e");
 var res= x.split(",");
 console.log(res);

 // concat
 var x="apple"; var y="banana";
 var z= x.concat(",",y);   
 console.log(z); 