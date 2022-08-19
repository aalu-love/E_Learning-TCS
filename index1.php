<?php
include('db.php');
$sql="SELECT * FROM assign";

$res=mysql_query($sql);
?> 
<!DOCTYPE html>
<html>
<head>
	<title>Documents</title>
</head>
<body>

<a href="view_assignment.php">Add New Document</a><br><br>
<?php
while ($row=mysqli_fetch_array($res)) {
	$id=$row['id'];
	$name=$row['name'];
	$path=$row['path'];

	echo $id."".$name."<a href='download.php?dow=$path'>download</a><br>";
}
?>
</body>
</html>