<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!-- Main Header -->
    <header class="main-header">
        <div class="container">
            <div class="header-content">
                <!-- Logo -->
                <div class="logo">
                    <a href="<?php echo home_url(); ?>">
                        <?php 
                        $site_logo = get_editable_content('kmtheme_site_logo');
                        $site_name = get_editable_content('kmtheme_site_name', 'EnteMarriage');
                        
                        if ($site_logo): ?>
                            <img src="<?php echo esc_url($site_logo); ?>" alt="<?php echo esc_attr($site_name); ?>">
                        <?php else: ?>
                            <h1><?php echo esc_html($site_name); ?></h1>
                        <?php endif; ?>
                    </a>
                </div>
                <!-- Navigation -->
                <nav class="main-nav">
                    <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
                </nav>
            </div>
        </div>
    </header>

    <!-- Login Popup -->
    <div class="login-popup" id="loginPopup">
        <div class="login-form">
            <span class="close-popup" onclick="toggleLoginPopup()">×</span>
            <h2 style="text-align: center; margin-bottom: 30px; color: #333;">Login</h2>
            <form id="loginForm" onsubmit="handleLogin(event)">
                <div class="form-group">
                    <label>Username / Email / Phone Number</label>
                    <input type="text" id="username" required>
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" id="password" required>
                </div>
                <button type="submit" class="login-btn">Login</button>
                <p class="register-link">Don't have an account? <a href="/register">Register Now</a></p>
            </form>
        </div>
    </div>

    <script>
    function toggleLoginPopup() {
        const popup = document.getElementById('loginPopup');
        popup.classList.toggle('active');
    }

    function handleLogin(event) {
        event.preventDefault();
        const username = document.getElementById('username').value;
        const password = document.getElementById('password').value;

        // Demo account check
        if (username === 'demo@entemarriage.in' && password === 'demo1234') {
            alert('Demo login successful!');
            toggleLoginPopup();
        } else {
            alert('Invalid credentials. Try demo account:\nUsername: demo@entemarriage.in\nPassword: demo1234');
        }
    }

    // Close popup when clicking outside
    document.getElementById('loginPopup').addEventListener('click', function(event) {
        if (event.target === this) {
            toggleLoginPopup();
        }
    });
    </script>
    <!-- Contact Info (Hidden by default) -->
    <div id="contact-info" style="display: none; position: absolute; top: 100%; right: 20px; background: #fff; padding: 15px; border-radius: 5px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); z-index: 1000;">
        <p style="margin: 0; color: #333; margin-bottom: 10px;">📞 <?php echo get_editable_content('kmtheme_phone_number', '+91 9544146660'); ?></p>
        <p style="margin: 0; color: #333;">📧 <?php echo get_editable_content('kmtheme_email', 'info@entemarriage.com'); ?></p>
    </div>

    <!-- Navigation -->
    <nav class="main-nav" style="display: flex; gap: 30px;">
        <a href="#" onclick="toggleContactInfo(); return false;" style="color: #fff; text-decoration: none; font-weight: 500;">📞 Contact Us</a>
    </nav>
</div>
</body>
</html>