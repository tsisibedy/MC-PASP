<?php get_header(); ?>
    <!--Body-->
    <section>
        <div style="margin:auto;width: 1000px;" class="container">
            <div class="row" style="margin: auto;width: 700px;float: left;">
                <?php get_template_part('galery'); ?>
                <br>
                <br>
                <section>
                    <div class="row">
                        <div class="col-xs-12">
                            <p>List des articles avec l'etiquette <?php single_tag_title(''); ?></p>
                        </div>
                    </div>
                    <?php if (have_posts()): ?>
                        <?php while (have_posts()):
                            the_post(); ?>

                            <?php get_template_part('content'); ?>

                            <hr style="border: 2px solid #be3631;margin-right:60px;margin-top: 50px;margin-bottom: 50px;">
                        <?php endwhile; ?>
                    <?php else: ?>
                        <div class="col-xs-10">
                            <p>Pas de resultats</p>
                        </div>
                    <?php endif; ?>
                </section>
            </div>
            <br>
            <br>
            <?php get_template_part('menu'); ?>
        </div>
    </section>

<?php get_footer(); ?>