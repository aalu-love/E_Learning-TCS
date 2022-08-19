<?php
	$msg="";
	if(isset($_POST['upload']))
	{
		echo $_POST['subject'];
		$target="uploads/".basename($_FILES['image']['name']);

		$db=mysqli_connect("localhost","root","","tatasteel");

		$image=$_FILES['image']['name'];
		$student_name="Sanju";
		$doubt_description=$_POST['text'];
		$subject=$_POST['subject'];






		$sql="INSERT INTO doubt(student_name,subject,doubt_img,doubt_description,date) VALUES('$student_name','$subject','$image','$doubt_description',curdate())";
		mysqli_query($db,$sql);

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
	<!DOCTYPE html>
	<html>
	<head>
		<title>DOUBT</title>
		<link rel="stylesheet" type="text/css" href="doubt.css ">

	</head>
	<body>
		<div id="content">
			<a href="doubt.php" >Click Here To Ask a Doubt</a>
			<?php
				$student_name="Sanju";
				$db=mysqli_connect("localhost","root","","tatasteel");
				$sql="SELECT * FROM doubt where student_name='Sanju'";
				$result=mysqli_query($db,$sql);
				while ($row= mysqli_fetch_array($result))
				 {  $date=$row['date'];
				 	echo "<div class='forum'>";
				 	echo "<div><div class='img_div1'>";
						echo "<img src='student.png' class='student'>";
						echo "<p><b>$student_name</b></p></div><h3>$date</h3>";
					echo "</div>";
					echo "<div id='img_div'>";

						echo "<img src='uploads/".$row['doubt_img']."'>";
							echo "<hr><div id='p_div'>";
								echo "<p>".$row['doubt_description']."</p>";
							echo "</div></div><hr>";
							echo "</div>";
				}
			?>
		
	</div>
	</body>
	</html>