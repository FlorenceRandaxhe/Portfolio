<?php

/*
Template Name: About
*/

get_header(); ?>

    <main>
        <section class="about">
            <div class="about_wrapper wrapper">
                <h2 aria-level="2" role="heading"><?php the_title(); ?></h2>
                <div class="about_content">
                    <div class="about_text">
                        <p>
                            <?php the_field('about_content'); ?>
                        </p>

                        <?php
                        $file = get_field('about_link');  if( $file ): ?>
                        <div>
                            <a target="_blank" href="<?php echo $file['url']; ?>" class="about_link">Télécharger mon CV</a>
                        </div>
                        <?php endif; ?>

                    </div>

                    <?php
                    $image = get_field('about_picture');
                    if( !empty($image) ): ?>
                    <figure class="about_img">
                        <img src="<?php echo $image['url']; ?>" alt="Photo de moi" width="300" height="300">
                    </figure>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </main>

<?php get_footer(); ?>