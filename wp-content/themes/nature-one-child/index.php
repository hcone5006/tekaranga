<?php
/**
 * The template for displaying home page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package SKT Nature One
 */

get_header(); 
?>

<?php if ( 'page' == get_option( 'show_on_front' ) && ( '' != get_option( 'page_for_posts' ) ) && $wp_query->get_queried_object_id() == get_option( 'page_for_posts' ) ) : ?>

    <div class="content-area">
        <div class="middle-align content_sidebar">
            <div class="site-main" id="sitemain">
				<?php
                if ( have_posts() ) :
                    // Start the Loop.
                    while ( have_posts() ) : the_post();
                        /*
                         * Include the post format-specific template for the content. If you want to
                         * use this in a child theme, then include a file called called content-___.php
                         * (where ___ is the post format) and that will be used instead.
                         */
                        get_template_part( 'content', get_post_format() );
                
                    endwhile;
                    // Previous/next post navigation.
                    skt_natureone_pagination();
                
                else :
                    // If no content, include the "No posts found" template.
                     get_template_part( 'no-results', 'index' );
                
                endif;
                ?>
            </div>
            <?php get_sidebar();?>
            <div class="clear"></div>
        </div>
    </div>


<?php else: ?>
    
            <section style="background-color:#594d45;">
                    <div class="welcome-box middle-align">
                        	<div class="features-section">
                            	<?php if( of_get_option('boxfirst',true) == 1 ) { ?>
                                	<?php for($k=1;$k<5;$k++) { ?>
                        				<div class="feature-box" style="width:26%;">
                                        		<h5><?php _e('Dummy Title','nature-one'); ?></h5>
                                                <p><?php _e('Go to Appearance >> Theme Options >> Homepage Content.','nature-one'); ?></p>
                                        </div><!-- feature-box -->
                                        <?php } ?>
                        		<?php } else { ?>
                            		<?php if( of_get_option('boxfirst',false)) { ?>
                                    		<div class="feature-box" style="width:26%;">
                                            	<?php $boxfirst = new WP_Query('page_id='.of_get_option('boxfirst'));
														while($boxfirst->have_posts()) : $boxfirst->the_post(); ?>
                                                        	<?php if( has_post_thumbnail()) { ?>
                                                                <div class="feat-image"><?php the_post_thumbnail( array(85,85) ); ?></div><!-- feat-image -->
                                                            <?php } ?>
                                                            <h5><?php the_title(); ?></h5>
                                                            	<?php if( has_post_thumbnail() ) { ?>
                                                            		<?php echo skt_natureone_content(15); ?>
                                                                <?php } else { ?>
                                                                	<?php echo skt_natureone_content(200); ?>
                                                                <?php } ?>
                                                                <!-- took out read more link -->
                                                        <?php endwhile; ?>
                                            </div><!-- box-first -->
                                    <?php } ?>
                            </div><!-- feature-section -->
                            <div class="features-section">
                            		<?php if( of_get_option('boxsecond',false)) { ?>
                                    		<div class="feature-box" style="width:40%;">
                                            	<?php $boxfirst = new WP_Query('page_id='.of_get_option('boxsecond'));
														while($boxfirst->have_posts()) : $boxfirst->the_post(); ?>
                                                        	<?php if( has_post_thumbnail()) { ?>
                                                                <div class="feat-image"><?php the_post_thumbnail( array(85,85) ); ?></div><!-- feat-image -->
                                                            <?php } ?>
                                                            <h5><?php the_title(); ?></h5>
                                                            	<?php if( has_post_thumbnail() ) { ?>
                                                            		<?php echo skt_natureone_content(15); ?>
                                                                <?php } else { ?>
                                                                	<?php echo skt_natureone_content(200); ?>
                                                                <?php } ?>
                                                                <!-- took out read more link -->
                                                        <?php endwhile; ?>
                                            </div><!-- box-first -->
                                    <?php } ?>
                            </div><!-- feature-section -->
                            <div class="features-section">
                            		<?php if( of_get_option('boxthird',false)) { ?>
                                    		<div class="feature-box" style="width:26%;">
                                            	<?php $boxfirst = new WP_Query('page_id='.of_get_option('boxthird'));
														while($boxfirst->have_posts()) : $boxfirst->the_post(); ?>
                                                        	<?php if( has_post_thumbnail()) { ?>
                                                                <div class="feat-image"><?php the_post_thumbnail( array(85,85) ); ?></div><!-- feat-image -->
                                                            <?php } ?>
                                                            <h5><?php the_title(); ?></h5>
                                                            	<?php if( has_post_thumbnail() ) { ?>
                                                            		<?php echo skt_natureone_content(15); ?>
                                                                <?php } else { ?>
                                                                	<?php echo skt_natureone_content(200); ?>
                                                                <?php } ?>
                                                                <!-- took out read more link -->
                                                        <?php endwhile; ?>
                                            </div><!-- box-first -->
                                    <?php } ?>
                            </div><!-- feature-section -->
                            <div class="features-section">
                            		<?php if( of_get_option('boxfourth',false)) { ?>
                                    		<div class="feature-box">
                                            	<?php $boxfirst = new WP_Query('page_id='.of_get_option('boxfourth'));
														while($boxfirst->have_posts()) : $boxfirst->the_post(); ?>
                                                        	<?php if( has_post_thumbnail()) { ?>
                                                                <div class="feat-image"><?php the_post_thumbnail( array(85,85) ); ?></div><!-- feat-image -->
                                                            <?php } ?>
                                                            <h5><?php the_title(); ?></h5>
                                                            	<?php if( has_post_thumbnail() ) { ?>
                                                            		<?php echo skt_natureone_content(15); ?>
                                                                <?php } else { ?>
                                                                	<?php echo skt_natureone_content(200); ?>
                                                                <?php } ?>
                                                                <<a href="<?php esc_url(the_permalink()); ?>">><?php _e('Read More','nature-one'); ?></a>
                                                        <?php endwhile; ?>
                                            </div><!-- box-first -->
                                    <?php } } ?>
                            </div><!-- feature-section --><div class="clear"></div>
                     </div><!-- middle-align --><div class="clear"></div>
            </section><div class="clear"></div>
            <section style="background-color:#463c36;">
            		<div class="awesome-bg middle-align">
                    	<?php if( of_get_option('recenttitle',true) != 1){ ?><h2><span><?php echo of_get_option('recenttitle',true); ?></span></h2><?php } else { ?><h2><span><?php _e('Recent Work','nature-one'); ?></span></h2><?php } ?>
                        <div style="margin-right:2%; vertical-align:top;"><img class="kfm" src="http://tekaranga.webdevandseo.eu/wp-content/uploads/2015/04/10603492_742113272500936_7219800529670635411_n.jpg"></div>

                        <div>
                            <h4>KFM Radio Station</h4>
                            <p>Kfm 106.9 has been broadcasting a quality sound for a discerning ear for the last ten years which fuzes reggae, dub, downbeat, lounge, soul and funk. We are a low frequency station which promotes social consciousness and genres not championed by our mainstream counterparts.</p>

                            <p>The engine that powers Kfm106.9 is a community of fifty DJs who volunteer their time simply for the love of music. We broadcast from the cultural and artistic hub of Auckland's CBD, Karangahape Rd. We began our humble beginnings in a tiny studio in St Kevins Arcade and now have our own place which encompasses a Tea Shop, Ta Moko Studio, Art Gallery, Community Space and of course Kfm.</p>

                            <p>We would like to thank our listeners who have been with us from the beginning and we would also warmly welcome all those who have just found us.</p>

                            <p>One love</p>
                            <p>The Kfm Whanau</p>

                        <a href="http://www.kfmradio.co.nz" target="_blank">Visit our website</a>
                        </div>
                    </div><!-- awesome-bg --><div class="clear"></div>
            </section><!-- section2 -->
            
            		
<?php endif; ?>
<?php get_footer(); ?>