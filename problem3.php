<html>
     <head>
            <title>problem 3</title>
      </head>
     <body>
    <?php
    $length = 5;
    $width = 5;
    $area = $length*$width;
    $parameter = 2*($length*$width);
    
	if ($length == $width)
     {
        echo "<p> shape is square</p>";
     }
      ?>

      <?php
     echo "<p> Area: $area</p>";
	 echo "<p> Parameter:  $parameter</p>";
     ?>
</body>
</html>