<?php
  session_start();
  if(empty($_SESSION['login_user']))
  {
    echo "<script>alert('Access Denied. Please Login to continue...');window.location='http://localhost:8080/pm/login.html';</script>";
  }
  $conn=mysqli_connect('localhost','root','','main');
 ?>
<html>
<head>
<title>ADMIN PORTAL</title>
</head>
<body>
  <script src="admin_scripts.js" ></script>
  <link rel="stylesheet" type="text/css" href="gp1.css"/>
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
    <div id="init_screen" class="main-body">
      <h2><center>WELCOME TO ADMIN PORTAL</center></h2>
      <p>
        <?php
            echo "Hello ".$_SESSION['login_user'];
         ?>
      </p>
    </div>
  </div>
</body>
</html>
