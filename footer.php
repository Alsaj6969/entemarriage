<footer style="background: #1a1a1a; color: #fff; padding: 60px 0 20px 0;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 40px; margin-bottom: 40px;">
            
            <!-- Company Info -->
            <div>
                <h3 style="color: var(--primary-color, #e65100); margin-bottom: 20px; font-size: 1.5rem;"><?php echo get_editable_content('kmtheme_site_name', 'EnteMarriage'); ?></h3>
                <p style="color: #ccc; line-height: 1.6; margin-bottom: 20px;">
                    <?php echo get_editable_content('kmtheme_footer_description', 'EnteMarriage™: The ISO Certified Kerala matrimony platform for your perfect match. The trusted choice for brides and grooms in Kerala seeking their life partner, our profiles are 100% manually verified.'); ?>
                </p>
                <div style="display: flex; gap: 15px;">
                    <a href="#" style="color: #fff; font-size: 1.5rem;">📘</a>
                    <a href="#" style="color: #fff; font-size: 1.5rem;">📷</a>
                    <a href="#" style="color: #fff; font-size: 1.5rem;">🐦</a>
                    <a href="#" style="color: #fff; font-size: 1.5rem;">📺</a>
                </div>
            </div>
            
            <!-- Quick Links -->
            <div>
                <h4 style="color: var(--primary-color, #e65100); margin-bottom: 20px;">Quick Links</h4>
                <ul style="list-style: none; padding: 0; margin: 0;">
                    <li style="margin-bottom: 10px;"><a href="/register" style="color: #ccc; text-decoration: none; transition: color 0.3s;">Register Free</a></li>
                    <li style="margin-bottom: 10px;"><a href="/search" style="color: #ccc; text-decoration: none; transition: color 0.3s;">Search Profiles</a></li>
                    <li style="margin-bottom: 10px;"><a href="/success-stories" style="color: #ccc; text-decoration: none; transition: color 0.3s;">Success Stories</a></li>
                    <li style="margin-bottom: 10px;"><a href="/assisted-service" style="color: #ccc; text-decoration: none; transition: color 0.3s;">Assisted Service</a></li>
                    <li style="margin-bottom: 10px;"><a href="/contact" style="color: #ccc; text-decoration: none; transition: color 0.3s;">Contact Us</a></li>
                </ul>
            </div>
            
            <!-- Contact Info -->
            <div>
                <h4 style="color: var(--primary-color, #e65100); margin-bottom: 20px;">Contact Info</h4>
                <p style="color: #ccc; line-height: 1.6; margin-bottom: 10px;">
                    📞 <?php echo get_editable_content('kmtheme_footer_phone', '+91 9544146660'); ?>
                </p>
                <p style="color: #ccc; line-height: 1.6; margin-bottom: 10px;">
                    📧 <?php echo get_editable_content('kmtheme_footer_email', 'info@entemarriage.com'); ?>
                </p>
                <p style="color: #ccc; line-height: 1.6; margin-bottom: 20px;">
                    📍 Kochi, Kerala, India
                </p>
            </div>
            
            <!-- Mobile App -->
            <div>
                <h4 style="color: var(--primary-color, #e65100); margin-bottom: 20px;">Download Mobile App</h4>
                <p style="color: #ccc; line-height: 1.6; margin-bottom: 20px;">Get the EnteMarriage app for a better experience</p>
                <div style="display: flex; gap: 10px; flex-wrap: wrap;">
                    <a href="#" style="background: #333; color: #fff; padding: 8px 15px; border-radius: 5px; text-decoration: none; font-size: 12px;">📱 Google Play</a>
                    <a href="#" style="background: #333; color: #fff; padding: 8px 15px; border-radius: 5px; text-decoration: none; font-size: 12px;">🍎 App Store</a>
                </div>
            </div>
        </div>
        
        <!-- Bottom Bar -->
        <div style="border-top: 1px solid #333; padding-top: 20px; text-align: center;">
            <p style="color: #ccc; margin: 0;">
                © <?php echo date('Y'); ?> <?php echo get_editable_content('kmtheme_site_name', 'EnteMarriage'); ?>. All rights reserved. | 
                <a href="/privacy-policy" style="color: #ccc; text-decoration: none;">Privacy Policy</a> | 
                <a href="/terms-conditions" style="color: #ccc; text-decoration: none;">Terms & Conditions</a>
            </p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html> 