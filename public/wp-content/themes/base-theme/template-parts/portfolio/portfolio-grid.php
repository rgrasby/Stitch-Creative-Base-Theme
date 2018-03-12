    <div id="portfolio-grid" class="row row-eq-height no-gutters">

    <?php 
    $args = array( 
        'post_type'      => 'portfolio',
        'posts_per_page' => '24'
    );
    $the_query = new WP_Query( $args );
    ?>

    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

        <div class="col-sm-6 col-lg-4">

            <a href="<?php the_permalink();?>" class="portfolio-item">
                <span class="portfolio-img" style="background-image: url('<?php the_post_thumbnail_url('large'); ?>');"></span>
                <div class="portfolio-info">
                    <div class="portfolio-info-inner">
                        <h3><?php echo get_the_title(); ?></h3>
                        <ul class="project-type">

                            <?php
                            $term_lists = wp_get_post_terms($post->ID, 'project_types');
                            $i = 0;
                            foreach( $term_lists as $term_list ) :
                            $i++;
                            ?>

                                <li>
                                    <?php if($i > 1): ?>
                                        <span>|</span>
                                    <?php endif; ?>
                                    <?php echo $term_list->name ?>
                                </li>

                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>

            </a>

        </div>

    <?php endwhile; endif; wp_reset_query(); ?>

    </div>
