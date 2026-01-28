<?php
   $servername= "localhost";
   $username= "root";
   $password= "";
   $dbname= "rama";

   $conn= mysqli_connect($servername,$username,$password,$dbname);
   if(!$conn){
   	 die("No Connection:".mysqli_connect_error());
   }
   $limit=  5;
   $page=   $_GET['page'];
   $offset= ($page-1)*$limit;
   $query= "select * from task";
  	 $qry= mysqli_query($conn,$query)or die("Query Failed");
  	 if(mysqli_num_rows($qry)>0){
  	 	$total_records= mysqli_num_rows($qry);
  	 	$totalPage= ceil($total_records/$limit);	
  	 }
?>

<html>
<head>
<title>Datatables</title>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
<style>
.pagination{
	list-style: none;
}
.pagination li{ display:inline-block; width:30px; }
.pagination li.active a:link{color:blue;}
.pagination li.active a:visited{color:blue;}
.pagination li.inactive a:link{color:red;}
.pagination li.inactive a:visited{color:red;}
.form-search{margin:30px; width:50%; text-align:right;}
</style>	
</head>
<body>
<div class="container" >
 <div class="form-search">
  <form>
   <input type="search" id="fsearch" name="search" value="" placeholder="search" />
   </form>
 </div>
 <table id="myTable" class="display"style="width:800px;" >
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Pass</th>
      <th>Mobile</th>
    </tr> 	
  </thead> 	
  <tbody>
  	<?php  $query= "select * from rama order by id ASC limit {$offset},{$limit}";
  	 $qry= mysqli_query($conn,$query)or die("Query Failed");
     while($data= mysqli_fetch_array($qry,MYSQLI_ASSOC))
     {
      echo "<tr>
        <td>".$data['id']."</td>
        <td>".$data['name']."</td>
        <td>".$data['email']."</td>
        <td>".$data['pass']."</td>
        <td>".$data['mobile']."</td>
      </tr>"; 
       } ?>  
  </tbody>	
  <tfoot>
   <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
      <th>Pass</th>
      <th>Mobile</th>
    </tr> 	
  </tfoot>
 </table>
<?php 
 echo '<ul class="pagination">';
    for($i=1; $i<=$totalPage; $i++){
   echo '<li'.($i==$page?" class='active'":" class='inactive'") .'><a href="fetchData.php?page='.$i.'">'.$i.'</a></li>';
 
}   echo '<ul>';
?>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
   $(document).ready(function(){
      $('#fsearch').on('keyup',function(){ 
         var search= $('input[name="search"]').val();
         var count= search.length;
         if(count>2){ 
            console.log('greater than 3'); 
            $.ajax({
                     type: "POST",
                     url:  "http://localhost/php/datatables/ajax-search.php",
                     data: {x:search},
                     success:function(res){
                      $('#myTable').find('tbody').append(res);
                     }
                   });

         }
         return false;
      })
   })
 
</script>   
</body>
</html>