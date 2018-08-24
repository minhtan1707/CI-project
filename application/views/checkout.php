<div class="container" style="max-width:940px;">

<h1>Cart</h1>
<?php foreach($cart_items as $product):?>
<ul class=list-group>
    <li class=list-group-item>
        <div class="row">
            <div class="col-2">
                <img class="img-fluid" src="<?php echo base_url('/assets/images/').$product['image_file'];?>" alt="">
            </div>

            <?php   
                if($product['product_id']!="")
                {   
                    $total=0;
                    echo "<div class='col-6'>";
                    echo 'Product name: '.$product['product_name'].'<br>';        
                    echo 'Price: '.$product['price'].'$'.'<br>';
                    echo 'Description: '.$product['description'].'<br>';
                    echo 'Quantity: '.$product['quantity'].'<br>';
                    $sub_total=$product['price']*$product['quantity'];
                    $total+=$sub_total;
                    echo 'Price: '.$sub_total.'$';
                    echo '</div>';
                    
                }
                ?>

        </div>
    </li>
</ul>
<?php endforeach?>
<p class="text-right mr-3 mt-4">Total:
    <?php echo $total;?>$</p>
<h3>Customer detail for payment</h3>
<?php echo form_open('cart/checkout');?>
    <div class="form-group">
        <label for="nameform">Name</label>
        <input type="text" class="form-control" name="customer_name" id="nameform" placeholder="Name">
    </div>
    <div class="form-group">
        <label for="addressform">Address</label>
        <input type="text" class="form-control" name="customer_address" id="addressform" placeholder="Address">
    </div>
    <div class="form-group">
        <label for="phoneform">Phone Number</label>
        <input type="text" class="form-control" name="phone" id="phoneform" placeholder="Phone">
    </div>
    <div class="form-group">
        <label for="emailform">Email</label>
        <input type="text" class="form-control" name="email" id="emailform" placeholder="Email">
    </div>




    <button class="btn btn-primary mb-5" type="submit" name=submit value=submit>Make Payment</button>
    <?php echo form_close();?>
</div>
<script src="js/jquery-3.2.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>