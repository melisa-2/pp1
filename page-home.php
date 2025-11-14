<?php
/*
Template Name: Home Page
*/
get_header();
?>

<style>
/* -----------------------------------
   SLIDER STYLES
----------------------------------- */
#slider-wrapper {
    width: 100%;
    overflow: hidden;
    position: relative;
    margin-bottom: 20px;
}

#container {
    width: 100%;
    height: 350px;
    position: relative;
    overflow: hidden;
}

.img_container {
    position: absolute;
    top: 0;
    width: 100%;
    height: 350px;
    transition: left 0.8s ease;
}

.img_container img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

#overlay {
    position: absolute;
    top: 50%;
    width: 100%;
    transform: translateY(-50%);
    display: flex;
    justify-content: space-between;
    padding: 0 20px;
}

.overlay_button {
    background: rgba(0,0,0,0.5);
    color: white;
    padding: 14px 18px;
    border-radius: 50%;
    font-size: 18px;
    cursor: pointer;
    transition: 0.2s;
}

.overlay_button:hover {
    background: rgba(0,0,0,0.7);
}

.slider-dots {
    text-align: center;
    margin-top: 10px;
}

.dot {
    height: 12px;
    width: 12px;
    margin: 6px;
    background: #ff8ecf;
    border-radius: 50%;
    display: inline-block;
    cursor: pointer;
    transition: 0.2s;
}

.dot:hover {
    background: #ff5fa3;
}

/* -----------------------------------
   SEARCH BAR
----------------------------------- */
.home-search {
    padding: 40px 20px;
    display: flex;
    justify-content: center;
}

.search-form {
    width: 100%;
    max-width: 600px;
    display: flex;
    gap: 10px;
}

.search-form input {
    flex: 1;
    padding: 14px 15px;
    border: 1px solid #ffacd1;
    border-radius: 12px;
    background: #fff;
    font-size: 16px;
    outline: none;
    transition: 0.2s;
}

.search-form input:focus {
    border-color: #ff5fa3;
    box-shadow: 0 0 8px rgba(255, 95, 163, 0.3);
}

.search-form button {
    padding: 14px 20px;
    background: #ff5fa3;
    color: #fff;
    border: none;
    border-radius: 12px;
    font-size: 16px;
    cursor: pointer;
    font-weight: bold;
    transition: 0.2s;
}

.search-form button:hover {
    background: #e74c91;
    transform: translateY(-2px);
}

/* -----------------------------------
   PRODUCT GRID (2 per row)
----------------------------------- */
.products-section {
    padding: 40px 20px;
}

.products-section h2 {
    text-align: center;
    margin-bottom: 30px;
    color: #d94b90;
}

.product-row {
    display: flex;
    gap: 20px;
    margin-bottom: 30px;
    justify-content: center;
}

.product-item {
    width: 48%;
    background: #ffe6f2;
    padding: 16px;
    border-radius: 14px;
    text-align: center;
    transition: 0.2s;
}

.product-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 3px 12px rgba(255, 95, 163, 0.3);
}

.product-item img {
    width: 100%;
    border-radius: 12px;
    margin-bottom: 10px;
}

.product-item h3 {
    margin-bottom: 6px;
    font-size: 20px;
}

.product-item .price {
    font-weight: bold;
    color: #ff5fa3;
    margin-bottom: 6px;
}

.product-item .desc {
    font-size: 14px;
    color: #444;
}
</style>

<!-- ================= SLIDER ================= -->
<div id="slider-wrapper">
    <div id="container">

        <?php
        $sliderImages = ['foto1.jpg', 'foto2.jpg', 'foto3.jpg'];

        foreach ($sliderImages as $img): ?>
            <div class="img_container">
                <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $img; ?>" alt="Slider Image">
            </div>
        <?php endforeach; ?>

        <div id="overlay">
            <div id="left_button" class="overlay_button" onclick="onLeftButton()"><</div>
            <div id="right_button" class="overlay_button" onclick="onRightButton()">></div>
        </div>

    </div>
</div>

<div class="slider-dots">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
</div>

<!-- ================= SEARCH BAR ================= -->
<section class="home-search">
    <div class="container">
        <form method="get" action="<?php echo home_url('/'); ?>" class="search-form">
            <input type="text" name="s" placeholder="Search for products, makeup tips, tutorials..." required>
            <button type="submit">Search</button>
        </form>
    </div>
</section>

<!-- ============ PRODUCTS GRID (2 per row) ============ -->
<section class="products-section">
    <div class="container">
        <h2>Our Top Products</h2>

        <?php
        $products = [
            ['name'=>'Mascara','image'=>'mascara.jpg','price'=>'$15','desc'=>'Volumizing mascara for bold lashes.'],
            ['name'=>'Gloss','image'=>'gloss.jpg','price'=>'$12','desc'=>'Shiny lip gloss in multiple shades.'],
            ['name'=>'Lipstick','image'=>'lipstick.jpg','price'=>'$18','desc'=>'Long-lasting matte lipstick.'],
            ['name'=>'Eyeliner','image'=>'eyeliner.jpg','price'=>'$10','desc'=>'Smooth waterproof eyeliner.'],
            ['name'=>'Blush','image'=>'blush.jpg','price'=>'$14','desc'=>'Soft and natural blush.'],
            ['name'=>'Highlighter','image'=>'highlighter.jpg','price'=>'$16','desc'=>'Glowing highlighter for face and body.']
        ];

        for ($i = 0; $i < ceil(count($products) / 2); $i++): ?>
            <div class="product-row">
                <?php for ($j = 0; $j < 2; $j++):
                    $index = $i * 2 + $j;
                    if (!isset($products[$index])) break;
                    $prod = $products[$index];
                ?>

                <div class="product-item">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $prod['image']; ?>">
                    <h3><?php echo $prod['name']; ?></h3>
                    <p class="price"><?php echo $prod['price']; ?></p>
                    <p class="desc"><?php echo $prod['desc']; ?></p>
                </div>

                <?php endfor; ?>
            </div>
        <?php endfor; ?>

    </div>
</section>

<?php get_footer(); ?>
