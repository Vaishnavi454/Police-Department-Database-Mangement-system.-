<?php
include('config.php');
session_start();
$uname = $_POST['username'];
$pass = $_POST['password'];

$result=mysqli_query($con,"select * from police_officer where po_uname='$uname' and po_pwd='$pass'");
if(mysqli_num_rows($result))
{
	$usr=mysqli_fetch_array($result);
	$_SESSION['user']=$usr['po_id'];
	header('location:index.php');
}
else
{
	$_SESSION['error']="Login Failed!";
	header("location:login.php");
}

?>
