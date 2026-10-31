<?php session_start();?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>گالری سنجاق</title>
    <!-- Favicon -->

    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="images/favicon_io/site.webmanifest">
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="./css/bootstrap-icons.css" />
    <!-- styles css -->
    <link rel="stylesheet" href="./css/main.css" />
    <link rel="stylesheet" href="./css/stylelogin.css" />

  </head>
  <body>
    <!-- Header -->
    <header id="home">
      <!-- navbar -->
      <nav class="navbar">
        <div class="navbar-center">
          <div class="nav-header">
            <h3> <i class="bi bi-gem"></i>گالری سنجاق</h3>
           
            <button class="nav-toggle" id="nav-toggle" type="button">
              <i class="bi bi-list-nested"></i>
            </button>
          </div>

          <ul class="nav-links" id="nav-links">
            <li>
              <a class="nav-link " href="index.php">صفحه اصلی</a>
            </li>
            <li>
              <a class="nav-link " href="index.php#about">درباره ما</a>
            </li>
            <li>
              <a class="nav-link " href="index2.php">محصولات</a>
            </li>
            <li>
              <a class="nav-link scroll-link" href="index.php#articles">کالکشن ها</a>
            </li>
            <li>
              <a class="nav-link scroll-link" href="index.php#gallery">گالری</a>
            </li>
          </ul>

          <ul class="nav-icons">
            <li>
            <?php
              if(isset($_SESSION["login"]) && $_SESSION["login"]===true)
              {
                ?>
                <a class="nav-icon" href="logout.php">
                <i class="bi bi-person-check-fill"></i>
                </a>
                <?php 
              } 
              else
              {
              ?>
              <a class="nav-icon" href="login.php">
                <i class="bi bi-person-circle"></i>
              </a>
              <?php 
              }
              ?>
            </li>
            <li>
              <a class="nav-icon" href="#">
                <i class="bi bi-cart"></i>
              </a>
            </li>
            <li>
              <a class="nav-icon" href="#">
                <i class="bi bi-instagram"></i>
              </a>
            </li>
          </ul>
        </div>
      </nav>
    <!-- login -->
      <style type="text/css">
		  .container{
			  transform: scale(0.8);
		  }
		</style>
    <div class="container">
      <div class="login__form">
        <div class="login__form__img">
          <img
            src="images/p1.jpg"
            alt="images-logo"
          />
        </div>
        <div class="login__form__right">
          