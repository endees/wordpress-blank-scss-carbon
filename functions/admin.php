<?php

/**
 * Disable gutenberg
 */
// add_filter('use_block_editor_for_post_type', '__return_false', 100);

/**
 * Remove admin pages
 */
function remove_admin_menus() {
	remove_menu_page('edit.php');
	remove_menu_page( 'edit-comments.php' );
	// remove_menu_page( 'tools.php' );
	remove_submenu_page( 'options-general.php', 'options-writing.php' );
	remove_submenu_page( 'options-general.php', 'options-discussion.php' );
	remove_submenu_page( 'options-general.php', 'options-media.php' );
	define('DISALLOW_FILE_EDIT', TRUE);
}
add_action( 'admin_menu', 'remove_admin_menus' );

/**
 * Remove 32px margin-top property from logged admin bar
 */
function remove_admin_login_header() {
    remove_action('wp_head', '_admin_bar_bump_cb');
}
add_action('get_header', 'remove_admin_login_header');

/**
 * Change wordpress wp-admin logo image
 */
function change_wp_login_logo_image() { ?>
    <style>
        body.login{background:#1a1f22;color:#8d8f9a;}
        /* body.login #login h1 a, body.login h1 a{background-image: url(<?php asset('/img/badek_org.svg'); ?>);background-size: 65px!important;} */
        body.login form{background:none;border-radius:4px;border:none;}
        body.login form .input, body.login form input[type=checkbox], body.login input[type=text]{background:#212329;border:1px solid #2E3139;color:#ddd;}
        body.login label{font-size:13px;line-height:3;}
        body.login form .forgetmenot, body.login #login form p.submit{margin-top:15px;}
        body.login #language-switcher select, body.login .language-switcher .button{background-color:#212329;border:1px solid #2E3139;}
        body.login #language-switcher select{margin-top:-13px;}
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'change_wp_login_logo_image' );

/**
 * Change wordpress wp-admin logo behavior
 */
function change_wp_login_logo_url() { ?>
    <script>
        document.getElementById('rememberme').checked = true;
        document.querySelector('.login h1 a').href='https://slawinsky.pl';
    </script>
<?php }
add_action( 'login_footer', 'change_wp_login_logo_url' );