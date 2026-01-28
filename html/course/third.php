
<html>
<head><title>Demo three</title></head>
<style>
	*{padding:0; margin:0;box-sizing: border-box;}
	h1{ text-align:center;padding-top:20px; }
	.container{ width:700px;min-height:500px; background-color:#ccc; margin:40px auto;border-radius: 5px;}
   .left{float:left; width:40%;margin:20px;}
   .right{float:right; width:40%;margin:20px;}
   input[type=text],input[type=email],input[type=tel]{ width:100%; padding:12px;border:1px solid #ccc; }
   #msg{width:86%; margin:20px;}
   label{display: inline-block; padding-bottom: 10px;}
   #submit{ padding:10px 15px; color:#fff; background-color:#000;border-radius:5px;margin-left:20px; cursor:pointer;margin-bottom:20px;}
</style>	
<body>
<div class="container">
	<h1>Contact Form</h1>
	<form name="myform" action="" method="get">
	<div class="left">	
	<label for="fname">First name:</label><br/>	<!--  Useful for screen reader -->
	<input type="text" id="uname" name="username" value="" placeholder="Enter First name"><!--       Display single line text --> </div>
	<div class="left">	
	<label for="lname">Last name:</label><br/>	<!--  Useful for screen reader -->
	<input type="text" id="lname" name="lname" value="" placeholder="Enter Last name"></div>
    <div class="left">	
    <label for="email">Email:</label><br/>	<!--  Useful for screen reader -->
	<input type="email" id="email" name="email" value="" placeholder="Enter Email"></div>
    <div class="left">	
	<label for="phone">Phone:</label><br/>	<!--  Useful for screen reader -->
	<input type="tel" id="phone" name="phone" value="" placeholder="Enter Phone"></div>
    <textarea id="msg" rows="10" placeholder="contact text"></textarea>

	<!-- <label for="fname">User Password:</label>
	<input type="password" id="pass" name="pass" value="" placeholder="Enter Password" />
	<input type="radio" name="fav_language" value="PHP">PHP
	<input type="radio" name="fav_language" value="python">PYTHON
	<input type="radio" name="fav_language" value="html">HTML

	<input type="checkbox" id="subject" name="subject" value="Hindi">Hindi
	<input type="checkbox" id="subject" name="subject" value="english">English
	<input type="checkbox" id="subject" name="subject" value="maths">Maths -->

	<input id="submit" type="submit" name="submit" value="submit" />
	</form>
</div>
</body>
</html>