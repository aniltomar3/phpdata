<?php 
include('config.php');

$draw=           $_REQUEST['draw'];   // internal use
$start=          $_REQUEST['start'];  //where to start next record for pagination
$rowPerPage=     $_REQUEST['length']; // how many records needed per page
$orderArr=       $_REQUEST['order']; 
$colNameArr=     $_REQUEST['columns'];  // it will give us column array
$colIndex=       $orderArr[0]['column']; // which column index to be sorted 0=>id, 1=>name etc
//$searchArr=      $_REQUEST['search']; 

//echo "<pre>"; print_r($orderArr); exit;
$colName=        $colNameArr[$colIndex]['data'];
$colSortOrder=   $orderArr[0]['dir'];  // ASC,DESC

 //$searchArr=      $_REQUEST['search']; 
// echo "<pre>";
// print_r($searchArr);

if(!empty($_REQUEST['search']['value'])){
 
  $searchArr=      $_REQUEST['search'];
   $searchVal=      $searchArr['value']; 

$sql= "select count(*) as count from task where name like '%$searchVal%' ";
$qry= mysqli_query($conn,$sql);
$count= mysqli_fetch_array($qry,MYSQLI_ASSOC);
$total= $count['count'];

$totalFiltered = $total;

 $sql= "select id,name,email,mobile from task where name like '%searchVal%' limit {$rowPerPage} offset {$start} "; 
 //echo $sql; exit;
$qry= mysqli_query($conn,$sql);
$data= array();
while($row= mysqli_fetch_array($qry,MYSQLI_ASSOC)){
    $data[] = $row;
}



}else{
$sql= "select count(*) as count from task";
$qry= mysqli_query($conn,$sql);
$count= mysqli_fetch_array($qry,MYSQLI_ASSOC);
$total= $count['count'];

$totalFiltered = $total;

 $sql= "select id,name,email,mobile from task limit {$rowPerPage} offset {$start} "; 
$qry= mysqli_query($conn,$sql);
$data= array();
while($row= mysqli_fetch_array($qry,MYSQLI_ASSOC)){
    $data[] = $row;
}

}




$response= array(
  'draw'=>intval($draw),
  'recordsTotal'=> $total,
  'recordsFiltered'=>$totalFiltered,
  'data'=>$data
);

echo json_encode($response);























exit; 
// $draw=    $_REQUEST['draw'];
// $start=   $_REQUEST['start'];
// $length=  $_REQUEST['length'];
// $search_value= $_REQUEST['search']['value'];
// $order_col= $_REQUEST['order'][0]['column'];

$totalData=3;
$totalFiltered=3;
$sql= "select id,name,email,mobile from task";
$qry= mysqli_query($conn,$sql);
$output="";
$data= array();
while($row= mysqli_fetch_array($qry,MYSQLI_ASSOC)){
  // $nestedData=array(); 
  //   $nestedData[] = $row["id"];
  //   $nestedData[] = $row["name"];
  //   $nestedData[] = $row["email"];
  //   $nestedData[] = $row["mobile"];
    $data[] = $row;
}

// $data= array(
//  array('id'=>1,'name'=>'demo','email'=>'demo@gmail.com','mobile'=>121212),
//  array('id'=>1,'name'=>'demo1','email'=>'demo1@gmail.com','mobile'=>222222),
//  array('id'=>1,'name'=>'demo2','email'=>'demo2@gmail.com','mobile'=>3333333)
// );

$json_data = array(
            "draw"            => intval(1),   
            "recordsTotal"    => intval( $totalData ),  
            "recordsFiltered" => intval( $totalFiltered ), 
            "data"            => $data  
            );

echo json_encode($json_data); 

exit;
