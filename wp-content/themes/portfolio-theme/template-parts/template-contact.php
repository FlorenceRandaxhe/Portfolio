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
                        <li class="contact_item">
                            <span class="contact_label"><?= __('E-mail', 'fr') ?></span>
                            <span itemprop="email"><?= the_field('mail'); ?></span>
                        </li>
                        <li class="contact_item">
                            <span class="contact_label"><?= __('Téléphone', 'fr') ?></span>
                            <span itemprop="telephone"><?= the_field('phone'); ?></span>
                        </li>
                        <li class="contact_item">
                            <span class="contact_label"><?= __('Adresse', 'fr') ?></span>
                            <span itemprop="address"><?= the_field('adresse'); ?></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
