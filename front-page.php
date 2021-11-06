<?php get_header(); ?>
<div class="container mx-auto my-8">
    <?php if (have_posts()) : ?>
        <div class="max-w-full mx-auto">
            <img class="z-50" src="<?php echo get_bloginfo('template_url') . '/assets/images/centro-victoria.jpg' ?>" />
        </div>

    <?php endif; ?>

</div>

<?php
get_footer();
