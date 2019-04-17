<?php
/**
 * Template Name: INTERVIEW-LIST
 */
?>
<?php get_header(); ?>

<?php $my_lang = pll_current_language(); // определяем текущий язык ?>

    <?php
global $wp_query;
    $paged1 = (get_query_var('paged')) ? get_query_var('paged') : 1;


    $stati_children = new WP_Query(array(
            'posts_per_page' => 4,
            'post_type' => 'page',
            'paged' => $paged1,
            'post_parent' => get_the_ID()
        )
    );
    $published_posts = $stati_children->found_posts;
    $posts_per_page = $stati_children->query_vars['posts_per_page'];
    $page_number_max1 = ceil($published_posts / $posts_per_page);
    ?>

    <!-- INTERVIEW-LIST -->
    <div class="content-wrapper interview-list">

        <div class="list__header header">

            <?php if ($my_lang == 'ua') : ?>

                <a href="/" class="link-with-animated-border breadcrumb header__breadcrumbs">На головну</a>
                <div class="header__title">Інтерв'ю</div>

            <?php elseif ($my_lang == 'ru') : ?>

                <a href="/ru/" class="link-with-animated-border breadcrumb header__breadcrumbs">На главную</a>
                <div class="header__title">Интервью</div>

            <?php elseif ($my_lang == 'en') : ?>

                <a href="/en/" class="link-with-animated-border breadcrumb header__breadcrumbs">Go to home</a>
                <div class="header__title">Interview</div>

            <?php endif; ?>

        </div>
        <div class="list__body body">

            <?php
            if ($stati_children->have_posts()) :
                while ($stati_children->have_posts()): $stati_children->the_post();
                    ?>
                    <div class="body__item">
                        <div class="item__info-wrapper">
                            <div class="img__wrapper">

                                <?php if (has_post_thumbnail()) : ?>

                                    <?php the_post_thumbnail('medium_large', array('class' => 'item__img')); ?>

                                <?php else : ?>
                                    <img src="<?php bloginfo('template_url'); ?>/img/default-img.png"
                                         alt="<?php bloginfo('name'); ?>" class="item__img"/>

                                <?php endif; ?>

                            </div>
                            <div class="item__title"><?php the_title(); ?></div>
                        </div>
                        <a href="<?php the_permalink(); ?>" class="link-with-animated-border  item__link-to-read"><?php pll_e( 'ReadMore' ); ?></a>
                    </div>
                <?php
                endwhile;
            endif;

            wp_reset_query();
            ?>

            <div class="body__pagination pagination">
                <?php if (function_exists("pagination")) {
                    pagination($stati_children->max_num_pages);
                }

                ?>
            </div>

        </div>
        <div id="scrollUpBtn" class="scroll-up-btn"><?php pll_e( 'Up' ); ?> ↑</div>
    </div>


<?php get_footer(); ?>