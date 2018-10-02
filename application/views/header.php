<?php     $this->load->library('session');
$this->load->helper('url');?>
<!DOCTYPE html>
<html class="no-js" dir="ltr" lang="en" itemscope itemtype="http://schema.org/WebSite" prefix="og: http://ogp.me/ns#">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-tap-highlight" content="no"><!-- ////////////// Mobile title color ////////////// -->
    <meta name="theme-color" content="#000000">
    <meta name="msapplication-navbutton-color" content="#000000">
    <meta name="apple-mobile-web-app-status-bar-style" content="#000000">
    <title>Home - by FullStack Vietnam</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&amp;amp;subset=vietnamese" rel="stylesheet">
    <meta name="description" content="Description for home page">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback">
    <!-- Meta verification-->
    <meta name="google-site-verification" content="VhfbPndGW-UftEvWql2Nwt7F1F5KBgd3lMcGgjn4Ovc">
    <meta name="msvalidate.01" content="F7679394C660249FBA58732D6100A65A">
    <meta name="yandex-verification" content="bc82adfacdd74cbf">
    <link rel="alternate" type="application/rss+xml" title="DEMO SITE" href="//demo-site.com/feed.xml">
    <!-- Meta Tag-->
    <meta name="generator" content="DEMO SITE">
    <meta name="robots" content="noodp">
    <meta name="keywords" content="Bao Nguyen, Bảo Nguyên, Brands Designer, Web Developer, Apps Developer, Photograper, Front-End Developer">
    <link rel="dns-prefetch" href="http://maps.googleapis.com/">
    <link rel="dns-prefetch" href="http://s.w.org/">
    <meta name="apple-itunes-app" content="app-idXXX-XXX-XXX-XXXX">
    <!-- SEO MAP-->
    <meta name="DC.title" content="Home">
    <meta name="geo.region" content="EN">
    <meta name="geo.placename" content="DEMO SITE">
    <meta name="geo.position" content="36.204824;138.252924">
    <meta name="ICBM" content="36.204824,138.252924">
    <!-- SEO-->
    <meta name="author" content="DEMO SITE">
    <link rel="canonical" href="//demo-site.comundefined">
    <!-- Social: Twitter-->
    <meta name="twitter:card" content="Home - DEMO SITE">
    <meta name="twitter:site" content="demo-site.com">
    <meta name="twitter:creator" content="@Bao Nguyen">
    <meta name="twitter:title" content="Home - DEMO SITE">
    <meta name="twitter:description" content="Description for home page">
    <meta name="twitter:image:src" content="//demo-site.com/images/logo.png">
    <!-- Social: Facebook / Open Graph-->
    <meta property="fb:admins" content="XXXXXXX,XXXXXXX">
    <meta property="fb:app_id" content="100000511421818">
    <meta property="og:type" content="website">
    <meta property="og:url" content="//demo-site.comundefined">
    <meta property="og:title" content="Home- DEMO SITE">
    <meta property="og:image" content="//demo-site.com/images/logo.png">
    <meta property="og:description" content="Description for home page">
    <meta property="og:site_name" content="DEMO SITE">
    <meta property="article:author" content="//www.facebook.com/baonguyenyam">
    <meta property="article:publisher" content="//www.facebook.com/baonguyenyam">
    <!-- Social: Google / Schema.org-->
    <link rel="author" href="//plus.google.com/XXXXXXXXXXXXXX/">
    <link rel="publisher" href="//plus.google.com/XXXXXXXXXXXXXX/">
    <meta itemprop="name" content="Home- DEMO SITE">
    <meta itemprop="description" content="Description for home page">
    <meta itemprop="image" content="//demo-site.com/images/logo.png">
    <!-- Meta Tag Search-->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="Home- DEMO SITE">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries-->
    <!-- WARNING: Respond.js doesn't work if you view the page via file://-->
    <!--if lt IE 9
    script(src='//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js')
    script(src='//oss.maxcdn.com/respond/1.4.2/respond.min.js')
    --><!-- ////////////// CSS Include ////////////// -->
    <!-- inject:css -->
    <!-- endinject -->
    <link rel="stylesheet" href="<?php echo base_url('/static/css/').'thuvien.css';?>">
    <link rel="stylesheet" href="<?php echo base_url('/static/css/').'main.css';?>"><!-- ////////////// FAVICON ////////////// -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="../static/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="../static/favicon/favicon-16x16.png" sizes="16x16">
    <link rel="manifest" href="../static/favicon/manifest.json">
    <link rel="mask-icon" href="../static/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="../static/favicon/favicon.ico">
    <meta name="msapplication-TileColor" content="#000000">
    <meta name="msapplication-TileImage" content="../static/favicon/mstile-144x144.png">
    <meta name="msapplication-config" content="../static/favicon/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
  </head>
  <body class="home-page" id="top-page"><!-- ////////////// Header ////////////// --><!-- ////////////// HEADER ////////////// -->
    <header class="bg-light">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light"><a class="navbar-brand" href="#"> <img src="<?php echo base_url('/static/img/');?>logo.png" alt="Logo"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fullStackMenu" aria-controls="fullStackMenu" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
          <div class="collapse navbar-collapse" id="fullStackMenu">
            <div class="mr-auto"></div>
            <ul class="navbar-nav">
            <?php if(!isset($_SESSION['user']))
            {
                echo '<li class="nav-item"><a class="nav-link" href="'.site_url('/user?act=signup').'">Sign up</a></li>
                <li class="nav-item"><a class="nav-link" href="'.site_url('/user?act=login').'">Sign in</a></li>';
            } else{
                echo '<li class="nav-item"><a class="nav-link" href="services.html">'.$_SESSION['user']['username'].'</a></li>
                <li class="nav-item"><a class="nav-link" href="'.site_url('/user?act=logout').'">Sign Out</a></li>';
            }?>
              <li class="nav-item"><a class="nav-link" href="<?php echo site_url('/cart?act=checkout');?>">Checkout</a></li>
            </ul>
          </div>
        </nav>
      </div>
    </header><!-- ////////////// HEADER ////////////// --><!-- ////////////// End Header ////////////// -->
<!-- ////////////// Begin Main ////////////// -->
    <main>
      <section class="main-menu bg-danger">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light p-0">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fullStackMenu" aria-controls="fullStackMenu" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
            <div class="collapse navbar-collapse" id="fullStackMenu">
              <ul class="navbar-nav m-auto">
                <li class="nav-item"><a class="nav-link" href="<?php echo site_url('/');?>">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo site_url('/product');?>">Product</a></li>
                <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Category</a>
                  <div class="dropdown-menu bg-danger mt-0">
                    <a class="dropdown-item bg-danger text-white" href="<?php echo site_url('/categories?act=product_list&cat=').'Mobile';?>">Mobile</a>
                    <a class="dropdown-item bg-danger text-white" href="<?php echo site_url('/categories?act=product_list&cat=').'Laptop';?>">Laptop</a>
                    <a class="dropdown-item bg-danger text-white" href="<?php echo site_url('/categories?act=product_list&cat=').'Tablet';?>">Tablet</a>
                    <a class="dropdown-item bg-danger text-white" href="<?php echo site_url('/categories?act=product_list&cat=').'TV';?>">TV</a>
                    <a class="dropdown-item bg-danger text-white" href="<?php echo site_url('/categories?act=product_list&cat=').'Smart Watch';?>">Smart Watch</a>
                    <a class="dropdown-item bg-danger text-white" href="<?php echo site_url('/categories?act=product_list&cat=').'Speaker';?>">Speaker</a>
                  </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="services.html">About us</a></li>
                <li class="nav-item"><a class="nav-link" href="services.html">Contact Us</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo site_url('/cart?act=home');?>"><i class="fa fa-shopping-cart mr-2"></i>CART <span style="font-weight:900;color:lavender"><?php echo isset($_SESSION['cart'])?count($_SESSION['cart']):'';?></span></a></li>
              </ul>
            </div>
          </nav>
        </div>
    </section>