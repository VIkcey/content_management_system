<?php
declare(strict_types=1);
http_response_code(404);
require_once 'includes/database-connection.php';
require_once 'includes/functions.php';
?>


<?php include_once 'includes/header.php' ?>
<main class="edit-profile-container">
    <h2>Edit Your Profile</h2>

    <form action="update-profile.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="username">First Name</label>
            <input type="text" id="username" name="username" value="<?= htmlspecialchars($_SESSION['username']) ?>"
                required />
        </div>
        <div class="form-group">
            <label for="surname">Last Name</label>
            <input type="text" id="surname" name="surname" value="<?= htmlspecialchars($_SESSION['surname']) ?>"
                required />
        </div>

        <div class="form-group">
            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" value="<?= htmlspecialchars($_SESSION['email']) ?>" required />
        </div>

        <div class="form-group">
            <label for="password">New Password <span class="form-note">(Leave blank to keep current)</span></label>
            <input type="password" id="password" name="password" />
        </div>

        <?php
        // print_r($_SESSION);
// exit;
        ?>

        <div class="form-group">
            <label for="picture">Profile Picture</label>
            <?php if ($_SESSION['picture']) { ?>
                <img src="<?= 'uploads/' . $_SESSION['picture'] ?>" alt="user" width="200">
            <?php } ?>
            <input type="file" id="picture" name="picture" accept="image/*" />
        </div>
        <div class="form-actions">
            <button type="submit" class="btn-primary">Save Changes</button>
            <a href="profile.html" class="btn-secondary">Cancel</a>
        </div>
    </form>
</main>

<?php include_once 'includes/footer.php' ?>