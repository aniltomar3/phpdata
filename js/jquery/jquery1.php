<html>
<head>
	<title>Jquery Teaching1 </title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<style>
		#one{background-color: red; width:100px; height:50px; display:none; }
		#two{background-color: green; width:100px; height:50px; display:none;padding:50px;}
		#three{background-color: blue; width:100px; height:50px; display:none; position:absolute;color:white;}
	</style>

	<script>
    $(document).ready(function(){
    	$("#btn").click(function(){
    		$("#one").fadeIn();
    		$("#two").fadeIn('slow');
    		$("#three").fadeTo("slow",0.15);
    	})

    	$("#btn1").click(function(){
    		$("#two").slideDown("slow");
    	})
    	$("#btn2").click(function(){
    		$("#two").slideUp("slow");
    	})

    	$("#animate").click(function(){
    		$("#three").animate({left:'100px',width:'400px',height:'100px'},"slow");
    		$("#three").animate({fontSize:'3em',textAlign:'center'},"slow");
    	})

    	$("#btn3").click(function(){
           var x= $("#three").text();
           var y= $("#three").html();
           alert(x);
           alert(y);
    	})

    	$("#btn4").click(function(){
    		$("#btn3").append(' here');
    		$("#btn3").after(' here1');
    		$("#btn3").prepend('Here');
    		$("#btn3").before('Here1');
    	})
    })
	</script>	
</head>
<body>
<button id="btn">Click ME</button>
<button id="btn1">Click For Sliding Down</button>
<button id="btn2">Click For Sliding Up</button>
<button id="animate">Animation</button>
<button id="btn3">show text</button>
<button id="btn4">Append/Prepend text</button>

<div id="one"></div>
<div id="two"></div>
<div id="three">Hello<b>Websoftonic</b></div>





</body>	
</html>
