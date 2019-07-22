<?php
$conn= mysqli_connect('localhost','root','','project');

$em = $_POST['Email'];
$ad = $_POST['Address'];
$pin = $_POST['Pincode'];
$mn = $_POST['Mobile_Number'];
$cty = $_POST['City'];


$query="UPDATE `indivisual` SET `PNumber`='$mn' , `Address`='$ad' , `City`='$cty' , `Pincode`='$pin' WHERE Email='".$em."'";

//updation
 $result = mysqli_query($conn,$query);

if($result==TRUE){
	echo "<script>alert('Records are updated successfully.');</script> ";
	echo " <script> location.href='home.html'; </script>";

}else{
	echo "<script>alert('Error: Data Updation Failed.');</script> ";
	echo " <script> location.href='http://localhost/project/ind_pd.php'; </script>";

}

?>