<?php

require_once 'commentsEntry.php';
require_once 'keys.php';

$filename = __DIR__ . '/conversation.txt';

session_start();

$entry = new commentsEntry($_SESSION[LOGIN_USERNAME], $_POST[CHAT_MESSAGE_KEY]);
file_put_contents($filename, serialize($entry) . CHAT_ENTRY_DELIMITER, FILE_APPEND);

include 'pancake.php';
 ?>
