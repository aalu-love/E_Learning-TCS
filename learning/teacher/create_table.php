<table>
            <thead>
                <th>ID</th>
                <th>DATE</th>
                <th>DESCRIPTION</th>
                <th>DOWNLOAD</th>
            </thead>
            <tbody>
                <?php
                foreach ($files as $file):?> 
                <tr>
                    <td>  <?php echo $file['id']; ?>  </td>
                    <td>  <?php echo $file['date']; ?>  </td>
                    <td>  <?php echo $file['description']; ?>  </td>
                    <td>  <?php $path=$file['path']; echo "<a href='download.php?dow=$path'>Download</a>"; ?>  </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>