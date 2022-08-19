<?php
include('db.php');
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{

$email=$_POST['email_t'];
$password=$_POST['pass_t'];

       $sql = "SELECT * FROM teacher WHERE (email='$email' or name='$email') AND password='$password'";
                $res=@mysqli_query($conn, $sql);
                 $num = @mysqli_num_rows($res);
                if($num > 0)
                {
                    $files=mysqli_fetch_array($res,MYSQLI_ASSOC);
                    $s=$files['name'];
                    $_SESSION['user'] = $s;
                    echo '<script type="text/javascript">{window.location.href = "teacher/teacher_dashboard.php"; }</script>';
                }
                else
                {
                    echo '<script type="text/javascript">if(confirm("Login Failed")){window.location.href = "home.php"; }else{window.location.href = "home.php";}</script>';
                    die();
                }
  }
  else{
    echo '<script type="text/javascript">if(confirm("Invalid Request Method!")){window.location.href = "home.php"; }else{window.location.href = "home.php";}</script>';
  }
?>