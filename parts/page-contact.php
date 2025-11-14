<?php
/* Template Name: Contact */
get_header(); ?>
<div class="container">
  <main>
    <h1>Contact Us</h1>
    <p>Put your contact details or a form shortcode below.</p>
    <?php
    // optional: add a contact form shortcode (requires plugin)
    if( shortcode_exists('contact-form-7') ){
      echo do_shortcode('[contact-form-7 id="" title="Contact form 1"]');
    }
    ?>
  </main>
</div>
<?php get_footer(); ?>
