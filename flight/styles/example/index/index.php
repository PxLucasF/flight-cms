<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hello Flight!</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <?php FLIGHT_TAGS_HEAD(); ?>
</head>
  
<body>
  <section class="section">
    <div class="container">
      <h1 class="title"><?php echo $strings['title']['ptbr']; ?></h1>
      <p class="subtitle"><?php echo $strings['subtitle']['ptbr']; ?></p>
      <form action="flight/forms.php?id=teste" method="post" style="width:50%;">
        <div class="field">
          <label class="label">Seu nome</label>
          <div class="control">
            <input class="input" type="text" placeholder="Lucas Fernandes">
          </div>
        </div>

        <div class="field">
          <label class="label">Endereço de e-mail</label>
          <div class="control">
            <input class="input" type="email" placeholder="contato@imlucas.com.br">
          </div>
        </div>

        <div class="field">
          <label class="label">Mensagem</label>
          <div class="control">
            <textarea class="textarea" placeholder="Oi, tudo bem?"></textarea>
          </div>
        </div>

        <div class="field">
          <div class="control">
            <button class="button">Enviar</button>
          </div>
        </div>
      </form>
    </div>
  </section>
  <?php FLIGHT_TAGS_FOOTER(); ?>
</body>
</html>