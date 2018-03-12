    <?php 
    $args = array( 
        'post_type' => 'testimonials'
    );
    $the_query = new WP_Query( $args );
    ?>

    <div class="owl-carousel">
    <?php if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

        <blockquote class="testimonial-block">
            <span class="quotation-mark-left">&ldquo;</span>
            <div class="testimonial-text">
                <?php the_content(); ?>
                <h4><?php the_field('testimonial_name'); ?>, <?php the_field('testimonial_company'); ?></h4>
            </div>
            <span class="quotation-mark-right">&rdquo;</span>
        </blockquote>      

    <?php endwhile; endif; wp_reset_query(); ?>
    </div>

