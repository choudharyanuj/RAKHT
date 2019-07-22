<?php

$em= $_POST['Email'];
$cpw= $_POST['con_new_pass'];

$conn= mysqli_connect('localhost','root','','project');

$query="UPDATE `indivisual` SET `Password`='$cpw' WHERE Email='".$em."'";

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