<?php get_header(); ?>

<div id="content" class="site-content">
    <main id="main" class="site-main">
        <div class="container">

            <div class="error-404">

                <!-- Error Header -->
                <header class="error-header">
                    <h1 class="error-title">Oops! Page not found</h1>
                    <p class="error-message">
                        Sorry, the page you are looking for doesn’t exist on Essence.
                    </p>
                </header>

                <!-- Search & Recent Posts -->
                <div class="error-content">
                    <p class="search-prompt">Try searching for what you need:</p>
                    
                    <div class="error-search">
                        <?php get_search_form(); ?>
                    </div>

                    <div class="recent-posts-widget">
                        <?php the_widget(
                            'WP_Widget_Recent_Posts',
                            array(
                                'title'  => __('Latest Posts', 'essence'),
                                'number' => 3
                            )
                        ); ?>
                    </div>
                </div>

            </div> <!-- .error-404 -->

        </div> <!-- .container -->
    </main>
</div> <!-- #content -->

<?php get_footer(); ?>
