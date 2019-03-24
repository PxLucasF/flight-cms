<?php

function FLIGHT_ALERT($color, $msg, $size=100) {
  $notification  = '<div class="notification is-'.$color.'" style="width:'.$size.'%;">';
  $notification .= '<button class="delete" onclick="return this.parentNode.remove();"></button>';
  $notification .= $msg;
  $notification .= '</div>';
  return $notification;
}

function FLIGHT_LOGIN($user, $pass) {
  $user = htmlspecialchars($user);
  $pass = md5(htmlspecialchars($pass));
  $success = false;
	$handle = fopen("../flight/users.csv", "r");
  while (($data = fgetcsv($handle)) !== false) {
    if ($data[0] == $user && $data[1] == $pass) {
      $success = true;
      break;
    }
  }
  fclose($handle);
  if ($success) {
    setcookie("token", md5($user)."_".$pass, time() + 86400, "/");
    header('location: ?p=dashboard');
  } else {
    header('location: ?login=fail');
  }
}

function FLIGHT_TOKEN() {
  if(isset($_COOKIE["token"])) {
    $token = $_COOKIE["token"];
    $success = false;
    $handle = fopen("../flight/users.csv", "r");
    while (($data = fgetcsv($handle)) !== false) {
      if (md5($data[0])."_".$data[1] == $token) {
        $success = true;
        break;
      }
    }
    fclose($handle);
    if ($success) {
      return true;
    } else {
      return false;
    }
  }
}

?>