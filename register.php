
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
              <a class="nav-link scroll-link" href="index.php">صفحه اصلی</a>
            </li>
            <li>
              <a class="nav-link scroll-link" href="index.php#about">درباره ما</a>
            </li>
            <li>
              <a class="nav-link scroll-link" href="#services">محصولات</a>
            </li>
            <li>
              <a class="nav-link scroll-link" href="#articles">کالکشن ها</a>
            </li>
            <li>
              <a class="nav-link scroll-link" href="#gallery">گالری</a>
            </li>
          </ul>

          <ul class="nav-icons">
            <li>
              <a class="nav-icon" href="login.php">
                <i class="bi bi-person-circle"></i>
              </a>
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
    <style >
      .p{
        
      }
		 .container{
			  transform: scale(1,0.7);
		  }
		
		.login__form__img{
			height: 600px;
			object-fit: fill;
		}
		.login__form__img img{
			transform: scale(1,1.5);
			border-radius: 0px 20px 20px 0px ;
		}
		.buttonn{
		
			font-family: parastoo;
		}
		
		body{
			background: #fff;
		}
		
		</style>
  
    <div class="container">
      <div class="login__form">
        <div class="login__form__img">
          <img
            src="images/_1e4ab07d-e12a-4442-9b96-af36f040df16.jpg"
            alt="images-logo"
          />
        </div>
        <div class="login__form__right">
          <h1>ثبت نام </h1>
<!-- header -->
<form id="regis" name="regis" method="get" action="registeraction.php">
	نام : <input type="text" id="name" name="name"><br>
	نام کاربری : <input type="text" id="user" name="user"><br>
	رمزعبور : <input type="password" id="pass" name="pass"><br>
	تکرار رمز عیور : <input type="password" id="repass" name="repass"><br>
	ایمیل : <input type="email" id="email" name="email"><br>
	شماره تماس : <input type="tel" id="tel" name="tel"><br>
	<button type="button" class="buttonn" onClick="check();"><b> ثبت اطلاعات </b> </button>
</form>
<script type="text/javascript">
	function check()
	{
		var x=document.getElementById("tel").value;
		if(x.length!=11)
			alert("باید تلفن 11 کاراکتر باشد ");
		else
			document.regis.submit();
	}	
</script>
<?php
include("footerlogin.php");
?>