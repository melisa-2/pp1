<?php
/**
 * Single product template
 */
get_header();
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <div class="container single-product">
    <div class="product-wrapper">
      <div class="product-image">
        <?php if ( has_post_thumbnail() ) the_post_thumbnail('large'); ?>
      </div>
      <div class="product-info">
        <h1><?php the_title(); ?></h1>
        <div class="meta">Category: <?php the_terms(get_the_ID(),'product-category','',', '); ?></div>
        <div class="price-buy">
          <div class="price">€<?php echo esc_html( get_post_meta(get_the_ID(),'_essence_price', true) ?: get_field('price') ); ?></div>
          <button class="buy-btn btn">Add to cart</button>
        </div>
        <div class="product-description"><?php the_content(); ?></div>
        <?php if( function_exists('get_field') ): ?>
          <div class="product-extra">
            <h4>Details</h4>
            <p><strong>Shade:</strong> <?php echo esc_html(get_field('shade')); ?></p>
            <p><strong>Ingredients:</strong> <?php echo esc_html(get_field('ingredients')); ?></p>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
<?php endwhile; endif; get_footer(); ?>
