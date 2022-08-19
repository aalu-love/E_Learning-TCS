<?php

	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "tatasteel";

	$conn = new mysqli($host,$user,$pass,$db);

	if(mysqli_connect_error())
	{
		die('Connect error('.mysqli_connect_errno().')'.mysqli_connect_error());
	}
	else
	{
		$filesql1 = "SELECT student.course FROM student WHERE student.name = 'Sarala'";
        $fileresult1=mysqli_query($conn, $filesql1);
        $row=mysqli_fetch_array($fileresult1);


        
        $g = $row['course'];

        $query = "SELECT courses.$g FROM courses";
        $fileresult2=mysqli_query($conn, $query);



       $fgh=array();
       $i=-1;

        while ($row2=mysqli_fetch_array($fileresult2))
    	{
            $i=$i+1;


    		
            array_push($fgh,$row2[$g]);


            $files=$fgh[$i];

            echo $files;
            include('student_table.php');


}

}
	$conn->close();
?>