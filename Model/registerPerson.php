<?php
require_once 'teamEntry.php';


$filename = '../Teams/teams.txt';
$entry = new teamEntry($_POST['Name'],$_POST['Name'],$_POST['Name'],$_POST['Name'],$_POST['Name']);
file_put_contents($filename, serialize($entry) . ";\n", FILE_APPEND);


include '../links/signup.php';