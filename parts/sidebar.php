<aside class="sidebar">
  <?php if(is_active_sidebar('main-sidebar')): ?>
    <?php dynamic_sidebar('main-sidebar'); ?>
  <?php else: ?>
    <div class="widget">
      <h3>Search</h3>
      <?php get_search_form(); ?>
    </div>

    <div class="widget">
      <h3>Categories</h3>
      <ul>
        <?php wp_list_categories(['title_li'=>'']); ?>
      </ul>
    </div>

    <div class="widget">
      <h3>Latest Products</h3>
      <ul>
        <?php
        $latest_products = new WP_Query(['post_type'=>'product','posts_per_page'=>5]);
        if($latest_products->have_posts()):
          while($latest_products->have_posts()): $latest_products->the_post(); ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php endwhile; wp_reset_postdata(); endif; ?>
      </ul>
    </div>
  <?php endif; ?>
</aside>
