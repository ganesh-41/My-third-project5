<?php
include_once('connection.php');

$n=$_POST['email'];
$p=$_POST['password'];

$q=mysqli_query($con,"insert into signaccount_tbl(email,password) values('$n','$p')");

if ($q) {
    header("location:index-1.php");
    # code...
}
?>
