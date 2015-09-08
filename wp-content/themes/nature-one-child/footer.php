<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package SKT Nature One
 */
?>

 <div id="footer">
 		<div class="footer-top">
        	<div class="middle-align">
            	<h2>Our Sponsors</h2>
                <img src="http://tekaranga.webdevandseo.eu/wp-content/uploads/2015/04/new-logo3.png">
                <img src="http://tekaranga.webdevandseo.eu/wp-content/uploads/2015/04/tekaranga-logo.png">
                <img src="http://tekaranga.webdevandseo.eu/wp-content/uploads/2015/04/new-logo3.png">
                <img src="http://tekaranga.webdevandseo.eu/wp-content/uploads/2015/04/tekaranga-logo.png">
                <img src="http://tekaranga.webdevandseo.eu/wp-content/uploads/2015/04/new-logo3.png">
                <img src="http://tekaranga.webdevandseo.eu/wp-content/uploads/2015/04/tekaranga-logo.png">
                <div class="clear"></div>
            </div><!-- middle-align -->
        </div><!-- footer-top -->
        <div class="footer-bottom">
        		<div class="footer-inner middle-align">
                		<div class="footer-bottom-left">
                            <?php wp_nav_menu( array('theme_location'	=> 'footer') ); ?>
                            <?php if( of_get_option('copytext',true) != 1) { echo esc_html(of_get_option('copytext', true)); } else { _e(' Copyright 2014 All Rights Reserved to Nature One ','nature-one'); } ; ?>
                         </div><!-- footer-bottom-left -->
                         <div class="footer-bottom-right">
                         	&copy; Copyright 2015 <a href="searchadvancement.co.nz">Search Advancement</a>
                         </div><!-- footer-bottom-right --><div class="clear"></div>
                </div><!-- footer-inner -->
         </div><!-- footer-bottom -->
</div><!-- footer -->
        </div><!-- main-container -->
  
<?php wp_footer(); ?>

</body>
</html>