<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package electro-service
 */

?>

	<footer id="colophon" class="site-footer bg-[#234376] text-white pt-[60px] pb-[30px] font-sans">
		<div class="max-w-[1200px] mx-auto px-[15px]">
			<div class="flex flex-col lg:flex-row justify-between gap-[40px] lg:gap-[20px] pb-[50px] border-b border-[#ffffff]/20">
				
				<!-- Column 1: Info -->
				<div class="w-full lg:w-[280px]">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="block mb-[25px]">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/logo-white.svg" alt="<?php bloginfo( 'name' ); ?>" class="lg:h-[84px] w-auto">
					</a>
					<p class="text-[15px] leading-[1.4] text-[#FFFFFF] mb-[30px] font-[300]">
						Электрофизические измерения<br>
						и электроснабжение под ключ<br>
						в Беларуси
					</p>
					<a href="#callback" class="inline-block bg-white text-[#2A2A2A] text-[15px] font-[600] py-[14px] px-[24px] rounded-[6px] w-full text-center hover:bg-[#3D8BFF] hover:text-white transition-colors duration-300 no-underline">
						Заказать звонок
					</a>
				</div>

				<!-- Column 2: Services -->
				<div class="w-full lg:w-[325px] lg:mt-[40px]">
					<h3 class="text-[#6FA4FF] text-[18px] font-[500] mb-[25px]">Услуги</h3>
					<ul class="list-none m-0 p-0 flex flex-col gap-[15px]">
						<li><a href="/services/efi" class="text-white text-[18px] font-[300] hover:text-[#3D8BFF] transition-colors no-underline">Электрофизические измерения</a></li>
						<li><a href="/services/design" class="text-white text-[18px] font-[300] hover:text-[#3D8BFF] transition-colors no-underline">Проектирование электроснабжения</a></li>
						<li><a href="/services/montage" class="text-white text-[18px] font-[300] hover:text-[#3D8BFF] transition-colors no-underline">Монтаж электросетей</a></li>
						<li><a href="/services/topo" class="text-white text-[18px] font-[300] hover:text-[#3D8BFF] transition-colors no-underline">Топосъёмка</a></li>
					</ul>
				</div>

				<!-- Column 3: Navigation -->
				<div class="w-full lg:w-[150px] lg:mt-[40px]">
					<h3 class="text-[#6FA4FF] text-[18px] font-[500] mb-[25px]">Навигация</h3>
					<ul class="list-none m-0 p-0 flex flex-col gap-[15px]">
						<li><a href="/about" class="text-white text-[18px] font-[300] hover:text-[#3D8BFF] transition-colors no-underline">О компании</a></li>
						<li><a href="/services" class="text-white text-[18px] font-[300] hover:text-[#3D8BFF] transition-colors no-underline">Услуги</a></li>
						<li><a href="/portfolio" class="text-white text-[18px] font-[300] hover:text-[#3D8BFF] transition-colors no-underline">Наши работы</a></li>
						<li><a href="/reviews" class="text-white text-[18px] font-[300] hover:text-[#3D8BFF] transition-colors no-underline">Отзывы</a></li>
						<li><a href="/contacts" class="text-white text-[15px] font-[300] hover:text-[#3D8BFF] transition-colors no-underline">Контакты</a></li>
					</ul>
				</div>

				<!-- Column 4: Contacts -->
				<div class="w-full lg:w-[305px] lg:mt-[40px]">
					<h3 class="text-[#6FA4FF] text-[18px] font-[500] mb-[25px]">Контакты</h3>
					<ul class="list-none m-0 p-0 flex flex-col gap-[15px] mb-[25px]">
						<li class="flex items-start gap-[12px]">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/call2.svg" class="w-[20px] h-[20px] mt-[2px]"> 
							<a href="tel:+375296199302" class="text-white text-[18px] font-[300] hover:text-[#3D8BFF] transition-colors no-underline leading-tight">+375 (29) 619-93-02</a>
						</li>
						<li class="flex items-start gap-[12px]">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/call2.svg" class="w-[20px] h-[20px] mt-[2px]">
							<a href="tel:+375296199302" class="text-white text-[18px] font-[300] hover:text-[#3D8BFF] transition-colors no-underline leading-tight">+375 (29) 619-93-02</a>
						</li>
						<li class="flex items-start gap-[12px]">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/call2.svg" class="w-[20px] h-[20px] mt-[2px]">
							<a href="tel:+375296199302" class="text-white text-[18px] font-[300] hover:text-[#3D8BFF] transition-colors no-underline leading-tight">+375 (29) 619-93-02</a>
						</li>
						<li class="flex items-start gap-[12px]">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/email_footer.svg" class="w-[20px] h-[20px] mt-[2px]">
							<a href="mailto:elektro_servis_kirovsk@mail.ru" class="text-white text-[18px] font-[300] hover:text-[#3D8BFF] transition-colors no-underline leading-tight break-all">elektro_servis_kirovsk@mail.ru</a>
						</li>
						<li class="flex items-start gap-[12px]">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/location.svg" class="w-[20px] h-[20px] mt-[2px]">
							<span class="text-white text-[18px] font-[300] leading-tight max-w-[300px]">г. Кировск, ул. Терешковой, д.20, пом.2</span>
						</li>
					</ul>
					<div class="flex items-center gap-[15px]">
						<a href="https://viber.click/375296199302" target="_blank" class="hover:opacity-80 transition-opacity">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/viber.svg" alt="Viber" class="w-[32px] h-[32px]">
                        </a>
                        <a href="https://wa.me/375296199302" target="_blank" class="hover:opacity-80 transition-opacity">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/wa.svg" alt="WhatsApp" class="w-[32px] h-[32px]">
                        </a>
					</div>
				</div>
			</div>

			<!-- Bottom Bar -->
			<div class="flex flex-col lg:flex-row justify-between items-start text-[13px] lg:text-[18px] text-[#Dce0E3] pt-[25px] font-[300] gap-[15px] lg:gap-0 text-center lg:text-left">
				<div class="lg:max-w-[300px]">
					&copy; <?php echo date( 'Y' ); ?> ЭлектроСервис-Кировск.<br>
					Все права защищены.
				</div>
				<div class="flex flex-col gap-[10px] justify-center text-center">
					<a href="/privacy-policy" class="text-[#Dce0E3] no-underline hover:text-white transition-colors">Политика конфиденциальности</a>
					<a href="/cookie-policy" class="text-[#Dce0E3] no-underline hover:text-white transition-colors">Политика обработки cookie</a>
				</div>
				<div>
					УНП: 123456789
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
