<?php

// $acf_fields = get_fields();
// $acf_globals = get_fields('options');

get_header('page'); ?>

<section class="container">

<?php
                if(have_posts()) {
                    while(have_posts()) {
                        the_post();
                        the_content();
                    }

                }
            ?>

</section>
<?php get_footer(); ?>