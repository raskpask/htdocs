<?php
require_once 'keys.php';
require_once 'commentsEntry.php';

session_start();

$filename = __DIR__ . '/conversation.txt';

$entries = explode(CHAT_ENTRY_DELIMITER, file_get_contents($filename));
for ($i = count($entries) - 1; $i >= 0; $i--) {
        $entry = unserialize($entries[$i]);
        if($entry instanceof commentsEntry and ($entry->getTimestamp() == $_GET[CHAT_TIMESTAMP_KEY])){
          $entry->setDeleted(true);
          $entries[$i] = serialize($entry);
          break;
        }
      }
        file_put_contents($filename, implode(CHAT_ENTRY_DELIMITER, $entries));
    include 'pancake.php';
 ?>
