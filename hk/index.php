<?php
require_once("../flight/config.php");
require_once("functions.php");
if (isset($_GET['p'])) {
  $page = $_GET['p'];
  if (!file_exists("pages/".$page.".php")) {
    $page = "404";
  }
} else {
  $page = "dashboard";
}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Flight CMS - Housekeeping</title>
  <link rel="stylesheet" href="../flight/assets/css/bulma.css">
  <link rel="stylesheet" href="../flight/assets/css/hk.css">
  <link rel="stylesheet" href="../flight/assets/css/font-awesome-5.8.1.css">
  <script src="../flight/assets/js/font-awesome-5.8.1.js"></script>
</head>

<body>

<nav class="navbar">
  <div class="navbar-brand">
    <a class="navbar-item" href="#"><h1 class="subtitle">Flight CMS</h1></a>
    <a role="button" class="navbar-burger burger" data-target="navbarBasicExample">
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
      <span aria-hidden="true"></span>
    </a>
  </div>

  <div class="navbar-menu">

    <div class="navbar-end">
      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link"><figure class="image is-16x16" style="margin-right:.5em;"> <img src="https://pt.gravatar.com/userimage/123689047/7eb303aa04802143c23ac56a0602e8b0.jpeg" style="border-radius:50%;"> </figure> Lucas Fernandes</a>

        <div class="navbar-dropdown">
          <a class="navbar-item"><span class="icon"><i class="fas fa-user"></i></span> <span>Meu perfil</span></a>
          <a class="navbar-item"><span class="icon"><i class="fas fa-gavel"></i></span> <span>Registros</span></a>
          <hr class="navbar-divider">
          <a class="navbar-item"><span class="icon"><i class="fas fa-sign-out-alt"></i></span> <span>Desconectar</span></a>
        </div>
      </div>

      <a class="navbar-item"><i class="fas fa-cog"></i></a>
      <a class="navbar-item"><i class="far fa-life-ring"></i></a>
      <a class="navbar-item"><i class="fas fa-power-off"></i></a>
    </div>

  </div>
</nav>

<div class="columns">

  <?php include("inc/menu.php"); ?>

  <div class="column">
    <?php include("pages/".$page.".php"); ?>
  </div>

</div>

</body>

</html>