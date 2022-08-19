<?php
include('../db.php');
session_start();
    if(isset($_POST['upload']))
    {

        $usrfolder= substr(md5(time()),0,15);
        $target="uploads/".$usrfolder.basename($_FILES['image']['name']);

        $image=$_FILES['image']['name'];
       
        $solution_description=$_POST['text'];
        $user = $_SESSION['user'];


        $sql="UPDATE doubt SET solution_description ='$solution_description', solution_img='$image' WHERE student_name='$user'";
        mysqli_query($conn,$sql);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target))
         {
            $msg="Image uploaded successfully";
  
         }
         else
         {
            $msg="There was a problem uploading image";

         }

    }
?>

