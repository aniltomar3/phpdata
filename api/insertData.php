<?php
header('Content-Type: application/json'); // send data in json format {"name":"anil","class":"10th"}
header('Access-Control-Allow-Methods: POST');

$data= json_decode(file_get_contents("php://input"),true); 

$fname= $data['fname'];
$lname= $data['lname'];
$email= $data['email'];
$date=  $data['regDate'];

include("config.php");

$sql= "insert into student_record values('','".$fname."','".$lname."','".$email."','".$date."')"; 
$res= mysqli_query($conn,$sql);
if($res){
	echo json_encode(array("message"=>"Student record Inserted","status"=>true));
}else{
	echo json_encode(array("message"=>"Student record not Inserted","status"=>false));
}
