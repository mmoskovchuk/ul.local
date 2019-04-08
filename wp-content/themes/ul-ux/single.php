<?
/*
 * Template name: single
 * */
?>
<?php get_header(); ?>
<!-- TOP-BLOCK -->
<?php get_template_part('includes/inc', 'top-block'); ?>

<!-- BREADCRUMBS -->
<?php get_template_part('includes/inc', 'breadcrumbs'); ?>

<!--CONTENT-->
<section class="content-block">
    <div class="container">
        <div class="content-block__wrap">

            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 content-block__order-1">
                <div class="content-block__default-page">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <div class="content-block__default-page_atr-post-block">
                                <div class="content-block__default-page_date">
                                   <?php the_date(); ?>
                                </div>
                                <div class="content-block__default-page_post-views">
                                    <span>
                                        <i class="far fa-eye"></i>&nbsp;&nbsp;<?php echo get_post_meta ($post->ID,'views',true); ?>
                                    </span>
                                </div>
                            </div>
                            <h3>
                                <?php the_title(); ?>
                            </h3>
                            <?php the_content(); ?>
                            <div class="content-block__default-page_info-wrap">
                                <div class="social-likes social-likes_light">
                                    <div class="facebook" title="Поділитися лінком на Фейсбук">Facebook</div>
                                    <div class="plusone" title="Поділитися лінком на Гугл-плюс">Google+</div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 content-block__order-2 content-block__mobile-margin">

                <aside class="sidebar">

                    <!-- SIDEBAR-MENU-BLOCK -->
                    <?php get_template_part('includes/inc', 'sidebar-menu-block'); ?>

                    <!-- SIDEBAR-MAP-BLOCK -->
                    <?php /*get_template_part('includes/inc', 'sidebar-map-block');*/ ?>

                    <!-- SIDEBAR-POLL-BLOCK -->
                    <?php get_template_part('includes/inc', 'sidebar-poll-block'); ?>

                    <!-- SIDEBAR-QR-BLOCK -->
                    <?php get_template_part('includes/inc', 'sidebar-qr-block'); ?>

                </aside>

            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
