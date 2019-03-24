<?php

function FLIGHT_ALERT($color, $msg, $size=100) {
  $notification  = '<div class="notification is-'.$color.'" style="width:'.$size.'%;">';
  $notification .= '<button class="delete" onclick="return this.parentNode.remove();"></button>';
  $notification .= $msg;
  $notification .= '</div>';
  return $notification;
}

function FLIGHT_TOKEN($user, $pass) {
  return md5($user)."_".md5($pass);
}

function FLIGHT_LOGIN($user, $pass) {
  $db = new mysqli($FLIGHT_DB_HOST, $FLIGHT_DB_USER, $FLIGHT_DB_PASS);
  $query = "SELECT * FROM users WHERE username='$user' AND password='$pass'";
  $result = mysqli_query($db, $query);
  return $result;
}

?>