
    <div class="container" style="max-width:940px;">
        <div class="row">
            <div class="col-lg-12">
            <h4 class="font-weight-bold my-2 text-danger">Add Product</h4>
            <?php echo form_open_multipart('backend/product/add'); ?>
                <div class="form-row">
                    <div class="col-6">
                        <input type="text" name="product_name" class="form-control" placeholder="Product name">
                    </div>
                    <div class="col-6">

                        <input type="text" name="price" class="form-control" placeholder="Price">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="messageform">Message</label>
                    <textarea class="form-control" name="description" id="messageform" rows="3"></textarea>
                </div>
                <div class=form-group>
                <select name=category_id class=form-control>
                <?php foreach($categories as $key=>$category):?>
                <option value="<?php echo $category->category_id;?>"><?php echo $category->category_name;?></option>
                <?php endforeach;?>
                </select>
                <input type="file" name="template_image" size="20" accept="image/*"/>
                <button class="btn btn-danger mt-3" type="submit" name=submit value=submit>Submit</button>
            </form>
            </div>
        </div>
    </div>
