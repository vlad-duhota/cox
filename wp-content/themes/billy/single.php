<?php get_header(); 
?>
    <section class="blog-sec">
        <div class="container">
            <h1 class="section-title blog__title"><span>Blog</span> Billy </h1>
            <div class="blog__item blog__item-big">
                <?php $postImg = get_post_thumbnail_id(get_the_ID())?>
                <a href="<?php echo the_permalink(get_the_ID())?>" class="blog__item-img">
                    <?php echo wp_get_attachment_image($postImg, 'full')?>
                </a>
                <div class="blog__item-right">
                    <p class="blog__item-date"><?php echo get_the_date()?></p>
                    <h3 class="blog__item-title h2"><a href="<?php echo the_permalink(get_the_ID())?>"><?php the_title()?></a></h3>
                    <div class="blog__item-content text">
                        <?php the_content()?>
                    </div>
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>