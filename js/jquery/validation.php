<html>
<head>
<title>JS Testing</title>
<style>
div#errors {
    color: red;
}
</style> 
<script>
// function validateform(){
//   var x=        document.getElementById("myname").value;
//   var email=    document.getElementById("myemail").value;
//   var tel=      document.getElementById("myphpne").value;
//   var color=    document.querySelector('input[name="color"]:checked');
//   var gender=   document.getElementById("gender").value;
//   var check=    document.querySelectorAll(".check");
 
//  //alert(color);
//   // if(x =="")
//   // 	{
//   // 	    //alert("Name must be filled out"); 
//   // 	   document.getElementById("myname").style.borderColor = "red";
//   // 	   return false; 
//   // 	 }
//   //  if(email==""){
//   //      document.getElementById("myemail").style.borderColor = "red";  
//   //      return false;  
//   //  }
//   //  if( isNaN(tel) ||tel<1 ||tel>10 ){ 
//   //  	 document.getElementById("myphpne").style.borderColor="red";
//   //  	 return false;
//   //  }

//       if(color==null){
//    	     document.getElementById("reds").style.outline = "2px solid red";  
//    	     document.getElementById("blues").style.outline = "2px solid red";  
//    	     document.getElementById("blacks").style.outline = "2px solid red";  
//       	//alert("Fill color value");
//        return false;  
//    }	

//    // if(gender=="-1"){
//    // 	   document.getElementById("gender").style.border = "2px solid red";  
//    // 	   return false;
//    // } 

//   for(var i=0; i<check.length;i++){
//        if(check[i].checked==false){  check[i].style.outline="2px solid red";  }
//   }
//   return false;
//    // if(check.checked==false){
//    // 	 console.log(check.checked);
//    // 	  document.getElementById("check1").style.outline="2px solid red";
//    // 	  document.getElementById("check2").style.outline="2px solid red";
//    // 	  document.getElementById("check3").style.outline="2px solid red";
//    // 	  return false;
//    // }
// }


function validateform(){
  var x=        document.getElementById("myname").value;
  var email=    document.getElementById("myemail").value;
  var tel=      document.getElementById("myphpne").value;
  var color=    document.getElementsByName('color');
  var check=    document.querySelectorAll(".check");
 
   var arr=[];
  if(x==""){ arr.splice(0,1,'Invalid myname.');   }else{ arr.splice(0,1); }
  if(email==""){ arr.splice(1,1,'Invalid Email.'); email.focus();}else{arr.splice(1,1); }
  if(isNaN(tel) ||tel<1){ arr.splice(2,1,'Invalid Telephone Number'); }else{arr.splice(2,1); }
 

    var x=0;
   for(var i=0; i<color.length; i++){ 
     if((color[i].checked) == true){ x++;  }
   }
 if(x==0){ arr.splice(3,1,'Please check the color box');}else{arr.splice(3,1); }

   var y=0;
  for(var i=0; i<check.length;i++){
     if((check[i].checked) == true){ y++;  }
  }
if(y==0){ arr.splice(4,1,'Please check the Courses');}else{arr.splice(4,1); }
  


  if(arr.length>0){
    document.getElementById("errors").innerHTML="";
    for(var i=0; i<arr.length; i++){
      document.getElementById("errors").innerHTML+= arr[i]+"<br/>";  
    }   
    return false;
  }


}


</script>	
</head>
<body>	
  <div id="errors"></div>
<form name="myform" action="" onsubmit="return validateform()" method="POST" style="text-align: center; margin-top:100px;">
<input type="text" name="myname" id="myname" value="" placeholder="Enter name" /><br/><br/>
<input type="email" name="myemail" id="myemail" value="" placeholder="Enter Email ID" /><br/><br/>
<input type="tel" name="myphpne" id="myphpne" value="" placeholder="Enter Phone Number" /><br/><br/>

	<input type="radio" name="color" id="reds" class="color" value="RED">RED
	<input type="radio" name="color" id="blues" class="color"  value="BLUE">BLUE
	<input type="radio" name="color" id="blacks" class="color"  value="BLACK">BLACK<br/><br/>

	<select name="gender" id="gender">
    <option value="-1">Select Field</option>
    <option value="Men">Men</option>
    <option value="Women">Women</option>
    <option value="Kid">Kid</option>
   </select>	<br/><br/>

 <input type="checkbox" name="check[]" id="check1" class="check" value="HTML">HTML
 <input type="checkbox" name="check[]" id="check2" class="check" value="PHP">PHP
 <input type="checkbox" name="check[]" id="check3" class="check" value="PYTHON">PYTHON
<br/><br/>
<input type="submit" name="sub" value="SUBMIT" />
</form>

</body>
</html>

 
