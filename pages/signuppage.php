<?php
/**
 * Created by PhpStorm.
 * User: molin
 * Date: 2018-11-18
 * Time: 10:07
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

            <div class="signupform" id="form">
                <h2>Anmäl ditt lag här!</h2>
                <p>Fyll i deltagare för alla sträckor för att anmäla ett lag!</p>
                <form action="../Model/register.php" method="post">
                <hr>

                    <div class="computerForm">
                <span class="form"><label for="user"><b>Lagnamn: </b></label>
                <input type="text" placeholder="Skriv in lagnamn" name="userNamn" required></span>

                    <span class="form"><label for="user"><b>Paddling: </b></label>
                <input type="text" placeholder="Skriv in deltagare" name="userPaddling" required></span>

                    <span class="form"><label for="user"><b> Simning: </b></label>
                <input type="text" placeholder="Skriv in deltagare" name="userSimning" required></span>

                        <span class="form"><label for="user"><b> Cykling: </b></label>
                <input type="text" placeholder="Skriv in deltagare" name="userCykling" required></span>

                            <span class="form"><label for="user"><b> Löpning: </b></label>
                <input type="text" placeholder="Skriv in deltagare" name="userLöpning" required></span>
                    </div>

                    <div class="mobileForm">

                        <div class="form"><label for="user"><b>Lagnamn: </b></label>
                <input type="text" placeholder="Skriv in lagnamn" name="userNamn" required></div>

                        <div class="form"><label for="user"><b>Paddling: </b></label>
                <input type="text" placeholder="Skriv in deltagare" name="userPaddling" required></div>

                        <div class="form"><label for="user"><b> Simning: </b></label>
                <input type="text" placeholder="Skriv in deltagare" name="userSimning" required></div>

                        <div class="form"><label for="user"><b> Cykling: </b></label>
                <input type="text" placeholder="Skriv in deltagare" name="userCykling" required></div>

                        <div class="form"><label for="user"><b> Löpning: </b></label>
                <input type="text" placeholder="Skriv in deltagare" name="userLöpning" required></div>
                    </div>
                <hr>


                <button type="submit" class="registerbtn">Anmäl</button>
                </form>

            </div>

        <form action="../Model/registerPerson.php" method="post">
            <div class="signupform">
                <h2>Anmäl dig induviduellt här!</h2>
                <p>Skriv in förnamn och efternamn för att anmälda dig!</p>
                <hr>
                <label for="user"><b>Förnamn och Efternamn </b></label>
                <input type="text" placeholder="Skriv in förnamn och efternamn" name="Name" required>
                <hr>
                <button type="submit" class="registerbtn">Anmäl</button>

            </div>
        </form>
        <div class="registeredTeams">
            <h2>Anmälda Lag</h2>

            <table id="result">
                <tr class="header">
                    <th><b>Lagnamn</b></th>
                    <th><b>Paddling</b></th>
                    <th><b>Simning</b></th>
                    <th><b>Cykling</b></th>
                    <th><b>Löpning</b></th>
                </tr>

            <?php
            include '/xampp/htdocs/fragmnts/registrations.php';
            ?>
            </table>
        </div>
    </div>

    <div class="footer">
        <?php
        include '/xampp/htdocs/fragmnts/footer.php';
        ?>
    </div>
</div>
</body>

</html>