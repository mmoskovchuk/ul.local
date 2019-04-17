<?php
/**
 * Template Name: BOOKS
 */
?>
<?php $my_lang = pll_current_language(); // определяем текущий язык ?>
<?php get_header(); ?>


    <!-- BOOKS -->
    <div class="content-wrapper books">

        <div class="books__header header">

            <?php if ($my_lang == 'ua') : ?>

                <a href="/" class="link-with-animated-border breadcrumb header__breadcrumbs">На головну</a>
                <div class="header__title">Книги</div>

            <?php elseif ($my_lang == 'ru') : ?>

                <a href="/ru/" class="link-with-animated-border breadcrumb header__breadcrumbs">На главную</a>
                <div class="header__title">Книги</div>

            <?php elseif ($my_lang == 'en') : ?>

                <a href="/en/" class="link-with-animated-border breadcrumb header__breadcrumbs">Go to home</a>
                <div class="header__title">Books</div>

            <?php endif; ?>

        </div>

        <div class="books__body body">

            <div class="body__book book">
                <div class="book__img">
                    <img src="<?php bloginfo('template_url'); ?>/img/books/book1.jpg" alt="">
                </div>

                <div class="book__content">


                    <?php if ($my_lang == 'ua') : ?>

                        <div class="book__title">По обидва боки колючого дроту</div>
                        <div class="book__text">"Розмова журналіста Мустафи Найєма з Юрієм Луценком відбувалася протягом липня 2013 року, майже відразу після виходу політика з ув’язнення. Ох і дали шпрейсу ці два феєричні шукачі справедливості — Юрій Луценко і Мустафа Найєм! Ох і поговорили! Про зустрічі тет-а-тет з Януковичем, Юлією Тимошенко, Ющенком, про школу виживання з тюремними авторитетами і кінченими ментами. Юрій Луценко не лише чудовий оратор, він ще й блискучий оповідач. Його чіпка пам'ять утримує найдрібніші деталі розмов і спостережень. Тут є все — від грубуватих жартів до найніжніших одкровень. Це одна з найвідвертіших книжок про українські політичні і тюремні авгієві стайні. Це розмова, що тягне на повість. (Іван Малкович)"</div>

                    <?php elseif ($my_lang == 'ru') : ?>

                        <div class="book__title">По обе стороны колючей проволоки</div>
                        <div class="book__text">В записи Мустафы Найема</div>

                    <?php elseif ($my_lang == 'en') : ?>

                        <div class="book__title">On both sides of the barbed wire</div>
                        <div class="book__text">In the record of Mustafa Nayem</div>

                    <?php endif; ?>

                    <?php if (get_field('books1_field')): ?>
                        <a class="book__download" download="ul-book-1.pdf"
                           href="/wp-content/uploads/2019/04/vlozhenye-3.pdf">
                            <div class="link-with-animated-border book__download">
                                <div class="download__title">
                                    <div class="download__icon"></div>
                                    <div class="download__text"><?php pll_e( 'DownloadBook' ); ?> .pdf</div>
                                </div>
                            </div>
                        </a>
                    <?php endif; ?>
                </div>
            </div>

            <!--<div class="body__book book">
                <div class="book__img">
                    <img src="<?php /*bloginfo('template_url'); */?>/img/books/book2.jpg" alt="">
                </div>

                <div class="book__content">
                    <div class="book__title">По обидва боки колючого дроту</div>
                    <div class="book__text">Розмова журналіста Мустафи Найєма з Юрієм Луценком відбувалася
                        протягом липня 2013 року, майже відразу після виходу політика з ув’язнення. Ох і дали шпрейсу ці
                        два феєричні шукачі справедливості — Юрій Луценко і Мустафа Найєм! Ох і поговорили! Про зустрічі
                        тет-а-тет з Януковичем, Юлією Тимошенко, Ющенком, про школу виживання з тюремними авторитетами і
                        кінченими ментами. Юрій Луценко не лише чудовий оратор, він ще й блискучий оповідач. Його чіпка
                        пам'ять утримує найдрібніші деталі розмов і спостережень. Тут є все — від грубуватих жартів до
                        найніжніших одкровень. Це одна з найвідвертіших книжок про українські політичні і тюремні
                        авгієві стайні. Це розмова, що тягне на повість. (Іван Малкович)
                    </div>
                    <?php /*if (get_field('books2_field')): */?>
                        <div class="link-with-animated-border book__download">
                            <div class="download__title">
                                <div class="download__icon"></div>
                                <div class="download__text">Завантажити книгу в .pdf</div>
                            </div>
                        </div>
                    <?php /*endif; */?>
                </div>
            </div>-->

        </div>


        <div id="scrollUpBtn" class="scroll-up-btn"><?php pll_e( 'Up' ); ?> ↑</div>
    </div>

<?php get_footer(); ?>