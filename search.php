<?php get_header(); ?>

<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container search-results-wrapper">

                <header class="search-header">
                    <h1>Search results for: "<?php echo get_search_query(); ?>"</h1>
                </header>

                <section class="search-form-section">
                    <?php get_search_form(); ?>
                </section>

                <section class="search-results-list">
                    <?php if ( have_posts() ) : ?>
                        <?php 
                            while ( have_posts() ) : the_post();
                                get_template_part( 'parts/content', 'search' );
                            endwhile;
                        ?>
                        
                        <div class="pagination-wrapper">
                            <?php the_posts_pagination(array(
                                'prev_text' => '&laquo; Previous',
                                'next_text' => 'Next &raquo;',
                                'mid_size'  => 2
                            )); ?>
                        </div>
                    <?php else : ?>
                        <p>No results found. Try a different search.</p>
                    <?php endif; ?>
                </section>

            </div>
        </main>
    </div>
</div>

<?php get_footer(); ?>
