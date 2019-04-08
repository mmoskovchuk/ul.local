<div class="row">

    <div class="col-md-12">

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('article'); ?>>

                    <?php if (is_front_page() || is_page()) : // front-page || single page ?>

                        <?php the_content(); ?>

                    <?php elseif (is_single()) : // post ?>

                        <h1><?php the_title(); ?></h1>
                        <?php the_content(); ?>
                        <div class="article__meta">
                            <time class="article__meta-item article__time">
                                <i class="fa fa-clock-o"></i>
                                <?php the_time('d M.') ?>
                            </time>
                        </div>

                    <?php else : // blog || search results || archive page ?>
                        <div class="content-block__news-block">

                            <?php if (has_post_thumbnail()) : ?>

                                <div class="content-block__news-thumbnail">
                                    <?php the_post_thumbnail(); ?>
                                </div>
                                <div class="content-block__news-info">

                                    <h3>
                                        <?php the_title(); ?>
                                    </h3>

                                    <p>
                                        <?php the_truncated_post(450); ?>
                                    </p>
                                    <div class="content-block__news-info-block">
                                    <span>
                                       <?php the_date(); ?>
                                    </span>
                                        <a href="<?php the_permalink(); ?>">
                                            Читати далі <i class="fas fa-angle-double-right"></i>
                                        </a>
                                    </div>
                                </div>

                            <?php else : ?>

                                <div class="content-block__news-thumbnail">
                                    <img src="<?php bloginfo('template_url'); ?>/img/default-img.png"
                                         alt="<?php bloginfo('name'); ?>" class="content-block__news-thumbnail-noimg"/>
                                </div>
                                <div class="content-block__news-info">

                                    <h3>
                                        <?php the_title(); ?>
                                    </h3>

                                    <p>
                                        <?php the_truncated_post(450); ?>
                                    </p>
                                    <div class="content-block__news-info-block">
                                    <span>
                                        <?php the_date(); ?>
                                    </span>
                                        <a href="<?php the_permalink(); ?>">
                                            Читати далі <i class="fas fa-angle-double-right"></i>
                                        </a>
                                    </div>
                                </div>

                            <?php endif; ?>

                        </div>

                    <?php endif; ?>

                </article>
            <?php endwhile; ?>
        <?php endif; ?>

    </div>
</div>