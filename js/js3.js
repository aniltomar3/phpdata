
//toString()- convert number to string
var x= 123;
var res= x.toString();
console.log(typeof(res));

//toFixed- return decimal 
var x= 9.556;
var res= x.toFixed(2);  // 10
console.log(typeof(res));

// Number -convert js varibales to number
console.log(Number(true));


console.log(Number("10"));

// parseInt- convert string to number
console.log(parseInt("10 20 30"));

console.log(parseFloat("10.33"));

//Object- In JS we don't need class to create Object. Direct create object
//By Object Literal
var obj={name:"Jack",time:"15min"}
console.log(obj);

// By creating instance of an Object directly using new Keyword
var obj= new Object();
obj.id="101";
obj.name="jack";
obj.salary="5000";
console.log(obj);

//By using an Object Constructor

function demo(id,name,salary){
	this.id= id; this.name= name; this.salary= salary;
	this.changeSalary= function changeSalary(othersalary){ this.salary= othersalary; }
}

var res= new demo(1,'jack','50000');  
console.log(res);
res.changeSalary('20000');
console.log(res);


// Prototype- It is a special type of enumerable object(visible to count) to which additional
// properties can be attached and will be shared across it's all instances.

function mobile(modelNo){
	this.model= modelNo; this.price='5000';
}

mobile.prototype.color= 'black';

var samsung= new mobile('galaxy');
var nokia =  new mobile('nokia');
var moto=    new mobile('motoG');

samsung.color='white';
console.log(samsung.color);
console.log(nokia.color);
console.log(moto.color);