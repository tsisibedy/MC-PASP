<div class="container">
    <div class="row m-dw-30" style="margin: auto;width: 700px;float: left;">
        <a href="<?php the_permalink(); ?>" style="text-decoration: none;">
            <h3 style="width:600px;color: #5F8E14;border: 1px solid #9FD0D5;padding: 10px;border-radius: 5px 5px 5px 5px;">
                <?php the_title(); ?>
            </h3>
        </a>
        <div class="col-xs-2" style="float: left;">
            <a href="<?php the_permalink(); ?>"
               style="text-decoration: none;"><?php the_post_thumbnail('thumbnail') ?></a>
        </div>
    </div>
    <div class="row m-dw-30" style="margin: auto;width: 600px;float: left;">
        <span style="font-size: 15px;margin-left: 100px;margin-right: 20px;"><?php the_excerpt(); ?></span>
        <p><?php echo get_date_and_category(
                esc_attr(get_the_date('c')),
                esc_html(get_the_date()),
                get_the_category_list(', '),
                get_the_tag_list('', ', ')
            );
            ?></p>
    </div>
</div>