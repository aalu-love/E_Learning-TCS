<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h2>Register</h2>
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
</body>
</html>