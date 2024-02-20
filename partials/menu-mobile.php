
<div class="l-header__right">
    <div class="l-header-widgets">
                <?php dynamic_sidebar( 'sidebar-header' ); ?>
            </div>
    <div class="c-menu-mobile js-menu-mobile">
        
        <button class="c-menu-mobile__toggler">
            <i class="fa-solid fa-bars-staggered"></i>
        </button>
        <div class="c-menu-mobile__menu">
            <?php wp_nav_menu(['theme_location' => 'header', 'container' => false]); ?>
        </div>
    </div>

</div>