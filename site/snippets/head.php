<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Global Site Tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-102086397-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments)};
    gtag('js', new Date());

    gtag('config', 'UA-102086397-1');
  </script>

  <title><?php echo $site->title()->html() ?></title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="theme-color" content="#1C212C">

  <?php if ($page->description() != ''): ?>
  <meta name="description" content="<?php echo $page->description()->html() ?>" />
  <?php else: ?>
  <meta name="description" content="<?php echo $site->description()->html() ?>" />
  <?php endif ?>

  <?php if ($page->keywords() != ''): ?>
  <meta name="keywords" content="<?php echo $page->keywords()->html() ?>" />
  <?php else: ?>
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>" />
  <?php endif ?>

  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600|Open+Sans:300,400" rel="stylesheet">

  <?php echo css('assets/css/imports/bootstrap_grid.css') ?>
  <?php echo css('assets/css/style.css?3') ?>

  <!-- Facebook Pixel Code -->
  <script>
  !function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
  n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
  document,'script','https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '171813830054080'); // Insert your pixel ID here.
  fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=171813830054080&ev=PageView&noscript=1"
  /></noscript>
  <!-- DO NOT MODIFY -->
  <!-- End Facebook Pixel Code -->

</head>
<body>
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<?php echo js('assets/js/imports/bootstrap.js') ?>
<?php echo js('assets/js/imports/jquery.mobile.custom.min.js') ?>
