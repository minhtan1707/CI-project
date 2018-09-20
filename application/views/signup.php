
<div class="container" style="max-width:940px;">
    <div class="message"><?php echo $message;?></div>
    <form action="" method='post'>
    <h2 class=mt-3>Sign Up Form</h2>
    <div class="form-row">
        <div class="col-6 my-2">
            <label>Username</label>
            <input type="text" name="username" class="form-control" placeholder="Username" >
        </div>
        <div class="col-6 my-2">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password">
        </div>
        <div class="col-12 my-2">
            <label></label>
            <input type="text" name="name" class="form-control" placeholder="Your Name" >
        </div>
        <div class="col-12 my-2">
            <label></label>
            <input type="text" name="address" class="form-control" placeholder="Your Address">
        </div>
        <div class="col-12 my-2">
            <label></label>
            <input type="text" name="phone" class="form-control" placeholder="Phone Number" >
        </div>
        <div class="col-12 my-2">
            <label></label>
            <input type="text" name="email" class="form-control" placeholder="Your Email">
        </div>
    </div>
        <button class="btn btn-primary mt-3" type="submit" value=submit>Submit</button>
    </form>
</div>

