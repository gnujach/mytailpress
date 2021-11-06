<?php get_header(); ?>
<?php echo get_bloginfo('template_url') ?>
<div class="container mx-auto my-8">
    <?php if (have_posts()) : ?>
        <div class="max-w-full mx-auto">
            <img class="z-50" src="wp-content/uploads/2021/11/centro-victoria.jpg" />
        </div>

    <?php endif; ?>

</div>

<?php
get_footer();
