<?php get_header(); ?>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="error-404-content">            
                    <svg viewBox="0 0 32 32" class="icon">
                        <use xlink:href="#frown"></use>
                    </svg>
                    <h2>404 Page not found</h2>
                    <p>The page you are looking for doesn't appear to exist.</p>
                    <div class="btn-group">
                        <a href="/pursue" class="btn btn-md btn-primary">
                            <span>Connect with us</span>
                        </a>
                        <a href="<?php echo get_home_url(); ?>" class="btn btn-md btn-primary">
                            <span>Back to Homepage</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php get_footer();
