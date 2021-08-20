<?php

ob_start();

include_once __DIR__ . "/src/includes/bootstrap.php";
include_once __DIR__ . "/src/includes/header.php";
?>

    <!DOCTYPE html>
 <html lang="en">
  <head>
   <title>Contact Us | Netmatters</title> 
   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
   <script src="javascript/polyfill.js"></script>
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
   <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;1,200;1,400;1,500&display=swap" rel="stylesheet"> 
   <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick-theme.css"/>
   <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick.css"/>
   <link href="//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.css" type="text/css" rel="stylesheet" />
   <link rel="apple-touch-icon" sizes="60x60" href="/apple-touch-icon.png">
   <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
   <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
   <link rel="manifest" href="/site.webmanifest">
   <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
   <link href="css/style.css" rel="stylesheet">
   <script src="https://kit.fontawesome.com/2617b01a9a.js" crossorigin="anonymous"></script>
   <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--Metatags-->
   <meta name="msapplication-TileColor" content="#da532c">
   <meta name="theme-color" content="#ffffff">
   </head>
<body>
    <div id="thankyou">
        <i class="far fa-check-circle"></i>
        <h1>Thankyou for your Enquiry!</h1>
        <span>You will be redirected now, if nothing happens please <a href="/netmatters_site/">Click Here</a>.</span>
    </div>
</body>
</html>

<?php
    header("refresh:10; url=index.php");
    exit;
?>
