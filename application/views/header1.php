<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php echo $title;?>
    </title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <div class="container" style="max-width:940px;">
                <a class="navbar-brand text-light" href="#">CI Projects</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav navml-auto">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="<?php echo site_url('product')?>">Product List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="<?php echo site_url('cart')?>">Cart</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="<?php echo site_url('cart/clear')?>">Clear Cart</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="<?php echo site_url('categories')?>">Categories</a>
                        </li>
                        <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li> -->

                    </ul>
                </div>
            </div>
        </nav>
