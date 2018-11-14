<?php
session_start();
require_once 'keys.php';

$userN = $_POST['username'];
$passW = $_POST['password'];

$file =   fopen('Users.txt','r');

while($line = fgets($file)){
    $credentials = explode('|', $line);

    if(trim($credentials[0]) === $userN && trim($credentials[1]) ===  $passW){
      $_SESSION[LOGIN_USERNAME] = $userN;
      include 'homepage.php';
        break;
    }
}
fclose($file);
?>
