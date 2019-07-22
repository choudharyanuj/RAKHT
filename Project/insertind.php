<?php

$fn = $_POST['First_Name'];
$ln = $_POST['Last_Name'];
$bd = $_POST['Birthday_day'];
$bm = $_POST['Birthday_Month'];
$by = $_POST['Birthday_Year'];
$em = $_POST['Email_Id'];
$mn = $_POST['Mobile_Number'];
$gn = $_POST['Gender'];
$bg = $_POST['bgroup'];
$add = $_POST['Address'];
$cty = $_POST['City'];
$pin = $_POST['Pin_Code'];
$ste = $_POST['State'];
$cn= $_POST['Country'];
$pw = $_POST['Pass'];
$cpw= $_POST['Conf_Pass'];

$date=$by."-".$bm."-".$bd;

$name=$fn." ".$ln;

// Create connection

$conn = mysqli_connect('localhost','root','','project');


$query = "INSERT INTO `indivisual` (`ID`, `Name`, `PNumber`, `Email`, `Pincode`, `State`, `Country`, `Gender`, `Bgroup`, `DOB`, `Address`, `City`, `Password`) VALUES (NULL, '$name', '$mn', '$em', '$pin', '$ste', '$cn', '$gn', '$bg', '$date', '$add', '$cty', '$cpw');";

$run = mysqli_query($conn,$query);

if($run==TRUE){
		echo "<script>alert('Registered sucessfully.');</script>";
		
		echo " <script> location.href='home.html'; </script>";
		
		
	}else{
	echo "<script> alert('Error : Registration Failed OR Email ID is already registered ); </script>";
	
	echo " <script> location.href='indform.html'; </script>";
	
	
}

?>