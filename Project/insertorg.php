<?php

$em = $_POST['Email_Id'];
$name = $_POST['Org_Name'];
$ph = $_POST['Mobile_Number'];
$add = $_POST['Address'];
$cty = $_POST['city'];
$sta = $_POST['State'];
$coun = $_POST['Country'];
$pw = $_POST['Conf_Pass'];
$pin = $_POST['Pin_Code'];
$AP = $_POST['ap'];
$AN = $_POST['an'];
$BP = $_POST['bp'];
$BN = $_POST['bn'];
$OP = $_POST['op'];
$ON = $_POST['on'];
$ABP = $_POST['abp'];
$ABN = $_POST['abn'];

$conn= mysqli_connect('localhost','root','','project');

$query= "INSERT INTO `organisation`(`Name`, `PNumber`, `Address`, `City`, `State`, `Country`, `Pincode`, `AP`, `AN`, `BP`, `BN`, `OP`, `O_N`, `ABP`, `ABN`, `Email`, `Password`) VALUES ('$name','$ph','$add','$cty','$sta','$coun','$pin','$AP','$AN','$BP','$BN','$OP','$ON','$ABP','$ABN','$em','$pw')";

$result = mysqli_query($conn,$query);

if($result==TRUE){
		echo "<script>alert('Registered sucessfully.');</script>";
		echo " <script> location.href='home.html'; </script>";
}else{
		echo "<script> alert('Error : Registration Failed OR Email ID is already registered ); </script>";
		echo " <script> location.href='indform.html'; </script>";
	
}

?>