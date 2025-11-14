<?php get_header(); ?>
<div class="container">
  <main>
    <h1>Search results for: <?php echo esc_html(get_search_query()); ?></h1>
    <?php if(have_posts()): while(have_posts()): the_post(); get_template_part('parts/content','search'); endwhile; the_posts_pagination(); else: ?><p>No results</p><?php endif; ?>
  </main>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
