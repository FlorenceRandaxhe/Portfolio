<?php
/*
Template Name: About
*/
get_header(); ?>
    <main>
        <section class="about">
            <div class="about_wrapper wrapper">
                <h2 aria-level="2" role="heading" class="hidden"><?= __('Quelques mots sur moi', 'fr');?></h2>
                <div class="about_content">
                    <div class="about_text">
                        <?php the_field('about_content');
                        $file = get_field('about_link');  if( $file ): ?>
                        <div>
                            <a href="<?= $file['url']; ?>" class="about_link"><?= __('Télécharger mon CV', 'fr');?></a>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php
                    $image = get_field('about_picture');
                    if( !empty($image) ): ?>
                    <figure class="about_img">
                        <img src="<?= $image['url']; ?>" alt="<?= __('Photo de Florence Randaxhe', 'fr');?>" width="<?= $image['width']; ?>" height="<?= $image['height']; ?>">
                    </figure>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </main>
<?php get_footer(); ?>