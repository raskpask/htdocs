<?php
session_start();
$_SESSION[LATEST_RECIPE_PAGE]= "pancake";
require_once 'keys.php';
include 'pancakepage.php';

?>
