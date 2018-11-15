<?php
session_start();
require_once 'keys.php';
$_SESSION[LATEST_RECIPE_PAGE]= "pancake";
include 'pancakepage.php';

?>
