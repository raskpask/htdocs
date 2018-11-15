<?php
require_once 'Entry.php';
require_once 'keys.php';

session_start();

if($_SESSION[LATEST_RECIPE_PAGE] == "pancake"){
    $filename = __DIR__ . '/conversation/pancakeComments.txt' ;
}else{
    $filename = __DIR__ . '/conversation/meatballsComments.txt' ;
}
if (!empty($_POST[CHAT_MESSAGE_KEY])) {
    if (isset($_SESSION[LOGIN_USERNAME])) {
        $entry = new ENTRY($_SESSION[LOGIN_USERNAME], $_POST[CHAT_MESSAGE_KEY]);

        file_put_contents($filename, serialize($entry) . CHAT_ENTRY_DELIMITER, FILE_APPEND);
    } else {
        echo "Please login before posting a comment!";
    }
}

if($_SESSION[LATEST_RECIPE_PAGE] == "pancake"){
    include 'pancakepage.php';
}else{
    include 'meatballspage.php';
}

?>
