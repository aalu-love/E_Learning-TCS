
<!DOCTYPE html>
<html>
<head>
	<title>Clear Doubt</title>
		<link rel="stylesheet" type="text/css" href="doubt.css ">
    <?php 
    include('../teacher/navbar_teacher.html');
    ?>
    <link rel="stylesheet" type="text/css" href="../css/style.css"/>
    <style type="text/css">
    	        input, textarea
        {
            border:1px;
            width: 70%;
            border-radius: 5px;
            padding: 8px 15px 8px 15px;
            margin: 10px 0px 15px 0px;
            box-shadow: 0 1px 2px rgba(0,0,0,0.07), 
                        0 2px 4px rgba(0,0,0,0.07), 
                        0 4px 8px rgba(0,0,0,0.07), 
                        0 8px 16px rgba(0,0,0,0.07),
                        0 16px 32px rgba(0,0,0,0.07), 
                        0 32px 64px rgba(0,0,0,0.07);
            font-weight: bold;
        }
        label
        {
            margin-top: 3%;
            width: 100%;
        }
    </style>
</head>
<body>

<div id="content">
	<?php 
	include('../db.php');
	session_start();

	$sub1 = $_SESSION['sub1'];
	$sub2 = $_SESSION['sub2'];

		$query="SELECT * from doubt WHERE solution_img is null AND (subject = '$sub1' or subject = '$sub2') ";
		$run = mysqli_query($conn,$query);
		$num = mysqli_num_rows($run);
		if($num > 0)
		{
			while($row2=mysqli_fetch_array($run))
            {


            	$_SESSION['user']=$row2['student_name'];
            	$user = $_SESSION['user'];

                $date=$row2['date'];
                echo "<div class='forum'>";
                echo "<div><div class='img_div1'>";
                echo "<img src='student.png' class='student'>";
                echo "<p><b>$user</b></p></div><h3>$date</h3>";
                echo "</div>";
                echo "<div id='img_div'>";
                echo "<img src='uploads/".$row2['doubt_img']."'>";
                echo "<hr><div id='p_div'>";
                echo "<p>".$row2['doubt_description']."</p>";
                echo "</div></div>";
                echo "</div>";
            	echo '<form method="post" action="doubt_upload.php" enctype="multipart/form-data">
						<input type="hidden" name="size" value="1000000">
						<div>
						<input type="file" name="image">
						</div>	
						<div>
						<textarea name="text" cols="50" rows="5" placeholder="Description about the Doubt..."></textarea>
						</div>
						<div>
						<input type="submit" name="upload" value="Upload Answer">
						</div>
						</form>';
            }
		}
		else
		{
			echo "No Doubt is avaliable.";
		}
	?>	
</div>
</body>
</html>