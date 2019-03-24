<?php

require_once("flight/config.php");
require_once("flight/functions.php");

$json = file_get_contents("flight/styles/".$FLIGHT_STYLE."/index/strings.json");
$strings = json_decode($json, true);

do {
  
  if (isset($_GET['p'])) {
    $page = $_GET['p'];
    if (!file_exists("flight/styles/".$FLIGHT_STYLE."/".$page."/index.php")) {
      require_once("flight/styles/".$FLIGHT_STYLE."/404.php");
      break;
    }
  } else {
    $page = "index";
  }

require_once("flight/styles/".$FLIGHT_STYLE."/".$page.'/index.php');
  
} while (0);

?>