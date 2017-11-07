<?php get_header(); ?>
    <!--Body-->
    <section>
        <div style="margin:auto;width: 1000px;" class="container">
            <div class="row" style="margin: auto;width: 700px;float: left;">
                <br>
                <br>
                <section>
                    <?php if (have_posts()): ?>
                        <?php while (have_posts()):
                            the_post(); ?>

                            <?php get_template_part('single-content'); ?>
                            <div class="comments-template"> <?php comments_template(); ?> </div>

                        <?php endwhile; ?>

                        <ul style="margin-right: 100px;">
                            <li class="pull-left"><?php previous_post_link(); ?></li>
                            <li class="pull-right"><?php next_post_link(); ?></li>
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