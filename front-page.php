<?php get_header(); ?>
<div class="container mx-auto my-8">
    <?php if (have_posts()) : ?>
        <div class="max-w-full mx-auto">
            <!-- <img class="z-50" src="<?php echo get_bloginfo('template_url') . '/assets/images/centro-victoria.jpg' ?>" /> -->
        </div>
        <div class="max-w-full my-8">
            <a href="https://victoriaguanajuato.gob.mx/2022/07/05/feria-de-servicios/">
                <img src="https://victoriaguanajuato.gob.mx/wp-content/uploads/2022/07/feria-servicios.jpg" />
            </a>
        </div>

    <?php endif; ?>

</div>

<?php
get_footer();
