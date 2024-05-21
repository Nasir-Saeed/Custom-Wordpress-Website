<?php
/*
 * This template is used display Home page
 * Template Name: Home Template
 */
get_header();
?>
<div class="page-custom-header">
    <?php $banner_status = get_theme_mod('egowebsite_home_banner_block_1', 'yes'); ?>
    <?php if ($banner_status == 'yes'): ?>
        <?php $img_url = get_the_post_thumbnail_url(get_the_ID(), 'full') ?>
        <img src="<?php echo $img_url ?>" alt="<?php echo get_the_title() ?>" class="img-fluid">
    <?php endif; ?>
</div>
<div class="flex-row ml-0 mr-0 mt-3 text-center">
    <h1>Who We Are</h1>
    <?php if (have_posts()): ?>
        <?php while (have_posts()):
            the_post(); ?>
            <p><?php the_content(); ?></p>
        <?php endwhile; ?>
    <?php endif; ?>
</div>
<div class="home-services row ml-0 mr-0 mt-5">
    <?php
    $args = array(
        'post_type' => 'service',
        'posts_per_page'=> 3,
        'order'=> 'ASC',
    );
    $tech_posts = new WP_QUERY($args);
    if ($tech_posts->have_posts()): ?>
        <?php while ($tech_posts->have_posts()):
            $tech_posts->the_post(); ?>
            <div class="home-service-col col-4">
                <div class="service-thumb col-12">
                    <?php the_post_thumbnail('medium ', array('class' => 'img-thumbnail')); ?>
                </div>
                <div class="service-title col-12">
                    <h3><a href="<?php echo get_the_permalink(get_the_ID()) ?>"><?php the_title(); ?></a></h3>
                    <p><?php the_excerpt(); ?></p>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
</div>
<div class="home-posts row ml-0 mr-0 mt-5">
    <div class="col">
        <div class="section-head">
            <h3><?php echo get_theme_mod('egowebsite_featured_block_1', 'Latest From Technology') ?></h3>
        </div>
        <div class="section-content pt-4">
            <?php
            $args = array(
                'cat' => 5,
                'posts_per_page' => 3,
            );
            $tech_posts = new WP_QUERY($args);
            if ($tech_posts->have_posts()): ?>
                <?php while ($tech_posts->have_posts()):
                    $tech_posts->the_post(); ?>
                    <div class="home-post-row row ml-0 mr-0 mb-3">
                        <div class="post-thumb col-4 pl-0">
                            <?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid')); ?>
                        </div>
                        <div class="post-title col-8">
                            <h3><a href="<?php echo get_the_permalink(get_the_ID()) ?>"><?php the_title(); ?></a></h3>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
    <div class="col">
        <div class="section-head">Latest From Social Media</div>
        <div class="section-content pt-4">
            <?php
            $args = array(
                'cat' => 6,
                'posts_per_page' => 3,
            );
            $social_posts = new WP_QUERY($args);
            if ($social_posts->have_posts()): ?>
                <?php while ($social_posts->have_posts()):
                    $social_posts->the_post(); ?>
                    <div class="home-post-row row ml-0 mr-0 mb-3">
                        <div class="post-thumb col-4 pl-0">
                            <?php the_post_thumbnail('thumbnail', array('class' => 'img-fluid')); ?>
                        </div>
                        <div class="post-title col-8">
                            <h3><a href="<?php echo get_the_permalink(get_the_ID()) ?>"><?php the_title(); ?></a></h3>
                            <p><?php the_excerpt(); ?></p>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>

</div>


<?php
get_footer();
?>