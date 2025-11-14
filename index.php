<?php
get_header(); ?>
<div id="content" class="site-content container">
  <main id="main" class="site-main">
    <?php if(have_posts()): while(have_posts()): the_post();
      get_template_part('parts/content');
    endwhile;
      the_posts_pagination();
    else:
      get_template_part('parts/content','none');
    endif; ?>
  </main>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
