<?php
/**
Template name: Events

 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package SKT Nature One
 */

get_header(); ?>

<div class="content-area">
<section class="menu_page">
                <div class="middle-align">
                    <?php $blogpost = new WP_Query('showposts='.of_get_option('blogdisplay')); ?>
                    <?php $j = 0; ?>
                    <?php if( of_get_option('bloghead',true) != 1) { ?><h2><span><?php echo of_get_option('bloghead',true); ?></span></h2><?php } else { ?><h2><span><?php _e('Whats New?','nature-one'); ?></span></h2> <?php } ?>
                        <?php if( $blogpost->have_posts() ) : while( $blogpost->have_posts() ) : $blogpost->the_post(); ?>
                            <?php $j++; ?>
                                <div class="blog-box" <?php if($j%2==0) {?> style="float:right" <?php } ?>>
                                        <div class="blog-meta"><?php echo get_the_time('j'); ?><br /><?php echo date('M'); ?></div><!-- blog-meta -->
                                        <div class="blog-right"><h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                                                <?php echo skt_natureone_content(25); ?>
                                                                <a href="<?php esc_url(the_permalink()); ?>"><?php _e('Read More...','nature-one'); ?></a>
                                        </div><!-- blog-right -->
                                </div><!-- blog-box --><?php if($j%2==0) { ?><div class="clear"></div><?php } ?>
                        <?php  endwhile; else : endif; ?><div class="clear"></div>
                </div><!-- middle-align -->
            </section>
</div><!-- page-bottom -->

<?php get_footer(); ?>