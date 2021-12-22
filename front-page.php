<?php get_header(); ?>
<div class="container mx-auto my-8">
    <?php if (have_posts()) : ?>
        <div class="max-w-full mx-auto">
            <img class="z-50" src="<?php echo get_bloginfo('template_url') . '/assets/images/centro-victoria.jpg' ?>" />
        </div>
        <div class="max-w-sm my-8">
            <a href="https://drive.google.com/file/d/1TkIgcsEwoOT9hFt8NdFIOwHv9V3fSNMy/view">
                <img class="z-50" src="<?php echo get_bloginfo('template_url') . '/assets/images/convocatoria-controlaria.jpg' ?>" />
            </a>
        </div>

    <?php endif; ?>

</div>

<?php
get_footer();
