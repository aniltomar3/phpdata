<?php 
include('config.php');
?>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.3/css/dataTables.dataTables.min.css" />
</head>
<body>    


<table id="myTable">
<thead>
<tr>
<th>ID</th>
<th>NAME</th>
<th>EMAIL</th>
<th>PHONE</th>
</tr>    
 </thead>

 <tfoot>
<tr>
<th>ID</th>
<th>NAME</th>
<th>EMAIL</th>
<th>PHONE</th>
</tr>    
 </tfoot>    
 </table> 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="//cdn.datatables.net/2.0.3/js/dataTables.min.js"></script>
<script>
$(document).ready( function () {
    $('#myTable').DataTable({
       "processing": true,
       "serverSide": true,
       "order":[[0,'desc']],
       "ajax":"fetch.php",
       "columns": [
        {data :"id"},
        {data :"name"},
        {data :"email"},
        {data :"mobile"},
        ],
       language:{
        search:"_INPUT_",
        searchPlaceholder:"Searching"
       }
    });
});
</script>
</body>
</html>
