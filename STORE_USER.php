<?php
require_once 'LOGIN_Entry.php';
require_once 'keys.php';

session_start();
$filename = __DIR__ . '/Users/Users.txt';

$entry = new LOGIN_ENTRY($_POST[SIGNUP_USERNAME], $_POST[SIGNUP_PASSWORD]);

file_put_contents($filename, serialize($entry) . CHAT_ENTRY_DELIMITER, FILE_APPEND);
include 'homepage.php';
?>
