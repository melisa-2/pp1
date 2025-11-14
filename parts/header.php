<!doctype html>
<html <?php language_attributes(); ?> >
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
  <header class="site-header">
    <div class="container d-flex justify-content-between align-items-center">
      <div class="site-branding">
        <?php
          if( function_exists('the_custom_logo') && has_custom_logo() ){
            the_custom_logo();
          } else {
        ?>
          <a href="<?php echo esc_url(home_url('/')); ?>"><h1>Essence</h1></a>
        <?php } ?>
      </div>

      <nav class="navbar">
        <?php
        wp_nav_menu(array(
          'theme_location'=>'main-menu',
          'container'=>false,
          'menu_class'=>'nav',
        ));
        ?>
      </nav>
    </div>
  </header>
