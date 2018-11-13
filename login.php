<?php
session_start();
require_once 'keys.php';

$userN = $_POST['username'];
$passW = $_POST['password'];
echo "$userN ";
echo "$passW";

$file =   fopen('Users.txt','r');

while(!feof($file)){
    $line = fgets($file);
    $credentials = explode('|', $line);
    echo "$credentials[0] ";
    if(trim($credentials[0]) == trim($userN) && trim($credentials[1]) ==  trim($passW)){
      $_SESSION[LOGIN_USERNAME] = $userN;
      $_SESSION[LOGIN_PASSWORD] = $passW;
      include 'Index.php';
        break;
    }
}
fclose($file);
?>
