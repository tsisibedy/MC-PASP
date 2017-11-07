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
            <li><a href="https://www.facebook.com/mcpaspMG/"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/fb.png"
                            style="width: 20px;height: 20px;"></a></li>
            <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/gmail.png"
                                 style="width: 20px;height: 20px;"></a></li>
            <li><a href="www.madagascar-unesco.com"><img
                            src="<?php echo get_template_directory_uri(); ?>/img/unesco.png"
                            style="width: 20px;height: 20px;"></a></li>
            <li><a href="wwww.mg.undp.org"><img src="<?php echo get_template_directory_uri(); ?>/img/pnud.png"
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

    </div>
</nav>