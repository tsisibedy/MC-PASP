<?php get_header(); ?>

    <!--Body-->
    <section>
        <div style="margin:auto;width: 1000px;" class="container">
            <div class="row" style="margin: auto;width: 700px;float: left;">
                <br>
                <br>
                <section>
                    <?php get_template_part('content-contact'); ?>
                </section>
            </div>
            <?php get_template_part('menu'); ?>
        </div>
    </section>

<?php get_footer(); ?>