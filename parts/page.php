<?php
get_header(); ?>
<div class="container">
  <main>
    <?php while(have_posts()): the_post(); get_template_part('parts/content','page'); endwhile; ?>
  </main>
</div>
<?php get_footer(); ?>
