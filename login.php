<?php include 'includes/header.php' ?>

<div class="container">
    <div class="container" id="signup">
        <h2>Sign Up</h2>
        <form>
            <input type="text" placeholder="Username" required>
            <input type="email" placeholder="Email" required>
            <input type="password" placeholder="Password" required>
            <button type="submit">Sign Up</button>
        </form>
        <div class="switch">
            <p>Already have an account? <a href="#" onclick="toggleForm()">Login</a></p>
        </div>
    </div>

    <div class="container" id="login" style="display: none;">
        <h2>Login</h2>
        <form>
            <input type="email" placeholder="Email" required>
            <input type="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
        <div class="switch">
            <p>Don't have an account? <a href="#" onclick="toggleForm()">Sign Up</a></p>
        </div>
    </div>

</div>

<?php include 'includes/footer.php' ?>