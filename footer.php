<footer class="site-footer">
    <div class="container footer-container">

        <!-- Copyright Section -->
        <div class="footer-copyright">
            <p>
                <?php echo get_theme_mod( 'essence_copyright', '© Essence - All Rights Reserved' ); ?>
            </p>
        </div>

        <!-- Footer Menu -->
        <nav class="footer-menu">
            <?php 
                wp_nav_menu(array(
                    'theme_location' => 'essence_footer_menu',
                    'depth'          => 1,
                    'container'      => false,
                    'menu_class'     => 'footer-menu-items',
                    'fallback_cb'    => false
                ));
            ?>
        </nav>

    </div> <!-- .container -->
</footer>

<?php wp_footer(); ?>
</body>
</html>
