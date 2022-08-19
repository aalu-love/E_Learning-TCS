<?php
include('db.php');
echo "Connected successfully";

if (isset($_POST['submit']))
 {
	 $doc_name=$_POST['doc_name'];

	 $name=$_FILES['myfile']['name'];
	 $tmp_name=$_FILES['myfile']['tmp_name'];
	 if ($name)  
	 {
	 	$location="uploads/$name";
	 	move_uploaded_file($tmp_name, $location);
	 	$query=mysql_query("INSERT INTO assign(name,path,description)VALUES('$doc_name','$location','$description')");
	 	header('location:view_assignment.php');
	 	
	 }
	 else{
	 	die("Please Select A File");
	 	 }


}


?>
<!DOCTYPE html>
<html>
<head>
	<title>View Assignment</title>
	<style >
		body{
			background-color: #eee;

		}
		input
		{
			width: 50%;
			height: 5%;
			border:1px;
			border-radius: 5px;
			padding: 8px 15px 8px 15px;
			margin: 10px 0px 15px 0px;
			box-shadow: 1px 1px 2px 1px;
			font-weight: bold;


		}
	</style>
</head>
<body>
<center>
	<h1>Add Assignment</h1>
	<form action="view_assignment.php" method="POST" enctype="multipart/data-form">
		
		<label>Enter Description</label>
		<input type="text" name="doc_name" placeholder="Enter Description.."><br>

		<label>Choose Assignment </label>
		
		<input type="file" name="myfile" >

		<input type="submit" name="submit " value="Upload ">

	</form>
</center>
</body>
</html>



