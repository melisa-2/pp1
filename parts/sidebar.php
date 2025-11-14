<aside class="sidebar">
  <?php if(is_active_sidebar('main-sidebar')): dynamic_sidebar('main-sidebar'); else: ?>
    <div class="widget">
      <h3>Search</h3>
      <?php get_search_form(); ?>
    </div>
    <div class="widget">
      <h3>Categories</h3>
      <ul><?php wp_list_categories(array('title_li'=>'')); ?></ul>
    </div>
  <?php endif; ?>
</aside>
