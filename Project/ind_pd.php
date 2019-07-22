<?php
$conn= mysqli_connect('localhost','root','','project');

$em= $_POST['Email'];

//echo "'$bgroup'";
//echo "hi".$city."llo";

$query="SELECT `Pnumber`, `Address`, `City`, `Pincode` FROM `indivisual` WHERE Email='".$em."'";

//echo $bgroup;

$result= mysqli_query($conn,$query);

?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="one.css">
<link rel="shortcut icon" href="fav.png" type="image/png">
<title>Individual Edit</title>

</head>
 
<body>
	<center>
	<h3>Edit Personal Details</h3>	
	</center>

<form action="http://localhost/project/update_ind_pd.php" method="POST">
<table align="center" cellpadding = "10">
 
 <?php
while ($rows=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
 ?> 

<tr>
<td>MOBILE NUMBER :</td>
<td>
<input type="text" value="<?php echo $rows['Pnumber']; ?>" pattern="[0-9]{10}" id="Mobile_Number" name="Mobile_Number" maxlength="10" readonly />
(10 digit number)
</td>
</tr>
<tr>
<td>ADDRESS :<br /><br /><br /></td>
<td><input type="text" id="Address" name="Address" value="<?php echo $rows['Address']; ?>" rows="4" cols="30" readonly /></td>
</tr>
<tr>
<td>CITY :</td>
<td>
<select id="City" name="City" disabled required>
<option id="blank" value="NULL"> </option>	
<option id="Bhubaneswar" value="Bhubaneswar">Bhubaneswar</option>
<option id="Sambalpur" value="Sambalpur">Sambalpur</option>
<option id="Rourkela" value="Rourkela">Rourkela</option>
</td>
</tr>
<tr>
<td>PIN CODE :</td>
<td><input type="text" value="<?php echo $rows['Pincode']; ?>" pattern="[0-9]{6}" id="Pincode" name="Pincode" maxlength="6" readonly />
(6 digit number)
</td>
</tr>
<?php
 }
 ?>

<tr><input type="hidden" name="Email" value="<?php echo($em) ?>">
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
document.getElementById('Mobile_Number').removeAttribute('readonly');
document.getElementById('City').removeAttribute('disabled');
document.getElementById('Address').removeAttribute('readonly');
document.getElementById('Pincode').removeAttribute('readonly');
return;
}
};

</script>

</td>
</tr>
</tr>
</table>

 
</form>
 
</body>
</html>
