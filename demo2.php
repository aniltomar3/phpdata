<?php include('config.php'); ?>
<html>
<head>
  <title>Demo2 Page</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    function country()
    {
      //var x= document.getElementById('mycountry').value;
      var y= $('#mycountry').val();
      $.ajax( {
        type:'post',
        url: 'http://localhost/php/demo3.php',
        data:{cname:y},
        success:function(data)
        {
          alert(data);
        }
      } )
    }
  </script>  
</head>  
<body>
<?php 
$sql= "select distinct(cname) from country";
$qry= mysqli_query($conn,$sql);
  echo '<form name="myform" action="" method="post">';
  echo '<select name="mycountry" id="mycountry" onchange="country()">';
  echo '<option value="novalue"> Please select one country--- </option>';
while($row= mysqli_fetch_array($qry,MYSQLI_ASSOC))
{
  echo '<option value="'.$row['cname'].'">'. $row['cname'].'</option>';
}
  echo '</select>';
  // echo '<input type="submit" name="submit" value="SUBMIT" />';
  echo '</form>';
?>

<?php 
if(isset($_POST['submit']))
{
   $country= $_POST['mycountry'];
   $sql1= "SELECT distinct(cstate) from country where cname='".$country."' ";
   $qry1= mysqli_query($conn,$sql1);
}
   ?>
<select>
 <?php while($roq= mysqli_fetch_array($qry1,MYSQLI_ASSOC)){?>
 <option value="<?php echo $roq['cstate'];?>"><?php echo $roq['cstate'];?></option>
<?php } ?>
</select>  
</body>
</html>