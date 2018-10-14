<div class="container" style="max-width:940px;">

    <h4 class="font-weight-bold my-2 text-danger">Categories List</h4>
    <ul class='list-group my-3'>
        <?php foreach($categories as $key=>$category):?>
        <li class='list-group-item'>

            <a href="<?php echo site_url('/admin/categories/product_list/'.$category->category_id);?>" class=text-danger>
                <div class="row">
                    <div class="col-3">
                        <img src="<?php echo base_url('/assets/images/').$category->image_file;?>" style="max-width:200px">
                    </div>
                    <div class="col-9">
                        <p class=ml-2>
                            <?php echo $category->category_name;?> </p>
                    </div>
                </div>
            </a>

        </li>
        <?php endforeach;?>
    </ul>
    <a class='btn btn-danger my-3' href="<?php echo site_url('/admin/categories/add');?>">Add Categories</a>