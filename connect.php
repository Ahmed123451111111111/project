<?php
$fullname =$_POST['fullname'];
$gender =$_POST['gender'];
$your email =$_POST['your email'];
$password =$_POST['password'];
$re password =$_POST['re password'];
//Database connection
$conn = new mysqli('localhost','root','','marzo');
if($conn->connect_error){
	die('connection failed : '.$conn->connect_error);
}else{
	$stmt = $conn->prepare("insert into registration(fullname,gender,your email,password,re password) values(?,?,?,?,?)");
	$stmt->bind_param("sssss",$fullname,$gender,$your $email,$password,$repassword);
	$stmt->execute();
	echo "registration succesfully.....";
	$stmt->close();
	$conn->close();
}
?>
