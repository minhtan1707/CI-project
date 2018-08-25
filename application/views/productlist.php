<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title;?></title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="container-fluid">

    
    </div>
    <div class="container" style="max-width:940px;">
    
    <h2><?php echo $title;?></h2>
        <div class="row">
            <?php foreach($products as $product): ?>
            <div class="col-3 my-2">
                <div class="card d-flex flex-row flex-wrap" style="width:14rem;height:500px;">
                    <a href=<?php echo site_url('product/item/'.$product['id']); ?>><img class="card-img-top m-1" src="<?php echo base_url('/assets/images/').$product['image_file'];?>" style="max-height:222.4px"></a>
                    <div class="card-body align-self-end">
                        <h5 class="card-title" style="width:100%"><?php echo $product['product_name'];?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo 'Price: '.$product['price'].'$';?></h6>
                        <p class="card-text" style="height:48px;"><?php echo $product['description'];?></p>
                        <?php echo form_open('cart/add');?>
                        <input type=hidden name='image_file' value="<?php echo $product['image_file'];;?>" >
                        <input type=hidden name='product_name' value="<?php echo $product['product_name'];?>" >
                        <input type=hidden name='price' value="<?php echo $product['price'];?>" >
                        <input type=hidden name='description' value="<?php echo $product['description'];?>" >
                        <input type=hidden name='product_id' value="<?php echo $product['id'];?>" >
                        <div class=class='mt-5'>Quantity</div>
                        <input class='mt-0' type=number name=quantity value=1>
                        <?php echo form_close();?>
                        <input type=submit name=submit class="btn btn-primary mt-1" value='Add to cart'>
                    </div>
                </div>
            </div>
             <?php endforeach;?>
        </div>



</body>
</html>