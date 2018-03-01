<!DOCTYPE html>
<html>
<head>
<title>Contact form</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

  <div class="display_details">
    <?php
    echo "<h2 class='word'> Hi {$_POST['name']} !</h2>";
    echo "<h2> We received your contact details.</h2>";
    echo"<h2 class='word'>{$_POST['phone']}</h2>";
    echo"<h2 class='word'>{$_POST['email']}</h2>";
    ?>
  </div>


</body>
</html>
