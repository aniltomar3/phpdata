<html>
<head>
<title>Google Recaptcha</title>
<script src="https://www.google.com/recaptcha/api.js?render=6LdHqcgpAAAAAHjjgtMFCi2WqaSLl4MTNFnyNk7X"></script>
</head>

<body>

<form name="form1" action="" method="POST">
<input type="text" name="fname" value="" placeholder="Please enter name" />
<input type="hidden" name="token" id="token" value="" />
<input type="submit" name="sub" value="SUBMIT" />
</form>
<script>
      
        grecaptcha.ready(function() {
          grecaptcha.execute('6LdHqcgpAAAAAHjjgtMFCi2WqaSLl4MTNFnyNk7X', {action: 'submit'}).then(function(token) {
              // Add your logic to submit to your backend server here.
          	console.log(token);
          	document.getElementById('token').value= token;
          });
        });
    
  </script>	
</body>
</html>


<?php 

if(isset($_POST['sub'])){
	$url= "https://www.google.com/recaptcha/api/siteverify";
	$data= [
		"secret"=> "6LdHqcgpAAAAAM8JQYgP6Iuy5OMbou8d2NZRyWpU", 
		"response"=> $_POST['token'],
		"remoteip"=> $_SERVER['REMOTE_ADDR']
	];

	$options= array( 
       'http'=>array(
       	'header'=>"Content-Type:application/x-www-form-urlencoded\r\n",
       	'method'=>'POST',
       	'content'=>http_build_query($data)
       ));

	$context= stream_context_create($options);
	$res= file_get_contents($url,false, $context);
	echo "<pre>";
	print_r(json_decode($res,true));
}