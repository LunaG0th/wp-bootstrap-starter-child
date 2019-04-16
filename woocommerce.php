<?php
/**
 * The template for displaying Woocommerce Product
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>
<!-- <section class="container"><h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1></section> -->
  <?php do_action( 'woocommerce_sidebar' ); ?>

    <section id="primary" class="content-area col-sm-12 col-md-12 col-lg-9">
        <main id="main" class="site-main" role="main">

            <?php woocommerce_content(); ?>

        </main><!-- #main -->
    </section><!-- #primary -->

<?php

get_footer();
