<?php /* Template Name: Contact page */ ?>

<?php get_header(); ?>
<?php $pageId = get_the_ID() ?>

    <section class="contact-sec">
        <div class="container">
        <h1 class="other-page__title section-title"><span>Contact</span> Billy</h1>
        <div class="contact__cols">
            <div class="contact__left">
                <h2 class="section-title contact__title"><?php echo carbon_get_post_meta($pageId, 'contact_title')?></h2>
                <div class="footer-top__col">
                <a href="tel:<?php echo str_replace('-', '', carbon_get_theme_option('footer_tel'))?>" class="footer__link">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M14 2C14 2 16.2 2.2 19 5C21.8 7.8 22 10 22 10" stroke="white"
                                        stroke-width="1.5" stroke-linecap="round" />
                                    <path
                                        d="M14.207 5.53564C14.207 5.53564 15.197 5.81849 16.6819 7.30341C18.1668 8.78834 18.4497 9.77829 18.4497 9.77829"
                                        stroke="white" stroke-width="1.5" stroke-linecap="round" />
                                    <path
                                        d="M10.0376 5.31617L10.6866 6.4791C11.2723 7.52858 11.0372 8.90532 10.1147 9.8278C10.1147 9.8278 10.1147 9.8278 10.1147 9.8278C10.1146 9.82792 8.99588 10.9468 11.0245 12.9755C13.0525 15.0035 14.1714 13.8861 14.1722 13.8853C14.1722 13.8853 14.1722 13.8853 14.1722 13.8853C15.0947 12.9628 16.4714 12.7277 17.5209 13.3134L18.6838 13.9624C20.2686 14.8468 20.4557 17.0692 19.0628 18.4622C18.2258 19.2992 17.2004 19.9505 16.0669 19.9934C14.1588 20.0658 10.9183 19.5829 7.6677 16.3323C4.41713 13.0817 3.93421 9.84122 4.00655 7.93309C4.04952 6.7996 4.7008 5.77423 5.53781 4.93723C6.93076 3.54428 9.15317 3.73144 10.0376 5.31617Z"
                                        stroke="white" stroke-width="1.5" stroke-linecap="round" />
                                </svg>
                                <?php echo carbon_get_theme_option('footer_tel')?>
                            </a>
                            <a href="mailto:<?php echo carbon_get_theme_option('footer_email')?>" class="footer__link footer__link_2">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M2 12C2 8.22876 2 6.34315 3.17157 5.17157C4.34315 4 6.22876 4 10 4H14C17.7712 4 19.6569 4 20.8284 5.17157C22 6.34315 22 8.22876 22 12C22 15.7712 22 17.6569 20.8284 18.8284C19.6569 20 17.7712 20 14 20H10C6.22876 20 4.34315 20 3.17157 18.8284C2 17.6569 2 15.7712 2 12Z"
                                        stroke="white" stroke-width="1.5" />
                                    <path
                                        d="M6 8L8.1589 9.79908C9.99553 11.3296 10.9139 12.0949 12 12.0949C13.0861 12.0949 14.0045 11.3296 15.8411 9.79908L18 8"
                                        stroke="white" stroke-width="1.5" stroke-linecap="round" />
                                </svg>
                                <?php echo carbon_get_theme_option('footer_email')?>
                            </a>
                            <ul class="footer__socials">
                                <?php foreach(carbon_get_theme_option('socials') as $social) : ?>
                                    <li>
                                        <a href="<?php echo $social['socials_link']?>" target="_blank">
                                            <?php $socialImg = $social['socials_img']?>
                                            <?php echo wp_get_attachment_image($socialImg, 'full')?>
                                        </a>
                                    </li>
                                <?php endforeach;?>
                            </ul>
                </div>
                </div>
            <div class="contact__form">
                <?php echo do_shortcode('[contact-form-7 id="63" title="Contact form 1"]') ?>
            </div>
    
        </div>
    </section>

<?php get_footer(); ?>