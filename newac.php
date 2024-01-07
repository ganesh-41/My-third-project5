<?php
include_once('connection.php');

$n=$_POST['name'];
$e=$_POST['emailaddress'];
$p=$_POST['password'];

$q=mysqli_query($con,"insert into newaccount_tbl(name,email_address,password) values('$n','$e','$p')");

if ($q) {
    header("location:index-5.php");
    # code...
}
?>