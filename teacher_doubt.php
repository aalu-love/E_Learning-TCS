<!DOCTYPE html>
<html>
<head>
	<title>Clear Doubt</title>
</head>
<body>
<form>
<div id="content">
			
		<form method="post" action="doubt_forum.php" enctype="multipart/form-data">
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