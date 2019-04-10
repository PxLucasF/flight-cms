<?php
require_once("../flight/config.php");
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
  <link rel="stylesheet" href="../flight/assets/css/wip.css">
  <script src="https://unpkg.com/feather-icons"></script>
</head>

<body class="pageid-<?php echo $page; ?>">
  
<?php include("inc/navbar.php"); ?>
  
<section class="section">
  <div class="container">
    <?php include("pages/".$page.".php"); ?>
  </div>
</section>
  
</body>

<script>feather.replace()</script>
  
</html>