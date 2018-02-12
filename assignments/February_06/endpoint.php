<?php
  session_start();
  // Setting post vars to session vars
  foreach ($_POST as $key => $value) {
      $_SESSION[$key] = $value;
  }

  //validate email address if not valid, then add error_message to session them redirect page
  if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $_SESSION['error_message'] = "The email address you submitted is invalid!";
        header("location: index.php");
        exit();
    }
  //test to check my session vars
  print_r($_SESSION);
?>

<!DOCTYPE html>
<html>
<head>
<title>Contact form</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
  <?php
  echo "<h1 class='word'> Hi {$_POST['name']} !</h1>";
  echo "<h1> Welcome to BSU Mart</h1>";
  echo "<h1> We received your contact details.</h1>";
  echo"<h1 class='word'>{$_POST['phone']}</h1>";
  echo"<h1 class='word'>{$_POST['email']}</h1>";
  ?>

</body>
</html>
