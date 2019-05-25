<?php

/*
    Template Name: Homepage
*/

get_header();

?>
    <main>
        <section class="work" id="work">
            <div class="work_wrapper wrapper project_up">

                <h2 aria-level="2" role="heading"><?= __('Derniers projets', 'fr');?></h2>

                <?php
                $projects = new WP_Query([
                'post_type'=>'projects',
                'order'=>'DESC',
                'order_by'=>'date'
                ]);
                if ($projects->have_posts()) : while ($projects->have_posts()) : $projects->the_post(); ?>

                <div class="project_wrapper">
                    <figure class="project_img">
                        <?php if ( has_post_thumbnail() ): ?>
                            <a href="<?php the_permalink(); ?>" title="<?= __('Aller sur la page du projet', 'fr'); ?>">
                                <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>" width="460" height="320">
                            </a>
                        <?php else: ?>
                            <div class="post_noimg">
                                <img src="<?= asset_path('/src/assets/noimg.jpg'); ?>" alt="ee" width="460" height="320">
                            </div>
                        <?php endif; ?>
                    </figure>

                    <div class="project_content">
                        <h3 aria-level="3" role="heading" class="project_title">

                            <?php the_title(); ?>
                        </h3>
                        <div class="project_description_wrapper">

                            <?php the_excerpt(); ?>

                        </div>
                        <div class="project_link">
                            <a href="<?php the_permalink(); ?>" class="btn" title="<?= __('Aller sur la page du projet', 'fr'); ?>">
                                <?= __('Voir le projet', 'fr');?>
                                <span class="hidden"><?php the_title(); ?></span>
                            </a>
                        </div>
                    </div>
                </div>

                <?php endwhile; else: ?>
                    <div class="noproject">
                        <div class="noproject_wrapper">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384.89 261.77" width="600"
                                 height="auto">
                                <g>
                                    <g>
                                        <circle class="noproject_img" cx="26.31" cy="42.57" r="7.38"/>
                                        <polygon class="noproject_img" points="352.75 24.02 342.62 18.41 332.5 12.81 342.41 6.84 352.33 0.88 352.54 12.45 352.75 24.02"/>
                                        <polygon class="noproject_img" points="17.35 232.21 18.35 242.23 19.36 252.25 10.18 248.11 0.99 243.97 9.17 238.09 17.35 232.21"/>
                                        <circle class="noproject_img" cx="169.22" cy="66.24" r="12.49"/>
                                        <circle class="noproject_img" cx="169.22" cy="66.24" r="9.04"/>
                                        <path class="noproject_img" d="M341.19,210.8a12.49,12.49,0,0,0-.72-17.65l-2.34,2.54A9,9,0,1,1,325.89,209l-2.34,2.54A12.49,12.49,0,0,0,341.19,210.8Z"/>
                                        <path class="noproject_img" d="M144.22,239.21c-4.93.79-9.46-1.89-10.12-6s2.62-7.81,7.33-8.74l.5-.06-.46-2.83h-.1v0l-.4.08c-4.73.53-9-2.09-9.61-6s2.8-8,7.73-8.82l-.46-2.83c-6.81,1.09-11.59,6.54-10.68,12.19.6,3.73,3.54,6.6,7.43,7.81-3.36,2.36-5.29,6-4.69,9.79.91,5.65,7.17,9.34,14,8.26Z"/>
                                        <rect class="noproject_img" x="287.01" y="65.03" width="3.5" height="25" rx="1.75" ry="1.75" transform="translate(114.13 -165.16) rotate(39.23)"/>
                                        <rect class="noproject_img" x="258.01" y="244.53" width="4" height="17" rx="2" ry="2" transform="translate(80.79 -62.42) rotate(16.18)"/>
                                    </g>
                                </g>
                            </svg>
                            <p class="empty"><?= __('Il n\'y a pas de projet à afficher actuellement !', 'fr');?></p>
                        </div>
                    </div>
                <?php endif; ?>

            </div>
        </section>
    </main>

<?php get_footer(); ?>