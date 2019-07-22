<?php
$conn= mysqli_connect('localhost','root','','project');

$em= $_POST['Email'];

//echo "'$bgroup'";
//echo "hi".$city."llo";

$query="SELECT `AP`, `AN`, `BP`, `BN`, `OP`, `O_N`, `ABP`, `ABN` FROM `organisation` WHERE Email='".$em."'";

//echo $bgroup;

$result= mysqli_query($conn,$query);

?>


<html>
<head>
<link rel="stylesheet" type="text/css" href="one.css">
<link rel="shortcut icon" href="fav.png" type="image/png">
<title>Info</title>

</head>
 
<body>
	<center>
	<h3>Available Unit Details</h3>	
	</center>


<form action="http://localhost/project/update_org_avail_units.php" method="POST">
<table align="center" cellpadding = "10">

 <?php
while ($rows=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
 ?> 


<tr>
<td>A+ :</td>
<td><input type="text" id="AP" name="AP" maxlength="1000000" pattern="[0-9]{1,5}" value="<?php echo $rows['AP']; ?>" readonly />
</td>
<tr>
<td>A- :</td>
<td><input type="text" id="AN" name="AN" maxlength="1000000" pattern="[0-9]{1,5}" value="<?php echo $rows['AN']; ?>" readonly />
</tr>
</td>
<tr>
<td>B+ :</td>
<td><input type="text" id="BP" name="BP" maxlength="1000000" pattern="[0-9]{1,5}" value="<?php echo $rows['BP']; ?>" readonly />
</tr>
</td>
<tr>
<td>B- :</td>
<td><input type="text" id="BN" name="BN" maxlength="1000000" pattern="[0-9]{1,5}" value="<?php echo $rows['BN']; ?>" readonly />
</tr>
</td>
<tr>
<td>O+ :</td>
<td><input type="text" id="OP" name="OP" maxlength="1000000" pattern="[0-9]{1,5}" value="<?php echo $rows['OP']; ?>" readonly />
</tr>
</td>
<tr>
<td>O- :</td>
<td><input type="text" id="O_N" name="O_N" maxlength="1000000" pattern="[0-9]{1,5}" value="<?php echo $rows['O_N']; ?>" readonly />
</tr>
</td>
<tr>
<td>AB+ :</td>
<td><input type="text" id="ABP" name="ABP" maxlength="1000000" pattern="[0-9]{1,5}" value="<?php echo $rows['ABP']; ?>" readonly />
</tr>
</td>
<tr>
<td>AB- :</td>
<td><input type="text" id="ABN" name="ABN" maxlength="1000000" pattern="[0-9]{1,5}" value="<?php echo $rows['ABN']; ?>" readonly />
</tr>
</td>
<tr> <input type="hidden" name="Email" value="<?php echo $em; ?>">
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
document.getElementById('AP').removeAttribute('readonly');
document.getElementById('AN').removeAttribute('readonly');
document.getElementById('BP').removeAttribute('readonly');
document.getElementById('BN').removeAttribute('readonly');
document.getElementById('OP').removeAttribute('readonly');
document.getElementById('O_N').removeAttribute('readonly');
document.getElementById('ABP').removeAttribute('readonly');
document.getElementById('ABN').removeAttribute('readonly');
return;
}
};

</script>

</tr>
</tr>
</table>

<?php
 }
 ?>

 <?php
 mysqli_close($conn);
 ?>
 
</form>
 
</body>
</html>
