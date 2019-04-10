<?
/*
 * Template name: NEWS
 * */
?>

<?php get_header(); ?>

    <!-- NEWS -->
    <div class="content-wrapper news-list">
        index
        <div class="list__header header">
            <a href="/" class="link-with-animated-border breadcrumb header__breadcrumbs">На головну</a>
            <div class="header__title">Новини</div>
        </div>

        <div class="list__body body">
            <?php get_template_part('loop'); ?>
            <?php if (function_exists('kama_pagenavi')) kama_pagenavi(); ?>
        </div>

        <div id="scrollUpBtn" class="scroll-up-btn">Нагору ↑</div>

    </div>


<?php get_footer(); ?>