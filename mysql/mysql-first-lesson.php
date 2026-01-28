MYSQL
* It is relational database management system (RDBMS)
* It is free
* My sql is named after co founder Monty Widenius's daughter "My" now supported by Oracle.
* Fb,Twitter,Uber,Youtube,Github,Airbnb uses MYSQL.

RDBMS- Relational Database Management System
* A DBMS based on "relational model" is called RDBMS.
* Rows(tuples) and Column(attributes).
* A common column in 2 tables to make relation and fetch all records.

Create Database
* CREATE DATABASE mydemo;
* SHOW DATABASES;
* DROP DATABASE mydemo;


$dbhost= "localhost";
$dbuser= "root";
$dbpass= "";

$conn= mysqli_connect($dbhost,$dbuser,$dbpass);

if(!$conn)
{
  die('connection failed');
}

$sql= "create database mydemo";

$qry= mysqli_query($conn,$sql);

if($qry)
{
  echo "databse created successfully";
}else{
  echo "connection error: ".mysqli_error($conn);
}

mysqli_close($conn);





unsigned- You can't insert negative numbers

$sql= Create table mystudent(
id int(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname varchar(30) NOT NULL,
lastname varchar(30) NOT NULL,
marks int(5) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP on UPDATE CURRENT_TIMESTAMP
);


// Insert command
$sql= "insert into myempid valuess('','deepika',40)";
$query= mysqli_query($conn,$sql) or die('connection error:'.mysqli_error($conn));

// select command
// LIMIT 50-  returns first 50 records
// LMIT 10 OFFSET 15- return 10 record start from 16 record

$sql= "select * from myempid";
$qry= mysqli_query($conn,$sql) or die('issue:'. mysqli_error($conn));

$count= mysqli_num_rows($qry);

if($count>0)
{
  while($row= mysqli_fetch_array($qry))
  {
    echo $row[0];
    echo $row[1];
    echo $row[2];
    echo "<br/>";
  }
}



// Update table 
$sql= "update myempid set empname='anil123', empmarks=70 where empid=6 ";
$qry= mysqli_query($conn,$sql)or die('Error'.mysqli_error($conn));



// Delete 
$sq= "delete from myempid where empid=6";
$qr= mysqli_query($conn,$sq);


