<?php
/**
 * Created by PhpStorm.
 * User: molin
 * Date: 2018-12-25
 * Time: 19:45
 */
?>
<!DOCTYPE HTML>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/reset.css"/>
    <link rel="stylesheet" type="text/css" href="../CSS/navbarDesign.css"/>
    <link rel="stylesheet" type="text/css" href="../CSS/mainDesign.css"/>
    <link rel="stylesheet" type="text/css" href="../CSS/signup.css"/>
    <link rel="stylesheet" type="text/css" href="../CSS/footer.css"/>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="../JS/showResult.js"></script>
    <title>Glyxnäs Multisport</title>
    <link rel="icon" href="/img/logo.png">
</head>

<body>
<div class="container">
    <div class="navbar">
        <?php
        include '/xampp/htdocs/fragmnts/navbar.php';
        ?>
    </div>
    <div class="main">
        <div class="btn-group">
            <button id="year2018">2018</button>
            <button id="year2017">2017</button>
        </div>
        <div id="result">
            <h2> Resultat </h2>
        </div>
    </div>
    <div class="footer">
        <?php
        include '/xampp/htdocs/fragmnts/footer.php';
        ?>
    </div>
</div>
</body>