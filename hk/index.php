<?php

require_once("../flight/config.php");
require_once("functions.php");

if (isset($_GET["login"])) {
  require_once("login.php");
} else {
  require_once("housekeeping.php");
}

?>