<footer class="footer">
  <div class="container">
    <div class="footer-widgets" style="display:flex; flex-wrap:wrap; gap:20px; justify-content:space-between;">
      
      <div class="widget">
        <h3>About Essence</h3>
        <p>Essence is a modern makeup brand bringing colors and style to your everyday life.</p>
      </div>

      <div class="widget">
        <h3>Quick Links</h3>
        <ul>
          <li><a href="<?php echo home_url('/'); ?>">Home</a></li>
          <li><a href="<?php echo home_url('/about'); ?>">About</a></li>
          <li><a href="<?php echo home_url('/contact'); ?>">Contact</a></li>
          <li><a href="<?php echo home_url('/products'); ?>">Products</a></li>
        </ul>
      </div>

      <div class="widget">
        <h3>Follow Us</h3>
        <p>
          <a href="#" target="_blank">Instagram</a> | 
          <a href="#" target="_blank">Facebook</a> | 
          <a href="#" target="_blank">Twitter</a>
        </p>
      </div>

    </div>

    <p style="margin-top:20px; text-align:center;">&copy; <?php echo date('Y'); ?> Essence. All rights reserved.</p>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
