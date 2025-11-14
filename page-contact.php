<?php
/*
Template Name: Contact Page
*/
get_header();
?>

<style>
    /* HERO */
    .contact-hero {
        background: #ffe4ef;
        padding: 100px 20px;
        text-align: center;
        color: #000;
    }
    .contact-hero h1 {
        font-size: 42px;
        font-weight: bold;
    }
    .contact-hero p {
        font-size: 19px;
        max-width: 700px;
        margin: 10px auto 0;
    }

    /* FORM SECTION */
    .contact-form-section {
        padding: 60px 20px;
        display: flex;
        justify-content: center;
    }

    .contact-form {
        background: #fff2fa;
        padding: 30px;
        width: 100%;
        max-width: 700px;
        border-radius: 16px;
        box-shadow: 0 4px 12px rgba(0,0,0,0.12);
    }

    .contact-form label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        color: #d6006f;
        font-size: 16px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .contact-form input[type="text"],
    .contact-form input[type="email"],
    .contact-form textarea {
        width: 100%;
        padding: 14px 12px;
        border: 1px solid #ffacd1;
        border-radius: 10px;
        background: #ffffff;
        font-size: 16px;
        outline: none;
        transition: 0.2s ease;
    }

    .contact-form input:focus,
    .contact-form textarea:focus {
        border-color: #ff5fa3;
        box-shadow: 0 0 8px rgba(255, 95, 163, 0.3);
    }

    /* SUBMIT BUTTON */
    .submit-btn {
        width: 100%;
        padding: 15px;
        background: #ff5fa3;
        color: white;
        border: none;
        font-size: 18px;
        border-radius: 12px;
        cursor: pointer;
        transition: 0.2s;
        font-weight: bold;
    }

    .submit-btn:hover {
        background: #e74c91;
        transform: translateY(-2px);
        box-shadow: 0 3px 10px rgba(255, 95, 163, 0.3);
    }
</style>

<div id="content" class="site-content">
    <main id="main" class="site-main">

        <!-- Hero Section -->
        <section class="contact-hero">
            <h1>Contact Essence</h1>
            <p>We'd love to hear from you! Whether you have questions, feedback, or collaboration ideas, just send us a message below.</p>
        </section>

        <!-- Contact Form Section -->
        <section class="contact-form-section">
           <form action="" method="post" class="contact-form">
                
                <div class="form-group">
                    <label for="name">Your Name</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Your Email</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" required>
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="6" required></textarea>
                </div>

                <div class="form-group">
                    <input type="submit" name="submit_contact" value="Send Message" class="submit-btn">
                </div>

           </form>
        </section>

    </main>
</div>

<?php get_footer(); ?>
