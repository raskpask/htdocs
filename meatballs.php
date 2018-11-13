
<!DOCTYPE html>
<html lang="en">

<head>
  <link rel="stylesheet" type="text/css" href="reset.css" />
  <title>Meatballs</title>
  <link rel="icon" href="Muffin.ico">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="mainDesign.css" />
  <link rel="stylesheet" type="text/css" href="RecipeDesign.css" />
</head>

<body>
  <div class="container">
    <div class="itemhead" id="header"> <?php
      include 'header.php';
      ?>

    </div>
    <div class="itemmenu" id="menu">
      <h4>Recipes</h4>
      <h4><br>Pancakes</h4>
      <a href="/pancake.php"><img src="img/panncake.jpg" alt=pancake id="pancake"></a>
      <h4>Meatballs</h4>
      <a href="/meatballs.php"><img src="img/kottbullar.jpg" alt=meatballs id="meatballs"></a>
    </div>
    <div class="itemmainright" id="mainright">
      <h2>For the Marinara Sauce</h2>
      <ul class="a">
        <li>1/4 cup extra-virgin olive oil</li>
        <li>1/4 pound diced pancetta</li>
        <li>2 large Spanish onions, cut into 1/4.</li>
      </ul>
      <img src="img/meatballsServing.jpg" alt="Serving Sugegstion" id="meatballsServing"></img>

    </div>
    <div class="itemmainleft" id="mainleft">
      <h5> How to make meatballs</h5>
      <h2>Ingredients (6 Persons):</h2>
      <ul class="a">
        <li>1kg of ground beef</li>
        <li>Some salt</li>
        <li>2 garlic cloves</li>
        <li>4 eggs</li>
        <li>0.25 dl of olive oil</li>
        <li>2dl of water</li>
        <li>salt and pepper</li>
        <li>bread crums</li>
      </ul>

      <h2>Method</h2>
      <p>
        1) Combine beef, veal, and pork in a large bowl. Add garlic, eggs, cheese, parsley, salt and pepper.
      </p>
      <p>
        2) Blend bread crumbs into meat mixture. Slowly add the water 1/2 cup at a time. The mixture should be very moist but still hold its shape if rolled into meatballs. (I usually use about 1 1/4 cups of water). Shape into meatballs.
      </p>
      <p>
        3) Heat olive oil in a large skillet. Fry meatballs in batches. When the meatball is very brown and slightly crisp remove from the heat and drain on a paper towel. (If your mixture is too wet, cover the meatballs while they are cooking so
        that they hold their shape better.)
      </p>
    </div>
    <div class="itemcomments" id="comments">
      <h2> Comments </h2>
      <p>Maja: Best meatballs!</p>
      <p>Berit: Nice recipe!</p>
      <p>Kalle: Best meatballs ever!</p>
      <p>Oskar: Best meatballs i've made!</p>

      <form>
        <h3>Wrtie something about the recipe!</h3>
        <input type="text" name="Comment" value="Enter comment">
      </form>
      <button> Comment </button>
    </div>
    <div class="itemfooter" id="footer">
      <h6> This website was made by Jakob Molin. Please contact me through email if you have any complaints: molin.jakob@gmail.com<h6>
          <a href="/Calendar.php"><img src="img/calendar.jpg" alt=calendar id="calendarfooter"></a>
    </div>
  </div>
</body>

</html>
