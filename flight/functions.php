<?php

function FLIGHT_TAGS_HEAD () {
  $tags  = '<meta name="generator" content="Flight CMS">';
  $tags .= file_get_contents('flight/styles/head.html');
  $tags .= '<link rel="stylesheet" href="flight/styles/custom.css">';
  echo $tags;
}

function FLIGHT_TAGS_FOOTER () {
  echo file_get_contents('flight/styles/footer.html');
}

?>