<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width:device-width, initial-scale=1" >
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="dashboard_t.css"/>
	<script>

    // JavaScript code 
    function myFunction() {
        let input = document.getElementById('mySearch').value
        input = input.toLowerCase();
        let x = document.getElementsByClassName('column');

        for (i = 0; i < x.length; i++) {
            if (!x[i].innerHTML.toLowerCase().includes(input)) {
                x[i].style.display = "none";
            }
            else {
                x[i].style.display = "inline-table";
            }
        }
    }

</script>
<?php
 include ('navbar_teacher.html');
 ?>

</head>
<body>
	<div class="dashboard">
		
	<div class="search_bar">
		<input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category"/>
	
	</div>

<a href="view_ass.php">
	<div class="main_container">
  <div class="column">
    <div class="card">
      <img src="../images/19.jpg" alt="Assignment" class="img"/>
      <div class="container1">
        <h2> Assignment Management</h2>
      </div>
    </div>
  </div>
</a>


<a href="../ebook/ebook.php">
  <div class="column">
    <div class="card">
      <img src="../images/16.jpg" alt="book" class="img"/>
      <div class="container1">
        <h2>Upload/View E-Books</h2>
      </div>
    </div>
  </div>
</a>

<a href="#">
  <div class="column">
    <div class="card">
      <img src="../images/17.jpg" alt="test" class="img"/>
      <div class="container1">
        <h2>Test Management</h2>
      </div>
    </div>
  </div>
</a>

<a href="../doubt_forum/teacher_doubt_forum.php">
  <div class="column">
    <div class="card">
      <img src="../images/23doubt.png" alt="Progress" class="img"/>
      <div class="container1">
        <h2>Doubt Forum</h2>
      </div>
    </div>
  </div>
	</div>
</a>
	</div>	
</body>
</html>