<?php
declare(strict_types=1);
http_response_code(404);
require_once 'includes/database-connection.php';
require_once 'includes/functions.php';

$sql = "SELECT id, name FROM category WHERE navigation = 1;";
$navigation = pdo($pdo, $sql)->fetchAll();
$section = '';
$title = 'Page not found';
$description = '';
?>

<?php require_once 'includes/header.php'; ?>
<div class="container not-found">
    <section class="hero">
        <div class="hero-content">
            <h2>404 - Page Not Found</h2>
            <p>Oops! The page you're looking for doesn't exist or has been moved.</p>
            <a href="index.php" class="btn-primary">Go Back Home</a>
        </div>
    </section>
</div>

<?php
require_once 'includes/footer.php';
exit;
?>