<?php get_header(); ?>

<main>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <section class="single_project">
        <div class="single_project_wrapper wrapper">
            <header class="single_project_header">
                <div class="project_header_content">
                    <h2 aria-level="2" role="heading"><?php the_title(); ?></h2>
                    <div class="project_description">
                        <?php the_field('project_description'); ?>
                    </div>
                    <div class="project_links">
                        <ul>
                            <li>
                                <?php $site = get_field('website_link'); if( $site ): ?>
                                    <a class="project_link_item" href="<?= $site; ?>" title="<?= __('Aller sur le site web', 'fr');?>"><?= __('Voir le site web', 'fr');?></a>
                                <?php endif; ?>
                            </li>
                            <li>
                                <?php $github = get_field('github_link'); if( $github ): ?>
                                    <a class="project_link_item" href="<?= $github; ?>" title="<?= __('Aller sur le repo Github du site', 'fr');?>"><?= __('Voir sur Github', 'fr');?></a>
                                <?php endif; ?>
                            </li>

                        </ul>
                    </div>
                </div>
                <figure class="project_header_img">
                    <?php if ( has_post_thumbnail() ): ?>
                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="Logo du projet <?php the_title(); ?>" width="410" height="300">
                    <?php else: ?>
                        <div class="post_noimg">
                            <img src="<?= get_template_directory_uri(); ?>./src/assets/noimg.jpg" alt="" width="410" height="300">
                        </div>
                    <?php endif; ?>
                </figure>
            </header>

            <div class="single_project_content">

                <?php $gallery = get_field('project_images'); if( $gallery ): ?>
                <div class="project_img_content">
                    <h3 aria-level="3" role="heading"><?= __('Images du projet', 'fr');?></h3>
                    <div class="single_project_img">
                        <ul>
                            <?php foreach( $gallery as $image ): ?>
                                <li class="project_img_list">
                                    <img src="<?= $image['url']; ?>" alt="Capture d'écran du site <?php the_title(); ?>" width="<?= $image['width']; ?>" height="<?= $image['height']; ?>">
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <?php endif; ?>

                <div>
                    <?php if( have_rows('project_colors') ):?>
                    <div class="project_color_content">
                        <h3 aria-level="3" role="heading"><?= __('Couleurs', 'fr');?></h3>
                        <div class="project_color">
                            <ul class="color_list">
                        <?php while ( have_rows('project_colors') ) : the_row(); ?>
                                <li class="color_item">
                                    <div class="circle" style="background-color:<?php the_sub_field('color_item'); ?>"></div>
                                    <div class="hex"><p><?php the_sub_field('hex'); ?></p></div>
                                    <span class="hidden"><?php the_sub_field('color'); ?></span>
                                </li>
                        <?php endwhile;?>
                            </ul>
                        </div>
                    </div>
                    <?php else: endif; ?>

                    <?php if( have_rows('project_typo') ):?>
                    <div class="project_typo_content">
                        <h3 aria-level="3" role="heading"><?= __('Typographie', 'fr');?></h3>
                        <div class="project_typo">
                            <ul>
                            <?php while ( have_rows('project_typo') ) : the_row();
                                 $typo = get_sub_field('typo');?>
                                <li>
                                    <img src="<?= $typo['url']; ?>" alt="<?= $typo['title']; ?>" width="200" height="auto">
                                </li>
                             <?php endwhile;?>
                            </ul>
                        </div>
                    </div>
                    <?php else: endif; ?>

                    <div class="project_logo_content">
                        <?php
                        $logo = get_field('project_logo');
                        if( !empty($logo) ): ?>
                        <h3 aria-level="3" role="heading"><?= __('Logo', 'fr');?></h3>
                        <figure>
                            <img src="<?= $logo['url']; ?>" alt="Logo du site <?php the_title(); ?>" width="<?= $logo['width']; ?>" height="<?= $logo['height']; ?>">
                        </figure>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>