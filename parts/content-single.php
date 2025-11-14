<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">
        <h1 class="entry-title"><?php the_title(); ?></h1>

        <div class="meta-info">
            <p>Posted on <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>

            <?php if ( has_category() ) : ?>
                <p>Categories: 
                    <span><?php the_category(', '); ?></span>
                </p>
            <?php endif; ?>

            <?php if ( has_tag() ) : ?>
                <p>Tags: 
                    <span><?php the_tags('', ', ', ''); ?></span>
                </p>
            <?php endif; ?>
        </div>
    </header>

    <div class="entry-content">
        <?php the_content(); ?>
        <?php 
            wp_link_pages(array(
                'before' => '<div class="page-links">Pages:',
                'after'  => '</div>',
            )); 
        ?>
    </div>

</article>
