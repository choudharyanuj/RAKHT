<?php
$conn= mysqli_connect('localhost','root','','project');

$city= $_POST['city'];
$bgroup= $_POST['bgroup'];
$count = 0;

//echo "'$bgroup'";
//echo "hi".$city."llo";

$query="SELECT `Name`, `PNumber`, `Address`, `".$bgroup."` FROM `organisation` WHERE City='".$city."'";

$query2="SELECT `Name`, `PNumber`, `Address` FROM `indivisual` WHERE City='".$city."' AND Bgroup='".$bgroup."'";

//echo $bgroup;

$result= mysqli_query($conn,$query);

$result2= mysqli_query($conn,$query2);
?>

<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="fav.png" type="image/png">
<title>Donor Details</title>
<center><h2 style="color: white;"> DONOR DETAILS </h2></center>

</head>
<body style="background-image:url('detail_back.jpg'); 
  background-size: cover;
  opacity:0.99;">
<table align="center" border="1px" style="width: 1100px; line-height: 40px; color: white;">
  <tr>
  </tr>
  
  <t>
    <th style="background-color: #190D55;">Sl. No</th>
    <th style="background-color: #190D55;">NAME</th>
    <th style="background-color: #190D55;">ADDRESS</th>
    <th style="background-color: #190D55;">CONTACT</th>
    <th style="background-color: #190D55;">UNITS</th>
  </t>

<?php
while ($rows=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
 ?> 
  <tr>
      <td><?php echo $count++; ?></td>
      <td><?php echo $rows['Name']."(Organisation)"; ?></td>
      <td><?php echo $rows['Address']; ?></td>
      <td><?php echo $rows['PNumber']; ?></td>
      <td><?php echo $rows[$bgroup]; ?></td>
  </tr>
<?php
}
?>

<?php
while ($rows2=mysqli_fetch_array($result2, MYSQLI_ASSOC)) {
 ?> 
  <tr>
      <td><?php echo $count++; ?></td>
      <td><?php echo $rows2['Name']."(Indivisual)"; ?></td>
      <td><?php echo $rows2['Address']; ?></td>
      <td><?php echo $rows2['PNumber']; ?></td>
      <td><?php echo "2"; ?></td>
  </tr>

<?php
}
?>
</table>
</form>
    </div>
</pre>
</body>
</html>