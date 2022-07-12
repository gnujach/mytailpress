<div class="flex flex-col border border-gray-200 carousel-cell flex-wrap">
    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>
    <img class="md:rounded-md" src="<?php echo $image[0] ?>" alt="" />
    <div class="h-24 bg-white font-semibold pl-4 break-words">
        <a href="<?php the_permalink(); ?>" class="">
            <h2 class="text-sm  text-black text-center mt-2"><?php echo mb_strimwidth(get_the_title(), 0, 80, '...'); ?></h2>
        </a>
    </div>
</div>