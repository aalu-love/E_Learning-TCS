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
 $query= " SELECT name,maths,phy,chem,bio,gk,comp FROM teacher WHERE (maths=1 OR phy=1 or chem=1 or bio=1 or gk=1 or comp=1) AND (name='Divya')";
  $rest=mysqli_query($conn, $query);
 $row=mysqli_fetch_array($rest);
    ?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>
            Documents
        </title>
    </head>
    <body>
    <div>
            <?php
              echo"<a href='ass.php'>Add New Assignment</a><br>";
             ?>
    </div>
    <div>
        <?php

     if($row['maths']==1)
     {
        echo "<h3>MATHS</h3>";
        $sql="SELECT * FROM  maths";
        $res=mysqli_query($conn, $sql);
        $files=mysqli_fetch_all($res,MYSQLI_ASSOC);

        include('create_table.php');

echo"sarala";
$filesql1 = "SELECT * FROM ebook WHERE ebook.esubject = 'maths'";
        $fileresult1=mysqli_query($conn, $filesql1);
        $row=mysqli_fetch_array($fileresult1);

include('create_table.php');
echo"sarala";



        
     }
          if($row['phy']==1)
     {
        echo "<h3>Physics</h3>";
        $sql="SELECT * FROM  phy";
        $res=mysqli_query($conn, $sql);
        $files=mysqli_fetch_all($res,MYSQLI_ASSOC);

        include('create_table.php');
     }
          if($row['bio']==1)
     {
       $sql="SELECT * FROM  bio";
        $res=mysqli_query($conn, $sql);
        $files=mysqli_fetch_all($res,MYSQLI_ASSOC);

        include('create_table.php');
     }
          if($row['chem']==1)
     {
       $sql="SELECT * FROM chem";
        $res=mysqli_query($conn, $sql);
        $files=mysqli_fetch_all($res,MYSQLI_ASSOC);

        include('create_table.php');
     }
          if($row['gk']==1)
     {
        $sql="SELECT * FROM  gk";
        $res=mysqli_query($conn, $sql);
        $files=mysqli_fetch_all($res,MYSQLI_ASSOC);

        include('create_table.php');
     }
          if($row['comp']==1)
     {
      $sql="SELECT * FROM comp";
        $res=mysqli_query($conn, $sql);
        $files=mysqli_fetch_all($res,MYSQLI_ASSOC);

        include('create_table.php');
     }
?>
    </div>

   
      
        
    </body>
    </html>