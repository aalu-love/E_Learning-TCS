<!DOCTYPE html>
	<html>
	<head>
		<title>DOUBT</title>
		<link rel="stylesheet" type="text/css" href="doubt.css ">
		<?php
		include ('../student/navbar_student.html');
		session_start();
		?>
		<style type="text/css">
			        input, textarea
        {
            border:1px;
            width: 90%;
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
			
		<form method="post" action="doubt_forum.php" enctype="multipart/form-data">
		<?php
		$db=mysqli_connect("localhost","root","","tatasteel");
		$user = $_SESSION['user'];
		$filesql1 = "SELECT student.course FROM student WHERE student.name = '$user'";
        $fileresult1=mysqli_query($db, $filesql1);
     
		?>
		 <select class="form-control" style="width: 40%;" name="subject" id="dropdown">

		 	<?php 

		 	$row2=mysqli_fetch_array($fileresult1);
			$files = $row2['course'];

            $sql2="select $files from courses";
            $fileresult2 = mysqli_query($db,$sql2);
		 	$g=0;
            while($row3=mysqli_fetch_array($fileresult2))
            {
            	echo "<option value=".$row3[$g].">".$row3[$g]."</option>";
            }

		 	?>
		 	
        </select>
		<input type="hidden" name="size" value="1000000">
		<div>
			<input type="file" name="image">
		</div>	
		<div>
			<textarea name="text" cols="40" rows="4" placeholder="Description about the Doubt....."></textarea>
		</div>
		<div>
			<input type="submit" name="upload" value="Upload Doubt">
		</div>
		</form>
</div>
	</body>
	</html>