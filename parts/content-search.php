<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">
        <h2 class="entry-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>

        <?php if ( 'post' === get_post_type() ) : ?>
            <div class="meta-info">
                <p>Posted on <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>

                <?php if ( has_category() ) : ?>
                    <p>Categories: <span><?php the_category(', '); ?></span></p>
                <?php endif; ?>

                <?php if ( has_tag() ) : ?>
                    <p>Tags: <span><?php the_tags('', ', ', ''); ?></span></p>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </header>

    <div class="entry-summary">
        <?php the_excerpt(); ?>
    </div>

</article>
