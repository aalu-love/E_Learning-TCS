<?php

    $doc = '';
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "tatasteel";
    $conn = new mysqli($host,$user,$pass,$db);

    if(mysqli_connect_error())
    {
        die('Connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }
    else
    {
       
        $document = $_FILES['myfile']['tmp_name'];
        $doc = file_get_contents($document);
        $folder_path = 'uploads/';

        //$usr=$_SESSION["usr"];
        
         $usrfolder= substr(md5(time()),0,15);
        $filename = basename($_FILES['myfile']['name']);
        $newname = $folder_path . $usrfolder."_".$filename; //uploads/divya/assignment1
        $FileType = pathinfo($newname,PATHINFO_EXTENSION); //file extension .pdf
        $description =$_POST['description'];
        $val = $_POST['subject'];

        echo $val;

        if($FileType == "pdf")
        {
            if (move_uploaded_file($_FILES['myfile']['tmp_name'], $newname))
            {



                $filesql = "INSERT INTO ebook (description,download,esubject) VALUES('$description','$newname','$val')";
                $fileresult=mysqli_query($conn, $filesql);
                if (isset($fileresult))
                {
                    echo '<script type="text/javascript">if(confirm("File Uploaded")){window.location.href = "ebook.php"; }</script>';
                    
                } else
                {
                    echo '<script type="text/javascript">alert("Something Went Wrong!")</script>';
                }
            }
            else
            {
                echo "<p>Upload Failed.</p>";
            }
        }
        else
        {
            echo "<p>Class notes must be uploaded in PDF format.</p>";
        }
    }
?>
