			<div id="anchor__rsvp" class="dbo--footer__rsvp wow fadeInUp">
				<div class="title">
					<h2>Rsvp</h2>
				</div>
				<div class="dbo--footer__rsvp-wrap">
					<?php echo do_shortcode('[rsvp]'); ?>
				</div>
				<div class="deadline">Please RSVP by 1st April 2018</div>
			</div>

			<div class="dbo--footer__links wow fadeInUp">

				<div id="inner-footer" class="wrap cf">

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav',               // adding custom nav class
                       	'theme_location' => 'primary_navigation',              // where it's located in the theme
    					'before' => '',                                 // before the menu
    					'after' => '',                                  // after the menu
    					'link_before' => '',                            // before each link
    					'link_after' => '',                             // after each link
    					'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</nav>

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->