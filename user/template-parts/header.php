<?php
// Prevent from direct access
if (! defined('ROOT_URL')) {
  die;
}

global $loggedInUser;
?>


    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?></title>

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- custom css file link  -->
    <link rel="stylesheet" href="<?php echo ROOT_URL; ?>assets/css/style-user.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="<?php echo ROOT_URL; ?>index.php" class="logo" > <img src="../images/logo.png">  </a>
    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#about-us">Chi siamo</a>
        <a href="#our-brands">Marchi</a>
        <a href="#contact-us">Contattaci</a>
    </nav>

    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-user" id="login-btn"></div>
    </div>

</header>

<!-- header section ends -->

    
