
<!DOCTYPE html>
<html lang="en">


<div><a href="/Index.php"><img src="../resourses/img/homepage1.png" alt="Link to homepage" id="homebutton"></a>
    <h1> Tasty Recipes </h1>
    <?php

    if ($loggedin) {
        echo "<a href='/TastyRecipe/Logout' id='loginbutton'> Logout </a>";
    } else {
        echo "<a href='/TastyRecipe/LoginPage' id='loginbutton'> Login </a>";
        echo "<a href='/TastyRecipe/SignupPage' id='loginbutton'> Signup </a>";
    }
    ?>
</div>
</body>


</html>
