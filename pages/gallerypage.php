<?php
/**
 * Created by PhpStorm.
 * User: molin
 * Date: 2018-11-17
 * Time: 09:58
 */
?>
<!DOCTYPE HTML>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/reset.css"/>
    <link rel="stylesheet" type="text/css" href="../CSS/navbarDesign.css"/>
    <link rel="stylesheet" type="text/css" href="../CSS/photogalleryDesign.css"/>
    <link rel="stylesheet" type="text/css" href="../CSS/mainDesign.css"/>
    <link rel="stylesheet" type="text/css" href="../CSS/footer.css"/>
    <title>Glyxnäs Multisport</title>
    <link rel="icon" href="/img/logo.png">
</head>

<body>
<div class="navbar">
    <?php
    include '/xampp/htdocs/fragmnts/navbar.php';
    ?>
</div>
<div class="main">

<?php
include '/xampp/htdocs/fragmnts/photogallery.php';
?>

</div>
<div class="footer">
    <?php
    include '/xampp/htdocs/fragmnts/footer.php';
    ?>
</div>

</body>

</html>
