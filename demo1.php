r<html>
<head>
 <title>Demo1</title>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 <script>
     $(document).ready(function(){ 
    //       $('#one').click(function (){
    //        $(this).hide();
    //    })

          $('#two').click(function (){
            $('#one').toggle();
       })

          
    })
  </script>  
 </head>
 <body>
<div id="one">
    Hello, I am a demo content
</div>  

<div id="two">
    show content
</div>  

 </body>   
</html>

<?php 

$arr= array('demo','test');

?>


<script>
let arr= ['demo','demo1'];
var js_array = [<?php echo '"'.implode('","', $arr).'"' ?>];
console.log(arr);
console.log(js_array);
</script>
