<?php get_header(); ?>

<?php get_template_part('includes/inc', 'breadcrumbs'); ?>

<!--CONTENT (SAMPLE)-->
<section class="sample-post-content content sample">
    <div class="container">
    <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <h1 class="section-title"><?php the_title(); ?></h1>

                <div class="sample__wrap">
                    <div class="row">
                        <div class="col-sm-6">
                            <?php get_template_part('includes/inc', 'sample-metadata'); ?>
                        </div>
                        <div class="col-sm-6">
                            <div class="sample__download">
                                <div class="form-group">
                                    <input type="email" placeholder="type your email" class="form-control custom-input" id="samples_email_input" required="required"/>
                                    <a href="<?php echo get_field('sample_file')['url']; ?>" class="btn download-btn disabled" id="samples_download_btn">Download</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sample__content">
                    <div class="sample__content-wrap">
                        <?php the_content('', true); ?>
                        <button type="button" class="sample__read-more-btn" id="samples_read_more_btn" disabled="disabled"></button>
                    </div>
                </div>

            </div>
        <?php endwhile; ?>
    <?php endif; ?>
    </div>
</section>

<?php get_template_part('includes/inc', 'random-samples'); ?>
<?php get_template_part('includes/inc', 'order-dark-block'); ?>

<?php get_footer(); ?>
