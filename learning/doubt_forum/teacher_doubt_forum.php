<?php
include('../db.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
<link rel="stylesheet" type="text/css" href="doubt.css">
    <?php 
    include('../teacher/navbar_teacher.html');
    ?>
    <link rel="stylesheet" type="text/css" href="../css/style.css"/>
</head>
<body>
    <div id="content">
        <a href="teacher_doubt.php">Answer To Doubts</a>
    <?php
    $user=$_SESSION['user'];

    if(mysqli_connect_error())
    {
        die('Connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }
    else
    {
    	$sql = "SELECT name,maths,phy,chem,bio,gk,comp FROM teacher WHERE (maths=1 OR phy=1 or chem=1 or bio=1 or gk=1 or comp=1) AND (name='$user')";
    }
    $res=mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($res);

    if($row['maths'] == 1)
    {
        $sql2 = "SELECT * from doubt WHERE subject = 'maths' AND solution_img IS NOT NULL ";
            $res2=mysqli_query($conn, $sql2);
      
            $_SESSION['sub1'] = 'maths';


           include('view_teacher_forum.php');
    }
     if($row['phy'] == 1)
    {
        $sql2 = "SELECT * from doubt WHERE subject = 'phy' AND solution_img IS NOT NULL ";
            $res2=mysqli_query($conn, $sql2);

            $_SESSION['sub2'] = 'phy';

           include('view_teacher_forum.php');
    }
     if($row['chem'] == 1)
    {
        $sql2 = "SELECT * from doubt WHERE subject = 'chem' AND solution_img IS NOT NULL ";
            $res2=mysqli_query($conn, $sql2);

            $_SESSION['sub1'] = 'chem';

           include('view_teacher_forum.php');
    }
     if($row['bio'] == 1)
    {
        $sql2 = "SELECT * from doubt WHERE subject = 'bio' AND solution_img IS NOT NULL ";
            $res2=mysqli_query($conn, $sql2);

            $_SESSION['sub2'] = 'bio';

           include('view_teacher_forum.php');
    }
     if($row['gk'] == 1)
    {
        $sql2 = "SELECT * from doubt WHERE subject = 'gk' AND solution_img IS NOT NULL ";
            $res2=mysqli_query($conn, $sql2);

             $_SESSION['sub1'] = 'gk';

           include('view_teacher_forum.php');
    }
     if($row['comp'] == 1)
    {
        $sql2 = "SELECT * from doubt WHERE subject = 'comp' AND solution_img IS NOT NULL ";
            $res2=mysqli_query($conn, $sql2);

             $_SESSION['sub2'] = 'comp';

           include('view_teacher_forum.php');
    }
?>

</div>
</body>
</html>
