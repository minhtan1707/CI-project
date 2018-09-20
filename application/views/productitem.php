
<div class="container" style="max-width:940px;">


        <div class="row mt-3">
            
            <div class="col-6">
            <img class="img-fluid" src="<?php echo base_url('/assets/images/').$product['image_file'];?>"></div>
            <div class="col-6">

            <h2 class=mt-4><?php echo $product['product_name'];?></h2>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo 'Price: '.$product['price'].'$';?></h6>
            <p class="card-text"><?php echo $product['description'];?></p>
            <form action=" <?php echo site_url('cart?act=add');?>" method=POST>
            <input type=hidden name='image_file' value="<?php echo $product['image_file'];;?>" >
            <input type=hidden name='product_name' value="<?php echo $product['product_name'];?>" >
            <input type=hidden name='price' value="<?php echo $product['price'];?>" >
            <input type=hidden name='description' value="<?php echo $product['description'];?>" >
            <input type=hidden name='product_id' value="<?php echo $product['id'];?>" >
            <div class=class='mt-5'>Quantity</div>
            <input  class='mt-3' type=number name=quantity value=1>
            <input type=submit name=submit class="btn btn-danger" value='Add to cart'>
            </form>
            
            </div>
            

            
            

        </div>
    </div>
