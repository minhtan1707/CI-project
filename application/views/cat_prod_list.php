<div class="container" style="max-width:940px;">
    <div class="bg-primary message text-light text-center" style="line-height:2rem">
        <?php echo isset($itemadded)?$itemadded:"";?>
    </div>
    <div class="bg-primary message text-light text-center" style="line-height:2rem">
        <?php echo isset($clearcart)?$clearcart:"";?>
    </div>
    <form action="" method="get" class="mt-4 ml-auto">
        <div class="form-row">
            <div class="col-7"></div>
            <div class="col-2">
                <select name=order class="form-control">
                    <option value="name">Name</option>
                    <option value="1">Price low to high</option>
                    <option value="2">Price high to low</option>
                </select>
            </div>
            <div class="col-2">
                <select name=limit class="form-control">
                    <option value=4>Per page</option>
                    <option value=8>8</option>
                    <option value=16>16</option>
                    <option value=20>20</option>
                </select>
            </div>
            <div class="col-1">
                <input type=submit class='btn btn-click' value="Sort By">
            </div>
        </div>
    </form>
    <div class="row mt-4">
        <?php if($products):?>

        <?php foreach($products as $product): ?>
        <div class="col-3 my-2">
            <div class="card d-flex flex-row flex-wrap" style="width:16rem;height:500px;">
                <a href=<?php echo site_url( 'product/item/'.$product->id); ?>>
                    <img class="card-img-top m-1" src="<?php echo base_url('/assets/images/').$product->image_file;?>" style="max-height:220px;max-width:98%">
                </a>
                <div class="card-body align-self-end">
                    <h5 class="card-title" style="width:100%">
                        <?php echo $product->product_name;?>
                    </h5>
                    <h6 class="card-subtitle mb-2 text-muted">
                        <?php echo 'Price: '.$product->price.'$';?>
                    </h6>
                    <p class="card-text" style="height:48px;">
                        <?php echo $product->description;?>
                    </p>
                    <form action="<?php echo site_url('/cart?act=add');?>" method=post>
                        <input type=hidden name='image_file' value="<?php echo $product->image_file;?>">
                        <input type=hidden name='product_name' value="<?php echo $product->product_name;?>">
                        <input type=hidden name='price' value="<?php echo $product->price;?>">
                        <input type=hidden name='description' value="<?php echo $product->description;?>">
                        <input type=hidden name='product_id' value="<?php echo $product->id;?>">
                        <div class=class='mt-5'>Quantity</div>
                        <input class='mt-0' type=number name=quantity value=1>

                        <input type=submit name=submit class="btn btn-danger mt-1" value='Add to cart'>
                    </form>
                </div>
            </div>
        </div>
        <?php endforeach;?>
        <div class="col-12 text-center mt-4">
            <a href="<?php echo site_url().'categories?act=product_list&cat='.$category->category_name.'&page='.$previous_page.'&limit='.$limit;?>"
                class="<?php echo $previous_page<1?'disabled':'';?> page btn btn-click">Previous</a>
            <a class="page btn current-page">
                <?php echo $current_page.'/'.$total_page;?>
            </a>
            <a href="<?php echo site_url().'/categories?act=product_list&cat='.$category->category_name.'&page='.$next_page.'&limit='.$limit;?>"
                class="<?php echo $next_page>$total_page?'disabled':'';?> page btn btn-click">Next</a>
        </div>
        <?php else: ?>
        <h2>There is no item in this CATEGORY</h2>
        <?php endif;?>
    </div>
</div>