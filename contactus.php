<?php
declare(strict_types=1);
require_once 'includes/database-connection.php';
require_once 'includes/functions.php';
include_once 'includes/header.php';
?>

<div class="container">
    <!-- Contact Hero Section -->
    <section class="about-hero contact-hero">
        <div class="about-content">
            <h1>Contact Us</h1>
            <p>We’d love to hear from you! Whether you have a travel question, collaboration idea, or just want to say hi — feel free to drop us a message below.</p>

            <form action="includes/contact-handler.php" method="POST" class="contact-form">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                <button type="submit" class="btn-primary">Send Message</button>
            </form>
        </div>
        
        <div class="about-image">
            <img src="./img/contact.jpg" alt="Contact WanderLog">
        </div>
    </section>
</div>

<?php include_once 'includes/footer.php'; ?>
