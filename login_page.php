<?php
session_start();
require_once 'LOGIN_ENTRY.php';
require_once 'keys.php';
 ?>
<!DOCTYPE html>
<html lang="eng">

<head>
  <link rel="stylesheet" type="text/css" href="reset.css" />
  <title>Login</title>
  <link rel="icon" href="img/Muffin.ico">
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="mainDesign.css" />

  <link rel="stylesheet" type="text/css" href="LoginDesign.css" />
</head>

<body>
  <div class="container">
    <div class="itemhead" id="header"> <a href="/Index.php"><img src="img/homepage1.png" alt="Link to homepage" id="homebutton"></a>
      <h1></h1>
      <a href="/login_page.php" id="loginbutton"> Login </a>
    </div>
    <div class="itemmainleft" id="mainleft">
      <h2>Fill the form to login</h2>
      <form action="login.php" method="post">
      <p><label for="username">Username:</label></p>
      <p><input type="text" id="username" placeholder="Enter Username" name="username" required /></p>

      <p><label for="password">Password:</label></p>
      <p><input type="password" id"password" placeholder="Enter Password" name="password" required /></p>

      <p><input type="submit" value="Login"/>
      </form>
        </p>
    </div>


    <div class="itemfooter" id="footer">
      <h6> This website was made by Jakob Molin. Please contact me through email if you have any complaints: molin.jakob@gmail.com<h6>
          <a href="/Calendar.html"><img src="img/calendar.jpg" alt=calendar id="calendarfooter"></a>
    </div>
  </div>


</body>

</html>
