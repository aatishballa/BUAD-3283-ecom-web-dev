<!DOCTYPE html>
<html>
<head>
<title>Contact form</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <?php
  echo "<h1 class='word'> Hi {$_POST['name']} !</h1>";
  echo "<h1> Thannks for sending me a message. I'll get back to you at</h1>";
  echo"<h1 class='word'>{$_POST['phone']}</h1>";
  echo "<h1> within 3-5 business days! - Aatish</h1>";
  ?>
</body>
</html>
