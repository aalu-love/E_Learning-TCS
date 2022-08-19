 <?php
 while($row2=mysqli_fetch_array($res2))
            {
                $student_name=$row2['student_name'];
                $date=$row2['date'];
                $subject=$row2['subject'];

                   echo "<div class='forum'>";
                    echo "<div><div class='img_div1'>";
                        echo "<img src='student.png' class='student'>";
                        echo "<p><b>$student_name</b></p></div><h3>$date</h3><h3>$subject</h3>";
                    echo "</div>";
                    echo "<div id='img_div'>";

                        echo "<img src='uploads/".$row2['doubt_img']."'>";
                            echo "<hr><div id='p_div'>";
                                echo "<p>".$row2['doubt_description']."</p>";
                            echo "</div></div>";


                             echo "<div><div class='img_div1'>";
                        echo "<img src='teacher.jpg' class='student'>";
                        echo "<p><b>Divya</b></p></div><h3>$date</h3><h3>$subject</h3>";
                    echo "</div>";
                    echo "<div id='img_div'>";

                        echo "<img src='uploads/".$row2['solution_img']."'>";
                            echo "<hr><div id='p_div'>";
                                echo "<p>".$row2['solution_description']."</p>";
                            echo "</div></div><hr>";

                            echo "</div><hr>";
            }
?>