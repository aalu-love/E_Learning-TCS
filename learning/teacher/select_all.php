 <?php
 $user = $_SESSION["user"];
 $query= "SELECT name,maths,phy,chem,bio,gk,comp FROM teacher WHERE (maths=1 OR phy=1 or chem=1 or bio=1 or gk=1 or comp=1) AND (name='$user')";
 $res=mysqli_query($conn, $query);
 ?>