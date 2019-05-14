<footer>
    <div class="footer_wrapper">
        <?php if ( is_front_page() || is_single() ): ?>
            <div class="to_contact">

                <div class="to_contact_content"><p><?= __('Vous souhaitez en savoir plus&nbsp;?', 'fr');?></p></div>

                <a href="<?= fr_get_page_url('template-contact.php'); ?>" class="to_contact_link btn">Contact</a>
            </div>
        <?php else : endif; ?>
        <div class="footer_bottom">
            <div class="social">
                <ul class="social_list">
                    <li class="social_item">
                        <a href="https://github.com/FlorenceRandaxhe" class="social_link" title="<?= __('Aller sur mon Github', 'fr');?>">

                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 24 24" width="24"
                                 height="24">
                                <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path>
                            </svg>
                            <span class="hidden"><?= __('Aller sur mon Github', 'fr');?></span>
                        </a>
                    </li>
                    <li class="social_item">
                        <a href="#" class="social_link" title="<?= __('Aller sur mon LinkedIn', 'fr');?>">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 24 24" width="24"
                                 height="24">
                                <g>
                                    <path fill="none" d="M0 0h24v24H0z"/>
                                    <path fill-rule="nonzero" d="M6.94 5a2 2 0 1 1-4-.002 2 2 0 0 1 4 .002zM7 8.48H3V21h4V8.48zm6.32 0H9.34V21h3.94v-6.57c0-3.66 4.77-4 4.77 0V21H22v-7.93c0-6.17-7.06-5.94-8.72-2.91l.04-1.68z"/>
                                </g>
                            </svg>
                            <span class="hidden"><?= __('Aller sur mon LinkedIn', 'fr');?></span>
                        </a>
                    </li>
                    <li class="social_item">
                        <a href="https://www.facebook.com/profile.php?id=100010153307599" class="social_link" title="<?= __('Aller sur mon Facebook', 'fr');?>">
                            <svg xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 24 24" width="24"
                                 height="24">
                                <g>
                                    <path fill="none" d="M0 0h24v24H0z"/>
                                    <path d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14c-.326-.043-1.557-.14-2.857-.14C11.928 2 10 3.657 10 6.7v2.8H7v4h3V22h4v-8.5z"/>
                                </g>
                            </svg>
                            <span class="hidden"><?= __('Aller sur mon Facebook', 'fr');?></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="credit">
                <p>Florence Randaxhe</p>
            </div>
        </div>
    </div>
</footer>
<script src="<?= get_template_directory_uri(); ?>/public/js/main.js"></script>
</body>