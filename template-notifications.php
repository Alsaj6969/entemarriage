<?php /* Template Name: Notifications */ ?>
<?php get_header(); ?>

<div class="notifications-page" style="background: #f8f9fa; min-height: 100vh; padding: 20px 0;">
    <div class="container" style="max-width: 800px; margin: 0 auto; padding: 0 20px;">
        
        <!-- Page Header -->
        <div style="text-align: center; margin-bottom: 40px;">
            <h1 style="color: #333; font-size: 2.5rem; margin-bottom: 10px;">Notifications</h1>
            <p style="color: #666; font-size: 1.1rem;">Stay updated with your matrimony activities</p>
        </div>

        <!-- Notifications Container -->
        <div class="notifications-container" style="background: #fff; border-radius: 10px; box-shadow: 0 5px 20px rgba(0,0,0,0.1); overflow: hidden;">
            
            <!-- Filter Tabs -->
            <div class="notification-tabs" style="background: #f8f9fa; padding: 20px; border-bottom: 1px solid #eee;">
                <div style="display: flex; gap: 10px; overflow-x: auto;">
                    <button class="tab-btn active" data-tab="all">All (15)</button>
                    <button class="tab-btn" data-tab="interests">Interests (8)</button>
                    <button class="tab-btn" data-tab="messages">Messages (3)</button>
                    <button class="tab-btn" data-tab="visitors">Visitors (4)</button>
                    <button class="tab-btn" data-tab="system">System (2)</button>
                </div>
            </div>

            <!-- Notifications List -->
            <div class="notifications-list" style="padding: 20px;">
                
                <!-- All Notifications Tab -->
                <div class="tab-pane active" id="tab-all">
                    
                    <!-- Interest Received -->
                    <div class="notification-item" style="display: flex; gap: 15px; padding: 20px; border-bottom: 1px solid #eee; align-items: flex-start;">
                        <div style="width: 50px; height: 50px; border-radius: 50%; background: #e65100; color: #fff; display: flex; align-items: center; justify-content: center; font-size: 20px;">💕</div>
                        <div style="flex: 1;">
                            <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 8px;">
                                <h4 style="margin: 0; color: #333;">Interest Received</h4>
                                <span style="color: #666; font-size: 12px;">2 hours ago</span>
                            </div>
                            <p style="margin: 0 0 10px 0; color: #666; line-height: 1.5;">
                                <strong>Profile ID: 456789</strong> has sent you an interest. They are 28 years old, Engineer from Thrissur, Kerala.
                            </p>
                            <div style="display: flex; gap: 10px;">
                                <button style="background: #e65100; color: #fff; padding: 8px 15px; border: none; border-radius: 5px; font-size: 14px; cursor: pointer;">View Profile</button>
                                <button style="background: #28a745; color: #fff; padding: 8px 15px; border: none; border-radius: 5px; font-size: 14px; cursor: pointer;">Accept</button>
                                <button style="background: #dc3545; color: #fff; padding: 8px 15px; border: none; border-radius: 5px; font-size: 14px; cursor: pointer;">Decline</button>
                            </div>
                        </div>
                    </div>

                    <!-- New Message -->
                    <div class="notification-item" style="display: flex; gap: 15px; padding: 20px; border-bottom: 1px solid #eee; align-items: flex-start;">
                        <div style="width: 50px; height: 50px; border-radius: 50%; background: #28a745; color: #fff; display: flex; align-items: center; justify-content: center; font-size: 20px;">💬</div>
                        <div style="flex: 1;">
                            <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 8px;">
                                <h4 style="margin: 0; color: #333;">New Message</h4>
                                <span style="color: #666; font-size: 12px;">5 hours ago</span>
                            </div>
                            <p style="margin: 0 0 10px 0; color: #666; line-height: 1.5;">
                                <strong>Profile ID: 456789</strong> has sent you a message: "Hi Priya, I liked your profile. Would you like to know more about me?"
                            </p>
                            <div style="display: flex; gap: 10px;">
                                <button style="background: #e65100; color: #fff; padding: 8px 15px; border: none; border-radius: 5px; font-size: 14px; cursor: pointer;">Reply</button>
                                <button style="background: #6c757d; color: #fff; padding: 8px 15px; border: none; border-radius: 5px; font-size: 14px; cursor: pointer;">View Chat</button>
                            </div>
                        </div>
                    </div>

                    <!-- Profile Visitor -->
                    <div class="notification-item" style="display: flex; gap: 15px; padding: 20px; border-bottom: 1px solid #eee; align-items: flex-start;">
                        <div style="width: 50px; height: 50px; border-radius: 50%; background: #17a2b8; color: #fff; display: flex; align-items: center; justify-content: center; font-size: 20px;">👁️</div>
                        <div style="flex: 1;">
                            <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 8px;">
                                <h4 style="margin: 0; color: #333;">Profile Visitor</h4>
                                <span style="color: #666; font-size: 12px;">1 day ago</span>
                            </div>
                            <p style="margin: 0 0 10px 0; color: #666; line-height: 1.5;">
                                <strong>Profile ID: 789123</strong> visited your profile. They are 26 years old, Doctor from Kochi, Kerala.
                            </p>
                            <div style="display: flex; gap: 10px;">
                                <button style="background: #e65100; color: #fff; padding: 8px 15px; border: none; border-radius: 5px; font-size: 14px; cursor: pointer;">View Profile</button>
                                <button style="background: #28a745; color: #fff; padding: 8px 15px; border: none; border-radius: 5px; font-size: 14px; cursor: pointer;">Send Interest</button>
                            </div>
                        </div>
                    </div>

                    <!-- System Notification -->
                    <div class="notification-item" style="display: flex; gap: 15px; padding: 20px; border-bottom: 1px solid #eee; align-items: flex-start;">
                        <div style="width: 50px; height: 50px; border-radius: 50%; background: #6c757d; color: #fff; display: flex; align-items: center; justify-content: center; font-size: 20px;">🔔</div>
                        <div style="flex: 1;">
                            <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 8px;">
                                <h4 style="margin: 0; color: #333;">Profile Verification</h4>
                                <span style="color: #666; font-size: 12px;">2 days ago</span>
                            </div>
                            <p style="margin: 0 0 10px 0; color: #666; line-height: 1.5;">
                                Congratulations! Your profile has been verified successfully. You now have a verified badge on your profile.
                            </p>
                            <div style="display: flex; gap: 10px;">
                                <button style="background: #e65100; color: #fff; padding: 8px 15px; border: none; border-radius: 5px; font-size: 14px; cursor: pointer;">View Profile</button>
                            </div>
                        </div>
                    </div>

                    <!-- Interest Accepted -->
                    <div class="notification-item" style="display: flex; gap: 15px; padding: 20px; border-bottom: 1px solid #eee; align-items: flex-start;">
                        <div style="width: 50px; height: 50px; border-radius: 50%; background: #28a745; color: #fff; display: flex; align-items: center; justify-content: center; font-size: 20px;">✅</div>
                        <div style="flex: 1;">
                            <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 8px;">
                                <h4 style="margin: 0; color: #333;">Interest Accepted</h4>
                                <span style="color: #666; font-size: 12px;">3 days ago</span>
                            </div>
                            <p style="margin: 0 0 10px 0; color: #666; line-height: 1.5;">
                                <strong>Profile ID: 321654</strong> has accepted your interest. You can now start chatting with them.
                            </p>
                            <div style="display: flex; gap: 10px;">
                                <button style="background: #e65100; color: #fff; padding: 8px 15px; border: none; border-radius: 5px; font-size: 14px; cursor: pointer;">Start Chat</button>
                                <button style="background: #6c757d; color: #fff; padding: 8px 15px; border: none; border-radius: 5px; font-size: 14px; cursor: pointer;">View Profile</button>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Other tabs would have filtered content -->
                <div class="tab-pane" id="tab-interests">
                    <p style="text-align: center; color: #666; padding: 40px;">Interest notifications will appear here.</p>
                </div>

                <div class="tab-pane" id="tab-messages">
                    <p style="text-align: center; color: #666; padding: 40px;">Message notifications will appear here.</p>
                </div>

                <div class="tab-pane" id="tab-visitors">
                    <p style="text-align: center; color: #666; padding: 40px;">Visitor notifications will appear here.</p>
                </div>

                <div class="tab-pane" id="tab-system">
                    <p style="text-align: center; color: #666; padding: 40px;">System notifications will appear here.</p>
                </div>

            </div>

            <!-- Load More Button -->
            <div style="text-align: center; padding: 20px; border-top: 1px solid #eee;">
                <button style="background: #e65100; color: #fff; padding: 12px 30px; border: none; border-radius: 5px; font-size: 16px; font-weight: bold; cursor: pointer; transition: background 0.3s;">
                    Load More Notifications
                </button>
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