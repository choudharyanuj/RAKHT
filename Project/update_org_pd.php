<?php

$email = $_POST['Email'];
$name = $_POST['Name'];
$add = $_POST['Address'];
$pin = $_POST['Pincode'];
$num = $_POST['MNumber'];

$conn = mysqli_connect('localhost','root','','project');

$query = "UPDATE `organisation` SET `Name`='$name',`PNumber`='$num',`Address`='$add',`Pincode`='$pin' WHERE Email='".$email."'";

$result = mysqli_query($conn,$query);

if($result == TRUE){
	echo "<script>alert('Records are updated successfully.');</script> ";
	echo " <script> location.href='home.html'; </script>";
}else{
	echo "<script>alert('Error: Data Updation Failed.');</script> ";
	echo " <script> location.href='http://localhost/project/ind_pd.php'; </script>";
}

?>