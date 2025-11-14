<article <?php post_class(); ?>>

    <h2 class="entry-title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h2>

    <?php if ( has_post_thumbnail() ) : ?>
        <a href="<?php the_permalink(); ?>" class="post-thumbnail-link">
            <?php the_post_thumbnail([275, 275], ['class' => 'post-thumbnail']); ?>
        </a>
    <?php endif; ?>

    <div class="meta-info">
        <p>Posted on <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?></p>

        <?php if ( has_category() ) : ?>
            <p>Categories: <?php the_category(', '); ?></p>
        <?php endif; ?>

        <?php if ( has_tag() ) : ?>
            <p>Tags: <?php the_tags('', ', ', ''); ?></p>
        <?php endif; ?>
    </div>

    <div class="entry-excerpt">
        <?php the_excerpt(); ?>
    </div>

</article>
