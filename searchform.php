<form role="search" method="get" class="essence-search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <div class="search-input-wrapper">
        <label class="screen-reader-text" for="essence-search-field">Search for:</label>
        <input 
            type="text" 
            id="essence-search-field" 
            class="search-field" 
            name="s" 
            value="<?php echo get_search_query(); ?>" 
            placeholder="Type your search..." 
            required
        >
        <button type="submit" class="search-submit">Search</button>
    </div>
</form>
