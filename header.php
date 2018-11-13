<?php
if (!(session_status() == PHP_SESSION_ACTIVE)) {
    session_start();
}
include_once 'keys.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="reset.css" />
  <title>Pancakes</title>
  <link rel="icon" href="img/Muffin.ico">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="mainDesign.css" />
  <link rel="stylesheet" type="text/css" href="RecipeDesign.css" />
</head>
<?php if(!empty($_SESSION[LOGIN_USERNAME])){ ?>
  <div> <a href="/Index.php"><img src="img/homepage1.png" alt="Link to homepage" id="homebutton"></a>
    <h1> Tasty Recipes </h1>
    <a href="/logout.php" id="loginbutton"> Logout </a>
  </div>
<?php } else { ?>
  <div> <a href="/Index.php"><img src="img/homepage1.png" alt="Link to homepage" id="homebutton"></a>
    <h1> Tasty Recipes </h1>
    <a href="/login_page.php" id="loginbutton"> Login </a>
  </div>
<?php } ?>

</html>
