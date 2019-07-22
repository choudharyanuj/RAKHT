<?php
$un= $_POST['uname'];
$pass= $_POST['pass'];
$logt= $_POST['rad'];

$aun= "admin@admin.com";
$apass="admin123";

  if($un==$aun) {
	  if($pass==$apass){
	  
?>
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="fav.png" type="image/png">
<title>Admin Welcome</title>
  <style>
a:link {
  color: white;
  background-color: transparent;
  text-decoration: none;
}
a:visited {
  color: white;
  background-color: transparent;
  text-decoration: none;
}
a:hover {
  color: red;
  background-color: transparent;
  text-decoration: underline;
}
a:active {
  color: white;
  background-color: transparent;
  text-decoration: underline;
}
</style>


</head>
<body style="background-image:url('home_bg.png'); 
  background-size: cover;
  opacity:0.9;">
  <div id="body_wrapper" >
<div id="wrapper">
  
    <div id="header">
        <div id="site_title" style="text-align: center;margin-top: 2%; font-family: jokerman;"><font color="white"; size="200";>RAKHT</font></div>
    </div> 

<div id="tooplate_middle_subpage">
        
</div>
<div style=" width: 50%;
     
border-radius: 25px;
margin-top: 8%;
margin-left: 25%;
background-color: #b30000;
color: #ffffff;
font-size: 23px;
padding: 20px;">
<pre>


 <div class="col_allw300 col_last" style="margin-left: 200px; margin-top: 3%;" >
        <form action="http://localhost/project/admin_ind.php">  
   <input type="submit" value=" Individual Details" style="background: #30122b;
 
  border-radius: 28px;
  margin-bottom:2%;
  font-family: Arial;
  color: #ffffff;
  font-size: 27px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;"/>
  </form>
  <div class="col_allw300 col_last" style="margin-right: 200px; margin-bottom: 3%;" >
        <form action="http://localhost/project/admin_org.php">
   <input type="submit" value=" Organisation details" style="background: #30122b;
 
  border-radius: 28px;
  margin-bottom: 10%;
  font-family: Arial;
  color: #ffffff;
  font-size: 27px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;"/>
</pre>

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
  }


?>
