
    <div class="container" style="max-width:940px;">

    <h4 class="font-weight-bold my-2 text-danger">Users List</h4>
             <?php foreach($users as $key=>$user): ?>
                <div class="row border">
                    <div class="col-10 my-1">
                        <div class="row">
                            <div class="col-6">
                                <p class="my-1"><?php echo $user['username'];?></p>
                                <p class="my-1"><?php echo 'Name: '.$user['name'];?></p>
                            </div>
                            <div class="col-6">
                                <p class="my-1"><?php echo 'Adress: '.$user['address'];?></p>
                                <p class="my-1"><?php echo 'Phone Number: '.$user['phone'];?></p>
                                <p class="my-1"><?php echo 'Email: '.$user['email'];?></p>
                            </div>
                        </div>


                    </div>
                    <div class="col-2 my-1 k-flex">
                    <a href="<?php echo site_url('/admin/user?act=upd&id=').$user['user_id']; ?>"class="btn btn-danger mt-2 px-3">Edit</a>
                    <a href="<?php echo site_url('/admin/user?act=delete&id=').$user['user_id']; ?>"class="btn btn-danger mt-2 px-3">Delete</a>
                    </div>
                    </div>
                <?php endforeach;?>
        </div>
