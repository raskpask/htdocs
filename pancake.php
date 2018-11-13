<?php
session_start();
require_once 'keys.php';
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

<body>
  <div class="container">
    <div class="itemhead" id="header"><?php
      if(!empty($_SESSION[LOGIN_USERNAME])){
      include 'headerWithLogout.php';
    } else {
      include 'headerWithLogin.php';
    }
      ?>
    </div>
    <div class="itemmenu" id="menu">
      <h4>Recipes</h4>
      <h4><br>Pancakes</h4>
      <a href="/pancake.html"><img src="img/panncake.jpg" alt=pancake id="pancake"></a>
      <h4>Meatballs</h4>
      <a href="/meatballs.html"><img src="img/kottbullar.jpg" alt=meatballs id="meatballs"></a>
    </div>
    <div class="itemmainright" id="mainright">
      <h2>Accessories to the pancake: </h2>
      <ul class="a">
        <li>Jam</li>
        <li>Suger</li>
        <li>Ice cream</li>
        <li>Whipped cream</li>
        <li>Frozen apple souce</li>
        <li>Nutella</li>
        <li>Fruits</li>
      </ul>
      <img src="img/pancakeServing.jpg" alt="Serving Sugegstion" id="pancakeServing"></img>
    </div>
    <div class="itemmainleft" id="mainleft">
      <h2>Ingredients (6 Persons):</h2>
      <ul class="a">
        <li>6 eggs</li>
        <li>Some salt</li>
        <li>5dl of flour</li>
        <li>1l of milk</li>
      </ul>

      <h2>Method</h2>
      <p>
        1) In a bowl, mix all the ingredients together, breaking up any lumps.
      </p>
      <p>
        2) Add butter to the pan and pour a ladle full of batter for each pancake onto a hot griddle.
      </p>
      <p>
        3) Flip the pancakes when the edges appear cooked and the batter bubbles on top.
      </p>
      <p>
        4) Serve immediately.
      </p>
      <p>
        5) Repeat util you don't have any more batter.
      </p>
      <p>
        A serving suggestion can be with banana, nutella and whipped cream.
    </div>
    <div class="itemcomments" id="comments">
      <h2> Comments </h2>
      <p>Maja: Best Panncakes!</p>
      <p>Berit: Nice recipe!</p>
      <p>Kalle: Best Panncakes ever!</p>
      <p>Oskar: Best Panncakes i've made!</p>

      <form>
        <h3>Wrtie something about the recipe!</h3>
        <input type="text" name="Comment" value="Enter comment">
      </form>
      <button> Comment </button>
    </div>
    <div class="itemfooter" id="footer">
      <h6> This website was made by Jakob Molin. Please contact me through email if you have any complaints: molin.jakob@gmail.com<h6>
          <a href="/Calendar.html"><img src="img/calendar.jpg" alt=calendar id="calendarfooter"></a>
    </div>
  </div>


</body>

</html>
