<?php //header('Content-type: application/json');
$data= json_decode($_POST['myData']);
$res= array('one'=>'anil','two'=>'tomar');
 echo json_encode($res);
// echo "<pre>";
// print_r($data);
exit;

// $conn= mysqli_connect("localhost","root","","demo")or die(mysqli_connect_error());
// $cid= $_POST['cid'];
// $sql= "select * from state where cid=$cid ";
// $qry= mysqli_query($conn,$sql);


?>

<!-- <select name="country" id="country">
<?php //while($data= mysqli_fetch_array($qry,MYSQLI_ASSOC)){ ?>	
<option value="<?php //echo $data['sid']; ?>"><?php //echo $data['sname']; ?></option>
<?php //} ?>
</select> -->