<?php
/*
Template Name: Contact
*/
get_header(); ?>
<main>
    <section class="contact">
        <div class="contact_wrapper wrapper">
            <h2 aria-level="2" role="heading" class="hidden"><?= __('Formulaire de contact', 'fr');?></h2>
            <div class="contact_content">
                <div class="contact_form">
                    <?= fr_contactForm(); ?>
                    <p class="mandatory_fields"><?= __('Les champs munis d’un * sont obligatoires', 'fr') ?></p>
                </div>
                <div class="contact_info">
                    <?php the_field('contact_intro'); ?>
                    <ul class="contact_list">
                        <?php if( have_rows('contact_info') ): while ( have_rows('contact_info') ) : the_row(); ?>
                        <li class="contact_item">
                            <span class="contact_label"><?= the_sub_field('contact_info_label'); ?></span>
                            <?= the_sub_field('contact_info_content'); ?>
                        </li>
                        <?php endwhile; else : endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
