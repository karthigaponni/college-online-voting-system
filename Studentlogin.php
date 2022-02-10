<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <link rel="stylesheet" href="Studentlogin.css">
    <script src="stdval.js"></script>
  </head>
  
  
<?php
session_start();

include('db_connect.php');

if(isset($_POST['submit']))
{	

$_SESSION['username']=$_POST['username'];


$ret=mysqli_query($conn,"SELECT * FROM user WHERE username='".$_POST['username']."' and pname='".$_POST['password']."' ");
$num=mysqli_fetch_array($ret);
if($num>0)
{
echo "<script>alert('Login Successfully. You can Vote now');</script>";
header('location:Votingpage.php');
}

}
?>  
  
  
  
  <body>
 
    <div class="center">
      <h1>Student Login</h1>
      <form method="post" action="#" onsubmit="">
        <div class="txt_field">
          <input type="text" name="username" id="username" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" id="password"required>
          <span></span>
          <label>pname</label>
        </div>
       
        <input type="submit" name="submit" value="Login" onclick="">
        <div class="signup_link">
          Not a member? <a href="partyreg.php">Signup</a>
        </div>
      </form>
    </div>

  </body>
</html>