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

<body>
  
<?php include("inc/navbar.php"); ?>
  
<section class="section">
  <div class="container">
    <h1 class="title">Howdy, Lucas Fernandes!</h1>
    <p class="subtitle">You are currently managing: <strong><a href="">http://imlucas.com.br <i class="after-icon" data-feather="external-link"></i></a></strong></p>
    
    <div class="columns">
      <div class="column">
        <div class="card hk-card">
          <div class="card-content hk-card">
            <div class="media">
              <div class="media-left">
                <div class="hk-card-icon hk-card-light" style="background-color:hsl(141, 71%, 48%);">
                  <i data-feather="eye"></i>
                </div>
              </div>
              <div class="media-content">
                <p class="hk-card hk-1">178</p>
                <p class="hk-card hk-2">visitors this week</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="card hk-card">
          <div class="card-content hk-card">
            <div class="media">
              <div class="media-left">
                <div class="hk-card-icon hk-card-light" style="background-color:hsl(171, 100%, 41%);">
                  <i data-feather="feather"></i>
                </div>
              </div>
              <div class="media-content">
                <p class="hk-card hk-1">51</p>
                <p class="hk-card hk-2">articles published</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="card hk-card">
          <div class="card-content hk-card">
            <div class="media">
              <div class="media-left">
                <div class="hk-card-icon hk-card-light" style="background-color:hsl(348, 100%, 61%);">
                  <i data-feather="search"></i>
                </div>
              </div>
              <div class="media-content">
                <p class="hk-card hk-1">#2</p>
                <p class="hk-card hk-2">on Google position</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="card hk-card">
          <div class="card-content hk-card">
            <div class="media">
              <div class="media-left">
                <div class="hk-card-icon hk-card-light" style="background-color:hsl(204, 86%, 53%);">
                  <i data-feather="wind"></i>
                </div>
              </div>
              <div class="media-content">
                <p class="hk-card hk-1">99.8%</p>
                <p class="hk-card hk-2">on PageSpeed</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <div class="notification is-warning">
      <button class="delete" onclick="return this.parentNode.remove();"></button>
      <strong>Warning:</strong> Your website is not using a SSL certificate, so the data transfered between your visitants and your server can be in danger. Additionally, the users browser may flag your website as insecure. You can install a certificate for free and we can teach you how in <a href="#">this article</a>.
    </div>
    
    <div class="notification is-success">
      <button class="delete" onclick="return this.parentNode.remove();"></button>
      <strong>Hey!</strong> A new update for Flight CMS is now available. All your styles and configurations may be fine. Get the latest security improvements by <a href="#">upgrading it to the <strong>version 2.0.1</strong> here</a>!
    </div>
  </div>
</section>
  
</body>

<script>feather.replace()</script>
  
</html>