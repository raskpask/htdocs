<?php
require_once '../Model/teamEntry.php';


$filename = '../Teams/teams.txt';

$entries = explode(";\n", file_get_contents($filename));
for ($i = count($entries) - 1; $i >= 0; $i--) {
    $entry = unserialize($entries[$i]);
    if($entry instanceof teamEntry) {
        echo "
   <tr>
    <td>" .$entry->getUserNamn() ."</td>        
    <td>" .$entry->getUserPaddling() ."</td>
    <td>" .$entry->getUserSimning() ."</td>
    <td>" .$entry->getUserCykling() ."</td>
    <td>" .$entry->getUserLopning() ."</td>
  </tr>";
    }
}
?>