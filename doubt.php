<!DOCTYPE html>
	<html>
	<head>
		<title>DOUBT</title>
		<link rel="stylesheet" type="text/css" href="doubt.css ">

		 
	</head>
	<body>
		<div id="content">
			
		<form method="post" action="doubt_forum.php" enctype="multipart/form-data">
		<?php 
		$db=mysqli_connect("localhost","root","","tatasteel");
			$filesql1 = "SELECT student.course FROM student WHERE student.name = 'Sanju'";
        $fileresult1=mysqli_query($db, $filesql1);
     
		?>
		 <select name="subject" id="dropdown">

		 	<?php 

		 	$row2=mysqli_fetch_array($fileresult1);
			$files = $row2['course'];

            //echo $files;

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
			<textarea name="text" cols="40" rows="4" placeholder="Description about the Doubt"></textarea>
		</div>
		<div>
			<input type="submit" name="upload" value="Upload Doubt">
		</div>
		</form>
</div>
	</body>
	</html>