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
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <div class="container" style="max-width:940px;">
                <a class="navbar-brand text-light" href="#">CI Projects</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link text-light" href="<?php echo site_url('admin/product')?>">Product List</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="<?php echo site_url('product/add'); ?>">Add Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="<?php echo site_url('admin/categories'); ?>">Categories</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-light" href="<?php echo site_url('admin/order'); ?>">Orders</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>