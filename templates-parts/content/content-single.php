<article id="post-<?php the_ID(); ?>" class="single-post hentry">
    <div class="img">
        <?php if(has_excerpt()) { ?>
        <div class="excerpt">
            <?php the_excerpt(); ?>
        </div>
        <?php } ?>
        <div class="meta-group">
            <div class="meta meta-category">
                <span><b><?php _e(' Kategoria: ', 'go' ); ?></b></span>
                <?php the_category();?>
            </div>
            <div class="meta meta-pub">
                <span><b><?php _e('Opublikowano: ', 'go' ); ?></b></span>
                <time class="meta meta-data-pub published" datetime="<?php the_time() ?>"> <span><?php the_time('d.m.Y');?></span></time>
            </div>
        </div>
        <?php the_post_thumbnail('l-post-single'); ?>
    </div>
    <div class="entry-content">
        <?php the_content(); ?>

        <?php if(is_singular('post')) { ?>

        <div id="author-bio">
            <div id="author-avatar"><?php echo get_avatar( get_the_author_meta( 'ID' ), 60 ); ?></div>

            <div id="author-details">
                <div class="author-head">
                    <div class="title">
                        <p class="h3"><?php the_author_posts_link(); ?></p>
                        <i><?php $author_id = get_the_author_meta('ID'); the_field('pozycja', 'user_'. $author_id); ?></i>
                    </div>
                    <div class="links">
                        <?php  if (get_the_author_meta('user_url') ) { ?>
                        <a href="<?php the_author_meta('user_url'); ?>" class="author-website" target="_blank">
                            <i class="fas fa-link"></i>
                        </a>
                        <?php } ?>
                        <?php  if (get_the_author_meta('linkedin') ) { ?>
                        <a href="<?php the_author_meta('linkedin'); ?>" class="author-linkedin" target="_blank">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <?php } ?>
                        <?php  if (get_the_author_meta('facebook') ) { ?>
                        <a href="<?php the_author_meta('facebook'); ?>" class="author-facebook" target="_blank">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <?php } ?>
                        <?php  if (get_the_author_meta('twitter') ) { ?>
                        <a href="<?php the_author_meta('twitter'); ?>" class="author-twitter" target="_blank">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <?php }?>
                        <?php  if (get_the_author_meta('instagram') ) { ?>
                        <a href="<?php the_author_meta('instagram'); ?>" class="author-instagram" target="_blank">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <?php } ?>
                    </div>
                </div>
                <div class="author-footer">
                    <p> <?php the_author_description(); ?></p>
                </div>
            </div><!-- #author-details -->
        </div><!-- #author-bio -->
        <div class="add-to-any__wraper">
            <span>Udostępnij:</span>
            <?php echo do_shortcode("[addtoany]"); ?>
        </div>
        <?php } ?>

    </div>

</article>
