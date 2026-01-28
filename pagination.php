 
<?php
$arr= array(
    array("iphone","115","Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s","4"),
    array("laptop","200","Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s","5"),
    array("watch","100","Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s","3"),
    array("earphone","30","Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s","1"),
    array("iphone1","115","Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s","4"),
    array("laptop1","200","Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s","5"),
    array("watch1","100","Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s","3")
);
$perpage=4;
$count= count($arr);
$pagecount= ceil($count/$perpage);

if(isset($_GET['pageid'])){
	$pagenumber= $_GET['pageid'];
	
}else{
	$pagenumber=1;
}
$offset= ($pagenumber-1)*$perpage;
$new_arr= array_slice($arr,$offset,$perpage);
// echo "<pre>";
// print_r($new_arr);
// exit;
?>

<html>
<head>
<title>Pagiantion</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
*{ padding:0;margin:0;box-sizing:border-box; font-family:sans-serif; text-decoration: none;}
body{background-color:#ccc;min-height:100vh;}
.container{width:100%; display:flex; flex-direction:column; justify-content:space-between;}
.header{width:l1005; text-align:center;}
.header h1{ font-weight:bold; font-size:30px;text-transform:uppercase; margin:50px 0;}
.products{width:100%;height:70%;display:flex;flex-wrap:wrap;justify-content: center; gap:40px;}
.product{position:relative; width:300px;min-height:100%;background-color:#fefefe; 
	box-shadow:0 5px 20px rgba(0,0,0,0.3); display:flex; flex-direction:column; justify-content:space-between;padding:20px 20px 40px; border-radius:10px; transition:0.5s; }
.image{width:100%;height:70%; display:grid; place-items: center;}
img {
    max-width: 100%;
}
.namePrice{width:100%;display:flex;justify-content:space-between;margin-top:20px;}
.namePrice h3{font-size:20px;text-transform: uppercase;padding-bottom:10px; }
.namePrice span{font-size:14px; color:red;}
.product p{font-size:14px; line-height:20px;}
i.fa.fa-solid.fa-star{color:orange;font-size:14px;}
.buy button{cursor:pointer;padding:12px 15px; color:#cecee4;border:none;background-color: #3f3f42;border-radius:5px;}
.buy{text-align:right;}
.buy button:hover{color:#3f3f42;background-color:#cecee4;}
.product:hover{transform:translateY(-15px); cursor: pointer;}
.pagination{margin:50px;}
.pagination ul{display:flex; justify-content:flex-start; list-style: none;gap:20px;}
.pagination ul li{ background-color:#3399ff;width:30px; height:30px; border-radius:50px;    font-size: 15px;
    line-height: 30px;
    text-align: center; cursor:pointer;  }
  .pagination ul li a{ color:#fff;} 
    .pagination ul li:hover{color:#000;background-color:black;}
    .pagination ul li.active {
    background-color: green;
}
</style>	
</head>	
<body>
<div class="container">
	<div class="header">
		<h1>Products</h1>
	</div>
	<div class="products">
		<?php  foreach($new_arr as $val){ 
                //exit; ?>
	       <div class="product">
		       	<div class="image">
		       		<img src="images/iphone2.png" alt="earphone" />
		       	</div>	
		       	<div class="namePrice">
                  <h3><?php echo $val[0]; ?></h3>
                  <span>$<?php echo $val[1]; ?></span>
		       	</div>	
	       
	       		<p><?php echo $val[2]; ?></p>
		       <div class="stars">
		       	<?php (int)$star_count= $val[3];
                    echo str_repeat('<i class="fa fa-solid fa-star"></i>',$star_count);
		       	 ?>
	              
	         <!--     <i class="fa fa-solid fa-star"></i> 
	             <i class="fa fa-solid fa-star"></i> 
	             <i class="fa fa-solid fa-star"></i> 
	             <i class="fa fa-solid fa-star"></i>  -->
		       </div>
		       <div class="buy">
		       	<button>Buy Now</button>
		       </div>
	       </div>
<?php  } ?>
	      
	</div>	
		<div class="pagination">
	       <ul>
	       	<?php for($i=1;$i<=$pagecount;$i++){
	       		if($pagenumber==$i){ $class= "active" ;}else { $class="";}
                 echo '<li class="'.$class.'"><a href="?pageid='.$i.'">'.$i.'</a></li>';
	       	} ?>
	       </ul>
	</div>
</div>

</body>
</html>

