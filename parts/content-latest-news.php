<article id="post-<?php the_ID(); ?>" <?php post_class('latest-news'); ?>>

    <?php if (has_post_thumbnail()) : ?>
        <a href="<?php the_permalink(); ?>" class="latest-news-thumbnail">
            <?php the_post_thumbnail('large'); ?>
        </a>
    <?php endif; ?>

    <h3 class="latest-news-title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h3>

    <div class="latest-news-meta meta-info">
        <p>
            by <span class="author"><?php the_author_posts_link(); ?></span>
        </p>

        <?php if (has_category()) : ?>
            <p>
                Categories: <span class="categories"><?php the_category(', '); ?></span>
            </p>
        <?php endif; ?>

        <?php if (has_tag()) : ?>
            <p>
                Tags: <span class="tags"><?php the_tags('', ', '); ?></span>
            </p>
        <?php endif; ?>

        <p>
            <span class="post-date"><?php echo get_the_date(); ?></span>
        </p>
    </div>

    <div class="latest-news-excerpt">
        <?php the_excerpt(); ?>
    </div>

</article>
