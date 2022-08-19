<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width:device-width, initial-scale=1" >
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
	<title>Dashboard</title>
	<style type="text/css">
		body{
			background-image: url("22.jpg");
			background-repeat: no-repeat;
		 background-size: 100%;			
			
			
		}
		.main_container{
			margin:10px 5px;
			height: 95%;
			width: auto;
			padding-right: 5%;
    padding-left: 5%;
			
		}
		
		.column{
			 background-image: linear-gradient(to right,#2dd2d2,#ccffff);
			border-radius: 10%;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			background-color:#d0f0fb;
			display: inline-block;
			text-align: center;
			height: 400px;
			width: 350px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
			margin-right: 20px;
			margin-top: 30px;
			float: left;
			}
		.card
		{  
			margin: auto;
			width: 90%;
			height: 90%;

		}
		.card img
		{  border-radius: 25%;
			width: 150px;
    		height: 150px;
    		margin: 25px;

		}
		.container1{
			padding: 20px 2px;


		}
		#mySearch {
  width: 40%;
  font-size: 18px;
  margin: 10px 10px;
  float: right;
  padding: 11px;
  border: 1px solid #ddd;
  margin-bottom:10px;  
  margin-left: 50%;
}
		.search_bar
		{
			width: 90%;
			margin: 10px;
		}
		.column:hover
		{
			background-image: linear-gradient(to right,#42f3f3,#ccffff);
		}
		.column:active
		{
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.09);
			transform: translateY(2px);
		}


	</style>

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


	<div class="main_container">
  <div class="column">
    <div class="card">
      <img src="19.jpg" alt="Assignment" class="img"/>
      <div class="container1">
        <h2> Assignment Management</h2>
      </div>
    </div>
  </div>


  <div class="column">
    <div class="card">
      <img src="16.jpg" alt="book" class="img"/>
      <div class="container1">
        <h2>Upload/View E Books</h2>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="17.jpg" alt="test" class="img"/>
      <div class="container1">
        <h2>Test Management</h2>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="23.png" alt="Progress" class="img"/>
      <div class="container1">
        <h2>View Students Reports</h2>
      </div>
    </div>
  </div>
	</div>

	</div>	
</body>
</html>