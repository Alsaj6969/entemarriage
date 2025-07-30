# EnteMarriage - Kerala Matrimony Theme

A modern, responsive matrimony theme inspired by NikahinKerala.com for EnteMarriage. **Everything is editable through WordPress admin.**

## 🎯 **Theme Features**

- ✅ **Fully Editable Content** - Every text, image, and color can be changed
- ✅ **WordPress Customizer Integration** - Live preview of changes
- ✅ **ACF (Advanced Custom Fields) Support** - Advanced content management
- ✅ **Responsive Design** - Works on all devices
- ✅ **Modern UI/UX** - Clean and professional design
- ✅ **SEO Optimized** - Built with best practices

## 📁 **Installation**

1. **Upload the theme folder** to `wp-content/themes/kerala-matrimony-theme/`
2. **Activate the theme** in WordPress Admin → Appearance → Themes
3. **Install ACF Plugin** (recommended for advanced editing)

## 🎨 **How to Edit Everything**

### **1. WordPress Customizer (Easiest Method)**

Go to **WordPress Admin → Appearance → Customize** to edit:

#### **Header Settings**
- Phone Number
- Email Address
- Site Logo
- Site Name

#### **Hero Section**
- Hero Title
- Hero Subtitle

#### **About Section**
- About Title
- About Content
- Active Users Count
- Success Stories Count
- App Downloads Count

#### **Footer Settings**
- Footer Description
- Footer Phone
- Footer Email

#### **Colors & Background**
- Primary Color
- Secondary Color
- Background Color
- Background Image

### **2. ACF Options Pages (Advanced Method)**

If you have ACF Pro installed, you'll see these new menu items:

#### **Theme Settings**
- All customizer options plus additional fields

#### **Home Page Content**
- Hero section content
- About section content
- Features section content
- Testimonials section content

#### **Profile Content**
- Profile templates
- Search filters
- Registration forms

### **3. Direct File Editing**

#### **Edit Templates**
- `front-page.php` - Home page content
- `header.php` - Header content
- `footer.php` - Footer content
- `functions.php` - Theme functionality

#### **Edit Styles**
- `style.css` - All CSS styles
- Colors use CSS custom properties for easy editing

## 🎨 **Customization Guide**

### **Changing Colors**

**Method 1: WordPress Customizer**
1. Go to Appearance → Customize
2. Click "Color Settings"
3. Change Primary Color and Secondary Color
4. Click "Publish"

**Method 2: CSS Variables**
Edit `style.css` and change the `:root` variables:

```css
:root {
    --primary-color: #e65100;    /* Orange */
    --secondary-color: #28a745;  /* Green */
    --background-color: #f8f9fa; /* Light Gray */
    --text-color: #333;          /* Dark Gray */
}
```

### **Changing Content**

**Method 1: WordPress Customizer**
1. Go to Appearance → Customize
2. Navigate to the section you want to edit
3. Change the text
4. Click "Publish"

**Method 2: ACF Fields**
1. Go to the relevant ACF Options page
2. Edit the fields
3. Click "Update"

### **Adding New Sections**

1. **Edit `front-page.php`** to add new sections
2. **Add CSS** to `style.css` for styling
3. **Add Customizer options** in `functions.php`

Example adding a new section:

```php
<!-- New Section -->
<section class="new-section">
    <div class="container">
        <h2><?php echo get_editable_content('new_section_title', 'Default Title'); ?></h2>
        <p><?php echo get_editable_content('new_section_content', 'Default content...'); ?></p>
    </div>
</section>
```

## 📱 **Page Templates**

The theme includes these custom page templates:

- **Registration Page** (`template-register.php`)
- **Login Page** (`template-login.php`)
- **User Dashboard** (`template-dashboard.php`)
- **My Profile** (`template-profile.php`)
- **View Other Profile** (`template-view-profile.php`)
- **Matches** (`template-matches.php`)
- **Search** (`template-search.php`)
- **Notifications** (`template-notifications.php`)
- **Menu** (`template-menu.php`)
- **Admin Panel** (`template-admin.php`)

## 🔧 **Advanced Customization**

### **Adding Custom Fields**

1. **Install ACF Pro**
2. **Create Field Groups** for your content
3. **Use `get_field()`** function to display content

Example:
```php
<?php echo get_field('custom_field_name', 'option'); ?>
```

### **Adding Custom Post Types**

Add to `functions.php`:

```php
function create_matrimony_post_types() {
    register_post_type('profiles', array(
        'labels' => array(
            'name' => 'Profiles',
            'singular_name' => 'Profile'
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail')
    ));
}
add_action('init', 'create_matrimony_post_types');
```

### **Adding Custom Taxonomies**

```php
function create_matrimony_taxonomies() {
    register_taxonomy('location', 'profiles', array(
        'labels' => array(
            'name' => 'Locations',
            'singular_name' => 'Location'
        ),
        'hierarchical' => true,
        'public' => true
    ));
}
add_action('init', 'create_matrimony_taxonomies');
```

## 🎯 **SEO Optimization**

### **Meta Tags**
- Title tags are automatically generated
- Meta descriptions can be added via ACF
- Open Graph tags are included

### **Schema Markup**
- Local Business schema for contact info
- Organization schema for company details

### **Performance**
- Optimized CSS and JavaScript
- Responsive images
- Fast loading times

## 🔒 **Security Features**

- Sanitized inputs in Customizer
- Escaped outputs in templates
- Nonce verification for forms
- XSS protection

## 📞 **Support**

For support and customization requests:
- Email: info@entemarriage.com
- Phone: +91 9544146660

## 📄 **License**

GNU General Public License v2 or later

---

## 🚀 **Quick Start Checklist**

- [ ] Upload theme to WordPress
- [ ] Activate theme
- [ ] Install ACF Pro (recommended)
- [ ] Customize colors in Customizer
- [ ] Edit content in Customizer
- [ ] Add your logo
- [ ] Update contact information
- [ ] Test on mobile devices
- [ ] Set up SEO meta tags
- [ ] Configure Google Analytics

**Everything in this theme is designed to be easily editable through the WordPress admin interface!** 