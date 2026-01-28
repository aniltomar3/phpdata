<?php 
$servername= "localhost";
$username="root";
$password="";
$dbname="rama";

$conn= mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
	die("No Connection: ".mysqli_connect_error());
}

$x= $_POST['x'];

$sql= "select * from task where name like '%$x%' ";
$qry= mysqli_query($conn,$sql);
$output="";
while($data= mysqli_fetch_array($qry,MYSQLI_ASSOC)){
  $output.= '<tr>';
  $output.= '<td>'.$data['id'].'</td>';
  $output.= '<td>'.$data['name'].'</td>';
  $output.= '<td>'.$data['email'].'</td>';
  $output.= '<td>'.$data['pass'].'</td>';
  $output.= '<td>'.$data['mobile'].'</td>';
  $output.= '</tr>';
}
echo $output;
exit;
?>
