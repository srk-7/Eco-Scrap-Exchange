<?php
include ('connection.php');
$id = $_GET['id'];
$sql = mysqli_query($con,"delete form booking where id='$id'");
if(mysqli_affected_rows($con)==1)
{
	echo "<script>alert('Deleted');</script>";
	echo "<script>window.location.href='admin.php';</script>";
}
?>