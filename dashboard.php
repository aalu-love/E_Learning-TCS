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
			float: left;

		}
		.dashboard{
			margin: 5px 3px 0px 3px;

		}
		.column{
			 background-image: linear-gradient(to right,#2dd2d2,#ccffff);
			border-radius: 10%;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			background-color:#d0f0fb;
			display: inline-block;
			text-align: center;
			height: 350px;
			width: 350px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
			margin-right: 5px;
			}
		.card
		{ 
			width: 90%;
			height: 90%;

		}
		.card img
		{  border-radius: 25%;
			width: 180px;
    		height: 180px;
    		margin: 8px;

		}
		.container{
			padding: 0px 2px;


		}
		#mySearch {
  width: 50%;
  font-size: 18px;
  padding: 11px;
  border: 1px solid #ddd;
  margin-bottom:10px;  
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
</head>
<body>
	<div class="dashboard">
		
	<div class="search_bar">
		<input style="float: left;" type="text" id="mySearch" onkeyup="myFunction()" placeholder="Find a Service by Name(for Example:  Travel, Canteen )" title="Type in a category"/><a href="#" style="font-size:38px; color: black ;background-color:white"><i class="fa fa-search"></i></a>	
	</div>


	<div class="main_container">
  <div class="column">
    <div class="card">
      <img src="19.jpg" alt="Assignment" class="img"/>
      <div class="container">
        <h2>View Assignment</h2>
      </div>
    </div>
  </div>


  <div class="column">
    <div class="card">
      <img src="16.jpg" alt="book" class="img"/>
      <div class="container">
        <h2>View E Books</h2>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="17.jpg" alt="test" class="img"/>
      <div class="container">
        <h2>View Test</h2>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="18.jpg" alt="Progress" class="img"/>
      <div class="container">
        <h2>My Progress</h2>
      </div>
    </div>
  </div>
	</div>

	</div>	
</body>
</html>