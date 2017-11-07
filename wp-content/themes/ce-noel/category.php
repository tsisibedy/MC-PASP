<?php get_header(); ?>
    <!--Body-->
    <section>
        <div style="margin:auto;width: 1000px;" class="container">
            <div class="row" style="margin: auto;width: 700px;float: left;">
                <br>
                <br>
                <section>
                    <div class="row">
                        <div class="col-xs-12">
                            <p>Archives dans <?php single_cat_title('', true); ?></p>
                        </div>
                    </div>
                    <?php if (have_posts()): ?>
                        <?php while (have_posts()):
                            the_post(); ?>

                            <?php get_template_part('content'); ?>

                            <hr style="border: 2px solid #be3631;margin-right:60px;margin-top: 50px;margin-bottom: 50px;">
                        <?php endwhile; ?>
                        <ul style="margin-right: 100px;">
                            <li class="pull-left"><a href="<?php previous_posts(); ?>">previous</a></li>
                            <li class="pull-right"><a href="<?php next_posts(); ?>">next</a></li>
                        </ul>
                    <?php else: ?>
                        <div class="col-xs-10">
                            <p>Pas de resultats</p>
                        </div>
                    <?php endif; ?>
                </section>
            </div>
            <?php get_template_part('menu'); ?>
        </div>
    </section>

<?php get_footer(); ?>