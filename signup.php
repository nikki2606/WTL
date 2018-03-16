<?php
if(isset($_POST['submit']))
{ $Roll=$_POST['roll_no'];
  $Name=$_POST['name'];
	$connect=mysqli_connect('localhost','root','','main');
	if(mysqli_connect_errno($connect))
	{
			echo 'Failed to connect';
	}

$check=mysqli_query($connect,"SELECT * FROM student WHERE rollno = '$Roll'");
$checkrows=mysqli_num_rows($check);
if($checkrows>0)
{
     $check1=mysqli_query($connect,"SELECT name FROM student WHERE name =''");
     $checkrows1=mysqli_num_rows($check1);
     if($checkrows1>0)
     {       $query=mysqli_query($connect,"UPDATE  student SET name='$Name' where rollno='$Roll'");
            echo "<script>alert('You have successfully registered with us');window.location='http://localhost:8080/pm/login.html';</script>";
     }
     else
    {

	   echo '<script type="text/javascript">alert("Following ROLL NO is arleady registered");</script>';
	   echo "<script>setTimeout(\"location.href='http://localhost:8080/pm/login.html';\",0);</script>";
     }
}
else {
	mysqli_query($connect,"INSERT INTO student(rollno,name) VALUES('$Roll','$Name')");
	if(mysqli_affected_rows($connect)>0)
	{


	   echo '<script type="text/javascript">alert("YOUR SUCCESSFULLY REGISTERED");</script>';
	sleep(2);
  echo "<script>setTimeout(\"location.href='http://localhost:8080/pm/home.html';\",0);</script>";

	}
	else {
	echo "CONNECTION ERROR <br />";
	echo mysqli_error ($connect);
}
	}


	exit;

}



 ?>
