
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="reset.css" />
  <title>Tasty Recipes</title>
  <link rel="icon" href="Muffin.ico">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="mainDesign.css" />
  <link rel="stylesheet" type="text/css" href="RecipeDesign.css" />
</head>

<body>
  <div class="container">
    <div class="itemhead" id="header"> <?php
      include 'resourses/fragments/header.php';
      ?>
    </div>
    <div class="itemmenu" id="menu">
      <h4>Recipes</h4>
      <h2><br>Pancakes</h2>
      <a href="/pancake.php"><img src="img/panncake.jpg" alt=pancake id="pancake"></a>
      <h2>Meatballs</h2>
      <a href="/meatballs.php"><img src="img/kottbullar.jpg" alt=meatballs id="meatballs"></a>
    </div>
    <div class="itemmainright" id="mainright">
      <h2> This is a school project made in the course ID1354! </h2>
    </div>
    <div class="itemmainleft" id="mainleft">
      <h2> This website contains swedish recipes!</h2>
      <h6> Click on the calendar to find out what to eat on which day! </h6>
      <a href="/Calendar.php"><img src="img/calendar.jpg" alt=calendar id="calendar"></a>
    </div>
    <div class="itemfooter" id="footer">
      <?php include 'resourses/fragments/footer.php'; ?>
    </div>
  </div>
</body>

</html>
