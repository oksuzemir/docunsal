<?php /* Template Name: Anasayfa */ get_header(); ?>
<div class="first-content">
    <section class="slider">
        <div class="flexslider">
            <ul class="slides">

                <?php dynamic_sidebar('anasayfa-slider'); ?>

            </ul>
        </div>
    </section>
</div>

<div class="second-content">
    <div class="second-content-inner">
        <div class="konten">
            <div class="second-content-buttons">
                <div class="second-content-button">
                    <a href="<?php pll_e('/iletisim'); ?>">
                        <i class="fa fa-address-book" aria-hidden="true"></i><?php pll_e('Randevu Al'); ?>
                    </a>
                </div>
                <div class="second-content-contact">
                    <div class="second-content-phone">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="second-content-text">
                        <span><?php pll_e('056132724'); ?></span> <br><?php pll_e('İletişim'); ?> 
                    </div>
                    <a href="tel:<?php pll_e('056132724'); ?>"></a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="third-content">
    <div class="third-content-bg">
        <img src="<?php echo get_template_directory_uri(); ?>/img/pattern-1.png" alt="">
    </div>
    <div class="konten">
        <div class="anasayfa-hakkimda">
            <div class="resume-title-wrap">
                <div class="resume-title">
                    <h1>Doç. Dr. Ünsal Özkuvancı</h1>
                </div>
                <div class="resume-button">
                    <a href="<?php pll_e('/hakkimda'); ?>"><?php pll_e('Detaylar'); ?></a>
                </div>
            </div>
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                <!-- article -->
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <?php the_content(); ?>

                </div>
                <!-- /article -->

                <?php endwhile; ?>

                <?php else: ?>
                <?php endif; ?>
        </div>
        <div class="third-content-inner">
            <?php dynamic_sidebar('anasayfa-card'); ?>
            </a>
        </div>
    </div>

</div>
</div>


<div class="fourth-content">
    <div class="fourth-content-bg">
        <img src="<?php echo get_template_directory_uri(); ?>/img/pattern-2.jpg" alt="">
    </div>
    <div class="fourth-content-inner">
        <div class="fourth-content-left">
            <div class="fourth-content-img">
                <img class="lazy" loading="lazy" src="<?php echo get_template_directory_uri(); ?>/img/fourth-content-img.png" alt="">
            </div>
        </div>
        <div class="fourth-content-right">
            <div class="fourth-konten">
                <div class="fourth-content-title">
                 <?php pll_e('Her Hastaya Özel Kişisel Yaklaşım'); ?>
                </div>
                <div class="fourth-content-wrap">
                    <div class="fourth-content-item">
                        <div class="fourth-content-icon">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="fourth-content-item-inner">
                            <div class="fourth-item-title">Başarılı Sonuçlar</div>
                            <div class="fourth-item-text">
                                Behind the word mountains, far from the countries Vokalia and Consonantia, there
                                live the blind texts.
                            </div>
                        </div>
                    </div>
                    <div class="fourth-content-item">
                        <div class="fourth-content-icon">
                            <i class="fa fa-heartbeat"></i>
                        </div>
                        <div class="fourth-content-item-inner">
                            <div class="fourth-item-title">
                                Specialised Support Service </div>
                            <div class="fourth-item-text">
                                Behind the word mountains, far from the countries Vokalia and Consonantia, there
                                live the blind texts.
                            </div>
                        </div>
                    </div>
                    <div class="fourth-content-item">
                        <div class="fourth-content-icon">
                            <i class="fa fa-user-md"></i>
                        </div>
                        <div class="fourth-content-item-inner">
                            <div class="fourth-item-title">Medical & Surgical </div>
                            <div class="fourth-item-text">
                                Behind the word mountains, far from the countries Vokalia and Consonantia, there
                                live the blind texts.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="third-content">
    <div class="third-content-bg">
        <img src="<?php echo get_template_directory_uri(); ?>/img/pattern-1.png" alt="">
    </div>
    <div class="konten">
    <div class="anasayfa-hakkimda">
            <div class="resume-title-wrap">
                <div class="resume-title">
                    Tedaviler
                </div>
                <div class="resume-button">
                    <a href="<?php pll_e('/tedaviler'); ?>"><?php pll_e('Hepsi'); ?></a>
                </div>
            </div> 
        </div>

        <div class="third-content-inner anasayfa-baslik">
            <?php dynamic_sidebar('parallax-cumle'); ?>
            </a>
        </div>
    </div>
</div>

</div>
</div>
</div>
<div class="eleventh-content">
    <div class="third-content-bg">
        <img src="<?php echo get_template_directory_uri(); ?>/img/pattern-1.png" alt="">
    </div>
    <div class="konten">
    <div class="anasayfa-hakkimda">
            <div class="resume-title-wrap">
                <div class="resume-title">
                    Blog
                </div>
                <div class="resume-button">
                    <a href="<?php pll_e('/blog'); ?>"><?php pll_e('İncele'); ?></a>
                </div>
            </div> 
        </div>
        <div class="eleventh-blog anasayfa-baslik">
            <?php
            $temp = $wp_query;
            $wp_query = null;
            $wp_query = new WP_Query();
            $wp_query->query('cat=1&showposts=9' . '&paged=' . $paged); ?>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <!-- article -->

                    <div class="eleventh-blog-card">
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="eleventh-blog-card-header">
                                <a href="<?php the_permalink(); ?>">

                                    <?php if (has_post_thumbnail()) : ?>

                                        <picture class="lazy-picture">
                                            <source srcset="<?php echo get_template_directory_uri(); ?>/img/img-placeholder.webp" data-srcset="<?php echo wp_get_attachment_image_url(get_post_meta(get_the_ID(), 'second_featured_image', true), 'medium'); ?>" type="image/webp">
                                            <img src="<?php echo get_template_directory_uri(); ?>/img/img-placeholder.jpg" data-src="<?php the_post_thumbnail_url('medium'); ?>" loading="lazy" alt="<?php the_title(); ?>">
                                        </picture>

                                    <?php else : ?>
                                        <picture class="lazy-picture">
                                            <source srcset="<?php echo get_template_directory_uri(); ?>/img/img-placeholder.webp" data-srcset="<?php echo get_template_directory_uri(); ?>/img/bos-img.webp" type="image/webp">
                                            <img width="250" height="72" src="<?php echo get_template_directory_uri(); ?>/img/img-placeholder.png" data-src="<?php echo get_template_directory_uri(); ?>/img/bos-img.jpg" loading="lazy">
                                        </picture>
                                    <?php endif; ?>

                                </a>
                                <div class="eleventh-blog-date">
                                    <span> <?php the_time('j'); ?></span>
                                    <span> <?php the_time('F'); ?></span>
                                </div>
                            </div>
                            <div class="eleventh-blog-card-content ciz">
                                <div class="eleventh-blog-title">
                                    <h2> <a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a> </h2>
                                </div>
                                <div class="eleventh-blog-text">
                                    <p><?php html5wp_excerpt('html5wp_index'); ?></p>
                                </div>
                            </div>
                        </article>
                    </div>



                <?php endwhile; ?>

            <?php else : ?>

            <?php endif; ?>


        </div>
    </div>
</div>

<?php get_footer(); ?>