<?php /* Template Name: My Profile */ ?>
<?php get_header(); ?>
<main class="profile-main" style="max-width:1200px;margin:40px auto;padding:0 16px;">
    <div style="display:flex;flex-wrap:wrap;gap:32px;align-items:flex-start;">
        <!-- Profile Card -->
        <aside style="flex:0 0 300px;background:#fff;border-radius:8px;box-shadow:0 2px 8px rgba(0,0,0,0.07);padding:24px;text-align:center;">
            <?php 
            $profile_photo = get_field('profile_photo') ?: 'https://randomuser.me/api/portraits/men/1.jpg';
            $profile_name = get_field('profile_name') ?: 'Your Name';
            $profile_age = get_field('profile_age') ?: '25';
            $profile_location = get_field('profile_location') ?: 'Kerala';
            $edit_link = get_field('edit_profile_link') ?: '#';
            ?>
            <img src="<?php echo esc_url($profile_photo); ?>" alt="Profile Photo" style="width:120px;height:120px;border-radius:50%;object-fit:cover;margin-bottom:16px;">
            <h2 style="margin:0 0 8px 0;"><?php echo esc_html($profile_name); ?></h2>
            <div style="color:#666;font-size:1rem;margin-bottom:8px;">
                <?php echo esc_html($profile_age); ?>, <?php echo esc_html($profile_location); ?>
            </div>
            <a href="<?php echo esc_url($edit_link); ?>" class="button" style="display:inline-block;margin-top:12px;">Edit Profile</a>
        </aside>
        <!-- Main Content -->
        <section style="flex:1 1 600px;min-width:320px;">
            <!-- Tabs -->
            <div class="profile-tabs" style="display:flex;gap:8px;margin-bottom:24px;overflow-x:auto;">
                <button class="tab-btn active" data-tab="recommended-matches">Recommended Matches</button>
                <button class="tab-btn" data-tab="accepted-profiles">Accepted Profiles</button>
                <button class="tab-btn" data-tab="liked-profiles">Profiles I Liked</button>
                <button class="tab-btn" data-tab="interests-sent">Interests Sent</button>
                <button class="tab-btn" data-tab="visitors">Visitors</button>
            </div>
            <!-- Filter/Search -->
            <div style="display:flex;gap:16px;align-items:center;margin-bottom:24px;flex-wrap:wrap;">
                <input type="text" placeholder="Search by name or community..." style="padding:8px 12px;border-radius:4px;border:1px solid #ccc;">
                <select style="padding:8px 12px;border-radius:4px;border:1px solid #ccc;">
                    <option>All Locations</option>
                    <option>Ernakulam</option>
                    <option>Trivandrum</option>
                    <option>Kozhikode</option>
                </select>
                <select style="padding:8px 12px;border-radius:4px;border:1px solid #ccc;">
                    <option>All Ages</option>
                    <option>18-25</option>
                    <option>26-30</option>
                    <option>31-35</option>
                    <option>36+</option>
                </select>
                <select style="padding:8px 12px;border-radius:4px;border:1px solid #ccc;">
                    <option>All Communities</option>
                    <option>Nair</option>
                    <option>Ezhava</option>
                    <option>Muslim</option>
                    <option>Christian</option>
                </select>
            </div>
            <!-- Tab Content -->
            <div class="tab-content">
                <!-- Recommended Matches Tab -->
                <div class="tab-pane active" id="tab-recommended-matches">
                    <div class="profile-list" style="display:flex;flex-wrap:wrap;gap:24px;">
                        <?php if( have_rows('recommended_matches') ): while( have_rows('recommended_matches') ): the_row(); ?>
                            <div class="profile-card" style="background:#fff;border-radius:8px;box-shadow:0 2px 8px rgba(0,0,0,0.07);padding:16px;max-width:220px;flex:1 1 200px;text-align:center;">
                                <img src="<?php the_sub_field('profile_photo'); ?>" alt="Profile" style="width:64px;height:64px;border-radius:50%;object-fit:cover;margin-bottom:8px;">
                                <h4 style="margin:0 0 4px 0;"><?php the_sub_field('name'); ?></h4>
                                <div style="color:#666;font-size:0.95rem;"><?php the_sub_field('age'); ?>, <?php the_sub_field('location'); ?></div>
                                <div style="color:#888;font-size:0.9rem;">Match: <?php the_sub_field('match_percentage'); ?>%</div>
                                <a href="#" class="button" style="margin-top:8px;display:inline-block;">View</a>
                            </div>
                        <?php endwhile; else: ?>
                            <p>No recommended matches found.</p>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- Accepted Profiles Tab -->
                <div class="tab-pane" id="tab-accepted-profiles">
                    <div class="profile-list" style="display:flex;flex-wrap:wrap;gap:24px;">
                        <?php if( have_rows('accepted_profiles') ): while( have_rows('accepted_profiles') ): the_row(); ?>
                            <div class="profile-card" style="background:#fff;border-radius:8px;box-shadow:0 2px 8px rgba(0,0,0,0.07);padding:16px;max-width:220px;flex:1 1 200px;text-align:center;">
                                <img src="<?php the_sub_field('profile_photo'); ?>" alt="Profile" style="width:64px;height:64px;border-radius:50%;object-fit:cover;margin-bottom:8px;">
                                <h4 style="margin:0 0 4px 0;"><?php the_sub_field('name'); ?></h4>
                                <div style="color:#666;font-size:0.95rem;"><?php the_sub_field('age'); ?>, <?php the_sub_field('location'); ?></div>
                                <div style="color:#888;font-size:0.9rem;">Match: <?php the_sub_field('match_percentage'); ?>%</div>
                                <a href="#" class="button" style="margin-top:8px;display:inline-block;">View</a>
                            </div>
                        <?php endwhile; else: ?>
                            <p>No accepted profiles found.</p>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- Liked Profiles Tab -->
                <div class="tab-pane" id="tab-liked-profiles">
                    <div class="profile-list" style="display:flex;flex-wrap:wrap;gap:24px;">
                        <?php if( have_rows('liked_profiles') ): while( have_rows('liked_profiles') ): the_row(); ?>
                            <div class="profile-card" style="background:#fff;border-radius:8px;box-shadow:0 2px 8px rgba(0,0,0,0.07);padding:16px;max-width:220px;flex:1 1 200px;text-align:center;">
                                <img src="<?php the_sub_field('profile_photo'); ?>" alt="Profile" style="width:64px;height:64px;border-radius:50%;object-fit:cover;margin-bottom:8px;">
                                <h4 style="margin:0 0 4px 0;"><?php the_sub_field('name'); ?></h4>
                                <div style="color:#666;font-size:0.95rem;"><?php the_sub_field('age'); ?>, <?php the_sub_field('location'); ?></div>
                                <div style="color:#888;font-size:0.9rem;">Match: <?php the_sub_field('match_percentage'); ?>%</div>
                                <a href="#" class="button" style="margin-top:8px;display:inline-block;">View</a>
                            </div>
                        <?php endwhile; else: ?>
                            <p>No liked profiles found.</p>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- Interests Sent Tab -->
                <div class="tab-pane" id="tab-interests-sent">
                    <div class="profile-list" style="display:flex;flex-wrap:wrap;gap:24px;">
                        <?php if( have_rows('interests_sent') ): while( have_rows('interests_sent') ): the_row(); ?>
                            <div class="profile-card" style="background:#fff;border-radius:8px;box-shadow:0 2px 8px rgba(0,0,0,0.07);padding:16px;max-width:220px;flex:1 1 200px;text-align:center;">
                                <img src="<?php the_sub_field('profile_photo'); ?>" alt="Profile" style="width:64px;height:64px;border-radius:50%;object-fit:cover;margin-bottom:8px;">
                                <h4 style="margin:0 0 4px 0;"><?php the_sub_field('name'); ?></h4>
                                <div style="color:#666;font-size:0.95rem;"><?php the_sub_field('age'); ?>, <?php the_sub_field('location'); ?></div>
                                <div style="color:#888;font-size:0.9rem;">Match: <?php the_sub_field('match_percentage'); ?>%</div>
                                <a href="#" class="button" style="margin-top:8px;display:inline-block;">View</a>
                            </div>
                        <?php endwhile; else: ?>
                            <p>No interests sent found.</p>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- Visitors Tab -->
                <div class="tab-pane" id="tab-visitors">
                    <div class="profile-list" style="display:flex;flex-wrap:wrap;gap:24px;">
                        <?php if( have_rows('visitors') ): while( have_rows('visitors') ): the_row(); ?>
                            <div class="profile-card" style="background:#fff;border-radius:8px;box-shadow:0 2px 8px rgba(0,0,0,0.07);padding:16px;max-width:220px;flex:1 1 200px;text-align:center;">
                                <img src="<?php the_sub_field('profile_photo'); ?>" alt="Profile" style="width:64px;height:64px;border-radius:50%;object-fit:cover;margin-bottom:8px;">
                                <h4 style="margin:0 0 4px 0;"><?php the_sub_field('name'); ?></h4>
                                <div style="color:#666;font-size:0.95rem;"><?php the_sub_field('age'); ?>, <?php the_sub_field('location'); ?></div>
                                <div style="color:#888;font-size:0.9rem;">Match: <?php the_sub_field('match_percentage'); ?>%</div>
                                <a href="#" class="button" style="margin-top:8px;display:inline-block;">View</a>
                            </div>
                        <?php endwhile; else: ?>
                            <p>No visitors found.</p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>
<?php get_footer(); ?> 