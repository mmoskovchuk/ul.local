<?php
/**
 * Template Name: Front Page
 */
?>
<?php $my_lang = pll_current_language(); // определяем текущий язык ?>
<?php get_header(); ?>


    <!--HOME-->
    <div class="ul-home">
        <div class="ul-home__wrap">
            <div class="ul-home__desc"><span><?php pll_e( 'Yuri Lutsenko' ); ?></span></br> <?php pll_e( 'General' ); ?></br> <?php pll_e( 'Prosecutor of Ukraine' ); ?></div>

            <?php if ( $my_lang == 'ua' ) : ?>

                <div class="ul-home__quotes">
                    <q>Лише із суми успіхів</br> мільйонів складеться</br> єдина успішна
                        Україна.</br> Оптимізм вирішує
                        все</q>
                </div>

            <?php elseif ( $my_lang == 'ru' ) : ?>

                <div class="ul-home__quotes">
                    <q>Только с суммы успехов</br> миллионов сложится</br> единая успешная Украина.</br> Оптимизм решает все.</q>
                </div>

            <?php elseif ( $my_lang == 'en' ) : ?>

                <div class="ul-home__quotes">
                    <q>Only from the amount</br> of success of millions will be</br> single successful Ukraine.</br> Optimism solves all.</q>
                </div>

            <?php endif; ?>

            <div class="ul-home__social">
                <a href="#"></a>
            </div>
        </div>
    </div>


<?php get_footer(); ?>