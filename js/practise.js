// Prompt Box

// var x= prompt('Please enter your name');

// if(x==null){
//    console.log('You Pressed Cancel');
// }else{
//    console.log(x);
// }


// Confirm box 

function abc(){
   var x= confirm("Do you want to visit this website?");
console.log(x);
if(x==true){
  window.location.href="https://www.google.com/";
}
}

abc();


//Array- It is used to store multiple values in single varibale.

var str1="demo1";
var str2= "demo2";
var str3="demo3";
//console.log(str1); console.log(str2); console.log(str3);

var arr= ['demo1','demo2','demo3'];

arr.pop();  // removes last element from an array
arr.push('demo4'); // Add new elements at the end of an array                    

//console.log(str.length);
var count= arr.length;

for(var i=0; i<count; i++){
   //var x= arr[i];
   console.log(arr[i]);
}


let arr1= [3,5,7,4,8]; 

for(let i of arr1){
   console.log(i);
}


var arr= [44,4,7,10];

// 8- [44,10]
// filter


// for(let i of arr){
//    //console.log(i);
//    if(i>8){
//       console.log(i);
//    }
// }

//  >8  false

var res= arr.every(demo);

function demo(value,index,array){
  return value>3;
}

console.log(res);

// map,forEach

