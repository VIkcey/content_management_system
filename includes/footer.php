<?php

if (session_status() === PHP_SESSION_NONE) {
  session_start();
}
date_default_timezone_set('America/Toronto'); // 🕐 Montreal timezone
?>
<footer class="site-footer">
  <div class="footer-content">
    <img src="img/logo.png" alt="WanderLog logo" class="footer-logo">

    <p class="footer-tagline">Explore. Dream. Discover.</p>

    <p>&copy; <?= date('Y') ?> WanderLog. All rights reserved.</p>

    <?php if (isset($_SESSION['email']) && isset($_SESSION['login_time'])): ?>
      <div class="session-info">
        <p>
          Logged in at: <?= date('h:i A', $_SESSION['login_time']) ?> |
          Time on site: <span id="session-duration">0h 0m 0s</span>
        </p>
      </div>
    <?php endif; ?>

    <div class="social-icons">
      <a href="#"><img src="img/facebook.png" alt="Facebook"></a>
      <a href="#"><img src="img/icons/instagram.png" alt="Instagram"></a>
      <a href="#"><img src="img/icons/twitter.png" alt="Twitter"></a>
    </div>
  </div>
</footer>

<style>
  .site-footer {
    background: linear-gradient(135deg, #1d3557, #457b9d);
    color: #f1faee;
    text-align: center;
    padding: 30px 15px;
    font-size: 15px;
    width: 100%;
    margin-top: auto;
    box-shadow: 0 -3px 12px rgba(0, 0, 0, 0.25);
  }

  .footer-logo {
    height: 50px;
    margin-bottom: 10px;
  }

  .footer-tagline {
    font-size: 18px;
    font-weight: 500;
    margin: 10px 0;
    font-style: italic;
  }

  .session-info {
    font-size: 13px;
    color: #a8dadc;
    margin-top: 10px;
  }

  .social-icons {
    margin-top: 15px;
  }

  .social-icons a {
    display: inline-block;
    margin: 0 8px;
    transition: transform 0.3s ease;
  }

  .social-icons img {
    height: 22px;
    filter: brightness(0) invert(1);
  }

  .social-icons a:hover {
    transform: scale(1.2);
  }

  @keyframes fadeInUp {
    from {
      opacity: 0;
      transform: translateY(20px);
    }
    to {
      opacity: 1;
      transform: translateY(0);
    }
  }

  .site-footer p {
    margin: 5px 0;
    animation: fadeInUp 0.8s ease-out;
  }
</style>

<?php if (isset($_SESSION['email']) && isset($_SESSION['login_time'])): ?>
<script>
  const loginTime = <?= $_SESSION['login_time'] ?? time(); ?> * 1000;

  function updateDuration() {
    const now = Date.now();
    let diff = Math.floor((now - loginTime) / 1000);

    const hours = Math.floor(diff / 3600);
    diff %= 3600;
    const minutes = Math.floor(diff / 60);
    const seconds = diff % 60;

    document.getElementById('session-duration').textContent =
      `${hours}h ${minutes}m ${seconds}s`;
  }

  updateDuration();
  setInterval(updateDuration, 1000);
</script>
<?php endif; ?>
