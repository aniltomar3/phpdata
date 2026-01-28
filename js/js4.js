
// to String()- convert array to string

var arr= ['banana','apple','mango'];
var res= arr.toString();
console.log(res);   // banana,apple,mango

// join()- same as toString but you can specify separator

var arr= ['banana','apple','mango'];
var res= arr.join("**");
console.log(res); 


// pop- Removes last element from an array

var arr= ['banana','apple','mango'];
var res= arr.pop();
console.log(arr); 
arr.push('kiwi');  // add last element to an array
console.log(arr);


// slice- Return result in new array
var arr= ['banana','apple','mango'];
var res= arr.slice(1,2);
console.log(res);

// splice- overwrites original array. add and remove

var arr= ['banana','apple','mango'];
 arr.splice(2,0,'kiwi');  // At position 2 add elements
 console.log(arr);
 // arr.splice(2,2);  - At position 2 remove two elements

 // reverse- reverse array order
 var arr= ['banana','apple','mango'];
 arr.reverse();
 console.log(arr);


 // compare function

 var arr= [20,5,10,7];
 var res= arr.sort((a,b)=>{return(a-b); });
 console.log(res);


 // indexOf- Return position of search element
 var arr= ['banana','apple','mango'];
 var res= arr.indexOf('apple');
 console.log(res);


//concat- Merge two or more arrays
 var arr= ['banana','apple','mango'];
 var z= ['q','w']; 

 var res= arr.concat(z,'peter');
 console.log(res);  // ['banana', 'apple', 'mango', 'q', 'w', 'peter']