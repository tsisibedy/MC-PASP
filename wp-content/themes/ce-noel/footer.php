<div class="w3-row-padding" style="background-color: #5F8E14;min-height: 500px;color: white;margin-top: 100px;">
    <br>
    <p>
        <?php if (is_active_sidebar('footer-menu')) : ?>
        <?php dynamic_sidebar('footer-menu'); ?>
        <?php endif; ?>

    </p>
</div>
<br>
<?php wp_footer(); ?>
</body>
</html>
