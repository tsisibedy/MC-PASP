<?php $args = array(
    'post_type' => 'cenoel',
    'posts_per_page' => -1,
    'orderby' => 'menu_order',
    'order' => 'ASC'
);
$slider_query = new WP_Query($args);

if ($slider_query->have_posts()): ?>

    <div class="w3-content w3-section" style="max-width:600px;margin-top: 30px;margin-right: 80px;">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <?php $index_count = 0;
                while ($slider_query->have_posts()): $slider_query->the_post(); ?>
                    <?php echo '<li data-target="#myCarousel" data-slide-to="' . $index_count . '" class="' . ($index_count == 0 ? "active" : "") . '"></li>'; ?>
                    <!-- <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                     <li data-target="#myCarousel" data-slide-to="1"></li>
                     <li data-target="#myCarousel" data-slide-to="2"></li>
                     <li data-target="#myCarousel" data-slide-to="3"></li>-->
                    <?php $index_count++; endwhile; ?>
            </ol>
            <?php rewind_posts(); ?>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <?php $index_active = true;
                while ($slider_query->have_posts()): $slider_query->the_post();
                $thumbnail_html = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'front-slider');
                    $thumbnail_src = $thumbnail_html[0];
                    if ($index_active) {
                        $active = " active";
                    }else{
                        $active = "";
                    }
                    ?>
                    <div class="item <?php echo $active;?>">
                        <img src="<?php echo $thumbnail_src;?>"
                             alt="Los Angeles" style="width: 700px;height: 200px;box-shadow: 0px 0px 5px;">
                    </div>
                    <?php $index_active = false; endwhile;
                wp_reset_postdata(); ?>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
<?php endif; ?>