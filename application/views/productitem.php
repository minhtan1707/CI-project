
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Detail</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container" style="max-width:940px;">

    <h2>Contact detail</h2>
        <div class="row mt-3">
            
            <div class="col-3">
            <img class="img-fluid" src="<?php echo base_url('/assets/images/').$product['image_file'];?>"></div>
            <div class="col-6">
            <h5><?php echo 'Name: '.$product['product_name'];?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo 'Price: '.$product['price'].'$';?></h6>
            <p class="card-text"><?php echo $product['description'];?></p>
            <?php echo form_open('cart/add');?>
            <input type=hidden name='image_file' value="<?php echo $product['image_file'];;?>" >
            <input type=hidden name='product_name' value="<?php echo $product['product_name'];?>" >
            <input type=hidden name='price' value="<?php echo $product['price'];?>" >
            <input type=hidden name='description' value="<?php echo $product['description'];?>" >
            <input type=hidden name='product_id' value="<?php echo $product['id'];?>" >
            <div class=class='mt-5'>Quantity</div>
            <input  class='mt-0' type=number name=quantity value=1>
            <input type=submit name=submit class="btn btn-primary mt-2" value='Add to cart'>
            <?php echo form_close();?>
            
            </div>
            

            
            

        </div>
    </div>
  <!-- <script src="js/jquery-3.2.1.slim.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script> -->
</body>
</html>