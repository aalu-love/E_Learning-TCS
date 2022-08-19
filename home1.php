<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
	<style>
		body,html
		{
			height: 100%;
			margin: 0;
			background-image:  url("03.jpg");
 background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;

		}
		.home-image
		{
			
			height: 70%;
 
		}
		.home-text{
			font-family: "Sofia";
			text-align: center;
			position:absolute;
			top: 30%;
			left: 50%;
			transform: translate(-50%,-50%);
			color:black;

		}
		.home-text h2
		{
			font-family: "Sofia";
			font-size:40px;
		}
		.container1{
			background-color:white;
			opacity: 0.5;
			width: 100%;

		}
		.container_
		{
			width: 100%;
			height: 28%;
			
		



		}
		.container_ li
		{ background-color:white;
			display: inline-block;
			width: 21%;
			
			padding: 1%;
			border-radius: 5px;
			height: 80%;
			text-align: center;
			opacity: 0.6;
			border: 3px solid #008080;
			border-radius: 35px;



			



		}
		.container_ ul
		{
			color: black;
			margin: 0px;
			height: 100%;

 font-family: Impact, Charcoal, sans-serif;
 font-size:20px; 

		}
		.container_ img
		{ 
			position: center;
			top: 0%;
			height: 120px;
			width: 120px;


border-radius: 50%;
opacity: 100%;
box-shadow: 0px 0px 5px #fff;


	}
		

	</style>
<?php
 include ('navbar_home.html');
 ?>
</head>
<body>
<div class="home-image">
<div class="home-text container1">
	<h1  style="font-size:50px">Learning Online becomes easier</h1>
<h2>Not everyone fits into the traditional school model, and the online program provides another way for us to meet the diverse and often unique needs of students</h1>

</div>
</div>
<div class="container_">
	<ul>
		<li >
			<img src="11.png">
			
			<p>Learn with our experts</p>

		</li>

		<li>
			<img src="13.png">
			<p>Learn anywhere from the World</p>
		</li>
			<li>
				<img src="14.jpg">
				<p>Get E-Learning Materials</p>
			</li>
				<li>
					<img src="08.png">
					<p>Answer quizes online</p>
				</li>

	</ul>
</div>
 <div style="display:none;" id="register" class="popup">
              <form name="myForm" action="register.php" method="POST" onsubmit="return validateForm()">
                  <table>
                    <tr>
                      <td>Name:</td>
                      <td><input type="text" id="usrname" name="username"></td>
                    </tr>
                    <tr>
                      <td>Course:</td>
                      <td><select id="course" name="courses">
                        <option selected="" value="">Select an option</option>
                        <option value="JEE">JEE</option>
                        <option value="NIMCET">NIMCET</option>
                        <option value="NEET">NEET</option>
                      </select></tr>
                    <tr>
                      <td>Phone:</td>
                      <td><input type="number" id="phone" name="phoneno"></td>
                    </tr>
                    <tr>
                      <td>Email:</td>
                      <td><input type="text" id="mail" name="email"></td>
                    </tr>
                    <tr>
                      <td>Password:</td>
                      <td><input type="password" id="password" name="pass"></td>
                    </tr>
                      <tr>
                      <td>Confirm Password:</td>
                      <td><input type="password" id="con_password"></td>
                    </tr>
                  </table>
                  <button type="submit" name="Submit">Submit</button>
              </form>
      </div>



       



	<?php
		if($_SESSION["user"] !=null )
		{	
				echo "<h3>".$_SESSION["user"]."</h3>";
		}

		else
		{

			echo "<h3>Hello User</h3>";		
		}

	?>
</body>
</html>

