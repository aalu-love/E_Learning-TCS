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
	<form action="assignment.php" method="POST" enctype="multipart/form-data">
		
		<label>Enter Description</label>
		<input type="text" name="description" placeholder="Enter Description.."><br>

		<label>Choose Assignment </label>
		<input type="hidden" name="MAX_FILE_SIZE" value="9999999">
		<input type="file" name="assignment" id="assignment">

		<input type="submit" name="upload " value="Upload Assignment">

	</form>
</center>
</body>
</html>




