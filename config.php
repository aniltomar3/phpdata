<?php 
$config= array();

$config['hostname']=  'localhost';
$config['username']=  'root';
$config['password']=   '';
$config['db']=         'rama'; 
// $config['url']=   'http://localhost/php/';

// echo "<pre>";
// print_r($config);

$conn= mysqli_connect($config['hostname'],$config['username'],$config['password'],$config['db'])or die(mysqli_connect_error());

 //if($conn){ echo "connection successfull"; }