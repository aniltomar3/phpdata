// Variables created without a declaration keyword (var, let, or const) are always global, even if they are created inside a function.
// call, apply, bind

// call- With call method you can write a method that can be used on different objects.
var person= {
	firstname:'David',
	lastname:'off',
    printfullName:function(hometown,city){ 
    	                                     console.log(this.firstname+" "+this.lastname+" "+hometown+" "+city);
                                            }
              };
var person1={firstname:'alan',lastname:'tom'};
person.printfullName('vaishali','ghaziabad');
person.printfullName.call(person1,'vaishali','ghaziabad');


// apply- same as call but you pass argument as an array
person.printfullName.apply(person1,['vaishali','ghaziabad']);

//bind- Return result in new function. Worked on function copy.
console.log('bind function result')
let showData= person.printfullName.bind(person1,'vaishali','ghaziabad');
showData();


// Closure- A closure is an inner function that has access to the outer function variables and global variables.
//Return statement does not execute the inner function. Return statement return the entire body of the function.

function outer(){
	var a= "I am outer function variable";
	function inner(){ document.write(a+"<br/>"); }
		return inner;
}

var x= outer(); x();

const add=(function(){
	let counter=0;         // Helps in creating a private variables;
	return function(){ counter+=1; console.log(counter); }
})();    // self invoking function only invokes one time

add(); add(); add();  //1 2 3



const interview= function(name){
	return function(topic){
		if(name=="anil"){ console.log(`hello ${name} ${topic}`)}else if(name=="preeti"){
			console.log(`hello ${name} ${topic}`);
		}else{ console.log('No name found'); }
	}
}
interview('anil')('PHP');
interview('preeti')('HTML');