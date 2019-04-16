<?
/*
 * Template name: NEWS
 * */
?>

<?php $my_lang = pll_current_language(); // определяем текущий язык ?>

<?php get_header(); ?>

    <!-- NEWS -->
    <div class="content-wrapper news-list">

        <?php if ( $my_lang == 'ua' ) : ?>

            <div class="list__header header">
                <a href="/" class="link-with-animated-border breadcrumb header__breadcrumbs">На головну</a>
                <div class="header__title">Новини</div>
            </div>

        <?php elseif ( $my_lang == 'ru' ) : ?>

            <div class="list__header header">
                <a href="/ru/" class="link-with-animated-border breadcrumb header__breadcrumbs">На главную</a>
                <div class="header__title">Новости</div>
            </div>

        <?php elseif ( $my_lang == 'en' ) : ?>

            <div class="list__header header">
                <a href="/en/" class="link-with-animated-border breadcrumb header__breadcrumbs">Go to home</a>
                <div class="header__title">News</div>
            </div>

        <?php endif; ?>



        <div class="list__body body">
            <?php get_template_part('loop'); ?>
            <?php if (function_exists('kama_pagenavi')) kama_pagenavi(); ?>
        </div>

        <div id="scrollUpBtn" class="scroll-up-btn"><?php pll_e( 'Up' ); ?> ↑</div>

    </div>


<?php get_footer(); ?>