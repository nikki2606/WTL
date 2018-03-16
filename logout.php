<?php
  session_start();
  session_destroy();
  echo "<script>alert('Logged Out Successfully!!!');window.location='http://localhost:8080/pm/login.html';</script>";
  ?>
