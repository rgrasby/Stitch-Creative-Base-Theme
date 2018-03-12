<?php

$heroImage = get_field('hero_image');

if (is_home() && get_option('page_for_posts') ) {
    $img = wp_get_attachment_image_src(get_post_thumbnail_id(get_option('page_for_posts')),'full'); 
    $thumb_url = $img[0];
} else {
    $thumb_id = get_post_thumbnail_id($post->ID );
    $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
    $thumb_url = $thumb_url_array[0];
}
?>


<?php if ( !is_404() ) : ?>
<header id="hero">


    <?php if ( is_page() ): ?>

        <div class="hero-inner" <?php echo 'style="background-image:url('. $thumb_url.')"'?>>
             <h1>
                <span><?php the_field('hero_small_text', get_option('page_for_posts')); ?></span>
                <?php the_field('hero_large_text', get_option('page_for_posts')); ?>  
            </h1>
        </div>
            
    <?php elseif ( is_single() ): ?>

        <div class="hero-inner" <?php echo 'style="background-image:url('. $heroImage.')"';?>>
             <h1>
                <span><?php the_field('hero_small_text', get_option('page_for_posts')); ?></span>
                <?php the_field('hero_large_text', get_option('page_for_posts')); ?>  
            </h1>
        </div>

    <?php endif ?>



  <?php endif ?>
          
</h1>
              </div>
</header>
<div class="cross-stitch"></div>
<?php endif ?>