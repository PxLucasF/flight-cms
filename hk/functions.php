<?php

function FLIGHT_ALERT($color, $msg) {
  $notification  = '<div class="notification is-'.$color.'" style="width:50%;">';
  $notification .= '<button class="delete" onclick="return this.parentNode.remove();"></button>';
  $notification .= $msg;
  $notification .= '</div>';
  return $notification;
}

?>