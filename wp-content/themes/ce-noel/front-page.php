<?php get_header(); ?>

    <!--Body-->
    <section>
        <div style="margin:auto;width: 1000px;" class="container">
            <div class="row" style="margin: auto;width: 700px;float: left;">
                <?php get_template_part('galery'); ?>
                <br>
                <br>
                <section>


                            <?php get_template_part('content-front-page'); ?>


                </section>
            </div>
            <?php get_template_part('menu'); ?>
        </div>
    </section>

<?php get_footer(); ?>