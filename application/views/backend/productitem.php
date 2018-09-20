
<div class="container" style="max-width:940px;">

    <h2>Contact detail</h2>
        <div class="row mt-3">
            
            <div class="col-3">
            <img class="img-fluid" src="<?php echo base_url('/assets/images/').$product->image_file;?>"></div>
            <div class="col-6">
            <h5><?php echo 'Name: '.$product->product_name;?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo 'Price: '.$product->price.'$';?></h6>
            <p class="card-text"><?php echo $product->description;?></p>
            <form action="<?php echo site_url('/admin/product?act=edit&id=').$product->id;?>" method=post>
            <input type=submit class="btn btn-primary" value=Edit></a>
                    </form>
            <a href="<?php echo site_url('/admin/product?act=delete&id=').$product->id; ?>"class="btn btn-danger mt-2 px-3">Delete</a>
            
            </div>
            

            
            

        </div>
    </div>
  <!-- <script src="js/jquery-3.2.1.slim.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script> -->
