recent works php stuff goes in div .awesome-bg section on index -->
<?php if( of_get_option('recenttitle',true) != 1){ ?><h2><span><?php echo of_get_option('recenttitle',true); ?></span></h2><?php } else { ?><h2><span><?php _e('Recent Work','nature-one'); ?></span></h2><?php } ?>
                        <?php if( of_get_option('recentfirst',true) == 1) { ?>
                        	<?php for($n=1; $n<4;$n++) { ?>
                        		<div class="work-thumb">
                                            <a href="#"><img width="262px" height="189px" alt="Dummy Title" src="<?php echo get_template_directory_uri();?>/images/flower-thum.jpg" class="example-image"></a><a data-lightbox="example-1" href="<?php echo get_template_directory_uri();?>/images/flower-thum.jpg" class="example-image-link"><img src="<?php echo get_template_directory_uri(); ?>/images/zoom-icon.png"></a>
                                       </div><!-- work-thumb -->
                       	<?php } } else { ?>
							<?php 
                                if( of_get_option('recentfirst',false)) { 
                                $recent = new WP_Query('page_id='.of_get_option('recentfirst'));  
                                    while($recent->have_posts() ) : $recent->the_post(); ?>
                                        <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large', true );
                                              $url = $thumb['0']; ?>
                                        <div class="work-thumb">
                                            <a href="<?php the_permalink(); ?>"><img width="262px" height="189px" alt="<?php the_title(); ?>" src="<?php echo $url; ?>" class="example-image"></a><a data-lightbox="example-1" href="<?php echo $url; ?>" class="example-image-link"><img src="<?php echo get_template_directory_uri(); ?>/images/zoom-icon.png"></a>
                                       </div><!-- work-thumb -->
                                <?php	endwhile;
							}
						?>
                        <?php 
                                if( of_get_option('recentsecond',false)) { 
                                $recent = new WP_Query('page_id='.of_get_option('recentsecond'));  
                                    while($recent->have_posts() ) : $recent->the_post(); ?>
                                        <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large', true );
                                              $url = $thumb['0']; ?>
                                        <div class="work-thumb">
                                            <a href="<?php the_permalink(); ?>"><img width="262px" height="189px" alt="<?php the_title(); ?>" src="<?php echo $url; ?>" class="example-image"></a><a data-lightbox="example-1" href="<?php echo $url; ?>" class="example-image-link"><img src="<?php echo get_template_directory_uri(); ?>/images/zoom-icon.png"></a>
                                       </div><!-- work-thumb -->
                                <?php	endwhile;
							}
						?>
                        <?php 
                                if( of_get_option('recentthird',false)) { 
                                $recent = new WP_Query('page_id='.of_get_option('recentthird'));  
                                    while($recent->have_posts() ) : $recent->the_post(); ?>
                                        <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'large', true );
                                              $url = $thumb['0']; ?>
                                        <div class="work-thumb">
                                            <a href="<?php the_permalink(); ?>"><img width="262px" height="189px" alt="<?php the_title(); ?>" src="<?php echo $url; ?>" class="example-image"></a><a data-lightbox="example-1" href="<?php echo $url; ?>" class="example-image-link"><img src="<?php echo get_template_directory_uri(); ?>/images/zoom-icon.png"></a>
                                       </div><!-- work-thumb --><div class="clear"></div>
                                <?php	endwhile;
							}
						}
						?>
            <!-- end of recent works section on index -->


<!-- taken from features selection -->

<div class="features-section">
                              <?php if( of_get_option('boxfirst',true) == 1 ) { ?>
                                  <?php for($k=1;$k<5;$k++) { ?>
                                <div class="feature-box">
                                            <h5><?php _e('Dummy Title','nature-one'); ?></h5>
                                                <p><?php _e('Go to Appearance >> Theme Options >> Homepage Content.','nature-one'); ?></p>
                                        </div><!-- feature-box -->
                                        <?php } ?>
                            <?php } else { ?>
                                <?php if( of_get_option('boxfirst',false)) { ?>
                                        <div class="feature-box">
                                              <?php $boxfirst = new WP_Query('page_id='.of_get_option('boxfirst'));
                            while($boxfirst->have_posts()) : $boxfirst->the_post(); ?>
                                                          <?php if( has_post_thumbnail()) { ?>
                                                                <div class="feat-image"><?php the_post_thumbnail( array(85,85) ); ?></div><!-- feat-image -->
                                                            <?php } ?>
                                                            <h5><?php the_title(); ?></h5>
                                                              <?php if( has_post_thumbnail() ) { ?>
                                                                <?php echo skt_natureone_content(15); ?>
                                                                <?php } else { ?>
                                                                  <?php echo skt_natureone_content(32); ?>
                                                                <?php } ?>
                                                                <a href="<?php esc_url(the_permalink()); ?>"><?php _e('Read More','nature-one'); ?></a>
                                                        <?php endwhile; ?>
                                            </div><!-- box-first -->
                                    <?php } ?>
                            </div><!-- feature-section -->
                            <div class="features-section">
                                <?php if( of_get_option('boxsecond',false)) { ?>
                                        <div class="feature-box">
                                              <?php $boxfirst = new WP_Query('page_id='.of_get_option('boxsecond'));
                            while($boxfirst->have_posts()) : $boxfirst->the_post(); ?>
                                                          <?php if( has_post_thumbnail()) { ?>
                                                                <div class="feat-image"><?php the_post_thumbnail( array(85,85) ); ?></div><!-- feat-image -->
                                                            <?php } ?>
                                                            <h5><?php the_title(); ?></h5>
                                                              <?php if( has_post_thumbnail() ) { ?>
                                                                <?php echo skt_natureone_content(15); ?>
                                                                <?php } else { ?>
                                                                  <?php echo skt_natureone_content(32); ?>
                                                                <?php } ?>
                                                                <a href="<?php esc_url(the_permalink()); ?>">><?php _e('Read More','nature-one'); ?></a>
                                                        <?php endwhile; ?>
                                            </div><!-- box-first -->
                                    <?php } ?>
                            </div><!-- feature-section -->
                            <div class="features-section">
                                <?php if( of_get_option('boxthird',false)) { ?>
                                        <div class="feature-box">
                                              <?php $boxfirst = new WP_Query('page_id='.of_get_option('boxthird'));
                            while($boxfirst->have_posts()) : $boxfirst->the_post(); ?>
                                                          <?php if( has_post_thumbnail()) { ?>
                                                                <div class="feat-image"><?php the_post_thumbnail( array(85,85) ); ?></div><!-- feat-image -->
                                                            <?php } ?>
                                                            <h5><?php the_title(); ?></h5>
                                                              <?php if( has_post_thumbnail() ) { ?>
                                                                <?php echo skt_natureone_content(15); ?>
                                                                <?php } else { ?>
                                                                  <?php echo skt_natureone_content(32); ?>
                                                                <?php } ?>
                                                                <a href="<?php esc_url(the_permalink()); ?>">><?php _e('Read More','nature-one'); ?></a>
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
                                                                  <?php echo skt_natureone_content(32); ?>
                                                                <?php } ?>
                                                                <a href="<?php esc_url(the_permalink()); ?>">><?php _e('Read More','nature-one'); ?></a>
                                                        <?php endwhile; ?>
                                            </div><!-- box-first -->
                                    <?php } } ?>
                            </div><!-- feature-section --><div class="clear"></div>

                            <!-- End of feature section -->

                            <!-- footer top -->
                            <div class="footer-column"><h3><?php _e('About Us','nature-one'); ?></h3>
                  <?php if( of_get_option('footertext', true) != '') 
              { 
                if(of_get_option('footertext',true) == 1)
                   { 
                    _e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur egestas ornare elit ut molestie. Phasellus posuere interdum tellus, sit amet interdum lectus rutrum at. Nunc suscipit erat ut eros consequat, at bibendum sapien convallis. Donec ut gravida velit. Curabitur non ultrices lorem. Quisque aliquet leo felis, vitae posuere purus blandit vitae. Fusce vitae tincidunt enim, in efficitur justo. Morbi euismod orci non magna malesuada commodo.','nature-one');
                    }
                    else
                    {
                      echo esc_html(of_get_option('footertext', true));
                    }
                 }; ?>
                </div><!-- footer-column -->
                <div class="footer-column" style="margin-right:0;"><h3><?php _e('Clients Testimonials','nature-one'); ?></h3>
                  <blockquote>
                        <?php if(of_get_option('testtext',true) != 1){ 
                  echo esc_html(of_get_option('testtext', true));
              } else { ?>
                              <?php _e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur egestas ornare elit ut molestie. Phasellus posuere interdum tellus, sit amet interdum lectus rutrum at. Nunc suscipit erat ut eros consequat, at bibendum sapien convallis. Donec ut gravida velit. Curabitur non ultrices lorem. Quisque aliquet leo felis, vitae posuere purus blandit vitae.','nature-one'); ?>
                            <?php } ?>
                    </blockquote>
                </div><!-- footer-column end-->

                <!-- Index Page -->