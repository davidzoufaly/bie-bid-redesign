
<div class="pagiantion">
    <?php 
        echo paginate_links(array(
            'total' => $query->max_num_pages
        ));
    ?>
</div>