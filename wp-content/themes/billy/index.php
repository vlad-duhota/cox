<?php get_header(); ?>
    <?php if(!( is_cart() || is_checkout() || is_account_page() || is_wc_endpoint_url())) { ?>
    <div class="container text-page">
    <?php }?>

        <h1><?php the_title()?></h1>
        <?php the_content()?>

    <?php if(!( is_cart() || is_checkout() || is_account_page() || is_wc_endpoint_url())) { ?>
    </div>
    <?php }?>

<?php get_footer(); ?>