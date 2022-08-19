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
    	if(isset($_GET['dow']))
    	{

    		$path=$_GET['dow'];
    		   $filesql = "SELECT * FROM document WHERE path='$path'";
                $res=mysqli_query($conn, $filesql);
                header('Contect-Type:application/octet-stream');
                header('Content-Disposition: attachment;filename="'.basename($path).'"');
                header('Content-Length:'.filesize($path));
                readfile($path);


    		
    	}
    }

?>