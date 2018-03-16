<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['userid']) || empty($_POST['password'])) {
$error = "Userid or Password is invalid";
}
else
{
// Define $username and $password
$userid=$_POST['userid'];
$password=$_POST['password'];
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($connection,"main");
// SQL query to fetch information of registerd users and finds user match.
$query = mysqli_query($connection,"select * from users where pwd='$password' AND user_id='$userid'");
while($res = mysqli_fetch_array($query))
{
  $role = $res['role'];
}
$rows = mysqli_num_rows($query);
if ($rows == 1) {
if($role==0)
{
  $_SESSION['login_user']=$userid;
  echo '<script type="text/javascript">alert("LOGIN SUCCESSFUL");</script>';
  sleep(2);
  echo "<script>setTimeout(\"location.href='http://localhost:8080/pm/admin.php';\",0);</script>";
}
if($role==1)
{
  echo "<script>alert('Welcome!! The site is under construction.');</script>";
  sleep(2);
  echo "<script>setTimeout(\"location.href='http://localhost:8080/pm/login.html';\",0);</script>";
}
} else {
$error = "Username or Password is invalid";
echo '<script type="text/javascript">alert("USERID or PASSWORD is INCORRECT");</script>';
sleep(2);
echo "<script>setTimeout(\"location.href='http://localhost:8080/pm/login.html';\",0);</script>";}
mysqli_close($connection); // Closing Connection
}
}
?>
