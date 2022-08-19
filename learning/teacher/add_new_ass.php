<?php
include('../db.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>View Assignment</title>
    <style>
        body{
            background-color: #eee;
        }
        input, textarea
        {
            border:1px;
            width: 40%;
            border-radius: 5px;
            padding: 8px 15px 8px 15px;
            margin: 10px 0px 15px 0px;
            box-shadow: 0 1px 2px rgba(0,0,0,0.07), 
                        0 2px 4px rgba(0,0,0,0.07), 
                        0 4px 8px rgba(0,0,0,0.07), 
                        0 8px 16px rgba(0,0,0,0.07),
                        0 16px 32px rgba(0,0,0,0.07), 
                        0 32px 64px rgba(0,0,0,0.07);
            font-weight: bold;
        }
        label
        {
            margin-top: 3%;
            width: 100%;
        }
    </style>
    <?php 
    include('navbar_teacher.html');
    ?>
</head>
<body>
<center>
    <h1>Add Assignment</h1>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
         <label>Enter Description </label><br>
         <textarea name="description" rows="5" cols="50" placeholder="Description for Assignment....."></textarea>

        <label>Choose Assignment </label><br>
        <input type="file" name="myfile" ><br><br>
        <?php
        include('select_all.php');
        ?>
        <select class="form-control" name="subject" id="dropdown" style="width: 20%;">
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
