<?php

$em = $_POST['E_mail'];
echo $em;

$conn= mysqli_connect('localhost','root','','project');

$query="DELETE FROM `organisation` WHERE `organisation`.`Email` ='".$em."'";

$result= mysqli_query($conn,$query);

if($result==TRUE){
	echo "<script>alert('Records has been deleted successfully.');</script> ";
	echo " <script> location.href='http://localhost/project/admin_org.php'; </script>";
}else{
	echo "<script>alert('Error: Record deletion failed.');</script> ";
	echo " <script> location.href='http://localhost/project/admin_org.php'; </script>";
}

?>