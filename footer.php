<div class="sidebar">
    <?php if (is_active_sidebar('sidebar')) : ?>
        <?php dynamic_sidebar('sidebar'); ?>
    <?php endif; ?>
</div>

<div class="clr"></div>

</div><!-- .container -->

<footer>
    <div class="container">
        <p>&copy; <?php the_date('Y'); ?> - <?php bloginfo('nama'); ?></p>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>