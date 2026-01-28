// A var variable has global or function scoped
	var name= "anil";
	if(true){
		var name= "tomar";
		console.log(name);
	}
	console.log(name);

// let- block scoped
	let x= "anil";
	if(true){
		 let x= "tomar";
		 console.log(x);
	}
console.log(x);	

// A var variable can be redclared
var name= "apple";
var name= "banana";
console.log(name);

// let- updated but not redclared
let y= "apple";
y="banana";
console.log(y);


//Prompt Box- If you want the user to input something before entering the page.
// var z= prompt("Please enter your name?");
// if(z==null || z==""){
// 	alert("You pressed cancel");
// }else{
// 	alert("Your name is "+z);
// }


// Confirm Box- If you want the user to verify or accept something.

function abc(){
	var q= confirm("Do you want to visit the website?");
	if(q==true){
		console.log("You pressed okay");
	}else{
		console.log("You pressed cancel");
	}
}
//abc();