<?php

include('db.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
$username=$_POST['username'];
$course=$_POST['courses'];
$phone=$_POST['phoneno'];
$email=$_POST['email'];
$password=$_POST['pass'];

       $sql = "INSERT INTO student (name,course,phone,email,password) VALUES('$username','$course','$phone','$email','$password')";
                $res=mysqli_query($conn, $sql);
               if (isset($res))
                {
                    echo '<script type="text/javascript">if(confirm("Successfully Registered")){window.location.href = "home.php"; }</script>';
                    
                } else
                {
                    echo '<script type="text/javascript">alert("Something Went Wrong!")</script>';
                }
  }

  else{
  	echo '<script type="text/javascript">alert("Invalid Request Method!")</script>';
  }
?>