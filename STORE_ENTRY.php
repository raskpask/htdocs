<?php
require_once 'Entry.php';
require_once 'keys.php';

$filename = __DIR__ . '/conversation.txt';

session_start();
if(!empty($_SESSION[LOGIN_USERNAME])){
  $entry = new ENTRY($_SESSION[LOGIN_USERNAME], $_POST[CHAT_MESSAGE_KEY]);
  file_put_contents($filename, serialize($entry). CHAT_ENTRY_DELIMITER, FILE_APPEND);
}else{
  echo "Please login before posting a comment!";
}
include 'pancake.php';
 ?>
