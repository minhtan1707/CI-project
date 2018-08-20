
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Detail</title>
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
            <?php echo form_open('backend/product/edit/'.$product['id']);?>
            <input type=submit class="btn btn-primary" value=Edit></a>
            <form>
            <a href="<?php echo site_url('product/delete/'.$product['id']); ?>"class="btn btn-danger">Delete</a>
            
            </div>
            

            
            

        </div>
    </div>
  <!-- <script src="js/jquery-3.2.1.slim.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script> -->
</body>
</html>