<?php $acf_fields = get_fields();
		$acf_globals = get_fields('options'); ?>

<footer class="l-footer">
    <div class="l-footer__container l-container">
        <div class="main-footer">
            <div class="w-container">
                <div class="wrapper">
                    <h4><?php echo $acf_globals['dane_nazwa']; ?></h4>
                    <div class="content">
                        <div class="content-address">
                            <div class="icon">
                                <i class="fa-solid fa-location-dot"></i>
                            </div>
                            <div class="wrapper">
                                <p><?php echo $acf_globals['dane_adres_l1']; ?></p>
                                <p><?php echo $acf_globals['dane_adres_l2']; ?></p>
                            </div>
                        </div>
                        <div class="content-contact">
                            <div class="wrapper">
                                <i class="fa-solid fa-phone"></i><?php $link = get_field('dane_telefon', 'option');
                                if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <a class="" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                <?php endif; ?>
                            </div>
                            <div class="wrapper">
                                <i class="fa-solid fa-envelope"></i><?php $link = get_field('dane_email', 'option');
                                if( $link ): 
                                $link_url = $link['url'];
                                $link_title = $link['title'];
                                $link_target = $link['target'] ? $link['target'] : '_self';
                                ?>
                                <a class="" href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="content-nip">
                            <?php echo $acf_globals['dane_nip_regon']; ?>
                        </div>
                    </div>
                </div>
                <div class="wrapper">
                    <h4>menu</h4>
                    <div class="content">
                        <?php 
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'footer',
                                    
                                )
                            )
                        ?>
                    </div>
                </div>
                <div class="wrapper">
                    <h4>informacje</h4>
                    <div class="content">
                        <?php 
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'info',
    
                                )
                            )
                        ?>
                    </div>
                </div>
                <div class="wrapper">
                    <h4>social</h4>
                    <div class="content">
                    <?php if( have_rows('social_media', 'option') ): ?>
                        <ul class="social_media">
                        <?php while( have_rows('social_media', 'option') ): the_row(); 
                            $img = get_sub_field('icon');
                            $link = get_sub_field('link');
                            // d($link);
                        ?>
                            <li>
                                <a href="<?php echo esc_url($link['url']); ?>"><img src="<?php echo esc_url($img['url']) ?>" alt="<?php echo esc_attr($img['alt']) ?>"></a>
                            </li>
                        <?php endwhile; ?>
                        </ul>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="l-footer__author">
            Created with &hearts; by <a href="https://tessellis.eu" rel="author">tessellis.eu</a>.
        </div>
    </div>
</footer>


<script src="http://localhost:35729/livereload.js"></script>
