<?php get_header(); ?>
    <main class="main">
        <div class="container">
            <h2 class="main__title"><?php the_field('main__title')?></h2>
            <div class="main__text">
                <div class="main__text_p1"><?php the_field('main__text1')?></div>
                <div><?php the_field('main__text2')?></div>
                <div><?php the_field('main__text3')?></div>
                <div class="main__text_bold"><?php the_field('main__text4')?></div>
            </div>
            <div class="main__img">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/shavings.png" alt="shavings">
            </div>
            <div class="project">
                <h2 class="project__title"><?php the_field('project__title')?></h2>
                <div class="project__item">
                <?php
                    $featured_posts = get_field('project__item');
                    if( $featured_posts ): ?>
                        <ul>
                        <?php foreach( $featured_posts as $post ): 
                            setup_postdata($post); ?>
                            <li>
                                <div class="project__name"><?php the_field('project__name')?></div>
                                <div class="project__size"><?php the_field('project__size')?></div>
                                <div class="project__area"><?php the_field('project__area')?></div>
                                <div class="project__price"><?php the_field('project__price')?></div>
                                <div class="project__images">
                                    <div class="project__images-item">
                                        <img src="<?php the_field('project__images-item')?>" alt="project home 1">
                                    </div>
                                    <div class="project__images-item">
                                        <img src="<?php the_field('project__images-plan')?>" alt="project home plan 1">
                                    </div>
                                </div>
                            </li>
                        <?php endforeach; ?>
                        </ul>
                        <?php 
                        wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="download">
            <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/download_house.png" alt="download house" class="download__img">
            <a href="<?php the_field('download__link')?>" class="download__link" download><?php the_field('download__link_text')?></a>
        </div>
        <div class="container">
            <div class="gallery">
                <h2 class="gallery__title"><?php the_field('gallery__title')?></h2>
                <div class="gallery__text"><?php the_field('gallery__text')?></div>
                <div id="gallery__inner" class="gallery__inner">
                <?php the_field('gallery_foto')?>
                </div>
            </div>
            <div class="main__img">
                <img src="<?php bloginfo( 'template_url' ); ?>/assets/img/shavings.png" alt="">
            </div>

        </div>
    </main>
    <?php get_footer(); ?>