<div class="container" style="max-width:940px;">
    <div class="col-lg-12">
        <h4 class="font-weight-bold my-2 text-danger">Manage Orders</h4>

        <?php foreach($orders as $order): ?>

            <div class='my-3 border-bottom pb-2'>
                <a class='bg-danger text-white px-3 font-weight-bold' href="<?php echo site_url('admin/order/detail/'.$order['id']); ?>">Order ID:
                    <?php echo ' '.$order['id']?> </a>
                <div class="row mb-1">
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
                        <form action="" method=post>
                            <input type=hidden name=id value=<?php echo $order['id']?>>
                            Delivered:  <input type=checkbox name=status <?php echo $order['status']==1?'checked':''?>>
                            <input type=submit class='btn btn-danger btn-sm' value="Change Status">
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</div>