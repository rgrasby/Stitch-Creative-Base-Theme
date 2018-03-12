        <div id="team" class="row">
        <?php 
        $args = array( 
            'post_type' => 'team'
        );
        $the_query = new WP_Query( $args );
        ?>

        <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <div class="col-sm">
                <div class="svg-img">
                    <img alt="<?php the_title() ;?>" src="<?php the_post_thumbnail_url( ); ?> ">
                </div>
                <h3><?php the_title() ;?></h3>
                <?php the_content(); ?>
            </div>
            
        <?php endwhile; else: ?> 

            <p>Sorry, there are no posts to display</p> 
           
        <?php endif; wp_reset_query(); ?>
        </div>
