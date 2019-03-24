<?php

$current = "index";

if (isset($_GET["edit"])) {
  $edit = $_GET["edit"];
  if (file_exists("../flight/styles/".$FLIGHT_STYLE."/".$edit."/index.php")) {
    $current = "edit";
  }
}

include("pages-".$current.".php");

?>