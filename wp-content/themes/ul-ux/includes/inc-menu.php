<?php $my_lang = pll_current_language(); // определяем текущий язык ?>

<div class="ul-menu__wrap" id="nav-block">
    <input type="checkbox" id="hmt" class="ul-menu__hidden-ticker">
    <label class="ul-menu__btn" for="hmt">
        <span class="first"></span>
        <span class="second"></span>
        <span class="third"></span>
    </label>
    <ul class="ul-menu__hidden">

        <?php if ( $my_lang == 'ua' ) : ?>

            <p class="ul-menu__title"><a href="/" class="link-to-page">Юрій Луценко</a></p>

        <?php elseif ( $my_lang == 'ru' ) : ?>

            <p class="ul-menu__title"><a href="/ru/" class="link-to-page">Юрий Луценко</a></p>

        <?php elseif ( $my_lang == 'en' ) : ?>

            <p class="ul-menu__title"><a href="/en/" class="link-to-page">Yuri Lutsenko</a></p>

        <?php endif; ?>

        <nav id="nav">

            <?php if ( $my_lang == 'ua' ) : ?>

                <ul>
                    <li><a href="/biohrafiia/" class="link-to-page">Біографія</a></li>
                    <li><a href="/ukrainski-revoliutsii/" class="link-to-page">Українські революції</a></li>
                    <li><a href="/novyny" class="link-to-page">Новини</a></li>
                    <li><a href="/interv-iu/" class="link-to-page">Інтерв’ю</a></li>
                    <li><a href="/books" class="link-to-page">Книги</a></li>
                </ul>

            <?php elseif ( $my_lang == 'ru' ) : ?>

                <ul>
                    <li><a href="/ru/byohrafyia/" class="link-to-page">Биография</a></li>
                    <li><a href="/ru/ukraynskye-revoliutsyy/" class="link-to-page">Украинские революции</a></li>
                    <li><a href="/ru/novosty" class="link-to-page">Новости</a></li>
                    <li><a href="/ru/ynterviu/" class="link-to-page">Интервью</a></li>
                    <li><a href="/books" class="link-to-page">Книги</a></li>
                </ul>

            <?php elseif ( $my_lang == 'en' ) : ?>

                <ul>
                    <li><a href="/en/biography/" class="link-to-page">Biography</a></li>
                    <li><a href="/en/ukrainian-revolutions/" class="link-to-page">Ukrainian Revolutions</a></li>
                    <li><a href="/en/news" class="link-to-page">News</a></li>
                    <li><a href="/en/interview/" class="link-to-page">Interview</a></li>
                    <li><a href="/books" class="link-to-page">Books</a></li>
                </ul>

            <?php endif; ?>

            <div class="ul-menu__lang">
                <ul><?php pll_the_languages(array('show_names'=>1)); ?></ul>
            </div>

            <div class="ul-menu__social" id="menu-social">
                <ul>
                    <li><a href="#" target="_blank"></a></li>
                    <li><a href="#" target="_blank"></a></li>
                    <li><a href="#" target="_blank"></a></li>
                </ul>
            </div>
        </nav>
    </ul>
</div>