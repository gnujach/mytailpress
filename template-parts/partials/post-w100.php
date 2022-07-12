<div class="max-w-full my-8">
    <a href="<?php the_permalink(); ?>" class="">
        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full-size'); ?>
        <img class="rounded-md" src="<?php echo $image[0] ?>" alt="" />
        <h2 class="text-xl md:text-2xl  text-black text-center mt-2"><?php echo mb_strimwidth(get_the_title(), 0, 80, '...'); ?></h2>
    </a>
</div>