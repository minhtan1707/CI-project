
      <section class="feature m-4">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <div class="owl-carousel owl-theme feature-product">
              <?php foreach($feature_products as $key=>$obj): ?>
                <div class="row">
                <div class="item bg-light col-7">
                <a href=<?php echo site_url( 'product/item/'.$obj->id); ?>>
                <img class="img-fluid" src="<?php echo base_url('/assets/images/').$obj->image_file;?>" style="max-height:100%">
                </a>
                </div>
                <div class="col-5">
                  <h2>FEATURE PRODUCT</h2>
                  <h3><?php echo $obj->product_name;?></h3>
                  <p><?php echo $obj->price;?> $</p>
                  <p><?php echo $obj->description;?></p>
                </div>
                </div>
              <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="best-seller m-5">
        <div class="container">
          <div class="row news_title section_title">
            <div class="col">
              <h3 class="btn btn-lg btn-danger m-0">Best Seller</h3>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="owl-carousel owl-theme best-seller-product m-0">
              <?php foreach($best_seller_products as $key=>$obj): ?>
              <a href=<?php echo site_url( 'product/item/'.$obj->id); ?>>
                <div class="item best-seller-item bg-light">
                <img src="<?php echo base_url('/assets/images/').$obj->image_file;?>">
                </div>
              </a>
              <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="promotion-banner m-5">
        <div class="container">
          <div class="row row-banner bg-light">
            <div class="col-8 banner">
              <h2>Only today</h2>
              <p>Gaming Desktop PC</p>
              <p>PROMOTION</p>
            </div>
            <div class="col-4 banner"></div>
          </div>
        </div>
      </section>
      <section class="seasonal m-4">
        <div class="container">
          <div class="row news_title section_title">
            <div class="col">
              <h3 class="btn btn-lg btn-danger m-0">Seasonal Products</h3>
            </div>
          </div>
          <div class="row">
            <div class="col">
              <div class="owl-carousel owl-theme seasonal-product m-0">
              <?php foreach($seasonal_products as $key=>$obj): ?>
              <a href=<?php echo site_url( 'product/item/'.$obj->id); ?>>
                <div class="item bg-light">
                <img src="<?php echo base_url('/assets/images/').$obj->image_file;?>">
                </div>
              </a>
              <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="feature-category m-4">
        <div class="container">
          <div class="row">
            <?php foreach($feature_categories as $key=>$obj):?>
              <div class="col-6">
                <div class="category-item bg-light p-5">
                  <h2><?php echo $obj->category_name;?></h2>
                  <p><?php echo $obj->description;?></p><a class="btn btn-danger btn-lg shop-btn" href="<?php echo site_url('/categories?act=product_list&cat=').$obj->category_name;?>">SHOP NOW</a>
                </div>
              </div>
            <?php endforeach;?>
          </div>
        </div>
      </section>
      <section class="services m-4">
        <div class="container">
          <div class="row bg-dark">
            <div class="col-lg-3 services-item p-5"><i class="fa fa-truck"></i>
              <p>FREE DELIVERY</p>
            </div>
            <div class="col-lg-3 services-item p-5"><i class="fa fa-truck"></i>
              <p>GUARANTEE</p>
            </div>
            <div class="col-lg-3 services-item p-5"><i class="fa fa-truck"></i>
              <p>PAYMENT SECURE</p>
            </div>
            <div class="col-lg-3 services-item p-5"><i class="fa fa-truck"></i>
              <p>SUPPORT 24/7</p>
            </div>
          </div>
        </div>
      </section>
    </main><!-- ////////////// End Main ////////////// -->
