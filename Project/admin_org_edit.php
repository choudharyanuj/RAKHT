<?php

$em = $_POST['Email'];

$conn=mysqli_connect('localhost','root','','project');
$query= "SELECT * FROM `organisation` WHERE Email='".$em."'";

$result = mysqli_query($conn,$query);

?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="one.css">
<link rel="shortcut icon" href="fav.png" type="image/png">
<title>Orginasation Registration Form</title>

</head>
 
<body>
	<center>
	<h3>ORGANISATION REGISTRATION FORM</h3>	
	</center>


<form onsubmit="return check(this);" action="http://localhost/Project/admin_org_edit_update.php" method="POST"> 
<table align="center" cellpadding = "10">
 
<?php
while ($rows=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
?>

<tr>
<td>ORGANISATION NAME :</td>
<td><input type="text" name="Org_Name" value="<?php echo $rows['Name']; ?>" pattern="([a-zA-Z]+[a-zA-Z\s]+){3,}" maxlength="30" required />
(max 30 characters a-z and A-Z)
</td>
</tr>

<tr>
<td>EMAIL ID :</td>
<td><input type="EMAIL" name="Email_Id" value="<?php echo $rows['Email']; ?>" maxlength="100" required readonly/></td>
</tr>
<tr>
<td>MOBILE NUMBER :</td>
<td>
<input type="text" name="Mobile_Number" value="<?php echo $rows['PNumber']; ?>" pattern="[0-9]{10}" maxlength="10" required />
(10 digit number)
</td>
</tr>
<tr>
<td> Fill available units per each blood group below :</td>
</tr>
<td>A+ :</td>
<td><input type="text" name="ap" value="<?php echo $rows['AP']; ?>" pattern="[0-9]{1,}" maxlength="1000000" required />
</td>
<tr>
<td>A- :</td>
<td><input type="text" name="an" value="<?php echo $rows['AN']; ?>" pattern="[0-9]{1,}" maxlength="1000000" required />
</tr>
</td>
<tr>
<td>B+ :</td>
<td><input type="text" name="bp" value="<?php echo $rows['BP']; ?>" pattern="[0-9]{1,}" maxlength="1000000" required />
</tr>
</td>
<tr>
<td>B- :</td>
<td><input type="text" name="bn" value="<?php echo $rows['BN']; ?>" pattern="[0-9]{1,}" maxlength="1000000" required/>
</tr>
</td>
<tr>
<td>O+ :</td>
<td><input type="text" name="op" value="<?php echo $rows['OP']; ?>" pattern="[0-9]{1,}" maxlength="1000000" required/>
</tr>
</td>
<tr>
<td>O- :</td>
<td><input type="text" name="on" value="<?php echo $rows['O_N']; ?>" pattern="[0-9]{1,}" maxlength="1000000" required/>
</tr>
</td>
<tr>
<td>AB+ :</td>
<td><input type="text" name="abp" value="<?php echo $rows['ABP']; ?>" pattern="[0-9]{1,}" maxlength="1000000" required/>
</tr>
</td>
<tr>
<td>AB- :</td>
<td><input type="text" name="abn" value="<?php echo $rows['ABN']; ?>" pattern="[0-9]{1,}" maxlength="1000000" required/>
</tr>
</td>
<tr>
<td>ADDRESS :<br /><br /><br /></td>
<td><input type="text" name="Address" value="<?php echo $rows['Address']; ?>" rows="4" cols="30" required></td>
</tr>
<tr>
<td>CITY :</td>
<td>
<input type="text" name="city" value="<?php echo $rows['City']; ?>" pattern="[a-zA-Z]{3,}" maxlength="6" required/>
</td>
</tr>
<tr>
<td>PIN CODE :</td>
<td><input type="text" name="Pin_Code" value="<?php echo $rows['Pincode']; ?>" pattern="[0-9]{6}" maxlength="6" required/>
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
<td><input type="text" value="<?php echo $rows['Password']; ?>" name="Pass" readonly /></td>
</tr>

<tr>
<td colspan="2" align="center">
<input type="submit" value="Submit">
<input type="reset" value="Reset">
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
		if(form.Pass.value != form.Conf_Pass.value){
			alert("Error : Password & Confirm Password field must contain the same input.");
			form.Conf_Pass.focus();
			return false;
		}
		alert("Entered details are correct.");
		return true;
	}
</script>