<?php 
$servername= "localhost";
$username="root";
$password="";
$dbname="deepika";

$conn= mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
	die("No Connection: ".mysqli_connect_error());
}

?>
<html>
<head>
<title>Datatables</title>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.css" />
</head>
<body>
<div class="container" style="width:50%; margin:100px auto;">
 <table id="myTable" class="display" >
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Class</th>
      <th>Mark</th>
      <th>Gender</th>
    </tr> 	
  </thead> 	
  <tbody>
  	<?php $query= "select * from student";
  	 $qry= mysqli_query($conn,$query);
     while($data= mysqli_fetch_array($qry,MYSQLI_ASSOC))
     {
  	 
      echo "<tr>
        <td>".$data['id']."</td>
        <td>".$data['name']."</td>
        <td>".$data['class']."</td>
        <td>".$data['mark']	."</td>
        <td>".$data['gender']."</td>
      </tr>";	
       } ?>  
  </tbody>	
  <tfoot>
   <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Class</th>
      <th>Mark</th>
      <th>Gender</th>
    </tr> 	
  </tfoot>
 </table>

</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
<script>
	let table = new DataTable('#myTable', {  
    paging:true,
    ordering:false,
    info: false,
   // lengthMenu: [
   //          [5, 25, 50, -1],
   //          [5, 25, 50, 'All'],
   //      ],
   });

</script>	
</body>
</html>	