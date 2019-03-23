<?php

$json = file_get_contents("strings.json");
$strings = json_decode($json, true);

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hello Flight!</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
</head>
  
<body>
  <section class="section">
    <div class="container">
      <h1 class="title"><?php echo $strings['title']['ptbr']; ?></h1>
      <p class="subtitle"><?php echo $strings['subtitle']['ptbr']; ?></p>
    </div>
  </section>
  <input type="hidden">
  <input type="hidden">
</body>
</html>