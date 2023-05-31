</main>

<?php do_action('pi_more_content_end'); ?>

</div>

<?php do_action('pi_more_content_after'); ?>

<footer id="colophon" class="site-footer bg-black py-12" role="contentinfo">
	<?php do_action('pi_more_footer'); ?>

	<div class="container mx-auto  text-center text-white">


		<div id="footer-box1">

			<?php
			if (is_active_sidebar('footer-sidebar-1')) {
				dynamic_sidebar('footer-sidebar-1');
			}
			?>

		</div>
		<div id="footer-box2">

			<?php
			if (is_active_sidebar('footer-sidebar-2')) {
				dynamic_sidebar('footer-sidebar-2');
			}
			?>

		</div>

		<div id="footer-box3">

			<?php
			if (is_active_sidebar('footer-sidebar-3')) {
				dynamic_sidebar('footer-sidebar-3');
			}
			?>

		</div>

		<div class="bottom-box">
			<?php
			wp_nav_menu(
				array(
					'container_id' => 'footer-menu',
					'container_class' => '',
					'menu_class' => 'lg:flex lg:-mx-4',
					'theme_location' => 'secondary',
					'li_class' => 'lg:mx-4',
					'fallback_cb' => false,
				)
			);
			?>
		</div>
	</div>
</footer>

</div>

<?php wp_footer(); ?>

</body>

</html>