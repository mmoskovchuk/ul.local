<?
/*
 * Template name: NEWS-PAGE
 * */
?>
<?php get_header(); ?>


<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="news__main-img__desktop">
            <?php if (has_post_thumbnail()) : ?>

                <?php the_post_thumbnail('large', array('class' => '')); ?>
            <?php else : ?>
                <img src="<?php bloginfo('template_url'); ?>/img/default-img.png"
                     alt="<?php bloginfo('name'); ?>" class="item__img"/>
            <?php endif; ?>
        </div>
        <div class="content-wrapper news-page">
            <!-- BREADCRUMBS -->
            <div class="list__header header breadcrumb">
                <?php get_template_part('includes/inc', 'breadcrumbs'); ?>
                <!--<a href="javascript:void(0)" class="link-with-animated-border breadcrumb header__breadcrumbs">На головну</a>
                <span> / </span>
                <a href="javascript:void(0)" class="link-with-animated-border breadcrumb header__breadcrumbs">Новини</a>-->
            </div>
            <div class="common-page__common common">
                <div class="common__content">

                    <div class="common__header">
                        <div class="common__title"> <?php the_title(); ?></div>
                        <div class="news__main-img__mobile">
                            <?php if (has_post_thumbnail()) : ?>

                                <?php the_post_thumbnail('large', array('class' => '')); ?>
                            <?php else : ?>
                                <img src="<?php bloginfo('template_url'); ?>/img/default-img.png"
                                     alt="<?php bloginfo('name'); ?>" class="item__img"/>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="common__body">

                        <div class="body__text">
                            <?php the_content(); ?>
                        </div>


                        <div class="body__video">
                            <?php the_field('video_news'); ?>
                        </div>

                    </div>

                </div>
            </div>

            <div class="common-page__footer footer">
                <div class="footer__source">
                    <?php

                    $link = get_field('news_source');

                    if( $link ):
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        Джерело:
                        <a href="<?php echo esc_url($link_url); ?>" target="<?php echo esc_attr($link_target); ?>"><?php echo esc_html($link_title); ?></a>
                    <?php endif; ?>
                </div>

                <div class="footer__share">
                    <div class="share__text">Поділитись</div>
                    <div class="socials">
                        <a href="javascript:void(0)" class="social share__social">
                            <div class="social-facebook"></div>
                        </a>
                        <a href="javascript:void(0)" class="social share__social">
                            <div class="icon-share"></div>
                        </a>
                    </div>
                </div>
            </div>


            <div id="scrollUpBtn" class="scroll-up-btn">Нагору ↑</div>

        </div>
    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
