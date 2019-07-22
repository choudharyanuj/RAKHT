<?php
 
$em= $_POST['Email'];

$conn= mysqli_connect('localhost','root','','project');

$query="SELECT `Password` FROM `indivisual` WHERE Email='$em'";

$result= mysqli_query($conn,$query);
$rows=mysqli_fetch_array($result, MYSQLI_ASSOC);

?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="one.css">
<link rel="stylesheet" type="text/css" href="h3.css">
<link rel="shortcut icon" href="fav.png" type="image/png">
<title>Individual Edit</title>

</head>
 
<body>
	<center>
	<h3>Enter New Personal Details</h3>	
	</center>
<form onsubmit="return check(this);" action="http://localhost/project/update_pw_ind.php" method="POST"> 
<table align="center" style="float:top;margin-top:2%" cellpadding = "10">
 
<tr>
<td>Old Password:</td>
<td>
<input type="Password" name="old_pass" maxlength="100" required />
</td>
</tr>
<tr>
<td>New Password:</td>
<td>
<input type="Password" name="New_pass" maxlength="100" required />
</td>
</tr>
<tr>
<td>Confirm New Password:</td>
<td>
<input type="Password" name="con_new_pass" maxlength="100" required />
</td>
</tr>
<input type="hidden" name="db_pass" value="<?php echo $rows['Password'];?>">
<tr><input type="hidden" name="Email" value="<?php echo($em) ?>">
	<td><button type="submit" value="submit">Submit</button>
<button type="reset" value="reset">Reset</button>
</td>
</tr>
</tr>
</table>

 
</form>
 
</body>
</html>
<script type="text/javascript">
	function check(form)
	{
		if(form.old_pass.value != form.db_pass.value) {
			alert("Error : Entered old password is incorrect.");
			form.old_pass.focus();
			return false;
		}
		else if(form.New_pass.value.length < 6){
			alert("Error : Password length must be greater than 6 characters.");
			form.New_pass.focus();
			return false;
		}
		else if (form.db_pass.value == form.New_pass.value) {
			alert("Error : Entered new password is same with current password.");
			form.New_pass.focus();
			return false;
		}
		else if(form.New_pass.value != form.con_new_pass.value){
			alert("Error : Password & Confirm Password field must contain the same input.");
			form.con_new_pass.focus();
			return false;
		}else{
		alert("Entered details are correct.");
		return true;
		}
	}
</script>
