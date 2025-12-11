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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">	
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                    },
										fontWeight: {
												100: '100',
												200: '200',
												300: '300',
												400: '400',
												500: '500',
												600: '600',
												700: '700',
												800: '800',
												900: '900',
											}
                }
            }
        }
    </script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(''); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'electro-service' ); ?></a>


	<!-- Mobile Header -->
	<header class="lg:hidden bg-[#f7f8f9] h-[58px] fixed w-full top-0 z-50 border-b border-[#dce0e3] flex items-center justify-between px-[15px]">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="h-full flex items-center">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/logo.svg" alt="<?php bloginfo( 'name' ); ?>" class="h-[40px] w-auto">
		</a>
		<div class="flex items-center gap-[20px]">
			<a href="tel:+375296199302" class="block">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/call.svg" alt="Call" class="w-[32px] h-[32px]">
			</a>
			<button id="mobile-menu-toggle" class="block outline-none">
				<img id="icon-hamburger" src="<?php echo get_template_directory_uri(); ?>/assets/hamburger-button.svg" alt="Menu" class="w-[32px] h-[32px]">
				<img id="icon-close" src="<?php echo get_template_directory_uri(); ?>/assets/close.svg" alt="Close" class="w-[32px] h-[32px] hidden">
			</button>
		</div>
	</header>
	<div class="lg:hidden h-[58px]"></div> <!-- Spacer -->

	<!-- Mobile Menu Overlay -->
	<div id="mobile-menu-overlay" class="hidden fixed top-[58px] left-0 w-full h-[calc(100vh-58px)] bg-[#f7f8f9] z-40 overflow-y-auto border-t border-[#dce0e3]">
		<ul class="flex flex-col m-0 p-0 list-none">
			<li class="border-b border-[#E5E7EB]">
				<a href="/services" class="flex items-center justify-between px-[15px] py-[15px] no-underline text-[#2A2A2A] text-[18px] font-[300]">
					Услуги
					<img src="<?php echo get_template_directory_uri(); ?>/assets/arrow.svg" class="w-[24px] h-[24px]">
				</a>
			</li>
			<li class="border-b border-[#E5E7EB]">
				<a href="/about" class="block px-[15px] py-[15px] no-underline text-[#2A2A2A] text-[18px] font-[300]">
					О компании
				</a>
			</li>
			<li class="border-b border-[#E5E7EB]">
				<a href="/portfolio" class="block px-[15px] py-[15px] no-underline text-[#2A2A2A] text-[18px] font-[300]">
					Наши работы
				</a>
			</li>
			<li class="border-b border-[#E5E7EB]">
				<a href="/contacts" class="block px-[15px] py-[15px] no-underline text-[#2A2A2A] text-[18px] font-[300]">
					Контакты
				</a>
			</li>
		</ul>
	</div>

	<script>
		document.getElementById('mobile-menu-toggle').addEventListener('click', function() {
			const menu = document.getElementById('mobile-menu-overlay');
			const iconHamburger = document.getElementById('icon-hamburger');
			const iconClose = document.getElementById('icon-close');
			
			menu.classList.toggle('hidden');
			document.body.classList.toggle('overflow-hidden');
			
			iconHamburger.classList.toggle('hidden');
			iconClose.classList.toggle('hidden');
		});
	</script>

	<header id="masthead" class="hidden lg:block bg-[#f7f8f9] w-full border-b border-[#dce0e3] font-sans">
		<div class="py-[15px] bg-[#f7f8f9] w-full">
			<div class="max-w-[1200px] mx-auto px-[15px] flex items-center justify-between w-full flex-wrap lg:flex-nowrap">
				<div class="flex items-center">
					<?php
					$upload_dir = wp_upload_dir();
					?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/logo.svg" alt="<?php bloginfo( 'name' ); ?>" class="max-h-[84px] w-auto block">
					</a>
				</div><!-- .site-branding -->

				<div class="hidden lg:flex items-center gap-[40px]">
					<div class="flex items-center">
						<a href="https://te.me/375296199302" target="_blank" class="block">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/viber.svg" alt="Viber" class="w-[36px] object-contain mr-[12px]">
						</a>
						<a href="tel:+375296199302" class="text-[18px] md:text-[24px] font-[600] text-[#2A2A2A] no-underline leading-none">+375 (29)619-93-02</a>
						<a href="https://wa.me/375296199302" target="_blank" class="block">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/wa.svg" alt="WhatsApp" class="w-[36px] object-contain ml-[12px]">
						</a>
					</div>
					<div class="flex items-center">
						<span class="flex items-center mr-[12px]">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/mail.svg" alt="Email" class="w-[36px] object-contain">
						</span>
						<a href="mailto:elektro_servis_kirovsk@mail.ru" class="text-[16px] md:text-[24px] font-[600] text-[#2A2A2A] no-underline">elektro_servis_kirovsk@mail.ru</a>
					</div>
				</div>
			</div>
		</div>

		<div class="bg-[#f7f8f9] border-t border-[#dce0e3] w-full">
			<div class="max-w-[1200px] mx-auto px-[15px] flex items-center justify-center w-full">
				<nav id="site-navigation" class="w-auto [&>ul]:flex [&>ul]:gap-[30px] [&>ul]:list-none [&>ul]:m-0 [&>ul]:p-0 [&_a]:block [&_a]:py-[22px] [&_a]:no-underline [&_a]:text-[16px] [&_a]:transition-colors [&_a]:duration-300 [&_a:hover]:text-[#3D8BFF] hidden lg:block md:mr-6">
					<button class="menu-toggle lg:hidden hover:bg-[#3D8BFF] hover:text-[#233B5D] transition" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'electro-service' ); ?></button>
					<!-- Static Menu for Design Match -->
					<ul class="flex gap-[30px] list-none m-0 p-0">
						<li><a href="/" class="block py-[22px] no-underline <?php echo is_front_page() ? 'text-[#3D8BFF]' : 'text-[#2A2A2A]'; ?> font-[300] text-[18px] transition-colors duration-300 hover:text-[#3D8BFF]">Главная</a></li>
						<li><a href="/services" class="block py-[22px] no-underline <?php echo (is_page('services') || is_post_type_archive('service') || is_singular('service')) ? 'text-[#3D8BFF]' : 'text-[#2A2A2A]'; ?> font-[300] text-[18px] transition-colors duration-300 hover:text-[#3D8BFF]">Услуги</a></li>
						<li><a href="/about" class="block py-[22px] no-underline <?php echo is_page('about') ? 'text-[#3D8BFF]' : 'text-[#2A2A2A]'; ?> font-[300] text-[18px] transition-colors duration-300 hover:text-[#3D8BFF]">О компании</a></li>
						<li><a href="/portfolio" class="block py-[22px] no-underline <?php echo (is_page('portfolio') || is_post_type_archive('portfolio') || is_singular('portfolio')) ? 'text-[#3D8BFF]' : 'text-[#2A2A2A]'; ?> font-[300] text-[18px] transition-colors duration-300 hover:text-[#3D8BFF]">Наши работы</a></li>
						<li><a href="/contacts" class="block py-[22px] no-underline <?php echo is_page('contacts') ? 'text-[#3D8BFF]' : 'text-[#2A2A2A]'; ?> font-[300] text-[18px] transition-colors duration-300 hover:text-[#3D8BFF]">Контакты</a></li>
					</ul>
					<?php
					/* 
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
							'container'      => false,
							'menu_class'     => 'menu',
						)
					);
					*/
					?>
				</nav><!-- #site-navigation -->
				
				<div class="ml-[20px]">
					<a href="#contact" class="bg-[#243B55] text-white hover:text-[#243B55] px-[25px] py-[12px] rounded-[4px] no-underline font-[600] text-[16px] inline-block transition hover:bg-[#3D8BFF] border-none leading-[1.2]">Бесплатный выезд специалиста</a>
				</div>
			</div>
		</div>
	</header><!-- #masthead -->
