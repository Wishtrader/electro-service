<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package electro-service
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <script src="https://cdn.tailwindcss.com"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'electro-service' ); ?></a>

	<header id="masthead" class="bg-[#f7f8f9] w-full border-b border-[#dce0e3] font-sans">
		<div class="py-[15px] bg-[#f7f8f9] w-full">
			<div class="max-w-[1200px] mx-auto px-[15px] flex items-center justify-between w-full flex-wrap lg:flex-nowrap">
				<div class="flex items-center">
					<?php
					$upload_dir = wp_upload_dir();
					$logo_url = $upload_dir['baseurl'] . '/2025/12/logo.png'; 
					?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php echo esc_url( $logo_url ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="max-h-[60px] w-auto block">
					</a>
				</div><!-- .site-branding -->

				<div class="hidden lg:flex items-center gap-[40px]">
					<div class="flex items-center">
						<img src="<?php echo esc_url( $upload_dir['baseurl'] . '/2025/12/viber.png' ); ?>" alt="Viber" class="w-[28px] h-[28px] object-contain mr-[12px]">
						<a href="tel:+375296199302" class="text-[18px] font-[600] text-[#222] no-underline leading-none">+375 (29)619-93-02</a>
						<a href="https://wa.me/375296199302" target="_blank" class="block">
							<img src="<?php echo esc_url( $upload_dir['baseurl'] . '/2025/12/wa.png' ); ?>" alt="WhatsApp" class="w-[28px] h-[28px] object-contain ml-[12px]">
						</a>
					</div>
					<div class="flex items-center">
						<span class="flex items-center mr-[12px]">
							<svg width="20" height="16" viewBox="0 0 20 16" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M18 0H2C0.9 0 0.01 0.9 0.01 2L0 14C0 15.1 0.9 16 2 16H18C19.1 16 20 15.1 20 14V2C20 0.9 19.1 0 18 0ZM18 4L10 9L2 4V2L10 7L18 2V4Z" fill="#243B55"/>
</svg>
						</span>
						<a href="mailto:elektro_servis_kirovsk@mail.ru" class="text-[16px] font-[600] text-[#222] no-underline">elektro_servis_kirovsk@mail.ru</a>
					</div>
				</div>
			</div>
		</div>

		<div class="bg-[#f7f8f9] border-t border-[#dce0e3] w-full">
			<div class="max-w-[1200px] mx-auto px-[15px] flex items-center justify-between w-full">
				<nav id="site-navigation" class="w-auto [&>ul]:flex [&>ul]:gap-[30px] [&>ul]:list-none [&>ul]:m-0 [&>ul]:p-0 [&_a]:block [&_a]:py-[22px] [&_a]:no-underline [&_a]:text-[#555] [&_a]:font-[500] [&_a]:text-[16px] [&_a]:transition-colors [&_a:hover]:text-[#243B55] hidden lg:block">
					<button class="menu-toggle lg:hidden" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'electro-service' ); ?></button>
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'container'      => false,
							'menu_class'     => 'menu', // Adding a class for potentially easier targeting if needed, but Tailwind arbitrary selectors handle it.
						)
					);
					?>
				</nav><!-- #site-navigation -->
				
				<div class="ml-[20px]">
					<a href="#contact" class="bg-[#243B55] text-white px-[25px] py-[12px] rounded-[4px] no-underline font-[600] text-[14px] inline-block transition-colors hover:bg-[#1a2b3e] border-none leading-[1.2]">Бесплатный выезд специалиста</a>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
