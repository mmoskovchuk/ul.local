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
                                <h3>
                                    <?php the_title(); ?>
                                </h3>
                                <?php the_content(); ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 content-block__order-2 content-block__mobile-margin">

                    <aside class="sidebar">

                        <?php if (is_page(array('298', '123'))): ?>
                            <!-- SIDEBAR-MENU-BLOCK-DEPARTMENT -->
                            <?php get_template_part('includes/inc', 'sidebar-menu-block-department'); ?>
                        <?php endif; ?>

                        <?php if (!is_page(array('298', '123'))): ?>

                            <!-- SIDEBAR-MENU-BLOCK -->
                            <?php get_template_part('includes/inc', 'sidebar-menu-block'); ?>


                            <!-- SIDEBAR-MAP-BLOCK -->
                            <?php /*get_template_part('includes/inc', 'sidebar-map-block'); */?>

                            <!-- SIDEBAR-POLL-BLOCK -->
                            <?php get_template_part('includes/inc', 'sidebar-poll-block'); ?>

                            <!-- SIDEBAR-QR-BLOCK -->
                            <?php get_template_part('includes/inc', 'sidebar-qr-block'); ?>

                        <?php endif; ?>

                    </aside>

                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>