<?php
//setcookie('myname','hplaptop',time()+60);  // jan 1 1970 timestamp
require("Connection.php"); 

if(isset($_POST['search'])){
  $searchval= $_POST['mysearch'];
  $query="SELECT * FROM `products` where name like '%$searchval%' ";  //laptop    iphone14 black, iphone13, iphone 12, iphone14 blue,laptop dell,hp laptop, mitv
}else{
  $query="SELECT * FROM `products` ";   
}

$result=mysqli_query($con,$query);
$count= mysqli_num_rows($result);  //4
$perpage=3;
$pagecount= ceil($count/$perpage);   // 4/3= ceil(1.33)=>2

if(isset($_GET['pageid'])){
  $pagenumber= $_GET['pageid'];  
}else{
  $pagenumber=1;
}

$offset= ($pagenumber-1)*$perpage;

//echo $_COOKIE['myname'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>UM PRODUCT STORE</title>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
 <style>
.userid{ display:none;}
.pagination{margin:50px 100px;}
.pagination ul{display:flex; justify-content:flex-start; list-style: none;gap:20px;}
.pagination ul li{ background-color:#3399ff;width:30px; height:30px; border-radius:50px;    font-size: 15px;
    line-height: 30px;
    text-align: center; cursor:pointer;  }
  .pagination ul li a{ color:#fff;} 
    .pagination ul li:hover{color:#000;background-color:black;}
    .pagination ul li.active {
    background-color: green;
}
 </style>
</head>
<body class= "bg-light">

<div class="container bg-dark text-light p-3 rounded my-4">
 <div class="d-flex align-items-center justify-content-between px-3" >
 <h2>
  <a href="index.php" class="text-white text-decoration-none">
   <i class="bi bi-bar-chart-fill"></i>UM Product Store</a>
</h2>


 <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addproduct">
  <i class="bi bi-plus-lg"></i> Add Product
</button>

</div>
</div>
 
<form name="form1" action="" method="POST">
  <input type="search" name="mysearch" value="" placeholder="Name Search" />
  <input type="submit" name="search" value="SEARCH" />
</form>   

<div class="container mt-5 p-0">
 <table class="table table-hover text-center">
  <thead class="bg-dark text-light">
    <tr>
      <th width="10%" scope="col" class="rounded-start">Sr.No</th>
      <th width="15%" scope="col">Image</th>
      <th width="10%" scope="col">Name</th>
      <th width="10%" scope="col">Price</th>
      <th width="35%" scope="col">Description</th>
      <th width="20%" scope="col" class="rounded-end">Action</th>
    </tr>
  </thead>
  <tbody class="bg-white">
   <?php
   if(isset($_POST['search'])){
    $query ="SELECT * FROM `products` where name like '%$searchval%' LIMIT {$perpage} OFFSET {$offset}";
    //echo $query; exit;
    }else{
    $query ="SELECT * FROM `products` LIMIT {$perpage} OFFSET {$offset}";     
    }
    //echo $query; exit;
    $result = mysqli_query($con,$query);
    $i=1;
    $fetch_src= FETCH_SRC;

    while($fetch= mysqli_fetch_assoc($result)){

     echo<<<product
     <tr class = "align-middle" >
     <th scope="row">$i</th>
      <td><img src="$fetch_src$fetch[image]" width="150px"></td>
      <td>$fetch[name]</td>
      <td>$$fetch[price]</td>
      <td>$fetch[description]</td>
      <td>
      <button type="button" class="btn btn-success edit" data-id="$fetch[id]" data-bs-toggle="modal" data-bs-target="#editproduct"> Edit </button>
      <button onclick = "confirm_rem($fetch[id])" class = "btn btn-danger"><i class="bi bi-trash"></i></button>
      </td>
     </tr>
     product;
     $i++;

    }
   
   
   ?>
  </tbody>
</table>
</div>


<div class="modal fade" id="addproduct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="crud.php" method="POST" enctype="multipart/form-data">
            <div class="modal-content">
                  <div class="modal-header">
                          <h5 class="modal-title">Add Product</h5>
                  </div>        
                         <div class="modal-body">
                                 <div class="input-group mb-3">
                                    <span class="input-group-text">Name</span>
                                    <input type="text" class="form-control" name="name" required>
                                 </div>
                                 <div class="input-group mb-3">
                                  <span class="input-group-text">Price</span>
                                  <input type="number" class="form-control" name="price" min="1" required>
                                </div>
                                <div class="input-group">
                                  <span class="input-group-text">Description</span>
                                  <textarea class="form-control" name="desc" required></textarea>
                                </div>
                                <div class="input-group mb-3">
                                  <label class="input-group-text">Image</label>
                                  <input type="file" class="form-control" name="image" accept=".jpg,.png,.svg" required>
                                </div>
                          </div>
                  <div class="modal-footer">
                          <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-success" name="addproduct" >Add</button>
                  </div>
        
        </form>
       </div>
       </div>
    </div>




<div class="modal fade" id="editproduct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="crud.php" method="POST" enctype="multipart/form-data">
            <div class="modal-content">
                  <div class="modal-header">
                          <h5 class="modal-title">Edit Product</h5>
                  </div>        
                         <div class="modal-body viewdata">
                                 
                          </div>
                  <div class="modal-footer">
                          <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-success" name="editproduct" >Edit</button>
                  </div>
        
        </form>
       </div>
       </div>
    </div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script>
   function confirm_rem(id){
    if(confirm("Are you sure, you want to delete this item ?")){
     window.location.href="crud.php?rem="+id;
    }
   }

   $(document).ready(function(){
     $('.edit').click(function(){
      var userid= $(this).data('id');
      console.log(userid);

      $.ajax({
         type:'post',
         url:'http://localhost/php/MYFIRSTCRUD/edit.php',
         data:{cid:userid},
         success:function(data){
              //console.log(data);
          $('.viewdata').html(data);
         }
      });
         return false;
     })
   })
  </script>

<div class="pagination">
         <ul>
          <?php 
          for($i=1;$i<=$pagecount;$i++){  //2
            if($pagenumber==$i){ $class= "active" ;}else { $class="";}

                 echo '<li class="'.$class.'"><a href="?pageid='.$i.'">'.$i.'</a></li>';
          } ?>
         </ul>
  </div>


</body>
</html>

