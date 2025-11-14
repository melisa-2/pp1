<?php
/*
 Template Name: General Template
*/
?>

<?php get_header(); ?>

<div id="content" class="site-content">
    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <div class="container">
                
                <div class="general-template">

                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                
                                <!-- Page Title -->
                                <header class="page-header">
                                    <h1 class="page-title"><?php the_title(); ?></h1>
                                </header>

                                <!-- Page Content -->
                                <div class="page-content">
                                    <?php the_content(); ?>
                                </div>

                            </article>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <p class="no-content">Nothing yet to be displayed!</p>
                    <?php endif; ?>

                </div> <!-- .general-template -->

            </div> <!-- .container -->
        </main>
    </div>
</div>

<?php get_footer(); ?>
