<?php
error_reporting( E_ALL & ~E_DEPRECATED & ~E_NOTICE );
// Establishing connection with server by passing "server_name", "user_id", "password" ,"database_name"
  $conn = mysqli_connect("server_name", "user_id", "password","database_name");

//Fetching Values from URL  
$name  =$_POST['Name'];
$msg   =$_POST['Message'];

//Insert query 
	$sql = "insert into formsub (name,msg) values ('$name','$msg')";
  $query = mysqli_query( $conn,$sql);
  if($query){
  echo "Working good"; 
  }else echo "error";
   
// clossing connection
mysqli_close($conn);
?>
