<?php
 

$email = $_POST['Email_Id'];
$nm = $_POST['Org_Name'];
$ph = $_POST['Mobile_Number'];
$AP = $_POST['ap'];
$AN = $_POST['an'];
$BP = $_POST['bp'];
$BN = $_POST['bn'];
$OP = $_POST['op'];
$ON = $_POST['on'];
$ABP = $_POST['abp'];
$ABN = $_POST['abn'];
$add = $_POST['Address'];
$cty = $_POST['city'];
$pin = $_POST['Pin_Code'];
$ste = $_POST['State'];
$cn = $_POST['Country'];
$pw = $_POST['Pass'];

$conn= mysqli_connect('localhost','root','','project');

$query= "UPDATE `organisation` SET `Name`='$nm',`PNumber`='$ph',`Address`='$add',`City`='$cty',`State`='$ste',`Country`='$cn',`Pincode`='$pin',`AP`='$AP',`AN`='$AN',`BP`='$BP',`BN`='$BN',`OP`='$OP',`O_N`='$ON',`ABP`='$ABP',`ABN`='$ABN',`Password`='$pw' WHERE Email='".$email."'";

$result= mysqli_query($conn,$query);

if($result==TRUE){
	echo "<script>alert('Records are updated successfully.');</script> ";
	echo " <script> location.href='http://localhost/project/admin_org.php'; </script>";

}else{
	echo "<script>alert('Error: Data Updation failed.');</script> ";
	echo " <script> location.href='http://localhost/project/admin_org.php'; </script>";
}

?>