<?php
  session_start();
  if(empty($_SESSION['login_user']))
  {
    echo "<script>alert('Access Denied. Please Login to continue...');window.location='http://localhost:8080/pm/login.html';</script>";
  }
  $conn=mysqli_connect('localhost','root','','main');
 ?>
<?php if (!empty($_POST['old_pwd'])):
  $conn = mysqli_connect('localhost','root','','main');
  $res = mysqli_query($conn,"UPDATE users SET pwd ='{$_POST['new_pwd']}' where user_id='{$_SESSION['login_user']}'");
  echo "<script>alert('Password changed successfully!!!');</script>";
  session_destroy();
  sleep(2);
  echo "<script>window.location='http://localhost:8080/pm/admin.php';</script>";
  ?>

<?php else: ?>
  <link rel="stylesheet" type="text/css" href="gp1.css"/>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script type="text/javascript">

    $(function () {

        $("#submit").click(function () {

            var oldpassword=$("#oldpwd").val();
            var password = $("#newpwd").val();

            var confirmPassword = $("#newpwdvfy").val();
            if (oldpassword == password) {
alert("Old password and new password should not be same");
return false;
}
            else if (password != confirmPassword) {

                alert("Passwords do not match.");

                return false;

            }

            return true;

        });

    });

</script>
  <div class="tn" id="top-nav" >
    <ul>
      <li style="float:left;width:170px;"><a href="admin.php">PROJECT HANDLER</a></li>
      <li style="float:right;">
        <a href="logout.php">LOGOUT</a>
      </li>
        <li style="float:right;">
          <a href="#" onclick="window.location='http://localhost:8080/pm/change_pwd.php'">CHANGE PASSWORD</a>
        </li >
    </ul>
  </div>
  <div class="side-nav-container">
    <div class="sn" id="side-nav" >
      <ul>
        <li>
          <a href="stud_cgpi.php">ENTER STUDENT CGPI</a>
        </li><br />
        <li>
          <a href="grp_mgmt.php">GROUP MANAGEMENT</a>
        </li><br />
        <li>
            <a href="mng_users.php">MANAGE USERS</a>
        </li ><br />
        <li>
            <a href="map_tchr.php">MAP TEACHER</a>
        </li><br />
        <li>
            <a href="chk_proj_det.php">CHECK PROJECT DETAILS</a>
        </li><br />
      </ul>
    </div>
  </div>
<div class="main-body-container">
  <div class="main-body" id="chng_pwd_screen" style="display:block;">
    <center>
      <h2>CHANGE PASSWORD</h2>
    </center>
    <div class="placecard">
      <center>
        <form id="chng_pwd" method="post" action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>>
          OLD PASSWORD:<br /><br />
          <input type="password" name="old_pwd" id="oldpwd" placeholder="Enter old password"/><br /><br />
          NEW PASSWORD:<br /><br />
          <input type="password" name="new_pwd" id="newpwd" placeholder="Enter new password"/><br /><br />
          <input type="password" name="new_pwd_verify" id="newpwdvfy" placeholder="Re-verify new password" /><br />
          <br />
          <input type="submit" id="submit" value="CHANGE PASSWORD" />&nbsp;
        </form>
      </center>
  </div>
  </div>
</div>
<?php endif; ?>
