<?php
require_once 'teamEntry.php';


    $filename = '../Teams/teams.txt';
        $entry = new teamEntry($_POST['userNamn'],$_POST['userPaddling'],$_POST['userSimning'],$_POST['userCykling'],$_POST['userLöpning']);
        file_put_contents($filename, serialize($entry) . ";\n", FILE_APPEND);


include '../links/signup.php';