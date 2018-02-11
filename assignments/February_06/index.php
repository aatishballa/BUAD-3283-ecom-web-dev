<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Contact form</title>

<link rel="stylesheet" type="text/css" href="style.css">
<script type="application/javascript" src="/scripts.js"></script>
</head>

<body>
<h1>Register and be a member of BSU Mart</h1>
<form action="endpoint.php" method="post">
  <fieldset>
    <legend>
      Sign Up
    </legend>
    <label>Name: </label>
    <input type="text" name="name" value="" id="name" placeholder="Your name"/> <br />

    <div>
      <label>Email: </label>
      <input type="text" name="email" value="" id="email" placeholder="Your Email Address">
    </div>

    <div>
      <label>Phone: </label>
      <input type="text" name="phone" value="" id="phone" placeholder="Your Phone Number">
    </div>

    <div>
      <label>Comment: </label>
      <textarea id="comment" name="comment" rows="8" cols="40"></textarea>
    </div>

    <input type="submit" name="submit" value="Submit" id="submit"">
  </fieldset>
</form>
</body>
</html>
