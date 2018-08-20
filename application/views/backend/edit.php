<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Insert Contact</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 col-md-8">
            <h2>Add Product</h2>
            <?php echo form_open('backend/product/update');?>
                <div class="form-row">
                    <input type=hidden name=id value="<?php echo $product['id'];?>">
                    <div class="col-6">
                        <input type="text" name="product_name" class="form-control" placeholder="Product name" value="<?php echo $product['product_name'];?>">
                    </div>
                    <div class="col-6">

                        <input type="text" name="price" class="form-control" placeholder="Price"  value="<?php echo $product['price'];?>">
                    </div>
                </div>
                <div class="form-group">
                    <label for="imagefile">Image File Name</label>
                    <input type="text" name="image_file" class="form-control" placeholder="Image file name"  value="<?php echo $product['image_file'];?>">
                </div>
                <div class="form-group">
                    <label for="messageform">Message</label>
                    <textarea class="form-control" name="description" id="messageform" rows="3"><?php echo $product['description'];?></textarea>
                </div>
                <div class=form-group>
                <select name=category_id class=form-control>
                <?php foreach($categories as $category):?>
                <option value="<?php echo $category['category_id'];?>" <?php if($category['category_id']==$product['category_id']){ echo "selected=selected";}?>><?php echo $category['category_name'];?></option>
                <?php endforeach;?>
                </select>
                <button class="btn btn-primary" type="submit" name=submit value=submit>Submit</button>
            </form>
            </div>
        </div>
    </div>

</body>

</html>