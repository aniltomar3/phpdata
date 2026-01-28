<?php
error_reporting(0);
$config= array('hostname'=>'localhost','username'=>'root','pass'=>'');  // ,'db'=>'demo'
$conn= mysqli_connect($config['hostname'],$config['username'],$config['pass'],$config['db']);

if($conn){ echo "connection successfull"; }else{
	echo "No Connection: ".mysqli_connect_error();
}

$sql= "create database if not exists pushpaendra";
if(mysqli_query($conn,$sql)){
	echo "DB created successfully";
}else{ echo "Error connecting DB: ",mysqli_error($conn); }

mysqli_select_db($conn, "demo");
$sql="create table if not exists student_record(id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname varchar(20) NOT NULL,lastname varchar(20) NOT NULL,email varchar(40),reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP)";

if(mysqli_query($conn,$sql)){
	echo "table created successfully";
}else{ echo "Error creating table: ",mysqli_error($conn); }


$sql= "insert into student_record values('','anil','tomar','anil@gmail.com','')";

$query= mysqli_query($conn,$sql);

mysqli_close($conn);




