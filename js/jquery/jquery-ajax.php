<?php 
$conn= mysqli_connect("localhost","root","","demo")or die(mysqli_connect_error());
if($conn){ echo "connection successfull"; }
$sql= "select * from country";
$qry= mysqli_query($conn,$sql);
?>

<html>
<head>
<title>Jquery Ajax</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>
<body>
<select name="country" id="country">
	<option value="country">Please select Country</option>
<?php while($data= mysqli_fetch_array($qry,MYSQLI_ASSOC)){ ?>	
<option value="<?php echo $data['cid']; ?>"><?php echo $data['cname']; ?></option>
<?php } ?>
</select>

<div id="dstate">

</div>	

<form id="myform" method="post" action="receiver.php">
<input type="text" name="fname" value="" />
<input type="text" name="lname" value="" />
<input type="email" name="email" value="" />
<input type="submit" name="submit" value="SUBMIT" />
</form>
<script>
$(document).ready(function(){
$("#myform").submit(function(){
 var form= $(this);
 var url= form.attr('action');
 var fname= $('input[name="fname"]').val();
 var lname= $('input[name="lname"]').val();
 var email= $('input[name="email"]').val();
 var obj={fname:fname,lname:lname,email:email};
 var dd= JSON.stringify(obj);
 console.log(obj);
     $.ajax({
        	'type':'POST',
        	'url':'http://localhost/php/js/receiver.php',
        	'data':{myData:dd},
        	// contentType:'application/json',
        	// dataType:'json',
        	success:function(data){
        		var x= JSON.parse(data);
               console.log(x.one);
        		//$("#dstate").html(data);
        	}
        })
 

return false;
})

});	
 $(document).ready(function(){
 	$("#country").on('change',function(){
 	   var cid= $(this).val();
 	   //alert(cid);	
        $.ajax({
        	'type':'POST',
        	'url':'http://localhost/php/js/receiver.php',
        	'data':{"cid":cid},
        	success:function(data){
               //alert(data);
        		$("#dstate").html(data);
        	}
        }) 

 	})
 })
</script>	
</body>
</html>