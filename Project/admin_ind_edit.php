<?php

$email = $_POST['Emailh'];

$con = mysqli_connect('localhost','root','','project');

$query = "SELECT * FROM `indivisual` WHERE Email='".$email."'";

$result = mysqli_query($conn,$query);


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

<form onsubmit="return check(this);" action="http://localhost/Project/insertind.php" method="POST">
 
<table align="center" cellpadding = "10">
 
<?php
while ($rows=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
?>

<tr>
<td>NAME :</td>
<td><input type="text" name="Name"  pattern="([a-zA-Z]+[a-zA-Z\s]+){3,}" value="<?php echo $rows['Name'] ?>" autofocus autocomplete="off" required />
(max 30 characters a-z and A-Z)
</td>
</tr
 

<tr>
<td>DOB :</td>
<td><input type="text" name="DOB" pattern="[a-zA-Z]{3,}" value="<?php echo $rows['DOB'] ?>" maxlength="30" required />
(In the retrived format only)
</td>
</tr>

<tr>
<td>EMAIL ID :</td>
<td><input type="email" name="Email_Id" value="<?php echo $rows['Email'] ?>" maxlength="100" required /></td>
</tr>
<tr>
<td>MOBILE NUMBER :</td>
<td>
<input type="tel" name="Mobile_Number" value="<?php echo $rows['PNumber'] ?>" maxlength="10" pattern="[0-9]{10}" required />
(10 digit number)
</td>
</tr>
<tr>
<td>GENDER :</td>
<td>
<input type="text" name="Gender" value="<?php echo $rows['Gender'] ?>" pattern="[a-zA-Z]{1}" required />
("M"/"F" only)
</td>
</tr>
<tr>
<td> BLOOD GROUP :</td>
<td>
<input type="text" name="bgroup" value="<?php echo $rows['Bgroup'] ?>" pattern="[a-zA-Z]{2}" maxlength="30" required />
(AP/AN/BP/BN/OP/ON/ABP/ABN)
</td>
</tr>
<tr>
<td>ADDRESS :<br /><br /><br /></td>
<td><input type="text" value="<?php echo $rows['Address'] ?>" name="Address" rows="4" cols="30" required></td>
</tr>
<tr>
<td>CITY :</td>
<td>
<select id="City" name="City" required>
<option value="" selected> </option>	
<option value="Bhubaneswar">Bhubaneswar</option>
<option value="Sambalpur">Sambalpur</option>
<option value="Rourkela">Rourkela</option>
</td>
</tr>
<tr>
<td>PIN CODE :</td>
<td><input type="text" value="<?php echo $rows['Pincode'] ?>" name="Pin_Code" maxlength="6" pattern="[0-9]{6}" required />
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
<td><input type="PASSWORD" value="<?php echo $rows['Password'] ?>" name="Pass" maxlength="100" /></td>
</tr>
<tr>
<td>CONFIRM PASSWORD :</td>
<td><input type="PASSWORD" value="<?php echo $rows['Password'] ?>" name="Conf_Pass" maxlength="100" /></td>
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
		if(form.Pass.value != form.Conf_Pass.value){
			alert("Error : Password & Confirm Password field must contain the same input.");
			form.Conf_Pass.focus();
			return false;
		}
		alert("Entered details are correct.");
		return true;
	}
</script>