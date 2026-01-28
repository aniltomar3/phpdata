<?php session_start(); ?>
<html>
<head>
 <title>Captcha</title>
</head>

<body>
<form name="form1" action="" method="POST">
	<h1>Cpatcha</h1><img src="mycaptcha.php" /><br/>
	<h2>Enter the Captcha</h2><input type="text" name="captcha" value="" /><br/><br/>
	<input type="submit" name="sub" value="VERIFY" />
</form>
</body> 	
</html>


<?php 

if(isset($_POST['sub'])){
	$captcha= $_POST['captcha'];
	if( $captcha== $_SESSION['captcha'] ){
		echo "verify";
	}else{ echo "not verify"; }
}
