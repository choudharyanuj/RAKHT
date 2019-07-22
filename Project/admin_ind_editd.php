<?php
$conn= mysqli_connect('localhost','root','','project');

$em= $_POST['Emailh'];

$query="SELECT * FROM `indivisual` WHERE Email='".$em."'";
//echo $query;

$result= mysqli_query($conn,$query);

?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="one.css">
<title>Individual Registration Form</title>

</head>
 
<body>
	<center>
	<h3>INDIVIDUAL REGISTRATION FORM</h3>	
	</center>

<form onsubmit="return check(this);" action="http://localhost/Project/admin_ind_edit_updated.php" method="POST">
 
<table align="center" cellpadding = "10">
 <?php
 while ($rows=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
 ?>

<tr>
<td>NAME :</td>
<td><input type="text" name="Name"  pattern="([a-zA-Z]+[a-zA-Z\s]+){3,}" value="<?php echo $rows['Name']?>" autofocus autocomplete="off"  required />
(max 30 characters a-z and A-Z)
</td>
</tr>
</tr>
<td>D.O.B :</td>
<td><input type="text" name="DOB" value="<?php echo $rows['DOB']?>" autofocus autocomplete="off"  required />
(in displayed format only)
</td>
<tr>
<td>EMAIL ID :</td>
<td><input type="email" name="Email_Id" maxlength="100" value="<?php echo $rows['Email']?>" required readonly /></td>
</tr>
<tr>
<td>MOBILE NUMBER :</td>
<td>
<input type="tel" name="Mobile_Number" value="<?php echo $rows['PNumber']?>" pattern="[0-9]{10}" required />
(10 digit number)
</td>
</tr>
<tr>
<td>GENDER :</td>
<td>
Male <input type="radio" name="Gender" value="M" checked/>
Female <input type="radio" name="Gender" value="F" />
</td>
</tr>
<tr>
<td> BLOOD GROUP :</td>
<td>
<input type="text" name="Bgroup" rows="4" value="<?php echo $rows['Bgroup']?>" pattern="[a-zA-Z]{2}" required>
(AP/AN/BP/BN/OP/ON/ABP/ABN)
</td>
</tr>
<tr>
<td>ADDRESS :<br /><br /><br /></td>
<td>
<input type="text" name="Address" rows="4" value="<?php echo $rows['Address']?>" cols="30" required></td>
</tr>
<tr>
<td>CITY :</td>
<td><input type="text" name="City" value="<?php echo $rows['City']?>" cols="30" required>
(Bhubaneswar/Rourkela/Sambalpur)
</td>
</tr>
<tr>
<td>PIN CODE :</td>
<td><input type="text" name="Pin_Code" value="<?php echo $rows['Pincode']?>" maxlength="6" pattern="[0-9]{6}" required />
(6 digit number)
</td>
</tr>
<tr>
<td>STATE :</td>
<td><input type="text" name="State" value="Odisha" readonly="readonly" />
</td>
</tr>
<tr>
<td>COUNTRY :</td>
<td><input type="text" name="Country" value="India" readonly="readonly" /></td>
</tr>
<tr>
<tr>
<td>PASSWORD :</td>
<td><input type="text" name="Pass" value="<?php echo $rows['Password']?>" readonly /></td>
</tr>
<td colspan="2" align="center">
<input type="submit" value="Submit" >
<input type="reset" value="Reset" onclick="return Confirm('Do You Want to Reset the form?')">
</td>
</tr>
</table>
<?php
}
?>  
</form>

</body>
</html>
<script type="text/javascript">
	function check(form)
	{
		if(form.Pass.value.length < 6){
			alert("Error : Password length must be greater than 6 characters.");
			form.Pass.focus();
			return false;
		}
		alert("Entered details are correct.");
		return true;
	}
</script>