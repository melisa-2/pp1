<?php
/*
Template Name: About Page
*/
get_header();
?>

<style>
    /* HERO */
    .about-hero {
        background: #ffe4ef;
        padding: 100px 20px;
        text-align: center;
        color: #000;
    }
    .about-hero h1 {
        font-size: 42px;
        font-weight: 700;
    }
    .about-hero p {
        font-size: 20px;
        margin-top: 10px;
    }

    /* SECTIONS */
    .about-section {
        padding: 60px 20px;
        width: 100%;
        max-width: 1100px;
        margin: auto;
        text-align: center;
    }
    .about-section.light {
        background: #fff2fa;
        border-radius: 14px;
    }

    .about-section h2 {
        font-size: 32px;
        margin-bottom: 15px;
        color: #ff5fa3;
    }

    .about-section p {
        font-size: 18px;
        line-height: 1.6;
    }

    /* FEATURES */
    .features-grid {
        margin-top: 40px;
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    .feature-box {
        background: white;
        padding: 20px;
        border-radius: 12px;
        box-shadow: 0 3px 10px rgba(0,0,0,0.1);
    }
    .feature-box h3 {
        margin-bottom: 10px;
        color: #ff5fa3;
    }

    /* PRODUCTS */
    .about-products {
        padding: 60px 20px;
        text-align: center;
    }

    .products-row {
        max-width: 900px;
        margin: 30px auto;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    .product-card {
        background: white;
        padding: 20px;
        border-radius: 12px;
        box-shadow: 0 3px 8px rgba(0,0,0,0.1);
        text-align: center;
    }

    .product-card img {
        width: 100%;
        border-radius: 12px;
        margin-bottom: 10px;
    }

    .product-card h4 {
        font-size: 20px;
        margin: 5px 0;
    }

    .product-card .price {
        color: #ff5fa3;
        font-weight: bold;
        margin-bottom: 10px;
    }

    /* CONTACT */
    .about-contact {
        padding: 60px 20px;
        background: #ffe6f3;
        text-align: center;
        margin-top: 40px;
    }

    .about-contact a {
        color: #d6006f;
        font-weight: bold;
    }
</style>

<div id="content" class="site-content">
    <main id="main" class="site-main">

        <!-- HERO -->
        <section class="about-hero">
            <h1>About Essence</h1>
            <p>Your trusted destination for luxury makeup products.</p>
        </section>

        <!-- WHO WE ARE -->
        <section class="about-section">
            <h2>Who We Are</h2>
            <p>Essence is a beauty brand that brings high-quality makeup at affordable prices. We believe every person deserves to feel confident and beautiful.</p>
        </section>

        <!-- MISSION -->
        <section class="about-section light">
            <h2>Our Mission</h2>
            <p>We focus on clean ingredients, elegant packaging, and formulas that perform flawlessly for everyday users and professionals.</p>
        </section>

        <!-- FEATURES -->
        <section class="about-section">
            <h2>What Makes Us Different</h2>

            <div class="features-grid">
                <div class="feature-box">
                    <h3>Premium Quality</h3>
                    <p>Luxurious formulas for all skin types.</p>
                </div>

                <div class="feature-box">
                    <h3>Clean Beauty</h3>
                    <p>Cruelty-free and gentle ingredients.</p>
                </div>

                <div class="feature-box">
                    <h3>Trusted Brand</h3>
                    <p>Loved by thousands of beauty lovers.</p>
                </div>
            </div>
        </section>

        <!-- PRODUCTS -->
        <section class="about-products">
            <h2>Best Sellers</h2>

            <div class="products-row">
                <div class="product-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/lipstick.jpg" alt="Lipstick">
                    <h4>Velvet Lipstick</h4>
                    <p class="price">$14.99</p>
                    <p>Smooth, creamy, long-lasting.</p>
                </div>

                <div class="product-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/gloss.jpg" alt="Gloss">
                    <h4>Crystal Gloss</h4>
                    <p class="price">$12.49</p>
                    <p>Ultra shine with comfort wear.</p>
                </div>
            </div>

            <div class="products-row">
                <div class="product-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/mascara.jpg" alt="Mascara">
                    <h4>Volume Mascara</h4>
                    <p class="price">$15.99</p>
                    <p>Bold lashes with no clumps.</p>
                </div>

                <div class="product-card">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/lipstick.jpg" alt="Lipstick">
                    <h4>Matte Lipstick</h4>
                    <p class="price">$13.99</p>
                    <p>Soft-matte finish for all-day wear.</p>
                </div>
            </div>
        </section>

        <!-- CONTACT -->
        <section class="about-contact">
            <h2>Get in Touch</h2>
            <p>Have questions? Visit our <a href="/contact">Contact Page</a>.</p>
        </section>

    </main>
</div>

<?php get_footer(); ?>
