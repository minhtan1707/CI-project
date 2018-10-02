<div class="container" style="max-width:940px;">
<div class="col-lg-12 col-md-8">
    <h4 class="font-weight-bold mb-2">Manage Orders</h4>

    <?php foreach($orders as $order): ?>

    <a class='bg-dark text-white px-5' href="<?php echo site_url('admin/order/detail/'.$order['id']); ?>">Order ID:
        <?php echo ' '.$order['id']?> </a>
    <div class="row mb-1 border-bottom">
        <div class="col-5">

            <?php   echo 'Customer Name: '.$order['customer_name'].'<br>';
                                echo 'Customer Address: '.$order['customer_address'];
                        ?>
        </div>

        <div class="col-4">
            <?php   echo 'Phone: '.$order['phone'].'<br>';
                                echo 'Email: '.$order['email'];
                        ?>
        </div>

        <div class="col-3">
            <?php   
                        echo 'Delivered: ';
                        if($order['status']==0)
                        {
                            echo "No";
                        }else{
                            echo "Yes";
                        }
                        ?>
        </div>
    </div>
    <?php endforeach;?>
    </div>