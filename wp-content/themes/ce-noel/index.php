<html <?php language_attributes(); ?>>
<head>
    <title>Ministere de la culture</title>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body>
<div class="container">
    <img src="<?php echo get_template_directory_uri(); ?>/img/img.png" class="img">
    <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="logo">
</div>
<nav class="navbar navbar-inverse"
     style="background-color:#5F8E14;border-color:#5F8E14;border-radius: 0px 0px 0px 0px; ">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#" style="color: white;">M.C.P.A.S.P</a>
        </div>

        <ul class="nav navbar-nav navbar-right collapse navbar-collapse">
            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/fb.png"
                                 style="width: 20px;height: 20px;"></a></li>
            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/gmail.png"
                                 style="width: 20px;height: 20px;"></a></li>
        </ul>
        <?php
        wp_nav_menu(array(
                'menu' => 'top-menu',
                'theme_location' => 'primary',
                'depth' => 2,
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse',
                'container_id' => 'myNavbar',
                'menu_class' => 'nav navbar-nav',
                'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                'walker' => new WP_Bootstrap_Navwalker())
        );
        ?>
        <!--<div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li><a href="#" class="a" style="color: white;">Accueil</a></li>
                <li><a href="#" class="a" style="color: white;">Artisanat</a></li>
                <li><a href="#" class="a" style="color: white;">Culture</a></li>
                <li><a href="#" class="a" style="color: white;">Patrimoine</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#"><img src="<?php /*echo get_template_directory_uri(); */ ?>/img/fb.png"
                                     style="width: 20px;height: 20px;"></a></li>
                <li><a href="#"><img src="<?php /*echo get_template_directory_uri(); */ ?>/img/gmail.png"
                                     style="width: 20px;height: 20px;"></a></li>
            </ul>
        </div>-->
    </div>
</nav>

<!--Body-->
<div style="margin:auto;width: 1000px;" class="container">
    <div class="row" style="margin: auto;width: 700px;float: left;">
        <div class="w3-content w3-section" style="max-width:600px;margin-top: 30px;">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/culture-du-riz-a-madagascar1.jpg"
                             alt="Los Angeles" style="width:100%;max-height: 200px;box-shadow: 0px 0px 5px;">
                    </div>

                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/maxresdefault.jpg" alt="Chicago"
                             style="width:100%;max-height: 200px;box-shadow: 0px 0px 5px;">
                    </div>

                    <div class="item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/culture-du-riz-a-madagascar2.jpg"
                             alt="New york" style="width:100%;max-height: 200px;box-shadow: 0px 0px 5px;">
                    </div>
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
        <br>
        <br>
        <section>
            <?php if (have_posts()): ?>
                <?php while (have_posts()):
                    the_post(); ?>
                    <div class="container">
                        <div class="row m-dw-30" style="margin: auto;width: 700px;float: left;">
                            <a href="<?php the_permalink(); ?>" style="text-decoration: none;">
                                <h3 style="width:600px;color: #5F8E14;border: 1px solid #9FD0D5;padding: 10px;border-radius: 5px 5px 5px 5px;">
                                    <?php the_title(); ?>
                                </h3>
                            </a>
                            <div class="col-xs-2" style="float: left;">
                                <?php the_post_thumbnail('thumbnail'); ?>
                            </div>
                        </div>
                        <div class="row m-dw-30" style="margin: auto;width: 600px;float: left;">

                                <span style="font-size: 15px;margin-left: 100px;margin-right: 20px;"><?php the_excerpt(); ?></span>
                        </div>
                    </div>
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
    <div class="row" style="width: 300px;float: right;">
        <div class="panel-group" style="margin: auto;">
            <div class="panel panel-info">
                <div class="panel-heading" style="background-color:#be3631;color: white; ">CATEGORIES</div>
            </div>
        </div>
    </div>
</div>


<!--footer-->
<div style="height:400px;background-color:#5F8E14;border-color:#5F8E14;border-radius:0px 0px 0px 0px;margin-top: 100px;">
    <center>
        <br>
        <br>
        <div class="container" style="width:400px;float: left;color: white;height: 300px;">
            <h3>APROPOS</h3>
        </div>
        <div class="container"
             style="width:400px;float: left;color: white;border-left: 1px solid white;border-right: 1px solid white;height: 300px;">
            <h3>ADDRESSE</h3>
        </div>
        <div class="container" style="width:400px;float: left;color: white;height: 300px;">
            <h3>CONTACT</h3>
        </div>
    </center>
</div>

<br>


<?php wp_footer(); ?>
</body>
</html>
