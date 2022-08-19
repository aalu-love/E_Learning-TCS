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
        $sql="SELECT * FROM maths";
        $res=mysqli_query($conn, $sql);

        $files=mysqli_fetch_all($res,MYSQLI_ASSOC);
    }
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
        
    </div>

   
      
        
    </body>
    </html>
    tablename1(maths)
    id   date description download
    tablename2(phy)
     id   date description download

     maths    
     phy

     teacher table




     SELECT name,maths,phy,chem,bio,gk,comp FROM teacher WHERE (maths=1 OR phy=1 or chem=1 or bio=1 or gk=1 or comp=1) AND (name='Divya')
     phy | maths
     1   |  1
     $row['maths']

     <?php
     if($row['maths']==1)
     {
        $sql="SELECT * FROM  maths";
        $res=mysqli_query($conn, $sql);
        $files=mysqli_fetch_all($res,MYSQLI_ASSOC);

        include('crete_table.php');
        
     }
          if($row['phy']==1)
     {
        $sql="SELECT * FROM  phy";
        $res=mysqli_query($conn, $sql);
        $files=mysqli_fetch_all($res,MYSQLI_ASSOC);

        include('crete_table.php');
     }
          if($row['bio']==1)
     {
       $sql="SELECT * FROM  bio";
        $res=mysqli_query($conn, $sql);
        $files=mysqli_fetch_all($res,MYSQLI_ASSOC);

        include('crete_table.php');
     }
          if($row['chem']==1)
     {
       $sql="SELECT * FROM chem";
        $res=mysqli_query($conn, $sql);
        $files=mysqli_fetch_all($res,MYSQLI_ASSOC);

        include('crete_table.php');
     }
          if($row['gk']==1)
     {
        $sql="SELECT * FROM  gk";
        $res=mysqli_query($conn, $sql);
        $files=mysqli_fetch_all($res,MYSQLI_ASSOC);

        include('crete_table.php');
     }
          if($row['comp']==1)
     {
      $sql="SELECT * FROM comp";
        $res=mysqli_query($conn, $sql);
        $files=mysqli_fetch_all($res,MYSQLI_ASSOC);

        include('crete_table.php');
     }

     ----------
     |
     |
     |

                     <?php foreach ($files as $file):?> 
                <tr>
                    <td>  <?php echo $file['id']; ?>  </td>
                    <td>  <?php echo $file['date']; ?>  </td>
                    <td>  <?php echo $file['description']; ?>  </td>
                    <td>  <?php $path=$file['path'];
                         echo "<a href='download.php?dow=$path'>Download</a>"; ?>  </td>
                </tr>
            <?php endforeach; ?>



     ?>






    
    SELECT * FROM  name = maths
    id   date description download

    



$con
.......
.....$w
..
$conn->close();

$con

.....
...
