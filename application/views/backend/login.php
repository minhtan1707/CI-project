
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log In</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<div class="container" style="max-width:940px;">
    <?php echo form_open('login/check'); ?>
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
    <?php echo form_close();?>
</div>
  <!-- <script src="js/jquery-3.2.1.slim.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script> -->
</body>
</html>