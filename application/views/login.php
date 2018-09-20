
<div class="container" style="max-width:940px;">
<div class="bg-success message text-light text-center p-2"><?php echo $this->session->flashdata('signup_success')?></div>
    <form action="" method='post'>
    <h2>Log In</h2>
    <div class="form-row">
                    <div class="col-6">
                        <input type="text" name="username" class="form-control" placeholder="User Name" >
                    </div>
                    <div class="col-6">

                        <input type="password" name="password" class="form-control" placeholder="Password">
                    </div>
                </div>
                <button class="btn btn-primary mt-3" type="submit" name=submit value=submit>Submit</button>
    </form>
</div>

