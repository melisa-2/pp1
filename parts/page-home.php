<?php
/* Template Name: Home Page */
get_header(); ?>
<div class="hero">
  <div class="container">
    <div id="essenceCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/images/foto1.jpg' ); ?>" class="d-block w-100" alt="Slide 1">
        </div>
        <div class="carousel-item">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/images/foto2.jpg' ); ?>" class="d-block w-100" alt="Slide 2">
        </div>
        <div class="carousel-item">
          <img src="<?php echo esc_url( get_template_directory_uri() . '/images/foto3.jpg' ); ?>" class="d-block w-100" alt="Slide 3">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#essenceCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#essenceCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
      </button>
    </div>

    <section class="latest-products" style="margin-top:2rem">
      <h2>Latest Products</h2>
      <div class="products-grid">
        <?php
          $products = new WP_Query(array('post_type'=>'product','posts_per_page'=>6));
          if($products->have_posts()):
            while($products->have_posts()): $products->the_post(); ?>
              <div class="product-card">
                <?php if(has_post_thumbnail()) the_post_thumbnail('medium', array('class'=>'responsive')); ?>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p><?php essence_excerpt(12); ?></p>
              </div>
            <?php endwhile;
            wp_reset_postdata();
          else:
            echo '<p>No products found</p>';
          endif;
        ?>
      </div>
    </section>
  </div>
</div>
<?php get_footer(); ?>
