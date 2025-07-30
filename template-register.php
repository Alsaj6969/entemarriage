<?php /* Template Name: Registration Page */ ?>
<?php get_header(); ?>

<div class="register-page">
    <div class="container">
        <div class="page-header">
            <h1>🔐 EnteMarriage Registration Form</h1>
        </div>

        <div class="registration-container">
            <form id="registration-form">
                <!-- Keep the same form fields but remove all style="..." attributes -->
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" name="full_name" required>
                </div>
                <!-- Continue with other form fields similarly -->
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('registration-form');
    
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
            // Show success message
            const container = document.querySelector('.container');
            container.innerHTML = `
                <div style="text-align: center; padding: 40px;">
                    <h2 style="color: #28a745; font-size: 2rem; margin-bottom: 20px;">✅ Thank you for registering!</h2>
                    <p style="color: #666; font-size: 1.1rem;">Our support team will review your profile and contact you shortly.</p>
                </div>
            `;
        }
    });
});
</script>

<?php get_footer(); ?>