<?php /* Template Name: Menu */ ?>
<?php get_header(); ?>

<div class="menu-page" style="background: #f8f9fa; min-height: 100vh; padding: 20px 0;">
    <div class="container" style="max-width: 800px; margin: 0 auto; padding: 0 20px;">
        
        <!-- Page Header -->
        <div style="text-align: center; margin-bottom: 40px;">
            <h1 style="color: #333; font-size: 2.5rem; margin-bottom: 10px;">Account Settings</h1>
            <p style="color: #666; font-size: 1.1rem;">Manage your profile, privacy, and account preferences</p>
        </div>

        <!-- Settings Container -->
        <div class="settings-container" style="background: #fff; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.1); overflow: hidden;">
            
            <!-- Settings Navigation -->
            <div class="settings-nav" style="background: #f8f9fa; padding: 20px; border-bottom: 1px solid #eee;">
                <div style="display: flex; gap: 10px; overflow-x: auto;">
                    <button class="tab-btn active" data-tab="profile">Profile Settings</button>
                    <button class="tab-btn" data-tab="privacy">Privacy</button>
                    <button class="tab-btn" data-tab="notifications">Notifications</button>
                    <button class="tab-btn" data-tab="security">Security</button>
                    <button class="tab-btn" data-tab="support">Support</button>
                </div>
            </div>

            <!-- Settings Content -->
            <div class="settings-content" style="padding: 20px;">
                
                <!-- Profile Settings Tab -->
                <div class="tab-pane active" id="tab-profile">
                    <h3 style="color: #333; margin-bottom: 20px;">Profile Settings</h3>
                    
                    <form style="display: grid; gap: 20px;">
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                            <div>
                                <label style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">First Name</label>
                                <input type="text" value="Priya" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px;">
                            </div>
                            <div>
                                <label style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Last Name</label>
                                <input type="text" value="Nair" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px;">
                            </div>
                        </div>

                        <div>
                            <label style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Email Address</label>
                            <input type="email" value="priya@example.com" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px;">
                        </div>

                        <div>
                            <label style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Phone Number</label>
                            <input type="tel" value="+91 9876543210" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px;">
                        </div>

                        <div>
                            <label style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Date of Birth</label>
                            <input type="date" value="1998-05-15" style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px;">
                        </div>

                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;">
                            <div>
                                <label style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Religion</label>
                                <select style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px;">
                                    <option selected>Hindu</option>
                                    <option>Muslim</option>
                                    <option>Christian</option>
                                    <option>Other</option>
                                </select>
                            </div>
                            <div>
                                <label style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Community</label>
                                <select style="width: 100%; padding: 12px; border: 1px solid #ddd; border-radius: 5px;">
                                    <option selected>Nair</option>
                                    <option>Ezhava</option>
                                    <option>Muslim</option>
                                    <option>Christian</option>
                                    <option>Other</option>
                                </select>
                            </div>
                        </div>

                        <div style="text-align: center; margin-top: 20px;">
                            <button type="submit" style="background: #e65100; color: #fff; padding: 12px 30px; border: none; border-radius: 5px; font-size: 16px; font-weight: bold; cursor: pointer;">Save Changes</button>
                        </div>
                    </form>
                </div>

                <!-- Privacy Tab -->
                <div class="tab-pane" id="tab-privacy">
                    <h3 style="color: #333; margin-bottom: 20px;">Privacy Settings</h3>
                    
                    <div style="display: grid; gap: 20px;">
                        <div style="background: #f8f9fa; padding: 20px; border-radius: 5px;">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                                <h4 style="margin: 0; color: #333;">Profile Visibility</h4>
                                <label style="display: flex; align-items: center; gap: 8px;">
                                    <input type="checkbox" checked> Public
                                </label>
                            </div>
                            <p style="margin: 0; color: #666; font-size: 14px;">Allow other users to view your profile</p>
                        </div>

                        <div style="background: #f8f9fa; padding: 20px; border-radius: 5px;">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                                <h4 style="margin: 0; color: #333;">Show Online Status</h4>
                                <label style="display: flex; align-items: center; gap: 8px;">
                                    <input type="checkbox" checked> Show
                                </label>
                            </div>
                            <p style="margin: 0; color: #666; font-size: 14px;">Display when you're online to other users</p>
                        </div>

                        <div style="background: #f8f9fa; padding: 20px; border-radius: 5px;">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                                <h4 style="margin: 0; color: #333;">Allow Messages</h4>
                                <label style="display: flex; align-items: center; gap: 8px;">
                                    <input type="checkbox" checked> Allow
                                </label>
                            </div>
                            <p style="margin: 0; color: #666; font-size: 14px;">Allow other users to send you messages</p>
                        </div>

                        <div style="background: #f8f9fa; padding: 20px; border-radius: 5px;">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                                <h4 style="margin: 0; color: #333;">Show Contact Info</h4>
                                <label style="display: flex; align-items: center; gap: 8px;">
                                    <input type="checkbox"> Show
                                </label>
                            </div>
                            <p style="margin: 0; color: #666; font-size: 14px;">Display your contact information to others</p>
                        </div>
                    </div>
                </div>

                <!-- Notifications Tab -->
                <div class="tab-pane" id="tab-notifications">
                    <h3 style="color: #333; margin-bottom: 20px;">Notification Preferences</h3>
                    
                    <div style="display: grid; gap: 20px;">
                        <div style="background: #f8f9fa; padding: 20px; border-radius: 5px;">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                                <h4 style="margin: 0; color: #333;">Email Notifications</h4>
                                <label style="display: flex; align-items: center; gap: 8px;">
                                    <input type="checkbox" checked> Enable
                                </label>
                            </div>
                            <p style="margin: 0; color: #666; font-size: 14px;">Receive notifications via email</p>
                        </div>

                        <div style="background: #f8f9fa; padding: 20px; border-radius: 5px;">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                                <h4 style="margin: 0; color: #333;">SMS Notifications</h4>
                                <label style="display: flex; align-items: center; gap: 8px;">
                                    <input type="checkbox"> Enable
                                </label>
                            </div>
                            <p style="margin: 0; color: #666; font-size: 14px;">Receive notifications via SMS</p>
                        </div>

                        <div style="background: #f8f9fa; padding: 20px; border-radius: 5px;">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                                <h4 style="margin: 0; color: #333;">New Interest Alerts</h4>
                                <label style="display: flex; align-items: center; gap: 8px;">
                                    <input type="checkbox" checked> Enable
                                </label>
                            </div>
                            <p style="margin: 0; color: #666; font-size: 14px;">Get notified when someone sends you interest</p>
                        </div>

                        <div style="background: #f8f9fa; padding: 20px; border-radius: 5px;">
                            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px;">
                                <h4 style="margin: 0; color: #333;">New Message Alerts</h4>
                                <label style="display: flex; align-items: center; gap: 8px;">
                                    <input type="checkbox" checked> Enable
                                </label>
                            </div>
                            <p style="margin: 0; color: #666; font-size: 14px;">Get notified when you receive new messages</p>
                        </div>
                    </div>
                </div>

                <!-- Security Tab -->
                <div class="tab-pane" id="tab-security">
                    <h3 style="color: #333; margin-bottom: 20px;">Security Settings</h3>
                    
                    <div style="display: grid; gap: 20px;">
                        <div>
                            <h4 style="color: #333; margin-bottom: 10px;">Change Password</h4>
                            <form style="display: grid; gap: 15px;">
                                <input type="password" placeholder="Current Password" style="padding: 12px; border: 1px solid #ddd; border-radius: 5px;">
                                <input type="password" placeholder="New Password" style="padding: 12px; border: 1px solid #ddd; border-radius: 5px;">
                                <input type="password" placeholder="Confirm New Password" style="padding: 12px; border: 1px solid #ddd; border-radius: 5px;">
                                <button type="submit" style="background: #e65100; color: #fff; padding: 12px; border: none; border-radius: 5px; font-size: 16px; font-weight: bold; cursor: pointer;">Change Password</button>
                            </form>
                        </div>

                        <div style="background: #f8f9fa; padding: 20px; border-radius: 5px;">
                            <h4 style="color: #333; margin-bottom: 10px;">Two-Factor Authentication</h4>
                            <p style="color: #666; margin-bottom: 15px;">Add an extra layer of security to your account</p>
                            <button style="background: #28a745; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; font-size: 14px; cursor: pointer;">Enable 2FA</button>
                        </div>

                        <div style="background: #f8f9fa; padding: 20px; border-radius: 5px;">
                            <h4 style="color: #333; margin-bottom: 10px;">Login History</h4>
                            <p style="color: #666; margin-bottom: 15px;">View your recent login activity</p>
                            <button style="background: #6c757d; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; font-size: 14px; cursor: pointer;">View History</button>
                        </div>
                    </div>
                </div>

                <!-- Support Tab -->
                <div class="tab-pane" id="tab-support">
                    <h3 style="color: #333; margin-bottom: 20px;">Support & Help</h3>
                    
                    <div style="display: grid; gap: 20px;">
                        <div style="background: #f8f9fa; padding: 20px; border-radius: 5px;">
                            <h4 style="color: #333; margin-bottom: 10px;">Contact Support</h4>
                            <p style="color: #666; margin-bottom: 15px;">Get help from our support team</p>
                            <div style="display: grid; gap: 10px;">
                                <p style="margin: 0; color: #666;">📞 Phone: +91 9544146660</p>
                                <p style="margin: 0; color: #666;">📧 Email: support@entemarriage.com</p>
                                <p style="margin: 0; color: #666;">💬 WhatsApp: +91 9544146660</p>
                            </div>
                        </div>

                        <div style="background: #f8f9fa; padding: 20px; border-radius: 5px;">
                            <h4 style="color: #333; margin-bottom: 10px;">FAQ</h4>
                            <p style="color: #666; margin-bottom: 15px;">Find answers to common questions</p>
                            <button style="background: #17a2b8; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; font-size: 14px; cursor: pointer;">View FAQ</button>
                        </div>

                        <div style="background: #f8f9fa; padding: 20px; border-radius: 5px;">
                            <h4 style="color: #333; margin-bottom: 10px;">Report Issue</h4>
                            <p style="color: #666; margin-bottom: 15px;">Report a problem or bug</p>
                            <button style="background: #ffc107; color: #333; padding: 10px 20px; border: none; border-radius: 5px; font-size: 14px; cursor: pointer;">Report Issue</button>
                        </div>

                        <div style="background: #f8f9fa; padding: 20px; border-radius: 5px;">
                            <h4 style="color: #333; margin-bottom: 10px;">Delete Account</h4>
                            <p style="color: #666; margin-bottom: 15px;">Permanently delete your account and all data</p>
                            <button style="background: #dc3545; color: #fff; padding: 10px 20px; border: none; border-radius: 5px; font-size: 14px; cursor: pointer;">Delete Account</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const tabButtons = document.querySelectorAll('.tab-btn');
    const tabPanes = document.querySelectorAll('.tab-pane');
    
    tabButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            const targetTab = this.getAttribute('data-tab');
            
            // Remove active class from all buttons and panes
            tabButtons.forEach(function(btn) {
                btn.classList.remove('active');
            });
            tabPanes.forEach(function(pane) {
                pane.classList.remove('active');
            });
            
            // Add active class to clicked button and target pane
            this.classList.add('active');
            document.getElementById('tab-' + targetTab).classList.add('active');
        });
    });
});
</script>

<?php get_footer(); ?> 