<?php

$strings = "../flight/styles/".$FLIGHT_TEMPLATE."/".$edit."/strings.json";

$json = file_get_contents("../flight/styles/".$FLIGHT_TEMPLATE."/".$edit."/config.json");
$page_config = json_decode($json, true);
$FLIGHT_PAGE_TITLE = $page_config['flight_title'];

$json = file_get_contents($strings);
$data = json_decode($json, true);

if (isset($_GET["update"])) {
  if (isset($_POST)) {
    foreach ($_POST as $key => $value) {
      /* $data[htmlspecialchars($key)] = htmlspecialchars($value); */
      $data[htmlspecialchars($key)] = array_replace($data[htmlspecialchars($key)], array("ptbr" => $value));
      $json_object = json_encode($data);
      file_put_contents($strings, $json_object);
    }
    $alerta = FLIGHT_ALERT("success", "Página alterada com sucesso!");
  }
}

?>

<style>
  .input {
    width: 50%;
  }
</style>
<section class="section">
  <div class="container">
    <h1 class="title">Editar página: <?php echo $FLIGHT_PAGE_TITLE; ?></h1>
    <p class="subtitle">Editar informações  e conteúdo da página</p>

<?php

if(isset($alerta)) { echo $alerta; };

$json = file_get_contents($strings); // Pegar informações atualizadas
$data = json_decode($json);

$form = '<form action="?p=pages&edit=index&update" method="post">';
foreach ($data as $key => $value) {
  if ( $key == "desc" or "ptbr" ) {
    $form .= '<div class="field"> <label class="label">'.$value->desc.'</label> <div class="control"> <input class="input" type="text" name="'.$key.'" value="'.$value->ptbr.'"> </div> </div>';
  } else {
    $form .= '<h4 class="title is-4">'. $key .'</h4>';
  }
  /* print_r ($value); */
}
$form .= '<div class="field"> <p class="control"> <button class="button is-link" type="submit">Salvar alterações</button> </p> </div>';
$form .= '</form>';

echo $form;

?>

  </div>
</section>