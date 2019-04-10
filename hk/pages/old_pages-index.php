<section class="section">
  <div class="container">
    <h1 class="title">Páginas</h1>
    <p class="subtitle">Editar informações  e conteúdo das páginas do site</p>

<table class="table is-striped is-fullwidth">
  <thead>
    <tr>
      <th>Código</th>
      <th>Título</th>
      <th>Ações</th>
      
    </tr>
  </thead>
  <tbody>

<?php
$dir = new DirectoryIterator("../flight/styles/".$FLIGHT_STYLE);
foreach ($dir as $fileinfo) {
    if ($fileinfo->isDir() && !$fileinfo->isDot()) {
        $json = file_get_contents("../flight/styles/".$FLIGHT_STYLE."/".$fileinfo->getFilename()."/config.json");
        $page_config = json_decode($json, true);
        $FLIGHT_PAGE_TITLE = $page_config['page_title'];
        echo '<tr>';
        echo '<td>'.$fileinfo->getFilename()."</td>";
        echo '<td>'.$FLIGHT_PAGE_TITLE."</td>";
        echo '<td>';
        echo '<a href="?p=pages&edit='.$fileinfo->getFilename().'" class="button is-link is-small is-outlined"><span class="icon"><i class="fas fa-edit"></i></span> <span>Editar</span></a> ';
        echo '<a href="../?p='.$fileinfo->getFilename().'" target="_blank" class="button is-link is-small is-outlined"><span class="icon"><i class="fas fa-eye"></i></span> <span>Visualizar</span></a> ';
        echo '<a href="?p=pages&delete='.$fileinfo->getFilename().'" class="button is-danger is-small is-outlined"><span class="icon"><i class="fas fa-trash-alt"></i></span> <span>Apagar</span></a>';
        echo '</td>';
    }
}
?>
    
  </tbody>
</table>

  </div>
</section>