<article id="post-<?php the_ID(); ?>" <?php post_class('post-list-item'); ?>>
  <?php if(has_post_thumbnail()): ?>
    <div class="post-thumb"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium', array('class'=>'responsive')); ?></a></div>
  <?php endif; ?>
  <h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <div class="entry-summary"><?php essence_excerpt(25); ?></div>
</article>
