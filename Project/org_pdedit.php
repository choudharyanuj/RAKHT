<?php

$email= $_POST['Email'];

$conn= mysqli_connect('localhost','root','','project');

$query= "SELECT `Name`, `PNumber`, `Address`,`Pincode`,`Email` FROM `organisation` WHERE Email='".$email."'";

$result= mysqli_query($conn,$query);

?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="one.css">
<link rel="shortcut icon" href="fav.png" type="image/png">
	<title>organisation edit</title>
</head>
<body>

	<center>
	<h3>Enter New Personal Details</h3>	
	</center>

<form action="http://localhost/project/update_org_pd.php" method="POST">
<table align="center" cellpadding = "10">

<?php
while($rows=mysqli_fetch_array($result, MYSQLI_ASSOC))
{
?>
 

<tr>
<td>ORGANISATION NAME :</td>
<td><input type="text" value="<?php echo $rows['Name']; ?>" id="Name" name="Name" maxlength="30" readonly />
(max 30 characters a-z and A-Z)
</td>
</tr>

<tr>
<td>MOBILE NUMBER :</td>
<td>
<input type="text" value="<?php echo $rows['PNumber']; ?>" id="MNumber" name="MNumber" maxlength="10" readonly />
(10 digit number)
</td>
</tr>

<tr>
<td>EMAIL :</td>
<td><input type="text" value="<?php echo $rows['Email']; ?>" id="Email" name="Email" maxlength="30" readonly />
</td>
</tr>

<tr>
<td>ADDRESS :<br /><br /><br />
</td>
<td><input type="text" id="Address" name="Address" value="<?php echo $rows['Address']; ?>" rows="4" cols="30" readonly /></td>
</tr>

<tr>
<td>PIN CODE :</td>
<td><input type="text" id="Pincode" name="Pincode" value="<?php echo $rows['Pincode']; ?>" maxlength="6" readonly />
(6 digit number)
</td>
</tr>


<?php
	}
?>


<tr>
	<td>
	<td><button id='Edit' type="button" style="display: block;" onclick="btn(1)">Edit</button>
<button id='Update' type="submit" style="display: none;">Update</button>
</td>


<script> 
function btn(x){
if(x==0)
document.getElementById('Update').style.display='none';
else
{
document.getElementById('Edit').style.display='none';	
document.getElementById('Update').style.display='block';
document.getElementById('Name').removeAttribute('readonly');
document.getElementById('MNumber').removeAttribute('readonly');
document.getElementById('Address').removeAttribute('readonly');
document.getElementById('Pincode').removeAttribute('readonly');
return;
}
}
</script>


</td>
</tr>
</tr>
</table>
</form>
</body>
</html>