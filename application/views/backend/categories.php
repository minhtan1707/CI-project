<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category List</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="container-fluid">

    
    </div>
    <div class="container" style="max-width:940px;">
    
    <h1>Categories list</h1>    
        <ul class=list-group>
            <?php foreach($categories as $category):?>
                <li class=list-group-item>
                <a href="<?php echo site_url('/categories/product_list/'.$category['category_id']);?>" > <?php echo $category['category_name'];?> </a>
                </li>
            <?php endforeach;?>
        </ul>



</body>
</html>