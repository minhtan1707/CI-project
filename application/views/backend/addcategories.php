<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Insert Categories</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 col-md-8">
            <h2>Add Categories</h2>
            <?php echo form_open('backend/categories/add'); ?>
                <div class="form-row">
                    <div class="col-6">
                        <input type="text" name="categories_name" class="form-control" placeholder="Categories name">
                    </div>
                </div>
                <button class="btn btn-primary mt-3" type="submit" name=submit value=submit>Submit</button>
                </div>
            </form>
        </div>
    </div>

</body>

</html>