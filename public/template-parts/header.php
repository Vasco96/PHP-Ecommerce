

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?></title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="<?php echo ROOT_URL; ?>assets/css/style-public.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="#" class="logo" > <img src="../images/logo.png">  </a>

    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#about-us">Chi siamo</a>
        <a href="#our-brands">Marchi</a>
        <a href="#contact-us">Contattaci</a>
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fa-solid fa-user" id="login-btn"></div>
    </div>

    <form method="post" class="login-form">
        <div class="header_login_form">
          <a class="accedi_login_form" href="<?php echo ROOT_URL; ?>auth?page=login">Accedi</a>
          <a class="registrati_login_form" href="<?php echo ROOT_URL; ?>auth?page=register">Registrati</a>
        </div>
        <div class="body_login_form">
          <li><i class="fa-solid fa-user"></i><a href="<?php echo ROOT_URL; ?>auth?page=login">Il mio account</a></li>
          <li><i class="fa-solid fa-box"></i><a href="<?php echo ROOT_URL; ?>auth?page=login">I miei ordini</a></li>
          <li><i class="fa-solid fa-star"></i><a href="<?php echo ROOT_URL; ?>auth?page=login">I miei preferiti</a></li>
        </div>
    </form>

    

</header>

<!-- header section ends -->