

    <div class="container" style="max-width:940px;">
        <div class="row">
            <div class="col-lg-10 col-md-8">
            <h2>Add Product</h2>
            <?php echo form_open_multipart('backend/categories/add'); ?>
                <div class="form-row">
                    <div class="col-12">
                        <input type="text" name="category_name" class="form-control" placeholder="Category name">
                    </div>
                    <div class="col-6">

                         Feature Category <input type="checkbox" name="feature" value="feature">
                    </div>
                </div>
                
                <div class="form-group">
                    <label for="messageform">Description</label>
                    <textarea class="form-control" name="description" id="messageform" rows="3"></textarea>
                </div>
                <input type="file" name="category_image" size="20" accept="image/*"/>
                <button class="btn btn-primary mt-3" type="submit" name=submit value=submit>Submit</button>
            </form>
            </div>
        </div>
    </div>

</body>

</html>