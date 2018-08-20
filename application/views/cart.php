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
    
    <h1><?php echo $title;?></h1>
        <div class="row">
            <?php foreach($products as $product): ?>
            <div class="col-3 mt-3">
                <div class="card" style="width:14rem;min-height:500px;">
                    <a href=<?php echo site_url('product/item/'.$product['id']); ?>><img class="card-img-top" src="<?php echo base_url('/assets/images/').$product['options']['image_file'];?>"></a>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product['name'];?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo 'Price: '.$product['price'].'$';?></h6>
                        <p class="card-text" style="height:48px;"><?php echo $product['options']['description'];?></p>
                        <?php echo form_open('cart/update');?>
                        <input type=hidden name='product_name' value="<?php echo $product['name'];?>" >
                        <input type=hidden name='price' value="<?php echo $product['price'];?>" >
                        <input type=hidden name='description' value="<?php echo $product['options']['description'];?>" >
                        <input type=hidden name='product_id' value="<?php echo $product['id'];?>" >
                        <input type=hidden name='rowid' value="<?php echo $product['rowid'];?>" >
                        <div class=class='mt-5'>Quantity</div>
                        <input  class='mt-0' type=number name=quantity value=<?php echo $product['qty'];?>>
                        <input type=submit name=submit class="btn btn-success mt-2 d-inline-block" value='Update Cart'>
                        <a href="<?php echo site_url('cart/clear/'.$product['id']); ?>"class="btn btn-danger d-inline-block mt-2">Delete</a>
                        
                        <?php echo form_close();?>
                        </form>
                        
                    </div>
                </div>
            </div>
             <?php endforeach;?>
        </div>



</body>
</html>