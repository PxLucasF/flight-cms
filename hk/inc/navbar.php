<nav class="navbar">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
      <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
    </a>
  </div>

  <div class="navbar-menu">
    <div class="navbar-end">
      <div class="navbar-item">
          <a class="navbar-item hk-user">
            <img class="navbar-avatar" src="https://www.gravatar.com/avatar/4ba40c4f49bf4c881136b06ee6771c89?d=mp&s=64">
            Lucas Fernandes
          </a>
      </div>
    </div>
  </div>
</nav>

<nav class="navbar">

  <div class="navbar-menu">
    <div class="navbar-start">

      <a href="?p=dashboard" id="menu-dashboard" class="navbar-item"><i class="navbar-icon" data-feather="home"></i> Dashboard</a>

      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link"><i class="navbar-icon" data-feather="file-text"></i> Content</a>
        <div class="navbar-dropdown">
          <a href="?p=pages" class="navbar-item">Pages</a>
          <a class="navbar-item">Posts</a>
          <a class="navbar-item">Gallery</a>
          <a class="navbar-item">Forms</a>
        </div>
      </div>

      <div class="navbar-item has-dropdown is-hoverable">
        <a class="navbar-link"><i class="navbar-icon" data-feather="zap"></i> Customization</a>
        <div class="navbar-dropdown">
          <a class="navbar-item">Appearance</a>
          <a class="navbar-item">Extensions</a>
          <a class="navbar-item">Libraries</a>
        </div>
      </div>
      
      <a class="navbar-item"><i class="navbar-icon" data-feather="pie-chart"></i> SEO</a>
      
      <a class="navbar-item"><i class="navbar-icon" data-feather="shield"></i> Security</a>
      
      <a class="navbar-item"><i class="navbar-icon" data-feather="users"></i> Users</a>
      
      <a class="navbar-item"><i class="navbar-icon" data-feather="settings"></i> Options</a>
      
      <a class="navbar-item"><i class="navbar-icon" data-feather="log-out"></i> Logout</a>

    </div>
  </div>
</nav>
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