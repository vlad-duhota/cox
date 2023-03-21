<?php /* Template Name: Speaking page */ ?>

<?php get_header(); ?>
<?php $pageId = get_the_ID() ?>
<section class="hero speaking">
    <?php $bg = carbon_get_post_meta($pageId, 'hero_video')[0]?>
    <video class="hero__img" src="<?php echo wp_get_attachment_url($bg, 'full')?>" autoplay muted></video>
    <div class="container">
        <h2 class="section-title"><?php the_title()?></h2>
        <p class="hero__text-big"><?php echo carbon_get_post_meta($pageId, 'hero_text')?></p>
        <a href="<?php echo carbon_get_post_meta($pageId, 'hero_btn_link')?>" class="btn">
            <?php echo carbon_get_post_meta($pageId, 'hero_btn')?>
            <svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M18 7.81818C18 7.2659 17.5523 6.81818 17 6.81818C16.4477 6.81818 16 7.2659 16 7.81818H18ZM2 7.81818C2 7.2659 1.55228 6.81818 1 6.81818C0.447715 6.81818 0 7.2659 0 7.81818H2ZM3.18404 15.5541L3.64616 14.6673H3.64616L3.18404 15.5541ZM1.43597 13.7663L0.540904 14.2122L0.540904 14.2123L1.43597 13.7663ZM16.564 13.7663L15.669 13.3204V13.3204L16.564 13.7663ZM14.816 15.5541L15.2781 16.4409L14.816 15.5541ZM10 1C10 0.447715 9.55229 0 9 0C8.44772 0 8 0.447715 8 1H10ZM9 11.2273L8.28499 11.9264C8.47313 12.1188 8.73089 12.2273 9 12.2273C9.26911 12.2273 9.52687 12.1188 9.71501 11.9264L9 11.2273ZM12.3817 9.19912C12.7678 8.80423 12.7607 8.17111 12.3658 7.78499C11.9709 7.39888 11.3378 7.406 10.9517 7.80088L12.3817 9.19912ZM7.04834 7.80088C6.66223 7.406 6.0291 7.39888 5.63422 7.78499C5.23933 8.17111 5.23221 8.80423 5.61833 9.19912L7.04834 7.80088ZM16 7.81818V9.45455H18V7.81818H16ZM10.6 15H7.4V17H10.6V15ZM2 9.45455V7.81818H0V9.45455H2ZM7.4 15C6.26302 15 5.47179 14.9992 4.85608 14.9477C4.25272 14.8973 3.90756 14.8035 3.64616 14.6673L2.72191 16.4409C3.31617 16.7506 3.95888 16.8797 4.68954 16.9408C5.40784 17.0008 6.29677 17 7.4 17V15ZM0 9.45455C0 10.584 -0.000743747 11.4898 0.0576726 12.2211C0.11697 12.9633 0.241977 13.6122 0.540904 14.2122L2.33104 13.3204C2.194 13.0453 2.10102 12.6839 2.05132 12.0618C2.00074 11.4287 2 10.6162 2 9.45455H0ZM3.64616 14.6673C3.08341 14.3741 2.62173 13.9039 2.33104 13.3204L0.540904 14.2123C1.0172 15.1683 1.77937 15.9498 2.72191 16.4409L3.64616 14.6673ZM16 9.45455C16 10.6162 15.9993 11.4287 15.9487 12.0618C15.899 12.6839 15.806 13.0453 15.669 13.3204L17.4591 14.2123C17.758 13.6122 17.883 12.9633 17.9423 12.2211C18.0007 11.4898 18 10.584 18 9.45455H16ZM10.6 17C11.7032 17 12.5922 17.0008 13.3105 16.9408C14.0411 16.8797 14.6838 16.7506 15.2781 16.4409L14.3538 14.6673C14.0924 14.8035 13.7473 14.8973 13.1439 14.9477C12.5282 14.9992 11.737 15 10.6 15V17ZM15.669 13.3204C15.3783 13.9039 14.9166 14.3741 14.3538 14.6673L15.2781 16.4409C16.2206 15.9498 16.9828 15.1683 17.4591 14.2122L15.669 13.3204ZM8 1V11.2273H10V1H8ZM9.71501 11.9264L12.3817 9.19912L10.9517 7.80088L8.28499 10.5282L9.71501 11.9264ZM9.71501 10.5282L7.04834 7.80088L5.61833 9.19912L8.28499 11.9264L9.71501 10.5282Z" fill="white"/>
            </svg>
        </a>
    </div>
</section>
<section class="faq">
    <div class="container">
        <h2 class="section-title faq__title_1"><?php echo carbon_get_post_meta($pageId, 'faq_title_1')?></h2>
        <p class="faq__uptitle"><?php echo carbon_get_post_meta($pageId, 'faq_uptitle')?></p>
        <h2 class="section-title faq__title_2"><?php echo carbon_get_post_meta($pageId, 'faq_title_2')?></h2>
        <ul class="faq__list">
            <?php foreach(carbon_get_post_meta($pageId, 'faq_list') as $faqItem) : ?>
                <li class="faq__item">
                    <h3><?php echo $faqItem['faq_list_title']?></h3>
                    <div class="faq__item-text text">
                        <p></p>
                        <?php echo $faqItem['faq_list_text']?>
                    </div>
                    <div class="faq__item-btn">
                        <svg width="11" height="6" viewBox="0 0 11 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M1 0.999878L4.66719 4.39542C5.0394 4.74006 5.6107 4.75142 5.99631 4.42183L10 0.999878" stroke="white" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                </li>
            <?php endforeach;?>
        </ul>
    </div>
</section>
<section class="cards cards-speaking">
                <div class="container">
                    <div class="cards__item">
                        <?php $cardImg_1 =  carbon_get_post_meta($pageId, 'sat_img_1')?>
                        <?php echo wp_get_attachment_image($cardImg_1, 'full', [], ["class" => "cards__img"])?>
                        <div class="cards__item-right">
                            <h3 class="cards__item-title"><?php echo carbon_get_post_meta($pageId, 'sat_title_1')?></h3>
                            <div class="cards__item-text text">
                                <?php echo carbon_get_post_meta($pageId, 'sat_text_1')?>
                            </div>
                        </div>
                    </div>
                    <div class="cards__item reverse">
                        <?php $cardImg_2 =  carbon_get_post_meta($pageId, 'sat_img_2')?>
                        <?php echo wp_get_attachment_image($cardImg_2, 'full', [], ["class" => "cards__img"])?>
                        <div class="cards__item-right">
                            <h3 class="cards__item-title"><?php echo carbon_get_post_meta($pageId, 'sat_title_2')?></h3>
                            <div class="cards__item-text text">
                                <?php echo carbon_get_post_meta($pageId, 'sat_text_2')?>
                            </div>
                        </div>
                    </div>
                    <div class="cards__item">
                        <?php $cardImg_3 =  carbon_get_post_meta($pageId, 'sat_img_3')?>
                        <?php echo wp_get_attachment_image($cardImg_3, 'full', [], ["class" => "cards__img"])?>
                        <div class="cards__item-right">
                            <h3 class="cards__item-title"><?php echo carbon_get_post_meta($pageId, 'sat_title_3')?></h3>
                            <div class="cards__item-text text">
                                <?php echo carbon_get_post_meta($pageId, 'sat_text_3')?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

<?php get_footer(); ?>