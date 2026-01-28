<?php include('config.php'); ?>
<?php 
$country= $_POST['cname'];
$sql1= "SELECT distinct(cstate) from country where cname='".$country."' ";
$qry1= mysqli_query($conn,$sql1);
$arr= array();
while($roq= mysqli_fetch_array($qry1,MYSQLI_ASSOC)){
   $arr[]= $roq['cstate'];
}
 print_r($arr); exit;
?>