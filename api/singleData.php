<?php 
header('Content-Type: application/json');
include('config.php');
$data= json_decode(file_get_contents("php://input"),true);  // true to get associative array

$id= $data['id'];
$sql= "select * from student_record where id=$id";
$qry= mysqli_query($conn,$sql)or die("SQL query failed");

if(mysqli_num_rows($qry)>0){
		  $res= mysqli_fetch_array($qry,MYSQLI_ASSOC);
		  echo json_encode($res);
  }else{
	      echo json_encode(array('message'=>'No record found','status'=>'false'));
       }
