<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#4285f4">

    <?php wp_head(); ?>
</head>

<body <?php body_class('preload'); $acf_fields = get_fields();
$acf_globals = get_fields('options'); ?>>

    <?php get_template_part('partials/header'); ?>

    <main>
    <section class="page-header" style="background-image: url('<?php echo $acf_fields['page_img']; ?>'); ">
        <div class="container-fluid">
            <div class="wrapper">
                <h1>
                    <?php echo $acf_fields['page_t1']; ?>
                </h1>
            </div>
        </div>
    </section>
