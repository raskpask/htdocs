<?php
session_start();
require_once 'keys.php';

$userN = $_POST['username'];
$passW = $_POST['password'];

$file =   fopen('Users.txt','r');

while(!feof($file)){
    $line = fgets($file);
    $credentials = explode('|', $line);
    if(trim($credentials[0]) === $userN && trim($credentials[1]) ===  $passW){
      $_SESSION[LOGIN_USERNAME] = $userN;
      include 'Index.php';
      fclose($file);
        return;
    }
}
echo "Wrong username or password!";
session_destroy();
include 'login_page.php';

?>
