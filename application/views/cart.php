
    <div class="container" style="max-width:940px;">
    
    <h2 class="mt-5"><?php echo $title;?></h2>
        <div class="row">
            <?php foreach($products as $product): ?>
            <div class="col-3 mt-3">
                <div class="card" style="width:14rem;min-height:500px;">
                    <a href=<?php echo site_url('product/item/'.$product['product_id']); ?>><img class="card-img-top" src="<?php echo base_url('/assets/images/').$product['image_file'];?>"></a>
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $product['product_name'];?></h5>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo 'Price: '.$product['price'].'$';?></h6>
                        <p class="card-text" style="height:48px;"><?php echo $product['description'];?></p>
                        <form action="<?php echo site_url('/cart?act=upd');?>" method=POST>
                        <input type=hidden name='product_name' value="<?php echo $product['product_name'];?>" >
                        <input type=hidden name='price' value="<?php echo $product['price'];?>" >
                        <input type=hidden name='description' value="<?php echo $product['description'];?>" >
                        <input type=hidden name='product_id' value="<?php echo $product['product_id'];?>" >
                        
                        <div class=class='mt-5'>Quantity</div>
                        <input  class='mt-0' type=number name=quantity value=<?php echo $product['quantity'];?>>
                        <input type=submit name=submit class="btn btn-primary mt-2 d-inline-block" value='Update Cart'>
                        <a href="<?php echo site_url('cart?act=clear&id=').$product['product_id'];?>"class="btn btn-danger d-inline-block mt-2">Delete</a>
                        
        
                        </form>
                        
                    </div>
                </div>
            </div>
             <?php endforeach;?>
             
        </div>
        <div class="d-flex justify-content-end mt-5">
            <a href="<?php echo site_url('cart?act=checkout')?>" class="btn btn-primary">Check Out</a>
            <a href="<?php echo site_url('cart?act=clear')?>" class="btn btn-danger mr-2">Clear Cart</a>
        </div>

