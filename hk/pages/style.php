<?php

if (isset($_POST["css"])) {
  file_put_contents("../flight/styles/custom.css", $_POST["css"]);
  file_put_contents("../flight/styles/head.html", $_POST["head"]);
  file_put_contents("../flight/styles/footer.html", $_POST["footer"]);
  $alerta = FLIGHT_ALERT("success", "Aparência atualizada com sucesso!", 50);
}

?>

<style>
  .input {
    width: 50%;
  }
  .textarea {
    min-width: 50%;
    max-width: 50%;
  }
</style>
<section class="section" style="max-height:calc(100vh - 40px);overflow:auto;">
  <div class="container">
    <h1 class="title">Aparência</h1>
    <p class="subtitle">Personalize o estilo do seu site</p>
    <?php if(isset($alerta)) { echo $alerta; } ?>
    <form action="?p=style" method="post">

      <div class="field">
        <label class="label">CSS customizado</label>
        <div class="control">
          <textarea name="css" class="textarea"><?php echo file_get_contents('../flight/styles/custom.css'); ?></textarea>
        </div>
      </div>

      <div class="field">
        <label class="label">Tags de estilo extra</label>
        <div class="control">
          <textarea name="head" class="textarea"><?php echo file_get_contents('../flight/styles/head.html'); ?></textarea>
        </div>
      </div>

      <div class="field">
        <label class="label">Scripts extra</label>
        <div class="control">
          <textarea name="footer" class="textarea"><?php echo file_get_contents('../flight/styles/footer.html'); ?></textarea>
        </div>
      </div>
  
      <div class="field">
        <div class="control">
          <button class="button is-link" type="submit">Salvar alterações</button>
        </div>
      </div>
      
    </form>
  </div>
</section>