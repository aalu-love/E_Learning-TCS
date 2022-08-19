<?php

include('../db.php');       
        $document = $_FILES['myfile']['tmp_name'];
        $doc = file_get_contents($document);
        $folder_path = 'uploads/';

        //$usr=$_SESSION["usr"];
        
        $usrfolder= substr(md5(time()),0,15);
        $filename = basename($_FILES['myfile']['name']);
        $newname = $folder_path . $usrfolder."_".$filename; //uploads/divya/assignment1
        $FileType = pathinfo($newname,PATHINFO_EXTENSION);
        $description =$_POST['description'];
        $val = $_POST['subject'];

        echo $val;

        if($FileType == "pdf")
        {
            if (move_uploaded_file($_FILES['myfile']['tmp_name'], $newname))
            {



                $filesql = "INSERT INTO $val (description,path,date) VALUES('$description','$newname',CURDATE())";
                $fileresult=mysqli_query($conn, $filesql);
                if (isset($fileresult))
                {
                    echo '<script type="text/javascript">if(confirm("File Uploaded")){window.location.href = "view_ass.php"; }else{window.location.href = "teacher_dashboard.php";}</script>';
                    
                } else
                {
                    echo '<script type="text/javascript">if(confirm("Something Went Wrong!")){window.location.href = "add_new_ass.php"; }else{window.location.href = "add_new_ass.php";}</script>';
                }
            }
            else
            {
                echo '<script type="text/javascript">if(confirm("Upload Failed!")){window.location.href = "add_new_ass.php"; }else{window.location.href = "add_new_ass.php";}</script>';
            }
        }
        else
        {
            echo '<script type="text/javascript">if(confirm("File must be uploaded in PDF format.")){window.location.href = "add_new_ass.php"; }else{window.location.href = "add_new_ass.php";}</script>';
        }
?>
