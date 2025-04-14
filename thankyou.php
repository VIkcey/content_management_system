
<style>
/* === Redesigned Thank You Page === */

.thankyou-wrapper {
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 80vh;
  background: linear-gradient(135deg, #ffecd2 0%, #fcb69f 100%);
  padding: 40px 20px;
}

.thankyou-card {
  background-color: white;
  padding: 60px 40px;
  max-width: 600px;
  text-align: center;
  border-radius: 20px;
  box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
  animation: fadeInUp 0.8s ease;
}

.thankyou-card h1 {
  font-size: 3rem;
  color: #ff5722;
  margin-bottom: 20px;
  font-weight: bold;
}

.thankyou-card p {
  font-size: 1.2rem;
  color: #444;
  margin-bottom: 20px;
}

/* Button */
.btn-primary {
  background-color: #ff5722;
  color: #fff;
  padding: 0.75rem 1.5rem;
  border-radius: 30px;
  font-weight: 600;
  text-decoration: none;
  transition: transform 0.3s ease, background-color 0.3s ease;
  display: inline-block;
}

.btn-primary:hover {
  background-color: #e64a19;
  transform: translateY(-2px);
}

/* Animation */
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Mobile Responsive */
@media (max-width: 600px) {
  .thankyou-card {
    padding: 40px 20px;
  }

  .thankyou-card h1 {
    font-size: 2.2rem;
  }

  .thankyou-card p {
    font-size: 1rem;
  }
}


</style>
<?php
include_once 'includes/header.php';
?>

<div class="thankyou-wrapper">
    <div class="thankyou-card">
        <h1>🎉 Thank You!</h1>
        <p>Your message has been received.</p>
        <p>We'll get back to you as soon as we can.</p>
        <a href="index.php" class="btn-primary">Back to Home</a>
    </div>
</div>

<?php
include_once 'includes/footer.php';
?>