<!DOCTYPE html>
<html lang="eng">

<head>
  <link rel="stylesheet" type="text/css" href="../resourses/CSS/reset.css" />
  <title>Login</title>
  <link rel="icon" href="../img/Muffin.ico">
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../resourses/CSS/mainDesign.css" />
    <link rel="stylesheet" type="text/css" href="../resourses/CSS/LoginDesign.css" />
</head>

<body>
  <div class="container">
    <div class="itemhead" id="header">
        <?php include TastyRecipe\Util\Constants::getViewFragmentsDir() . 'header.php' ?>
    </div>

    <div class="itemmainleft" id="mainleft">
      <h2>Fill the form to Login</h2>
      <form action="/TastyRecipe/Login" method="post">
      <p><label for="username">Username:</label></p>
      <p><input type="text" id="username" placeholder="Enter Username" name="username" required /></p>

      <p><label for="password">Password:</label></p>
      <p><input type="password" id"password" placeholder="Enter Password" name="password" required /></p>

      <p><input type="submit" value="Login"/>
      </form>
        </p>

    </div>


    <div class="itemfooter" id="footer">
        <?php include '../resourses/fragments/footer.php' ?>
    </div>
  </div>


</body>

</html>
