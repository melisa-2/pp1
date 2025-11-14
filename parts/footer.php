  <footer class="footer">
    <div class="container">
      <p>&copy; <?php echo date('Y'); ?> Essence. All rights reserved.</p>
      <div class="footer-widgets">
        <?php if(is_active_sidebar('main-sidebar')) dynamic_sidebar('main-sidebar'); ?>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>
