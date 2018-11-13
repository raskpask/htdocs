<?php
require_once 'LOGIN_ENTRY.php';
require_once 'keys.php';
$filename = __DIR__ . '/Users/Users.txt';
session_start();
$_SESSION[LOGIN_USERNAME] = $_POST[LOGIN_USERNAME];
$_SESSION[LOGIN_PASSWORD] = $_POST[LOGIN_PASSWORD];

  $entry = new LOGIN_ENTRY($_SESSION[LOGIN_USERNAME], $_SESSION[LOGIN_PASSWORD]);
  file_put_contents($filename, serialize($entry). LOGIN_DELIMITER, FILE_APPEND);
include 'Index.php';
 ?>
