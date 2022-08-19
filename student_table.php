<table>
            <thead>
                <th>ID</th>
                <th>DATE</th>
                <th>DESCRIPTION</th>
                <th>DOWNLOAD</th>
            </thead>
            <tbody>
                <?php
                $sql2="SELECT * FROM $files";
                $res2=mysqli_query($conn,$sql2);

                $files2=mysqli_fetch_all($res2,MYSQLI_ASSOC);
                
                foreach ($files2 as $file):?> 
                <tr>
                    <td>  <?php echo $file['id']; ?>  </td>
                    <td>  <?php echo $file['date']; ?>  </td>
                    <td>  <?php echo $file['description']; ?>  </td>
                    <td>  <?php $path=$file['path']; echo "<a href='download.php?dow=$path'>Download</a>"; ?>  </td>
                </tr>
            <?php endforeach; ?>
            

            </tbody>
        </table>