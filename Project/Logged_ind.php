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

<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="fav.png" type="image/png">
<title>Welcome</title>


</head>
<body style="background-image:url('home_bg.png'); 
  background-size: cover;
  opacity:0.9;">

<div id="wrapper">

    <div id="header">
        <div id="site_title"><h1 style="color: white;"><center> Welcome <?php echo $rows['Name']; ?></center></h1></div>
        
   
    </div> 
</div>

<div id="tooplate_middle_subpage">
        
</div> 
<div style=" height: 80%; width: 50%;
  
   
border-radius: 25px;
margin-top: 50px;    
margin-left: 340px;
background-color: #b30000;
color: #ffffff;
font-size: 23px;
   
padding: 20px;">
<pre>


 <div class="col_allw300 col_last" style="margin-left: 200px; margin-top: -50px;" >
        <form action="ind_pd.php" method="POST">  
          <input type="hidden" name="Email" value="<?php echo($un) ?>">
   <input type="submit" value=" Edit details" style="background: #30122b;
 
  border-radius: 28px;
  font-family: Arial;
  color: #ffffff;
  font-size: 27px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;"/>
  </form>
  <div class="col_allw300 col_last" style="margin-right: 200px; margin-bottom: -30px;" >
        <form action="changepassword_ind.php" method="POST">
          <input type="hidden" name="Email" value="<?php echo($un) ?>">
   <input type="submit" value=" Change Password" style="background: #30122b;
 
  border-radius: 28px;
  font-family: Arial;
  color: #ffffff;
  font-size: 27px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;"/>
</form>
    </div>
    <form>
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
