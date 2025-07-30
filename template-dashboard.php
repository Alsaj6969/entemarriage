<?php /* Template Name: User Dashboard */ ?>
<?php get_header(); ?>

<div class="dashboard-page" style="background: #f8f9fa; min-height: 100vh; padding: 20px 0;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        
        <!-- Dashboard Header -->
        <div style="background: #fff; border-radius: 10px; padding: 20px; margin-bottom: 20px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <h1 style="color: #333; font-size: 1.8rem; margin: 0;">Welcome back, Priya!</h1>
                <div style="display: flex; gap: 15px; align-items: center;">
                    <a href="/notifications" style="color: #666; text-decoration: none; font-size: 1.2rem;">🔔</a>
                    <a href="/search" style="color: #666; text-decoration: none; font-size: 1.2rem;">🔍</a>
                    <a href="/menu" style="color: #666; text-decoration: none; font-size: 1.2rem;">⚙️</a>
                </div>
            </div>
        </div>

        <div style="display: grid; grid-template-columns: 300px 1fr; gap: 20px;">
            
            <!-- Sidebar - User Profile Card -->
            <div class="sidebar" style="background: #fff; border-radius: 10px; padding: 20px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); height: fit-content;">
                <div style="text-align: center; margin-bottom: 20px;">
                    <img src="https://randomuser.me/api/portraits/women/1.jpg" alt="Profile Photo" style="width: 100px; height: 100px; border-radius: 50%; object-fit: cover; margin-bottom: 15px;">
                    <h3 style="color: #333; margin: 0 0 5px 0;">Priya Nair</h3>
                    <p style="color: #666; margin: 0 0 10px 0;">25 years, Kochi, Kerala</p>
                    <div style="background: #e65100; color: #fff; padding: 5px 15px; border-radius: 20px; font-size: 12px; display: inline-block;">Premium Member</div>
                </div>

                <div style="border-top: 1px solid #eee; padding-top: 20px;">
                    <h4 style="color: #333; margin-bottom: 15px;">Quick Stats</h4>
                    <div style="display: grid; gap: 10px;">
                        <div style="display: flex; justify-content: space-between; padding: 8px 0; border-bottom: 1px solid #f0f0f0;">
                            <span style="color: #666;">Profile Views</span>
                            <span style="color: #e65100; font-weight: bold;">127</span>
                        </div>
                        <div style="display: flex; justify-content: space-between; padding: 8px 0; border-bottom: 1px solid #f0f0f0;">
                            <span style="color: #666;">Interests Received</span>
                            <span style="color: #e65100; font-weight: bold;">23</span>
                        </div>
                        <div style="display: flex; justify-content: space-between; padding: 8px 0; border-bottom: 1px solid #f0f0f0;">
                            <span style="color: #666;">Interests Sent</span>
                            <span style="color: #e65100; font-weight: bold;">15</span>
                        </div>
                        <div style="display: flex; justify-content: space-between; padding: 8px 0;">
                            <span style="color: #666;">Matches</span>
                            <span style="color: #e65100; font-weight: bold;">8</span>
                        </div>
                    </div>
                </div>

                <div style="margin-top: 20px;">
                    <a href="/profile" style="background: #e65100; color: #fff; padding: 10px 20px; border-radius: 5px; text-decoration: none; display: block; text-align: center; font-weight: bold;">Edit Profile</a>
                </div>
            </div>

            <!-- Main Content -->
            <div class="main-content">
                
                <!-- Navigation Tabs -->
                <div class="dashboard-tabs" style="background: #fff; border-radius: 10px; padding: 20px; margin-bottom: 20px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                    <div style="display: flex; gap: 10px; overflow-x: auto;">
                        <button class="tab-btn active" data-tab="recommended">Recommended Matches</button>
                        <button class="tab-btn" data-tab="accepted">Accepted Profiles</button>
                        <button class="tab-btn" data-tab="liked">Profiles I Liked</button>
                        <button class="tab-btn" data-tab="interests">Interests Sent</button>
                        <button class="tab-btn" data-tab="received">Interests Received</button>
                        <button class="tab-btn" data-tab="visitors">Recent Visitors</button>
                    </div>
                </div>

                <!-- Filter Section -->
                <div class="filter-section" style="background: #fff; border-radius: 10px; padding: 20px; margin-bottom: 20px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                    <h4 style="color: #333; margin-bottom: 15px;">Filter & Search</h4>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px;">
                        <input type="text" placeholder="Search by name or ID..." style="padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
                        <select style="padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
                            <option>All Locations</option>
                            <option>Kochi</option>
                            <option>Trivandrum</option>
                            <option>Kozhikode</option>
                            <option>Thrissur</option>
                        </select>
                        <select style="padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
                            <option>All Ages</option>
                            <option>18-25</option>
                            <option>26-30</option>
                            <option>31-35</option>
                            <option>36+</option>
                        </select>
                        <select style="padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
                            <option>All Communities</option>
                            <option>Nair</option>
                            <option>Ezhava</option>
                            <option>Muslim</option>
                            <option>Christian</option>
                        </select>
                    </div>
                </div>

                <!-- Tab Content -->
                <div class="tab-content">
                    
                    <!-- Recommended Matches Tab -->
                    <div class="tab-pane active" id="tab-recommended">
                        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 20px;">
                            <?php for ($i = 1; $i <= 6; $i++): ?>
                            <div class="profile-card" style="background: #fff; border-radius: 10px; padding: 20px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                                <div style="display: flex; gap: 15px; align-items: center; margin-bottom: 15px;">
                                    <img src="https://randomuser.me/api/portraits/men/<?php echo $i; ?>.jpg" alt="Profile" style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover;">
                                    <div style="flex: 1;">
                                        <h4 style="margin: 0 0 5px 0; color: #333;">Profile ID: <?php echo 400000 + $i; ?></h4>
                                        <p style="margin: 0; color: #666;"><?php echo 26 + $i; ?> years, Thrissur, Kerala</p>
                                        <p style="margin: 5px 0 0 0; color: #888; font-size: 14px;">Engineer, IT Sector</p>
                                    </div>
                                    <div style="text-align: right;">
                                        <div style="background: #28a745; color: #fff; padding: 3px 8px; border-radius: 12px; font-size: 12px; margin-bottom: 5px;"><?php echo 85 + $i; ?>% Match</div>
                                        <div style="color: #666; font-size: 12px;">Online</div>
                                    </div>
                                </div>
                                <div style="display: flex; gap: 10px;">
                                    <button style="background: #e65100; color: #fff; padding: 8px 15px; border: none; border-radius: 5px; font-size: 14px; cursor: pointer; flex: 1;">View Profile</button>
                                    <button style="background: #28a745; color: #fff; padding: 8px 15px; border: none; border-radius: 5px; font-size: 14px; cursor: pointer; flex: 1;">Send Interest</button>
                                </div>
                            </div>
                            <?php endfor; ?>
                        </div>
                    </div>

                    <!-- Other tabs would have similar structure -->
                    <div class="tab-pane" id="tab-accepted">
                        <p style="text-align: center; color: #666; padding: 40px;">No accepted profiles found.</p>
                    </div>

                    <div class="tab-pane" id="tab-liked">
                        <p style="text-align: center; color: #666; padding: 40px;">No liked profiles found.</p>
                    </div>

                    <div class="tab-pane" id="tab-interests">
                        <p style="text-align: center; color: #666; padding: 40px;">No interests sent found.</p>
                    </div>

                    <div class="tab-pane" id="tab-received">
                        <p style="text-align: center; color: #666; padding: 40px;">No interests received found.</p>
                    </div>

                    <div class="tab-pane" id="tab-visitors">
                        <p style="text-align: center; color: #666; padding: 40px;">No recent visitors found.</p>
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