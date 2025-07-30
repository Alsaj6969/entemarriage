<?php get_header(); ?>

<!-- Hero Section -->
<section class="hero-section" style="background: linear-gradient(135deg, var(--primary-color, #e65100) 0%, #ff9800 100%); padding: 80px 0; text-align: center; color: #fff;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        <h1 style="font-size: 3rem; margin-bottom: 20px; font-weight: bold;"><?php echo get_editable_content('kmtheme_hero_title', 'Join the best Kerala Matrimonial – Find Your Perfect Match Today!'); ?></h1>
        <p style="font-size: 1.2rem; margin-bottom: 40px;"><?php echo get_editable_content('kmtheme_hero_subtitle', 'Make your aspirations a reality – register for free at EnteMarriage Matrimony.'); ?></p>
        
        <!-- Contact Info -->
        <div style="margin-bottom: 40px;">
            <span style="margin-right: 20px; font-size: 1.2rem;">📞 <?php echo get_editable_content('kmtheme_phone_number', '+91 9544146660'); ?></span>
            <span style="font-size: 1.2rem;">📧 <?php echo get_editable_content('kmtheme_email', 'info@entemarriage.com'); ?></span>
        </div>
        
        <!-- Action Buttons -->
        <div style="display: flex; gap: 20px; justify-content: center;">
            <a href="/register" style="background: #fff; color: var(--primary-color, #e65100); padding: 15px 40px; border-radius: 5px; text-decoration: none; font-weight: bold; font-size: 1.2rem;">Register</a>
            <a href="/login" style="background: var(--primary-color, #e65100); color: #fff; padding: 15px 40px; border-radius: 5px; text-decoration: none; font-weight: bold; font-size: 1.2rem; border: 2px solid #fff;">Login</a>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="about-section" style="padding: 80px 0; background: #f8f9fa;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        <div style="text-align: center; margin-bottom: 60px;">
            <h2 style="font-size: 2.5rem; color: #333; margin-bottom: 20px;"><?php echo get_editable_content('kmtheme_about_title', 'EnteMarriage, An Exclusive Kerala Marriage Matrimony For You'); ?></h2>
            <p style="font-size: 1.1rem; color: #666; max-width: 800px; margin: 0 auto; line-height: 1.6;">
                <?php echo get_editable_content('kmtheme_about_content', 'Your Trusted Kerala Matrimony. ISO Certified, it\'s the No.1 choice for brides and grooms in Kerala for their way to marriage. With advanced web and mobile features, we assure profile genuineness through manual verification. Our dedicated support and Elite service make finding your partner forever easier.'); ?>
            </p>
        </div>
    </div>
</section>

<!-- Why Register Section -->
<section class="features-section" style="padding: 80px 0; background: #fff;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        <h2 style="text-align: center; font-size: 2.5rem; color: #333; margin-bottom: 60px;">Why register in EnteMarriage Matrimony?</h2>
        
        <div style="max-width: 800px; margin: 0 auto;">
            <div style="margin-bottom: 40px;">
                <h3 style="font-size: 1.5rem; color: #333; margin-bottom: 15px;">🔐 1. Private, Safe & Handpicked – Not a Public Display</h3>
                <p style="color: #666; line-height: 1.6;">EnteMarriage isn't a place where anyone can browse you. Only verified, serious profiles get access — and your privacy stays fully in your control. "Every introduction is made with dignity and purpose."</p>
            </div>
            
            <div style="margin-bottom: 40px;">
                <h3 style="font-size: 1.5rem; color: #333; margin-bottom: 15px;">🎥 2. Real Introductions, Not Just Photos</h3>
                <p style="color: #666; line-height: 1.6;">With voice and video bios, show who you really are. Your smile, your words, your vibe — because choosing a life partner is more than just swiping through photos. "Let them hear your voice. Not just read your stats."</p>
            </div>
            
            <div style="margin-bottom: 40px;">
                <h3 style="font-size: 1.5rem; color: #333; margin-bottom: 15px;">🎯 3. We Don't Just List — We Curate</h3>
                <p style="color: #666; line-height: 1.6;">Every profile is reviewed, guided, and matched with care. We give you the best, not the most — because you deserve quality, not quantity. "At EnteMarriage, your future isn't found by chance — it's chosen with care."</p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>