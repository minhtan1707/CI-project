
    <div class="container" style="max-width:940px;">
    <div class="bg-success message text-light text-center p-2"><?php echo $this->session->flashdata('itemadded')?></div>
    <h1><?php echo $title;?></h1>
             <?php foreach($products as $product): ?>
                <div class="row border">
                    <div class="col-2 my-1">
                            <a href=<?php echo site_url('admin/product?act=item&id=').$product->id; ?>><img class="img-fluid" src="<?php echo base_url('/assets/images/').$product->image_file;?>" style="height:130px"></a>
                    </div>         
                    <div class="col-8 my-1">
                                <p class="my-1"><?php echo $product->product_name;?></p>
                                <p class="my-1 text-muted"><?php echo 'Price: '.$product->price.'$';?></p>
                                <p class="my-1"><?php echo $product->description;?></p>
                    </div>      
                    <div class="col-2 my-1 k-flex">
                    <form action="<?php echo site_url('/admin/product?act=edit&id=').$product->id;?>" method=post>
                        <input type=hidden name='image_file' value="<?php echo $product->image_file;;?>" >
                        <input type=hidden name='product_name' value="<?php echo $product->product_name;?>" >
                        <input type=hidden name='price' value="<?php echo $product->price;?>" >
                        <input type=hidden name='description' value="<?php echo $product->description;?>" >
                        <input type=hidden name='product_id' value="<?php echo $product->id;?>" >
                        <input type=submit class="btn btn-primary px-4" value=Edit></a>
                        </form>
                        <a href="<?php echo site_url('/admin/product?act=delete&id=').$product->id; ?>"class="btn btn-danger mt-2 px-3">Delete</a>
                        
                    </div>       
                        
                    </div>                  
                <?php endforeach;?>
        </div>
