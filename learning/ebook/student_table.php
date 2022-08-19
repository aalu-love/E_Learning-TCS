<table>
            <thead>
                <th>ID</th>
                <th>ESubjects</th>
                <th>DESCRIPTION</th>
                <th>DOWNLOAD</th>
            </thead>
            <tbody>
                <?php
                $sql2="SELECT * FROM ebook WHERE esubject='$files'"; //phy chem bio $files
                $res2=mysqli_query($conn,$sql2);

                $files2=mysqli_fetch_all($res2,MYSQLI_ASSOC);
                
                foreach ($files2 as $file):?> 
                <tr>
                    <td>  <?php echo $file['id']; ?>  </td>
                    <td>  <?php echo $file['esubject']; ?>  </td>
                    <td>  <?php echo $file['description']; ?>  </td>
                    <td>  <?php $path=$file['download']; echo "<a href='download.php?dow=$path'>Download</a>"; ?>  </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>