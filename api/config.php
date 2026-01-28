<?php 
$config= array();
$config['hostname']=  'localhost';
$config['username']=  'root';
$config['password']=   '';
$config['db']=         'demo'; 
// $config['url']=   'http://localhost/php/';
$conn= mysqli_connect($config['hostname'],$config['username'],$config['password'],$config['db'])or die(mysqli_connect_error());
?>



