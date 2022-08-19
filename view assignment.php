<?php

include("inc/db.php");
if (isset($POST['upload']))
 {
	 $description = $_POST['description'];
	 $doc_name=$POST['doc_name'];
	 $name=$_FILES['myfile']['tmp_name'];
	 $tmp_name=$_FILES['myfile']['tmp_name'];
	 if ($name) 
	 {
	 	$location="uploads/$name";
	 	move_uploaded_file($tmp_name, $location);
	 	$query=msql_query("INSERT INTO assign(description,name,path)VALUES($description,'$doc_name','$location')");
	 	header('Location:index.php');

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
	<form action="view_assignment.php" method="POST" enctype="multipart/form-data">
		
		<label>Enter Description</label>
		<input type="text" name="description" placeholder="Enter Description.."><br>

		<label>Choose Assignment </label>
		
		<input type="file" name="myfile" >

		<input type="submit" name="upload " value="Upload Assignment">

	</form>
</center>
</body>
</html>




