<?php
get_header(); ?>
<div class="container">
  <main>
    <h1><?php the_archive_title(); ?></h1>
    <?php if(have_posts()): while(have_posts()): the_post(); get_template_part('parts/content'); endwhile; the_posts_pagination(); else: get_template_part('parts/content','none'); endif; ?>
  </main>
  <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
