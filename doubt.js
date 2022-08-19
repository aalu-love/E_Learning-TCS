<?php
<script>
        var x = document.getElementById('dropdown');

          var s = "<?php echo $files ?>"; //phy maths

        

        if(s != null)
        {
        var option = document.createElement('option');
        option.value = s;
        option.innerHTML = s;
        x.appendChild(option);
        }
</script>
?>