<?php
include("../../Connect.php");

if (isset($_POST['submit'])) {
  $username=$_POST['username'];
  $name=$_POST['name'];
  $telp=$_POST['phone'];
  $email=$_POST['email'];
  $password=$_POST['password'];
  $status=$_POST['role'];
  
  $hashpas = hash('sha512',$password);

  $inrole = substr(strtoupper($status),0,2);
  $inname = substr(strtoupper($username),0,2);
  $code = $inrole.$inname;

  $result = mysqli_query($conn, "INSERT INTO user(username,name,email,phone,password,role,code)VALUES('$username','$name','$email','$telp','$hashpas','$status','$code')");
  
  if($result){
    header('location:  ../../pages/admin');
    die();
  }else{
    echo "Error: " . $result . "<br>" . $conn->error;
  }
}

?>
