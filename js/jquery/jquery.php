<!DOCTYPE html>
<head>
	<title>Jquery Teaching</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
	<script>
      $(document).ready(function(){
      	$("p").click(function(){
      		$(this).css('background-color','red');
      	})

      	$("p").on({
            mouseenter:function(){
              $(this).css('background-color','blue');
            },
            mouseleave:function(){
              $(this).css('background-color','green');
            }

      	});
      });
	</script>	
</head>
<body>	
<p>Hello Welcome to Websoftonic</p>
<br/>
<p>Good Morning</p>
</body>
</html>