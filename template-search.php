<?php /* Template Name: Search */ ?>
<?php get_header(); ?>

<div class="search-page" style="background: #f8f9fa; min-height: 100vh; padding: 20px 0;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
        
        <!-- Page Header -->
        <div style="text-align: center; margin-bottom: 40px;">
            <h1 style="color: #333; font-size: 2.5rem; margin-bottom: 10px;">Advanced Search</h1>
            <p style="color: #666; font-size: 1.1rem;">Find your perfect match with our advanced search filters</p>
        </div>

        <div style="display: grid; grid-template-columns: 300px 1fr; gap: 20px;">
            
            <!-- Search Filters Sidebar -->
            <div class="search-filters" style="background: #fff; border-radius: 10px; padding: 20px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); height: fit-content;">
                <h3 style="color: #333; margin-bottom: 20px;">Search Filters</h3>
                
                <form id="search-form" style="display: grid; gap: 20px;">
                    
                    <!-- Basic Filters -->
                    <div>
                        <label style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Looking for</label>
                        <select name="gender" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
                            <option value="">Any Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>

                    <div>
                        <label style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Age Range</label>
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 10px;">
                            <input type="number" placeholder="Min Age" name="min_age" style="padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
                            <input type="number" placeholder="Max Age" name="max_age" style="padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
                        </div>
                    </div>

                    <div>
                        <label style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Religion</label>
                        <select name="religion" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
                            <option value="">Any Religion</option>
                            <option value="hindu">Hindu</option>
                            <option value="muslim">Muslim</option>
                            <option value="christian">Christian</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div>
                        <label style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Community</label>
                        <select name="community" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
                            <option value="">Any Community</option>
                            <option value="nair">Nair</option>
                            <option value="ezhava">Ezhava</option>
                            <option value="muslim">Muslim</option>
                            <option value="christian">Christian</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div>
                        <label style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Location</label>
                        <select name="state" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px; margin-bottom: 10px;">
                            <option value="">Any State</option>
                            <option value="kerala">Kerala</option>
                            <option value="tamil-nadu">Tamil Nadu</option>
                            <option value="karnataka">Karnataka</option>
                            <option value="andhra-pradesh">Andhra Pradesh</option>
                            <option value="telangana">Telangana</option>
                            <option value="maharashtra">Maharashtra</option>
                            <option value="delhi">Delhi</option>
                        </select>
                        <input type="text" placeholder="City" name="city" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
                    </div>

                    <div>
                        <label style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Education</label>
                        <select name="education" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
                            <option value="">Any Education</option>
                            <option value="sslc">SSLC</option>
                            <option value="plus-two">Plus Two</option>
                            <option value="diploma">Diploma</option>
                            <option value="bachelor">Bachelor's Degree</option>
                            <option value="master">Master's Degree</option>
                            <option value="phd">PhD</option>
                        </select>
                    </div>

                    <div>
                        <label style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Occupation</label>
                        <select name="occupation" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
                            <option value="">Any Occupation</option>
                            <option value="government">Government</option>
                            <option value="private">Private Sector</option>
                            <option value="business">Business</option>
                            <option value="self-employed">Self Employed</option>
                            <option value="professional">Professional</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div>
                        <label style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Marital Status</label>
                        <select name="marital_status" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
                            <option value="">Any Status</option>
                            <option value="never-married">Never Married</option>
                            <option value="divorced">Divorced</option>
                            <option value="widowed">Widowed</option>
                        </select>
                    </div>

                    <div>
                        <label style="display: block; margin-bottom: 8px; font-weight: bold; color: #333;">Profile Type</label>
                        <select name="profile_type" style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 5px;">
                            <option value="">Any Type</option>
                            <option value="premium">Premium</option>
                            <option value="verified">Verified</option>
                            <option value="photo-verified">Photo Verified</option>
                        </select>
                    </div>

                    <!-- Search Button -->
                    <button type="submit" style="background: #e65100; color: #fff; padding: 12px; border: none; border-radius: 5px; font-size: 16px; font-weight: bold; cursor: pointer; transition: background 0.3s;">
                        Search Profiles
                    </button>

                    <!-- Clear Filters -->
                    <button type="button" id="clear-filters" style="background: #6c757d; color: #fff; padding: 12px; border: none; border-radius: 5px; font-size: 14px; cursor: pointer; transition: background 0.3s;">
                        Clear All Filters
                    </button>
                </form>
            </div>

            <!-- Search Results -->
            <div class="search-results">
                
                <!-- Results Header -->
                <div style="background: #fff; border-radius: 10px; padding: 20px; margin-bottom: 20px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                    <div style="display: flex; justify-content: space-between; align-items: center;">
                        <h3 style="color: #333; margin: 0;">Search Results</h3>
                        <div style="display: flex; gap: 10px; align-items: center;">
                            <span style="color: #666;">Sort by:</span>
                            <select style="padding: 8px; border: 1px solid #ddd; border-radius: 5px;">
                                <option>Latest</option>
                                <option>Age</option>
                                <option>Location</option>
                                <option>Match %</option>
                            </select>
                        </div>
                    </div>
                    <p style="color: #666; margin: 10px 0 0 0;">Showing 1-12 of 1,247 profiles</p>
                </div>

                <!-- Results Grid -->
                <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 20px;">
                    <?php for ($i = 1; $i <= 12; $i++): ?>
                    <div class="profile-card" style="background: #fff; border-radius: 10px; padding: 20px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                        <div style="display: flex; gap: 15px; align-items: center; margin-bottom: 15px;">
                            <img src="https://randomuser.me/api/portraits/<?php echo ($i % 2 == 0) ? 'men' : 'women'; ?>/<?php echo $i; ?>.jpg" alt="Profile" style="width: 60px; height: 60px; border-radius: 50%; object-fit: cover;">
                            <div style="flex: 1;">
                                <h4 style="margin: 0 0 5px 0; color: #333;">Profile ID: <?php echo 400000 + $i; ?></h4>
                                <p style="margin: 0; color: #666;"><?php echo 24 + $i; ?> years, <?php echo ($i % 3 == 0) ? 'Kochi' : (($i % 3 == 1) ? 'Trivandrum' : 'Thrissur'); ?>, Kerala</p>
                                <p style="margin: 5px 0 0 0; color: #888; font-size: 14px;">
                                    <?php echo ($i % 4 == 0) ? 'MBBS, Doctor' : (($i % 4 == 1) ? 'Engineer, IT' : (($i % 4 == 2) ? 'Teacher, Government' : 'Business Owner')); ?>
                                </p>
                            </div>
                            <div style="text-align: right;">
                                <div style="background: #28a745; color: #fff; padding: 3px 8px; border-radius: 12px; font-size: 12px; margin-bottom: 5px;"><?php echo 75 + ($i * 2); ?>% Match</div>
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

                <!-- Pagination -->
                <div style="background: #fff; border-radius: 10px; padding: 20px; margin-top: 20px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); text-align: center;">
                    <div style="display: flex; justify-content: center; gap: 10px; align-items: center;">
                        <button style="background: #e65100; color: #fff; padding: 8px 15px; border: none; border-radius: 5px; font-size: 14px; cursor: pointer;">Previous</button>
                        <span style="padding: 8px 15px; background: #f8f9fa; border-radius: 5px; font-weight: bold;">1</span>
                        <a href="#" style="padding: 8px 15px; background: #fff; border: 1px solid #ddd; border-radius: 5px; text-decoration: none; color: #333;">2</a>
                        <a href="#" style="padding: 8px 15px; background: #fff; border: 1px solid #ddd; border-radius: 5px; text-decoration: none; color: #333;">3</a>
                        <span style="color: #666;">...</span>
                        <a href="#" style="padding: 8px 15px; background: #fff; border: 1px solid #ddd; border-radius: 5px; text-decoration: none; color: #333;">104</a>
                        <button style="background: #e65100; color: #fff; padding: 8px 15px; border: none; border-radius: 5px; font-size: 14px; cursor: pointer;">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchForm = document.getElementById('search-form');
    const clearFiltersBtn = document.getElementById('clear-filters');
    
    // Form submission
    searchForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        // Here you would typically submit the search form via AJAX
        alert('Search form submitted! This would connect to your backend.');
    });
    
    // Clear filters
    clearFiltersBtn.addEventListener('click', function() {
        const form = document.getElementById('search-form');
        form.reset();
    });
});
</script>

<?php get_footer(); ?> 