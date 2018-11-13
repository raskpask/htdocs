<?php
session_start();
require_once 'keys.php';


$file =   fopen('Users.txt','r');


while(!feof($file)){
    $line = fgets($file);
    $credentials = explode(' ', $line);
    if(trim($credentials[0]) == $_POST[LOGIN_USERNAME] && trim($credentials[1]) ==  $_POST[LOGIN_PASSWORD]){
      $_SESSION[LOGIN_USERNAME] = $_POST[LOGIN_USERNAME];
      $_SESSION[LOGIN_PASSWORD] = $_POST[LOGIN_PASSWORD];
      include 'Index.php';
        break;
    }
}
fclose($file);
?>
