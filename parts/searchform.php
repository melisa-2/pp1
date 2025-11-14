<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
  <label>
    <input type="search" value="<?php echo esc_attr( get_search_query() ); ?>" name="s" placeholder="<?php esc_attr_e('Search...','essence'); ?>">
  </label>
  <button type="submit"><?php esc_html_e('Search','essence'); ?></button>
</form>
