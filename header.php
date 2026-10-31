<style type="text/css">
	*{
		font-family: parastoo;
	}
</style>
<?php

session_start();
?>
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
  </head>
  <body>
    <!-- Header -->
    <header id="home">
      <!-- navbar -->
      <nav class="navbar">
        <div class="navbar-center">
          <div class="nav-header">
            <h3><i class="bi bi-gem"></i>گالری سنجاق</h3>
			  
            
            <button class="nav-toggle" id="nav-toggle" type="button">
              <i class="bi bi-list-nested"></i>
            </button>
          </div>

          <ul class="nav-links" id="nav-links">
            <li>
              <a class="nav-link " href="index.php#home"> خانه</a>
            </li>
<!--
			  <?php 
			  if(isset($_SESSION["login"]) && $_SESSION["login"]===true)
			  {
				  $con=mysqli_connect("localhost","root","","galery");
if(mysqli_connect_errno())
{
	echo("ERROR : ". mysqli_connect_error());
}
				  $user=$_SESSION["username"];
//			     
				  $tedad="SELECT COUNT(idsabad) AS counts FROM sabad  WHERE username='$user'";
				  $qq=mysqli_query($con,$tedad);
				  if($row=mysqli_fetch_array($qq))
				  {
					  ?>
			   <li>
              <a class="nav-link " href="sabadshow.php"> سبد خرید :<?php echo($row['counts']); ?></a>
            </li>
			  <?php
				  }
					  
			  }
			  ?>
-->
			  <?php
              if(isset($_SESSION["login"]) && $_SESSION["login"]===true && $_SESSION["type"]==="admin")
              {
                ?>
                <li>
              <a class="nav-link " href="product.php"> پنل مدیریت</a>
            </li>
                <?php 
              } 
             
              ?>
            <li>
            <!-- class="nav-link scroll-link" -->
              <a class="nav-link " href="index.php#about">درباره ما</a>
            </li>
            <li>
              
              <a class="nav-link " href="index2.php">محصولات</a>
            </li>
			 
            <li>
              <a class="nav-link " href="index.php#articles">کالکشن ها</a>
            </li>
            <li>
              <a class="nav-link " href="index.php#gallery">گالری</a>
            </li>
			  
          </ul>

          <ul class="nav-icons">
            
            <li>
              <a class="nav-icon" href="sabadshow.php">
                <i class="bi bi-cart" class="card"></i>  
              </a>
            </li>
			  	  <?php 
			  if(isset($_SESSION["login"]) && $_SESSION["login"]===true)
			  {
				  $con=mysqli_connect("localhost","root","","galery");
if(mysqli_connect_errno())
{
	echo("ERROR : ". mysqli_connect_error());
}
				  $user=$_SESSION["username"];
//			       $q="SELECT * FROM sabad WHERE username='{$_SESSION["username"]}'";
				  $tedad="SELECT COUNT(idsabad) AS counts FROM sabad  WHERE username='$user'";
				  $qq=mysqli_query($con,$tedad);
				  if($row=mysqli_fetch_array($qq))
				  {
					  ?>
			   <li>
              <div style="  margin-top: 2px; text-align: center;height: 20px; border-radius:10px;width: 12px;background-color:#c5930a;color: black;font-family: parastoo;"><?php echo($row['counts']); ?></div>
            </li>
			  <?php
				  }
					  
			  }
			  ?>
           
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
			  <li>
              <a class="nav-icon" href="">
                  <i class="bi bi-search"></i>
				</a>
	
            </li>
			 <form action="search.php" method="post">
	<input type="search" name="search" placeholder=" جست و جو" style=" width: 80px; margin-right: 2px; border: 2px solid #c5930a ; font-family: parastoo; text-align: center">
</form>
          </ul>
        </div>
      </nav>
	  </header>
	