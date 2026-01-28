<?php 
session_start();
class Database{
	private $servername="localhost";
	private $username="root";
	private $password="";
	private $dbname="demo";
	public $conn;
  
   public function __construct(){
   	  $this->conn= mysqli_connect($this->servername,$this->username,$this->password,$this->dbname);
   	  if(!$this->conn){ echo "DB connection Error: ". mysqli_connect_error($this->conn); }
   }

   public function insert($tablename,$data){
   	$checkuser = mysql_query("Select id from {$tablename} where email='$email'"); 
     $result= mysqli_num_rows($checkuser);
     if($result==0){
                       $sql="";
                       $sql.= "insert into ".$tablename.' values';
                       $sql.= "('".implode("','",$data)."')";
                      if(mysqli_query($this->conn,$sql)){
                          return true;  //echo "data inserted successfully";
                      }else{  return false;   //echo mysqli_error($this->conn); 
                             }  
                    }else{ return false; }
   	    
   }


   public function login($email,$pass){
      $check= mysqli_query("select * from user_reg where email={$email} and pass={$pass}");
      $data= mysqli_fetch_array($check);
      $result= mysqli_num_rows($check);
      if($result==1){
          $_SESSION['login']=true;
          $_SESSION['id']= $data['id'];
          return true;
      }else{ return false; }
   }

  public function session(){
     if(isset($_SESSION['login'])){
          return $_SESSION['login'];
     }
  }
   public function getData($tablename){
           $sql= "";
           $sql.="select * from ".$tablename;
           $res= mysqli_query($this->conn,$sql);
           if(mysqli_num_rows($res)>0){
           	 while($data= mysqli_fetch_array($res,MYSQLI_ASSOC)){
           	 	 $array[]= $data;
           	 }
           	 return $array;
           }
  
   }

   public function logout(){
       $_SESSION['login']=false;
       session_destroy();
   }
   public function __destruct(){
   	mysqli_close($this->conn);
   }

}


$obj= new Database();
$data= array('','amit','tt','ami@gmail.com','now()');
//$obj->insert('student_record',$data);
$res= $obj->getData('student_record');

echo "<pre>";
print_r($res);

foreach($res as $val){
	echo $val['firstname']."<br/>";
	echo $val['lastname']."<br/>";
	echo $val['email']."<br/>";
	echo $val['reg_date']."<br/><br/>";
}