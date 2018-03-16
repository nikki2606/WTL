<?php
$conn = mysqli_connect('localhost','root','','main');
$sql = mysqli_query($conn,"select rollno,name,cgpi from student");
$userinfo = array();
while ($row_user = mysqli_fetch_assoc($sql))
    $userinfo[] = $row_user;
echo "{$user['rollno']} &nbsp;{$user['name']} &nbsp;{$user['cgpi']}<br />";
foreach ($userinfo as $user) {
        echo "{$user['rollno']} &nbsp;{$user['name']} &nbsp;{$user['cgpi']}<br />";
    }
 ?>
