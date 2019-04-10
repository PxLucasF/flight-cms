<?php

if (isset($_GET["login"])) {
  switch ($_GET["login"]) {
    case "fail":
      $alerta = FLIGHT_ALERT("danger", "Nome de usuário e/ou senha inválidos.");
      break;
    default:
      if (isset($_POST["user"]) and isset($_POST["password"])) {
        FLIGHT_LOGIN($_POST["user"], $_POST["password"]);
      }
  }
}

if (isset($_GET["logout"])) {
  setcookie("token", "", time() - 86400);
  $alerta = FLIGHT_ALERT("success", "Você deslogou do painel com sucesso.");
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
<section class="hero is-fullheight">
  <div class="hero-body">
    <div class="container">
      <center>
      <div class="box" style="width:50%;">
        <h1 class="title">Bem-vindo!</h1>
        <h2 class="subtitle">Faça seu login para começar</h2>
        <?php if(isset($alerta)) { echo $alerta; } ?>
        <form action="?login&entrar" method="post">
          <div class="field">
            <div class="control has-icons-left">
              <input class="input" type="text" name="user" placeholder="Usuário ou e-mail">
              <span class="icon is-small is-left"><i class="fas fa-user"></i></span>
            </div>
          </div>
          <div class="field">
            <div class="control has-icons-left">
              <input class="input" type="password" name="password" placeholder="Senha">
              <span class="icon is-small is-left"><i class="fas fa-lock"></i></span>
            </div>
          </div>
          <div class="field" style="text-align:left;">
            <button type="submit" class="button is-link">Acessar painel</button>
          </div>
        </form>
      </div>
      </center>
    </div>
  </div>
</section>
</body>

</html>