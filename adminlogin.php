<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="Stylelogin.css">
    <script >
        function validate() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if (username == "admin" && password == "password") {
      window.location.href="AdminHomepage.html";
       
    } else {
        alert("Login failed");
    }
}
    </script>
  </head>
  
  <?php
session_start();

include('db_connect.php');

if(isset($_POST['submit']))
{	

$_SESSION['adminname']=$_POST['adminname'];


$ret=mysqli_query($conn,"SELECT * FROM admin WHERE username='".$_POST['username']."' and pname='".$_POST['password']."' ");
$num=mysqli_fetch_array($ret);
if($num>0)
{
echo "<script>alert('Login Successfully. You can Check now');</script>";
header('location:userpoll.php');
}

}
?>  
  
  
  <body>
 
    <div class="center">
      <h1>Admin Login</h1>
      <form method="post" action="userpoll.php" onsubmit="">
        <div class="txt_field">
          <input type="text" name="username" id="username" required>
          <span></span>
          <label>Username</label>
        </div>
        <div class="txt_field">
          <input type="password" name="password" id="password"required>
          <span></span>
          <label>Password</label>
        </div>
        <div class="pass">Forgot Password?</div>
        <input type="submit" value="Login" onclick="validate()">
        <div class="signup_link">
         <a href="#">Signup</a>
        </div>
      </form>
    </div>

  </body>
</html>