<?php
get_header(); ?>
<div class="container">
  <main>
    <?php if(have_posts()): while(have_posts()): the_post();
      get_template_part('parts/content','single');
    endwhile; endif; ?>
  </main>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
