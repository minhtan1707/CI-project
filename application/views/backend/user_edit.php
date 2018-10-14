
<div class="container" style="max-width:940px;">
    <div class="message"><?php echo $message;?></div>
    <form action="" method='post'>
    <h4 class="font-weight-bold my-2 text-danger">Edit User Details</h4>
    <div class="form-row">
        <div class="col-6 my-2">
            <label>Username</label>
            <input type="text" name="username" class="form-control" placeholder="Username" value=<?php echo $user?$user['username']:"";?> >
        </div>
        <div class="col-12 my-2">
            <label></label>
            <input type="text" name="name" class="form-control" placeholder="Name" value=<?php echo $user?$user['name']:"";?> >
        </div>
        <div class="col-12 my-2">
            <label></label>
            <input type="text" name="address" class="form-control" placeholder="Address" value=<?php echo $user?$user['address']:"";?> >
        </div>
        <div class="col-12 my-2">
            <label></label>
            <input type="text" name="phone" class="form-control" placeholder="Phone Number" value=<?php echo $user?$user['phone']:"";?> >
        </div>
        <div class="col-12 my-2">
            <label></label>
            <input type="text" name="email" class="form-control" placeholder="Email" value=<?php echo $user?$user['phone']:"";?> >
        </div>
        <div class="col-12 my-2">
            <label></label>
            <input type="checkbox" name="admin" <?php echo $user['admin']==1?'checked':"";?>> Admin
        </div>
    </div>
        <button class="btn btn-primary mt-3" type="submit" value=submit>Submit</button>
    </form>
</div>

