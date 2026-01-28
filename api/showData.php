<?php 
header('Content-Type: application/json');
// header('Access-Control-Allow-Origin: *');
include('config.php'); 
$sql= "select * from student_record";
$qry= mysqli_query($conn,$sql)or die("SQL query failed"); // php and Database

if(mysqli_num_rows($qry)>0){ //
	$data= array();
	while($res= mysqli_fetch_array($qry,MYSQLI_ASSOC)){
        $data[]= $res;
	}
	echo json_encode($data);
}else{
	echo json_encode(array('message'=>'No record found','status'=>'false'));
}


// API- application programming interface
// 