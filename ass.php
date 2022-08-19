<!DOCTYPE html>
<html>
<head>
    <title>View Assignment</title>
    <style>
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
    <form action="upload.php" method="POST" enctype="multipart/form-data">
         <label>Enter Description </label><br>
         <input type="text" name="description"><br>

        <label>Choose Assignment </label><br>
        <input type="file" name="myfile" ><br><br>
        <?php
        include('dropdown.php');
        ?>
        <select name="subject" id="dropdown">
            
        </select>
        <br>
        <input type="submit" name="upload " value="Upload Assignment">
    </form>

</center>
        <script type="text/javascript">
        var x = document.getElementById('dropdown');
        <?php $row=mysqli_fetch_array($res); ?>

        var maths = "<?php echo $row['maths'] ?>";
        var phy = "<?php echo $row['phy'] ?>";
        var chem = "<?php echo $row['chem'] ?>";
        var bio = "<?php echo $row['bio'] ?>";
        var gk = "<?php echo $row['gk'] ?>";
        var comp = "<?php echo $row['comp'] ?>";

        if(maths == 1)
        {
        var option = document.createElement('option');
        option.value = "maths";
        option.innerHTML = "Maths";
        x.appendChild(option);
        }
        if(phy == 1)
        {
        var option = document.createElement('option');
        option.value = "phy";
        option.innerHTML = "PHY";
        x.appendChild(option);
        }
        if(chem == 1)
        {
        var option = document.createElement("option");
        option.value = "chem";
        option.innerHTML = "CHEMISTRY";
        x.appendChild(option);
        }
        if(bio == 1)
        {
        var option = document.createElement("option");
        option.value = "bio";
        option.innerHTML = "BIOLOGY";
        x.appendChild(option);
        }
        if(gk == 1)
        {
        var option = document.createElement("option");
        option.value = "gk";
        option.innerHTML = "GK";
        x.appendChild(option);
        }
        if(comp == 1)
        {
        var option = document.createElement("option");
        option.value = "comp";
        option.innerHTML = "COMPUTER";
        x.appendChild(option);
        }

    </script>
</body>
</html>
