<?php
$filename = __DIR__ . '/conversation.txt' ;

$entries = explode(";\n", file_get_contents($filename));
for ($i = count($entries)-1; $i >= 0; $i--){
  $entry = unserialize($entries[$i]);
  if($entry instanceof Entry and ! ($entry->isDeleted())){
      echo("<p class='author'>" . $entry->getUsername() . ":</p>");
      echo("<p class='entry'>");
      echo(($entry->getMessage()));
      echo("</p>");
      if(!empty($_SESSION[LOGIN_USERNAME])){
      if($entry->getUsername() === $_SESSION[LOGIN_USERNAME]){
            echo("<form action='delete-entry.php'>");
            echo("<input type='hidden' name='timestamp' value='" .
            $entry->getTimestamp() . "'/>");
            echo("<input type='submit' value='Delete'/>");
            echo("</form>");
        }
      }
    }
}
?>
