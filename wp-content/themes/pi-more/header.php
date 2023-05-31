<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class('bg-white text-gray-900 antialiased'); ?>>

	<?php do_action('pi_more_site_before'); ?>

	<div id="page" class="min-h-screen flex flex-col">

		<?php do_action('pi_more_header'); ?>

		<header>

			<div class="mx-auto container">
				<div class="lg:flex lg:justify-between lg:items-center py-6">
					<div class="flex justify-between items-center">
						<div>
							<?php if (has_custom_logo()) { ?>
								<?php the_custom_logo(); ?>
							<?php } ?>
							<a href="<?php echo get_bloginfo('url'); ?>" class="font-logo uppercase">
								<?php echo get_bloginfo('name'); ?>
							</a>

							<p class="text-sm font-light text-gray-600">
								<?php echo get_bloginfo('description'); ?>
							</p>


						</div>

						<div class="lg:hidden">
							<a href="#" aria-label="Toggle navigation" id="primary-menu-toggle">

								<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
									stroke="currentColor">
									<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
										d="M4 6h16M4 12h16m-7 6h7" />
								</svg>
							</a>
						</div>
					</div>
					<div class="flex justify-end items-center">
						<?php
						wp_nav_menu(
							array(
								'container_id' => 'primary-menu',
								'container_class' => ' mr-4      mt-4 p-4  lg:mt-0 lg:p-0 lg:bg-transparent lg:block',
								'menu_class' => 'lg:flex lg:-mx-4 ',
								'theme_location' => 'primary',
								'li_class' => 'pb-5 pr-3 mr-4  pl-1 mr-1 text-left',
								'fallback_cb' => false,
							)
						);
						?>


						<?php
						wp_nav_menu(
							array(
								'container_id' => 'login-menu',
								'container_class' => 'mt-4 p-4 lg:mt-0  lg:bg-transparent lg:block content-start sm:block',
								'menu_class' => 'lg:flex lg:-mx-4 gap-x-4',
								'theme_location' => 'login',
								'li_class' => 'w-full sm:w-auto lg:text-2xl flex-none bg-[#6371F4] text-center mb-6 text-white leading-6 font-normal border border-transparent rounded-md focus:ring-2 focus:ring-offset-2 focus:ring-offset-white focus:ring-gray-900 focus:outline-none',
								'fallback_cb' => false,
							)
						);
						?>
					</div>
				</div>

			</div>
		</header>

		<div id="content" class="site-content flex-grow">

			<?php do_action('pi_more_content_start'); ?>

			<main>