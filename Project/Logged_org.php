
<?php
$un= $_POST['uname'];
$pass= $_POST['pass'];
$logt= $_POST['rad'];
$conn= mysqli_connect('localhost','root','','project');

$query="SELECT `Name`, `Password` FROM `$logt` WHERE Email='$un'";

$result= mysqli_query($conn,$query);
$rows=mysqli_fetch_array($result, MYSQLI_ASSOC);

  if($pass==$rows['Password']){
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="fav.png" type="image/png">

<title>Welcome orgalisation</title>

</head>
<body style="background-image:url('home_bg.png'); 
  background-size: cover;
  opacity:0.9;">
<div id="body_wrapper" style="background-color:#e60000; height: 80%; width: 50%;
  
   
border-radius: 25px;
margin-top: 50px;    
margin-left: 370px;
">

<div id="wrapper">

    <div id="header">
        <div id="site_title"><center><h1 style="color: white;"> Welcome <?php echo $rows['Name']; ?></h1></center></div>
        
   
    </div> 
</div>

<div id="tooplate_middle_subpage">
        
</div> 

<pre>


 <div class="col_allw300 col_last" style="margin-left: 200px; margin-top: -50px;" >
        <form action="http://localhost/project/org_pdedit.php" method="POST">
        <input type="hidden" name="Email" value="<?php echo($un) ?>">  
   <input type="submit" value=" Personal Details " name="pdsubmit" style="background: #30122b;
 
  border-radius: 28px;
  font-family: Arial;
  color: #ffffff;
  font-size: 27px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;"/>
  </form>
  <div class="col_allw300 col_last" style="margin-right: 200px; margin-bottom: -50px;" >
 
        <form action="availableunits.php" method="POST">
          <input type="hidden" name="Email" value="<?php echo($un) ?>">
   
   <input type="submit" value=" Stock Details" style="background: #30122b;
   border-radius: 28px;
  font-family: Arial;
  color: #ffffff;
  font-size: 27px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;"/>
</form>
    </div>
   
</pre>
</body>
</html>
<?php
}else{
  echo "<script>alert('Error : Invalid Credentials.');</script>";
  echo " <script> location.href='home.html'; </script>";

}

$conn->close();

?>

