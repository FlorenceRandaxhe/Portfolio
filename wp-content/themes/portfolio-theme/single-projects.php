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
                                    <a target="_blank" class="project_link_item" href="<?= $site; ?>" title="Aller sur le site web">Voir le site web</a>
                                <?php endif; ?>
                            </li>
                            <li>
                                <?php $github = get_field('github_link'); if( $github ): ?>
                                    <a target="_blank" class="project_link_item" href="<?= $github; ?>" title="Aller sur le repo Github du site">Voir sur Github</a>
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
                <div class="project_img_content">
                    <?php $images = get_field('project_images');
                    if( $images ): ?>
                    <h3 aria-level="3" role="heading">Images du projet</h3>
                    <div class="single_project_img">
                        <ul>
                            <?php foreach( $images as $image ): ?>
                                <li class="project_img_list">
                                    <img src="<?= $image['url']; ?>" alt="Capture d'écran du site <?php the_title(); ?>" width="<?= $width; ?>" height="<?= $height; ?>">
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <?php endif; ?>
                </div>

                <div>
                    <div class="project_color_content">
                        <h3 aria-level="3" role="heading">Couleurs</h3>
                        <div class="project_color">
                            <?php if( have_rows('project_colors') ): while ( have_rows('project_colors') ) : the_row(); ?>
                                <div class="circle" style="background-color:<?php the_sub_field('color_item'); ?>"></div>
                            <?php endwhile; else: endif; ?>
                        </div>
                    </div>

                    <div class="project_typo_content">
                        <?php if( have_rows('project_typo') ): while ( have_rows('project_typo') ) : the_row(); ?>
                        <h3 aria-level="3" role="heading">Typographie</h3>
                        <div class="project_typo">
                                <!-- typo -->
                        </div>
                        <?php endwhile; else: endif; ?>
                    </div>

                    <div class="project_logo_content">
                        <?php
                        $image = get_field('project_logo');
                        $size = 'thumbnail';
                        $width = $image['sizes'][ $size . '-width' ];
                        $height = $image['sizes'][ $size . '-height' ];
                        if( !empty($image) ): ?>
                        <h3 aria-level="3" role="heading">Logo</h3>
                        <figure>
                            <img src="<?php echo $image['url']; ?>" alt="Logo du site <?php the_title(); ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>">
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