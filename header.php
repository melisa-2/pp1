<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<?php
// Add dynamic body classes for front page vs inner pages
$body_classes = is_front_page() ? array('ds-theme', 'my-class') : array('no-ds-theme');
?>
<body <?php body_class($body_classes); ?>>

<?php if (!is_page('landing-page')) : ?>
    <!-- Main Menu Section -->
    <section class="menu-area">
        <div class="container">
            <nav class="main-menu">
                
                <!-- Hamburger / Mobile Button -->
                <button class="check-button" aria-label="Toggle Menu">
                    <div class="menu-icon">
                        <div class="bar1"></div>
                        <div class="bar2"></div>
                        <div class="bar3"></div>
                    </div>
                </button>

                <!-- Navigation Menu -->
                <?php 
                    wp_nav_menu(array(
                        'theme_location' => 'essence_main_menu',
                        'depth'          => 2,
                        'container'      => false,
                        'menu_class'     => 'menu-items',
                        'fallback_cb'    => false
                    ));
                ?>
            </nav>
            <button id="darkModeToggle" style="
    position: fixed;
    top: 20px;
    right: 20px;
    padding: 10px 15px;
    border-radius: 8px;
    background: #ffb6d9;
    border: none;
    cursor: pointer;
    font-weight: bold;
    z-index: 9999;
">
🌙 Dark Mode
</button>

        </div>
    </section>
<?php endif; ?>
