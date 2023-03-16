<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
    <script async src="https://link.msgsndr.com/js/form_embed.js"></script>
</head>
<body <?php body_class() ?>>


    <?php wp_body_open() ?>
    <div class="wrapper">
        <header class="header">
            <div class="container">
                <a href="<?php echo get_home_url(); ?>" class="header__logo">
                    <?php $custom_logo_id = get_theme_mod( 'custom_logo' ); ?>
                    <?php echo wp_get_attachment_image( $custom_logo_id, 'full' ); ?>
                </a>
                <nav class="header__menu">
                    <ul class="header__menu-list">
                        <li class="header__menu-item">
                            <a href="#about">About me</a>
                        </li>
                        <li class="header__menu-item">
                            <a href="#book">Order book</a>
                        </li>
                        <li class="header__menu-item">
                            <a href="#money">Make money with me</a>
                        </li>
                        <li class="header__menu-item">
                            <a href="<?php echo get_home_url()?>/blog">Blog</a>
                        </li>
                        <li class="header__menu-item">
                            <a href="#training">Virtual training</a>
                        </li>
                        <li class="header__menu-item">
                            <a href="#school">School</a>
                        </li>
                        <li class="header__menu-item">
                            <a href="#">Shop Merch</a>
                        </li>
                    </ul>
                </nav>
                <a href="#training" class="btn header__btn">Book Billy</a>
                <button class="header__menu-btn">
                    <span></span><span></span><span></span>
                </button>
            </div>
        </header>
        <main class="main">