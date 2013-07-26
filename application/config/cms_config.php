<?php

// Site Name - Used for Templates
$config['site_name'] = 'CodeIgniter HMVC Starter Application';
$config['meta_author'] = 'YOUR NAME HERE';
$config['meta_description'] = 'CodeIgniter HMVC Starter Application';
$config['meta_google_plus'] = 'YOUR GOOGLE PLUS URL';
$config['meta_keywords'] = 'KEYWORD, KEYWORD';
$config['Twitter_handle'] = 'Twitter_handle';


// Set root directory 
$config['root_path'] = $_SERVER['DOCUMENT_ROOT'];

//Set Javascript files to load from CDN
$config['theme_jscdn'] = array('jquery', 'jqueryui');

//Set Javascript files to load
$config['admin_theme_js'] = array('bootstrap.min.js');
$config['theme_js'] = array('bootstrap.min.js');

//Set CSS files to load
$config['admin_theme_css'] = array('bootstrap.css', 'bootstrap-responsive.css');
$config['theme_css'] = array('bootstrap.css', 'bootstrap-responsive.css');

/* * SET THEME VARIABLES* */
$config['theme'] = 'default';
$config['theme_path'] = 'theme/' . $config['theme'] . '/home';
$config['theme_header'] = 'theme/' . $config['theme'] . '/elements/header';
$config['theme_footer'] = 'theme/' . $config['theme'] . '/elements/footer';
$config['meta_analytics'] = 'theme/' . $config['theme'] . '/elements/analytics';

/** PARTIALS * */
$config['theme_right_side_bar'] = 'theme/' . $config['theme'] . '/partials/right-sidebar';
$config['theme_top_nav'] = 'theme/' . $config['theme'] . '/partials/nav';
$config['theme_main_ad'] = 'theme/' . $config['theme'] . '/partials/main-ad';
$config['theme_sidebar_ad'] = 'theme/' . $config['theme'] . '/partials/sidebar-ad';
$config['theme_disqus'] = 'theme/' . $config['theme'] . '/partials/disqus';
$config['theme_disqus_count'] = 'theme/' . $config['theme'] . '/partials/disqus-count';
$config['theme_slider'] = 'theme/' . $config['theme'] . '/partials/slider';

/* * SET ADMIN THEME VARIABLES* */
$config['admin_theme'] = 'admin';
$config['admin_theme_path'] = 'theme/' . $config['admin_theme'] . '/home';
$config['admin_theme_header'] = 'theme/' . $config['admin_theme'] . '/elements/header';
$config['admin_theme_footer'] = 'theme/' . $config['admin_theme'] . '/elements/footer';

/** PARTIALS * */
$config['admin_left_side_bar'] = 'theme/' . $config['admin_theme'] . '/nav/left-sidebar';
$config['admin_top_nav'] = 'theme/' . $config['admin_theme'] . '/nav/nav';