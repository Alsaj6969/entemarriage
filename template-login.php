<?php /* Template Name: Login Page */ ?>
<?php get_header(); ?>

<div class="login-page" style="background: #f8f9fa; min-height: 100vh; padding: 40px 0;">
    <div class="container" style="max-width: 500px; margin: 0 auto; padding: 0 20px;">
        
        <!-- Page Header -->
        <div style="text-align: center; margin-bottom: 40px;">
            <h1 style="color: #333; font-size: 2.5rem; margin-bottom: 10px;">Login to EnteMarriage</h1>
            <p style="color: #666; font-size: 1.1rem;">Welcome back! Please login to your account</p>
        </div>

        <!-- Login Form -->
        <div class="login-container" style="background: #fff; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.1); padding: 40px;">
            
            <form id="login-form" style="display: grid; gap: 20px;">
                
                <!-- Login Method Selection -->
                <div>
                    <label style="display: block; margin-bottom: 10px; font-weight: bold; color: #333;">Login with *</label>
                    <div style="display: flex; gap: 10px; margin-bottom: 20px;">
                        <label style="display: flex; align-items: center; gap: 8px; padding: 10px; border: 1px solid #ddd; border-radius: 5px; cursor: pointer; flex: 1;">
                            <input type="radio" name="login_method" value="email" checked> Email
                        </label>
                        <label style="display: flex; align-items: center; gap: 8px; padding: 10px; border: 1px solid #ddd; border-radius: 5px; cursor: pointer; flex: 1;">
                            <input type="radio" name="login_method" value="phone"> Phone
                        </label>
                    </div>
                </div>

                <!-- Email/Phone Field -->
                <div id="email-field">
                    <label style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Email Address *</label>
                    <input type="email" name="email" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 14px;">
                </div>

                <div id="phone-field" style="display: none;">
                    <div style="display: grid; grid-template-columns: 1fr 2fr; gap: 10px;">
                        <div>
                            <label style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Country Code *</label>
                            <select name="country_code" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 14px;">
                                <option value="+91">India (+91)</option>
                                <option value="+1">USA (+1)</option>
                                <option value="+44">UK (+44)</option>
                                <option value="+971">UAE (+971)</option>
                                <option value="+966">Saudi Arabia (+966)</option>
                                <option value="+974">Qatar (+974)</option>
                                <option value="+968">Oman (+968)</option>
                                <option value="+973">Bahrain (+973)</option>
                                <option value="+965">Kuwait (+965)</option>
                                <option value="+964">Iraq (+964)</option>
                                <option value="+60">Malaysia (+60)</option>
                                <option value="+62">Indonesia (+62)</option>
                                <option value="+65">Singapore (+65)</option>
                                <option value="+61">Australia (+61)</option>
                            </select>
                        </div>
                        <div>
                            <label style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Phone Number *</label>
                            <input type="tel" name="phone" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 14px;">
                        </div>
                    </div>
                </div>

                <!-- Password Field -->
                <div>
                    <label style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Password *</label>
                    <input type="password" name="password" required style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px; font-size: 14px;">
                </div>

                <!-- Remember Me & Forgot Password -->
                <div style="display: flex; justify-content: space-between; align-items: center;">
                    <label style="display: flex; align-items: center; gap: 8px; cursor: pointer;">
                        <input type="checkbox" name="remember_me">
                        <span style="font-size: 14px; color: #666;">Remember me</span>
                    </label>
                    <a href="/forgot-password" style="color: #e65100; text-decoration: none; font-size: 14px;">Forgot Password?</a>
                </div>

                <!-- Login Button -->
                <div style="text-align: center; margin-top: 20px;">
                    <button type="submit" style="background: #e65100; color: #fff; padding: 15px 40px; border: none; border-radius: 5px; font-size: 16px; font-weight: bold; cursor: pointer; transition: background 0.3s; width: 100%;">
                        Login
                    </button>
                </div>

                <!-- Divider -->
                <div style="text-align: center; margin: 20px 0;">
                    <div style="display: flex; align-items: center; gap: 15px;">
                        <div style="flex: 1; height: 1px; background: #ddd;"></div>
                        <span style="color: #666; font-size: 14px;">OR</span>
                        <div style="flex: 1; height: 1px; background: #ddd;"></div>
                    </div>
                </div>

                <!-- OTP Login Option -->
                <div style="text-align: center;">
                    <button type="button" id="otp-login-btn" style="background: #28a745; color: #fff; padding: 12px 30px; border: none; border-radius: 5px; font-size: 14px; font-weight: bold; cursor: pointer; transition: background 0.3s;">
                        Login with OTP
                    </button>
                </div>

                <!-- Registration Link -->
                <div style="text-align: center; margin-top: 30px; padding-top: 20px; border-top: 1px solid #eee;">
                    <p style="color: #666; font-size: 14px; margin: 0;">
                        Don't have an account? <a href="/register" style="color: #e65100; text-decoration: none; font-weight: bold;">Register Free</a>
                    </p>
                </div>
            </form>
        </div>

        <!-- Additional Info -->
        <div style="text-align: center; margin-top: 30px;">
            <p style="color: #666; font-size: 14px; margin-bottom: 10px;">Need help? Contact our support team</p>
            <p style="color: #e65100; font-size: 14px; margin: 0;">📞 +91 9544146660 | 📧 support@entemarriage.com</p>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('login-form');
    const loginMethodRadios = document.querySelectorAll('input[name="login_method"]');
    const emailField = document.getElementById('email-field');
    const phoneField = document.getElementById('phone-field');
    const otpBtn = document.getElementById('otp-login-btn');

    // Toggle between email and phone login
    loginMethodRadios.forEach(radio => {
        radio.addEventListener('change', function() {
            if (this.value === 'email') {
                emailField.style.display = 'block';
                phoneField.style.display = 'none';
                emailField.querySelector('input').required = true;
                phoneField.querySelector('input').required = false;
            } else {
                emailField.style.display = 'none';
                phoneField.style.display = 'block';
                emailField.querySelector('input').required = false;
                phoneField.querySelector('input').required = true;
            }
        });
    });

    // Form submission
    form.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Basic validation
        const requiredFields = form.querySelectorAll('[required]');
        let isValid = true;
        
        requiredFields.forEach(field => {
            if (!field.value.trim()) {
                field.style.borderColor = '#dc3545';
                isValid = false;
            } else {
                field.style.borderColor = '#ddd';
            }
        });
        
        if (isValid) {
            // Here you would typically submit the form via AJAX
            alert('Login form submitted! This would connect to your backend.');
        }
    });

    // OTP Login
    otpBtn.addEventListener('click', function() {
        alert('OTP login feature would be implemented here.');
    });
});
</script>

<?php get_footer(); ?> 