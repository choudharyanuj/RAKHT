<?php

$em= "HI";

echo $em;

$fn = $_POST['Name'];
$dob = $_POST['DOB'];
$em = $_POST['Email_Id'];
$mn = $_POST['Mobile_Number'];
$gn = $_POST['Gender'];
$bg = $_POST['Bgroup'];
$add = $_POST['Address'];
$cty = $_POST['City'];
$pin = $_POST['Pin_Code'];
$pw = $_POST['Pass'];

$conn = mysqli_connect('localhost','root','','project');

$query = "UPDATE `indivisual` SET `Name`='$fn',`PNumber`='$mn',`Pincode`='$pin',`Gender`='$gn',`Bgroup`='$bg',`DOB`='$dob',`Address`='$add',`City`='$cty' WHERE Email='".$em."'";
echo $query;
$result = mysqli_query($conn,$query);
echo $result;

if($result==TRUE){
	echo "<script> alert('Records are updated successfully.');</script> ";
	echo " <script> location.href='http://localhost/project/admin_ind.php'; </script>";
}else{
	echo "<script>alert('Error: Data Updation failed.');</script> ";
	echo " <script> location.href='http://localhost/project/admin_ind.php'; </script>";
}
?>