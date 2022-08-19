<!DOCTYPE html>
<html>
<head>
    <title></title>
<link rel="stylesheet" type="text/css" href="doubt.css">
</head>
<body>
    <div id="content">
        <a href="teacher_doubt.php"></a>
<?php
include('db.php');

    if(mysqli_connect_error())
    {
        die('Connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }
    else
    {
    	$sql = "SELECT name,maths,phy,chem,bio,gk,comp FROM teacher WHERE (maths=1 OR phy=1 or chem=1 or bio=1 or gk=1 or comp=1) AND (name='Divya')";
    }
    $res=mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($res);

    if($row['maths'] == 1)
    {
        $sql2 = "SELECT * from doubt WHERE subject = 'maths' ";
            $res2=mysqli_query($conn, $sql2);


            while($row2=mysqli_fetch_array($res2))
            {
                $student_name=$row2['student_name'];
                $date=$row2['date'];
                   echo "<div class='forum'>";
                    echo "<div><div class='img_div1'>";
                        echo "<img src='student.png' class='student'>";
                        echo "<p><b>$student_name</b></p></div><h3>$date</h3>";
                    echo "</div>";
                    echo "<div id='img_div'>";

                        echo "<img src='uploads/".$row2['doubt_img']."'>";
                            echo "<hr><div id='p_div'>";
                                echo "<p>".$row2['doubt_description']."</p>";
                            echo "</div></div><hr>";
                            echo "</div>";
            }
    }
?>

</div>
</body>
</html>
