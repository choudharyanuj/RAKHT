<?php
$conn= mysqli_connect('localhost','root','','project');

$em = $_POST['Email'];
$eAP = $_POST['AP'];
$eAN = $_POST['AN'];
$eBP = $_POST['BP'];
$eBN = $_POST['BN'];
$eOP = $_POST['OP'];
$eON = $_POST['O_N'];
$eABP = $_POST['ABP'];
$eABN= $_POST['ABN'];

//echo $eAP;
//echo "hi".$city."llo";

$query="UPDATE `organisation` SET `AP`='$eAP',`AN`='$eAN',`BP`='$eBP',`BN`='$eBN',`OP`='$eOP',`O_N`='$eON',`ABP`='$eABP',`ABN`='$eABN' WHERE Email='".$em."'" ;

//updation
 $result = mysqli_query($conn,$query);

if($result==TRUE){
	echo "<script>alert('Records are updated successfully.');</script> ";
	echo " <script> location.href='home.html'; </script>";

}else{
	echo "<script>alert('Error:');</script> ";
	echo " <script> location.href='http://localhost/project/availableunits.php'; </script>";
}

?>
