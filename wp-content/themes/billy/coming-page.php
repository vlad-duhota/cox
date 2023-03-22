<?php /* Template Name: Coming soon page */ ?>

<?php get_header(); ?>
<?php $pageId = get_the_ID() ?>
<section class="hero speaking" style="margin-bottom: 40px">
    <?php $bg = carbon_get_post_meta($pageId, 'hero_video')[0]?>
    <video class="hero__img" src="<?php echo wp_get_attachment_url($bg, 'full')?>" autoplay muted></video>
    <div class="container">
        <h2 class="section-title"><?php the_title()?></h2>
        <a href="<?php echo get_home_url()?>" class="btn" style="text-align:center; justify-content: center">
            Back Home
        </a>
    </div>
</section>

<?php get_footer(); ?>