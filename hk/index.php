<?php

require_once("../flight/config.php");
require_once("functions.php");

if (isset($_GET["logout"])) {
  require_once("login.php");
}

if (FLIGHT_TOKEN() == true) {
  require_once("wip.php");
} else {
  require_once("login.php");
}

?>