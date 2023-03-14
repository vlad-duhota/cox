<!DOCTYPE html>
<html <?php language_attributes() ?>>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
<body <?php body_class() ?>>


    <?php wp_body_open() ?>
    <div class="wrapper">
        <header class="header">
            <div class="container">
                <a href="index.html" class="header__logo">
                    <img src="<?php echo get_template_directory_uri()?>/img/logo.svg">
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
                            <a href="#">Blog</a>
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
                <a href="#" class="btn header__btn">Book Billy</a>
            </div>
        </header>
        <main class="main">