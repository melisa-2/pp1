<?php get_header(); ?>

<?php if ( get_header_image() ) : ?>
    <img src="<?php header_image(); ?>" 
         height="<?php echo get_custom_header()->height; ?>" 
         width="<?php echo get_custom_header()->width; ?>" 
         alt="">
<?php endif; ?>

<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <?php the_archive_title('<h1 class="archive-title">', '</h1>'); ?>
            <?php the_archive_description('<div class="archive-description">', '</div>'); ?>

            <div class="container">
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part('parts/content'); ?>
                    <?php endwhile; ?>

                    <div class="wpdevs-pagination archive-pagination">
                        <div class="pages new">
                            <?php previous_posts_link('&laquo; Newer Posts'); ?>
                        </div>
                        <div class="pages old">
                            <?php next_posts_link('Older Posts &raquo;'); ?>
                        </div>
                    </div>

                <?php else : ?>
                    <p>Nothing yet to be displayed!</p>
                <?php endif; ?>
            </div>

            <?php get_sidebar(); ?>

        </main>
    </div>
</div>

<?php get_footer(); ?>
