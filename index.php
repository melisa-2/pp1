<?php get_header(); ?>

<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <!-- Page Title -->
            <h1 class="page-title">Blog</h1>

            <div class="container">

                <!-- Blog Posts -->
                <div class="blog-items">

                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <?php get_template_part('parts/content', get_post_format()); ?>
                        <?php endwhile; ?>

                        <!-- Pagination -->
                        <div class="essence-pagination">
                            <div class="pages new">
                                <?php previous_posts_link("<< Newer Posts"); ?>
                            </div>
                            <div class="pages old">
                                <?php next_posts_link("Older Posts >>"); ?>
                            </div>
                        </div>

                    <?php else : ?>
                        <p class="no-posts-message">Nothing yet to be displayed!</p>
                    <?php endif; ?>

                </div>

                <!-- Sidebar -->
                <?php get_sidebar(); ?>

            </div> <!-- .container -->

        </main>
    </div> <!-- #primary -->
</div> <!-- #content -->

<?php get_footer(); ?>
