<div class="column sidebar is-one-fifth">
  <aside class="menu">
    <p class="menu-label">Principal</p>
    <ul class="menu-list">
      <li><a href="?p=dashboard" id="menu-dashboard"><span class="icon"><i class="fas fa-tachometer-alt"></i></span> <span>Painel</span></a></li>
      <li><a><span class="icon"><i class="fas fa-chart-pie"></i></span> <span>Estatísticas</span></a></li>
    </ul>
    <p class="menu-label">
      Conteúdo
    </p>
    <ul class="menu-list">
      <li><a href="?p=pages" id="menu-pages"><span class="icon"><i class="fas fa-file"></i></span> <span>Páginas</span></a></li>
      <li><a><span class="icon"><i class="fas fa-newspaper"></i></span> <span>Publicações</span></a></li>
      <li><a><span class="icon"><i class="fas fa-images"></i></span> <span>Galeria</span></a></li>
      <li><a><span class="icon"><i class="fas fa-envelope"></i></span> <span>Formulários</span></a></li>
    </ul>
    <p class="menu-label">
      Personalização
    </p>
    <ul class="menu-list">
      <li><a href="?p=style" id="menu-style"><span class="icon"><i class="fas fa-palette"></i></span> <span>Aparência</span></a></li>
      <li><a><span class="icon"><i class="fas fa-puzzle-piece"></i></span> <span>Extensões</span></a></li>
    </ul>
    <p class="menu-label">
      Administração
    </p>
    <ul class="menu-list">
      <li><a><span class="icon"><i class="fas fa-toggle-on"></i></span> <span>Opções</span></a></li>
      <li><a><span class="icon"><i class="fas fa-users"></i></span> <span>Usuários</span></a></li>
      <li><a><span class="icon"><i class="fas fa-search"></i></span> <span>SEO</span></a></li>
    </ul>
  </aside>
</div>

<script>
var url = new URL(window.location.href);
var current = "menu-" + url.searchParams.get("p");
  console.log(current);
window.onload = function(){
  if (current !== "menu-null") {
    document.getElementById(current).classList.add("is-active");
  } else {
    document.getElementById("menu-dashboard").classList.add("is-active");
  }
};
</script>