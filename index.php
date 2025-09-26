<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login / Register</title>
    <link rel="icon" type="image/png" href="assets/cce-logo.png">
</head>
<body>
    
<div class="container">
    <!-- LOGIN FORM -->
    <div class="form-box <?php echo (isset($_GET['form']) && $_GET['form'] === 'register') ? '' : 'active'; ?>" id="login-form">
        <div class="form-content">
            <div class="form-image">
                <img src="assets/cce-logo.png" alt="Login Illustration">
            </div>
            <div class="form-fields">
                <form action="login_register.php" method="post">
                    <h2>Welcome</h2>
                    <p name="please">Please enter your details to sign in.</p>

                    <?php if (isset($_SESSION['error_login'])): ?>
                        <div class="form-message error">
                            <?= $_SESSION['error_login']; ?>
                        </div>
                        <?php unset($_SESSION['error_login']); ?>
                    <?php endif; ?>

                    <?php if (isset($_SESSION['success_register'])): ?>
                        <div class="form-message success">
                            <?= $_SESSION['success_register']; ?>
                        </div>
                        <?php unset($_SESSION['success_register']); ?>
                    <?php endif; ?>

                    <input type="text" name="username" placeholder="Username" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <button type="submit" class="login">Login</button>
                    <p>Don't have an account? 
                        <a href="#" onclick="showForm('register-form')" class="register-link">Register</a>
                    </p>
                </form>
            </div>
        </div>
    </div>

    <!-- REGISTER FORM -->
    <div class="form-box <?php echo (isset($_GET['form']) && $_GET['form'] === 'register') ? 'active' : ''; ?>" id="register-form">
        <div class="form-content">
            <div class="form-image">
                <img src="assets/cce-logo.png" alt="Register Illustration">
            </div>
            <div class="form-fields">
                <form action="login_register.php" method="post">
                    <h2>Create an Account</h2>
                    <p name="please">Please fill in the details to sign up.</p>

                    <?php if (isset($_SESSION['error_register'])): ?>
                        <div class="form-message error">
                            <?= $_SESSION['error_register']; ?>
                        </div>
                        <?php unset($_SESSION['error_register']); ?>
                    <?php endif; ?>

                    <input type="text" name="fullname" placeholder="Full Name" required>
                    <input type="email" name="email" placeholder="Email" required>
                    <input type="text" name="username" placeholder="Username" required>
                    <input type="password" name="password" placeholder="Password" required>
                    <input type="password" name="confirm_password" placeholder="Confirm Password" required>

                    <!-- gender -->
                    <div class="field-group">
                        <label>Gender:</label>
                        <div class="gender-options">
                            <label><input type="radio" name="gender" value="Male" required> Male</label>
                            <label><input type="radio" name="gender" value="Female" required> Female</label>
                        </div>
                    </div>

                   <!-- programs interested in -->
                    <div class="field-group">
                        <label>Programs Interested In:</label>
                        <div class="inline-options">
                            <label><input type="checkbox" name="programs[]" value="BS Computer Science"> BSCS</label>
                            <label><input type="checkbox" name="programs[]" value="BS Information Technology"> BSIT</label>
                            <label><input type="checkbox" name="programs[]" value="BS Information Systems"> BSIS</label>
                            <label><input type="checkbox" name="programs[]" value="BS Data Science"> BSEMC</label>
                            <label><input type="checkbox" name="programs[]" value="BS Information Systems"> BMMA</label>
                            <label><input type="checkbox" name="programs[]" value="BS Data Science"> BLIS</label>
                        </div>
                    </div>

                    <!-- year level -->
                    <div class="field-group">
                        <label>Year Level:</label>
                        <select name="year_level" required>
                            <option value="">Select Year</option>
                            <option value="1st Year">1st Year</option>
                            <option value="2nd Year">2nd Year</option>
                            <option value="3rd Year">3rd Year</option>
                            <option value="4th Year">4th Year</option>
                        </select>
                    </div>


                    <button type="submit" class="register">Sign Up</button>
                    <p>Already have an account? 
                        <a href="#" onclick="showForm('login-form')" class="login-link">Login</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="script.js"></script>
</body>
</html>
