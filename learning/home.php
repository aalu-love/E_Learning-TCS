<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
	<link rel="stylesheet" type="text/css" href="css/home.css"/>
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
			<img src="images/11.png">
			
			<p>Learn with our experts</p>

		</li>

		<li>
			<img src="images/13.png">
			<p>Learn anywhere from the World</p>
		</li>
			<li>
				<img src="images/14.jpg">
				<p>Get E-Learning Materials</p>
			</li>
				<li>
					<img src="images/08.png">
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

