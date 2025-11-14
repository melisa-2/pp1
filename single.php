<?php get_header(); ?>

<div id="primary" class="content-area">
    <div id="main" class="site-main">

        <div class="container">

            <?php while ( have_posts() ) : the_post(); ?>
                
                <?php get_template_part( 'parts/content', 'single' ); ?>

                <div class="wpdevs-pagination single-pagination">
                    <div class="pages previous">
                        <?php previous_post_link('&laquo; %link'); ?>
                    </div>
                    <div class="pages next">
                        <?php next_post_link('%link &raquo;'); ?>
                    </div>
                </div>

                <?php
                if ( comments_open() || get_comments_number() ) {
                    comments_template();
                }
                ?>

            <?php endwhile; ?>

        </div>
    </div>
</div>

<?php get_footer(); ?>
