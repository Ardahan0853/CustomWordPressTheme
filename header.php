<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php wp_head();?>
</head>


<body>
    
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <p>EN</p>
        <div class="div-toggle">
            <div class="rounded-left"></div>
        </div>
        <p>ES</p>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse container-flex" id="navbarNav">
      <ul class="navbar-nav navbar-nav-left">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">Founding Staff</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Key Differentiators</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Why an Alliance</a>
        </li>
      </ul>
      <div class="img-div">
      <img src="<?php echo get_template_directory_uri(); ?>/images/Logo.png" class="logo-image" alt="">
      </div>

      
      <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="#">our Principles</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Plan & Timeline</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">contact</a>
        </li>
      </ul>
    </div>
    <ul class="navbar-nav  nav-logo-item">
        <li class="nav-item custom-nav-item">
          <a class="nav-link" aria-current="page" href="#">
          <img src="<?php echo get_template_directory_uri(); ?>/images/TwitterLogo.png" class="twitter-logo" alt="">
          </a>
        </li>
        <li class="nav-item custom-nav-item">
          <a class="nav-link" href="#">
          <img src="<?php echo get_template_directory_uri(); ?>/images/InstagramLogo.png" class="instagram-logo" alt="">
          </a>
        </li>
      </ul>
  </div>
</nav>