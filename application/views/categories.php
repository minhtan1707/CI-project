
    <div class="container" style="max-width:940px;">
    
    <h1>Categories list</h1>
        <ul class=list-group>
            <?php foreach($categories as $category):?>
                <li class='list-group-item'>
                <a href="<?php echo site_url('/categories/product_list/'.$category['category_id']);?>" > <?php echo $category['category_name'];?> </a>
                </li>
            <?php endforeach;?>
        </ul>


</body>
</html>