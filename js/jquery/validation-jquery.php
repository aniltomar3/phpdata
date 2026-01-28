

<html>
<head>
<title>JS Testing</title>
<style>
div#errors {
    color: red;
}
</style> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script> 
<script> 
$(document).ready (function () {  
  $("#basic-form").validate ({
    rules:{
      myname:'required',
      myemail:{required:true,email:true},
      myphpne:'required',
      color:{required:true},
      gender:'required',
    },
    messages:{
      myname:'Name is required',
      myemail:'Email is required',
      myphpne:'Phone is required',
    }
  });  
});  
</script>  
</script>  

</head>
<body>	
  <div id="errors"></div>
<form name="myform"  id= "basic-form"  action="" method="POST" style="text-align: center; margin-top:100px;">
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

 
