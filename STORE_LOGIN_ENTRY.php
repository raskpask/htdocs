<?php
require_once 'Login_Entry.php';
require_once 'keys.php';
$filename = __DIR__ . '/Users/Users.txt';

session_start();
if(!empty($_SESSION[LOGIN_USERNAME])){
  $entry = new LOGIN_ENTRY($_SESSION[LOGIN_USERNAME], $_SESSION[LOGIN_PASSWORD]);
  file_put_contents($filename, serialize($entry). LOGIN_DELIMITER, FILE_APPEND);
}
include 'Index.php';
 ?>
