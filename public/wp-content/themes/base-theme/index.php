<?php get_header(); ?>

    <div class="container-fluid" id="articles">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="offset-hero article-wrap">
                    
                    <?php 
                    if ( have_posts() ) :
                        while ( have_posts() ) : the_post();
                                get_template_part( 'template-parts/blog/blog', 'articles' ); 
                        endwhile;
                    endif; ?>
                    
                </div>
                
                <?php if ($wp_query->max_num_pages > 1) : ?>    
                    <div class="loadmore-wrap text-center">
                        <button id="loadmore" class="btn btn-md btn-primary"><span>Load More Posts</span></button>
                        <div class="the-end">
                            <svg viewBox="0 0 32 32" class="icon">
                                <use xlink:href="#smile"></use>
                            </svg>
                            <h3>You reached the end.</h3>
                        </div>
                    </div>
                <?php endif; ?> 

            </div>
        </div>
    </div>

<?php get_footer();