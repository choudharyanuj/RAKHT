<?php
$conn= mysqli_connect('localhost','root','','project');
$count=0;
$query="SELECT `Name`, `PNumber`, `Address`, `Email` FROM `organisation` WHERE 1";

//echo $bgroup;

$result= mysqli_query($conn,$query);

?>

<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="fav.png" type="image/png">
<title>Manage Details</title>
<center><h2 style="color: white;"> DONOR DETAILS </h2></center>

</head>
<body style="background-image:url('detail_back.jpg'); 
  background-size: cover;
  opacity:0.99;">
  <table align="center" border="1px" style="width: 1100px; line-height: 40px; color: white; border-color: #FF013E;">
  <tr>
  </tr>
  
  <t>
    <th style="background-color: #190D55;">Sl No.</th>
    <th style="background-color: #190D55;">NAME</th>
    <th style="background-color: #190D55;">ADDRESS</th>
    <th style="background-color: #190D55;">CONTACT</th>
    <th style="background-color: #190D55;">EMAIL</th>
    <th style="background-color: #190D55;">EDIT</th>
    <th style="background-color: #190D55;">DELETE</th>
  </t>
  <?php
while ($rows=mysqli_fetch_array($result, MYSQLI_ASSOC)) {
 ?> 
  <form action="http://localhost/project/admin_org_edit.php" method="POST">



  <tr>
      
      <input type="hidden" name="Email" value="<?php echo $rows['Email']; ?>">
      <td><?php echo $count++; ?></td>
      <td><?php echo $rows['Name']."(Organisation)"; ?></td>
      <td><?php echo $rows['Address']; ?></td>
      <td><?php echo $rows['PNumber']; ?></td>
      <td><?php echo $rows['Email']; ?></td>
      <td><input type="submit" name="Edit" value="Edit"/></td></form>
      <td><form name="del" action="http://localhost/project/admin_org_del.php" method="POST"><input type="hidden" name="E_mail" value="<?php echo $rows['Email']; ?>"><input type="submit" name="delete" value="Delete" ></form></td>
  </tr>


<?php
}
?>
</table>
    </div>
</pre>
</body>
</html>