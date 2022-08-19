<?php

include('db.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{

$email=$_POST['email'];
$password=$_POST['pass'];

       $sql = "SELECT * FROM student WHERE email=$email AND password=$password ";
                $res=mysqli_query($conn, $sql);
                  $files=mysqli_fetch_array($res);
                $_SESSION["user"] = $files['name'];

               if (isset($res))
                {
                    echo '<script type="text/javascript">{window.location.href = "home.php"; }</script>';
                    
                } else
                {
                    echo '<script type="text/javascript">alert("Something Went Wrong!")</script>';
                }
  }

  else{
  	echo '<script type="text/javascript">alert("Invalid Request Method!")</script>';
  }
?>