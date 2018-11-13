<?php

require_once 'keys.php';

session_start();
$userN = $_SESSION[LOGIN_USERNAME] = $_POST['username'];
$passW = $_SESSION[LOGIN_PASSWORD] = $_POST['password'];
$file =   fopen('Users.txt','r');


while(!feof($file)){
    $line = fgets($file);
    list($user, $password) = explode(' ', $line);
    if(trim($user) == $userN && trim($password) == $passW){
      $loggedin = true;
        break;
    }
    else{
      $loggedin = false;
    }
}
fclose($file);
if(!$loggedin){
  include 'login_page.php';
  return;
}
include 'Index.php';
 ?>
