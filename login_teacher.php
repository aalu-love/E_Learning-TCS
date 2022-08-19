<?php

include('db.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{

$email=$_POST['email'];
$password=$_POST['pass'];

       $sql = "SELECT * student ";
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