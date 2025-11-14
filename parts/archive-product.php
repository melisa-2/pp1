<?php
/**
 * Product archive template
 */
get_header(); ?>
<div class="container archive-products">
  <h1 class="page-title">Our Products</h1>
  <div class="products-grid">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="product-card">
        <a href="<?php the_permalink(); ?>">
          <?php if ( has_post_thumbnail() ) : ?>
            <div class="product-thumb"><?php the_post_thumbnail('medium'); ?></div>
          <?php endif; ?>
          <h2 class="product-title"><?php the_title(); ?></h2>
          <p class="product-price">€<?php echo esc_html( get_post_meta(get_the_ID(),'_essence_price', true) ?: get_field('price') ); ?></p>
        </a>
      </div>
    <?php endwhile; else: ?>
      <p>No products found.</p>
    <?php endif; wp_reset_postdata(); ?>
  </div>
</div>
<?php get_footer(); ?>
