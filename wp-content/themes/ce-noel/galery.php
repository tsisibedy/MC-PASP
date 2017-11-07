<div class="w3-content w3-section" style="max-width:600px;margin-top: 30px;margin-right: 80px;">
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