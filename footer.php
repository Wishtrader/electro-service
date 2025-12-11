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

	<footer id="colophon" class="site-footer bg-[#234376] text-white pt-[20px] lg:pt-[60px] pb-[30px] font-sans">
		<div class="max-w-[1200px] mx-auto px-[15px]">
			<div class="flex flex-col lg:flex-row justify-between gap-[40px] lg:gap-[20px] pb-[50px] border-b border-[#ffffff]/20">
				
				<!-- Column 1: Info -->
				<div class="w-full lg:w-[280px]">
					<div class="flex flex-col items-center gap-[25px]">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="block">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/logo-white.svg" alt="<?php bloginfo( 'name' ); ?>" class="w-[203px] lg:h-[84px] w-auto">
						</a>
						<p class="text-[15px] text-center md:text-left leading-[1.4] text-[#FFFFFF] mb-[30px] font-[300]">
							Электрофизические измерения<br>
							и электроснабжение под ключ<br>
							в Беларуси
						</p>
					</div>
					<button id="open-contact-modal-footer" class="inline-block bg-white text-[#2A2A2A] text-[15px] font-[600] py-[14px] px-[24px] rounded-[6px] w-full text-center hover:bg-[#3D8BFF] hover:text-white transition-colors duration-300 cursor-pointer border-none">
						Заказать звонок
					</button>
				</div>

				<!-- Column 2: Services -->
				<div class="w-full lg:w-[325px] lg:mt-[40px]">
					<h3 class="text-[#6FA4FF] text-[18px] font-[500] mb-[25px]">Услуги</h3>
					<ul class="list-none m-0 p-0 flex flex-col gap-[15px]">
						<li><a href="/services/efi" class="text-white text-[16px] lg:text-[18px] font-[300] hover:text-[#3D8BFF] transition-colors no-underline">Электрофизические измерения</a></li>
						<li><a href="/services/design" class="text-white text-[16px] lg:text-[18px] font-[300] hover:text-[#3D8BFF] transition-colors no-underline">Проектирование электроснабжения</a></li>
						<li><a href="/services/montage" class="text-white text-[16px] lg:text-[18px] font-[300] hover:text-[#3D8BFF] transition-colors no-underline">Монтаж электросетей</a></li>
						<li><a href="/services/topo" class="text-white text-[16px] lg:text-[18px] font-[300] hover:text-[#3D8BFF] transition-colors no-underline">Топосъёмка</a></li>
					</ul>
				</div>

				<!-- Column 3: Navigation -->
				<div class="w-full lg:w-[150px] lg:mt-[40px]">
					<h3 class="text-[#6FA4FF] text-[18px] font-[500] mb-[25px]">Навигация</h3>
					<ul class="list-none m-0 p-0 flex flex-col gap-[15px]">
						<li><a href="/about" class="text-white text-[16px] lg:text-[18px] font-[300] hover:text-[#3D8BFF] transition-colors no-underline">О компании</a></li>
						<li><a href="/services" class="text-white text-[16px] lg:text-[18px] font-[300] hover:text-[#3D8BFF] transition-colors no-underline">Услуги</a></li>
						<li><a href="/portfolio" class="text-white text-[16px] lg:text-[18px] font-[300] hover:text-[#3D8BFF] transition-colors no-underline">Наши работы</a></li>
						<li><a href="/reviews" class="text-white text-[16px] lg:text-[18px] font-[300] hover:text-[#3D8BFF] transition-colors no-underline">Отзывы</a></li>
						<li><a href="/contacts" class="text-white text-[16px] lg:text-[18px] font-[300] hover:text-[#3D8BFF] transition-colors no-underline">Контакты</a></li>
					</ul>
				</div>

				<!-- Column 4: Contacts -->
				<div class="w-full lg:w-[305px] lg:mt-[40px]">
					<h3 class="text-[#6FA4FF] text-[18px] font-[500] mb-[25px]">Контакты</h3>
					<ul class="list-none m-0 p-0 flex flex-col gap-[15px] mb-[25px]">
						<li class="flex items-start gap-[12px]">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/call2.svg" class="w-[20px] h-[20px] mt-[2px]"> 
							<a href="tel:+375296199302" class="text-white text-[16px] lg:text-[18px] font-[300] hover:text-[#3D8BFF] transition-colors no-underline leading-tight">+375 (29) 619-93-02</a>
						</li>
						<li class="flex items-start gap-[12px]">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/call2.svg" class="w-[20px] h-[20px] mt-[2px]">
							<a href="tel:+375296199302" class="text-white text-[16px] lg:text-[18px] font-[300] hover:text-[#3D8BFF] transition-colors no-underline leading-tight">+375 (29) 619-93-02</a>
						</li>
						<li class="flex items-start gap-[12px]">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/call2.svg" class="w-[20px] h-[20px] mt-[2px]">
							<a href="tel:+375296199302" class="text-white text-[16px] lg:text-[18px] font-[300] hover:text-[#3D8BFF] transition-colors no-underline leading-tight">+375 (29) 619-93-02</a>
						</li>
						<li class="flex items-start gap-[12px]">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/email_footer.svg" class="w-[20px] h-[20px] mt-[2px]">
							<a href="mailto:elektro_servis_kirovsk@mail.ru" class="text-white text-[16px] lg:text-[18px] font-[300] hover:text-[#3D8BFF] transition-colors no-underline leading-tight break-all">elektro_servis_kirovsk@mail.ru</a>
						</li>
						<li class="flex items-start gap-[12px]">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/location.svg" class="w-[20px] h-[20px] mt-[2px]">
							<span class="text-white text-[16px] lg:text-[18px] font-[300] leading-tight max-w-[300px]">г. Кировск, ул. Терешковой, д.20, пом.2</span>
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
			<div class="flex flex-col items-center text-center md:text-left lg:flex-row justify-between md:items-start text-[13px] lg:text-[18px] text-[#Dce0E3] pt-[25px] font-[300] gap-[15px] lg:gap-0 text-center lg:text-left">
				<div class="lg:max-w-[300px]">
					&copy; <?php echo date( 'Y' ); ?> ЭлектроСервис-Кировск.<br>
					Все права защищены.
				</div>
				<div class="flex flex-col gap-[10px] justify-center text-center">
					<a href="/page-privacy-policy" class="text-[#Dce0E3] no-underline hover:text-white transition-colors">Политика конфиденциальности</a>
					<a href="/page-cookie-policy" class="text-[#Dce0E3] no-underline hover:text-white transition-colors">Политика обработки cookie</a>
				</div>
				<div>
					УНП: 123456789
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<!-- Contact Form Modal -->
<div id="contact-modal" class="fixed inset-0 bg-black bg-opacity-50 z-[100] flex items-center justify-center hidden">
	<div class="bg-white rounded-[16px] w-[90%] max-w-[600px] max-h-[90vh] overflow-y-auto relative m-[15px]">
		
		<!-- Close Button -->
		<button id="close-modal" class="absolute top-[20px] right-[20px] w-[50px] h-[50px] rounded-full border-2 border-[#2A2A2A] flex items-center justify-center hover:bg-[#F7F8F9] transition-colors">
			<svg class="w-[24px] h-[24px] text-[#2A2A2A]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
				<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
			</svg>
		</button>

		<!-- Modal Content -->
		<div class="p-[30px] lg:p-[50px]">
			
			<h2 class="text-[#2A2A2A] text-[28px] lg:text-[36px] font-[700] mb-[15px] pr-[60px]">
				Отправить сообщение
			</h2>
			
			<p class="text-[#555] text-[15px] lg:text-[16px] mb-[30px]">
				Заполните форму, и наш менеджер свяжется с вами в течение 15 минут в рабочее время
			</p>

			<form id="contact-form-modal" class="space-y-[20px]">
				
				<!-- Name -->
				<div>
					<label class="block text-[#555] text-[14px] mb-[8px]">Ваше имя*</label>
					<input type="text" name="name" required class="w-full px-[20px] py-[14px] border border-[#E5E5E5] rounded-[8px] focus:outline-none focus:border-[#3D8BFF] text-[#2A2A2A]">
				</div>

				<!-- Phone -->
				<div>
					<label class="block text-[#555] text-[14px] mb-[8px]">Телефон*</label>
					<input type="tel" name="phone" required class="w-full px-[20px] py-[14px] border border-[#E5E5E5] rounded-[8px] focus:outline-none focus:border-[#3D8BFF] text-[#2A2A2A]">
				</div>

				<!-- Service Select -->
				<div>
					<label class="block text-[#555] text-[14px] mb-[8px]">Интересующая услуга</label>
					<select name="service" class="w-full px-[20px] py-[14px] border border-[#E5E5E5] rounded-[8px] focus:outline-none focus:border-[#3D8BFF] text-[#2A2A2A] appearance-none bg-white bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTIiIGhlaWdodD0iOCIgdmlld0JveD0iMCAwIDEyIDgiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTEgMUw2IDZMMTEgMSIgc3Ryb2tlPSIjOTk5IiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIvPjwvc3ZnPg==')] bg-[length:12px] bg-[right_20px_center] bg-no-repeat">
						<option value="">Выберите услугу</option>
						<?php
						$services = get_posts(array('post_type' => 'service', 'posts_per_page' => -1));
						foreach($services as $service) {
							$service_name = get_field('service_name', $service->ID) ?: $service->post_title;
							echo '<option value="' . esc_attr($service_name) . '">' . esc_html($service_name) . '</option>';
						}
						?>
					</select>
				</div>

				<!-- Privacy Checkbox -->
				<div class="flex items-start gap-[10px]">
					<input type="checkbox" id="privacy-modal" name="privacy" required class="mt-[4px] w-[20px] h-[20px] rounded border-2 border-[#3D8BFF] text-[#3D8BFF] focus:ring-0 cursor-pointer flex-shrink-0">
					<label for="privacy-modal" class="text-[#2A2A2A] text-[14px] cursor-pointer">
						Я согласен на обработку персональных данных
					</label>
				</div>

				<!-- Submit Button -->
				<button type="submit" class="w-full bg-[#233B5D] hover:bg-[#3D8BFF] text-white text-[16px] font-[600] py-[16px] rounded-[8px] transition-colors duration-300">
					Отправить заявку
				</button>

				<!-- Alternative Contact -->
				<p class="text-center text-[#555] text-[14px] lg:text-[15px]">
					Либо звоните по телефону <a href="tel:+375296189302" class="text-[#3D8BFF] hover:underline font-[600]">+375 (29)619-93-02</a>
				</p>

			</form>

		</div>

	</div>
</div>

<script>
// Contact Modal Logic
document.addEventListener('DOMContentLoaded', function() {
	const modal = document.getElementById('contact-modal');
	const openBtn = document.getElementById('open-contact-modal');
	const openBtnFooter = document.getElementById('open-contact-modal-footer');
	const closeBtn = document.getElementById('close-modal');
	const form = document.getElementById('contact-form-modal');

	// Function to open modal
	function openModal() {
		modal.classList.remove('hidden');
		document.body.style.overflow = 'hidden';
	}

	// Open modal from header button
	if (openBtn) {
		openBtn.addEventListener('click', openModal);
	}

	// Open modal from footer button
	if (openBtnFooter) {
		openBtnFooter.addEventListener('click', openModal);
	}

	// Close modal
	function closeModal() {
		modal.classList.add('hidden');
		document.body.style.overflow = 'auto';
	}

	if (closeBtn) {
		closeBtn.addEventListener('click', closeModal);
	}

	// Close on outside click
	modal.addEventListener('click', function(e) {
		if (e.target === modal) {
			closeModal();
		}
	});

	// Close on Escape key
	document.addEventListener('keydown', function(e) {
		if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
			closeModal();
		}
	});

	// Form submission (you can add AJAX here)
	if (form) {
		form.addEventListener('submit', function(e) {
			e.preventDefault();
			// Add your form submission logic here
			alert('Спасибо! Ваша заявка отправлена.');
			closeModal();
			form.reset();
		});
	}
});
</script>

<!-- Cookie Consent Popup -->
<div id="cookie-consent" class="fixed bottom-0 left-0 right-0 bg-[#F7F8F9] border-t-4 border-[#3D8BFF] shadow-2xl z-50 transform translate-y-full transition-transform duration-500">
	<div class="max-w-[1200px] mx-auto px-[15px] py-[25px]">
		<div class="flex flex-col lg:flex-row items-center justify-between gap-[20px]">
			
			<!-- Text Content -->
			<div class="flex-1 flex items-start gap-[15px]">
				<!-- Cookie Icon -->
				<div class="flex-shrink-0 w-[40px] h-[40px] bg-[#3D8BFF] rounded-full flex items-center justify-center">
					<svg class="w-[24px] h-[24px] text-white" fill="currentColor" viewBox="0 0 20 20">
						<path d="M10 2a8 8 0 100 16 8 8 0 000-16zM7 9a1 1 0 100-2 1 1 0 000 2zm3 4a1 1 0 100-2 1 1 0 000 2zm1-5a1 1 0 112 0 1 1 0 01-2 0zm2 4a1 1 0 100-2 1 1 0 000 2z"/>
					</svg>
				</div>
				
				<div>
					<h3 class="text-[#2A2A2A] text-[18px] font-[700] mb-[8px]">Мы используем файлы cookies</h3>
					<p class="text-[#555] text-[14px] leading-[1.6]">
						Этот сайт применяет файлы cookies для корректной работы, анализа использования и улучшения качества сервиса. Вы можете принять все файлы cookies или ограничиться только необходимыми.
					</p>
				</div>
			</div>

			<!-- Buttons -->
			<div class="flex flex-col sm:flex-row gap-[12px] w-full lg:w-auto">
				<button id="cookie-accept" class="bg-[#233B5D] hover:bg-[#3D8BFF] text-white text-[15px] font-[600] py-[14px] px-[35px] rounded-[8px] transition-colors duration-300 whitespace-nowrap">
					Принять
				</button>
				<button id="cookie-decline" class="bg-white hover:bg-[#F0F0F0] text-[#2A2A2A] text-[15px] font-[600] py-[14px] px-[35px] rounded-[8px] border-2 border-[#E5E5E5] transition-colors duration-300 whitespace-nowrap">
					Отклонить
				</button>
			</div>

		</div>
	</div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
	const cookieConsent = document.getElementById('cookie-consent');
	const acceptBtn = document.getElementById('cookie-accept');
	const declineBtn = document.getElementById('cookie-decline');
	
	// Check if user has already made a choice
	const cookieChoice = localStorage.getItem('cookieConsent');
	
	// Show popup if no choice has been made
	if (!cookieChoice) {
		setTimeout(() => {
			cookieConsent.classList.remove('translate-y-full');
		}, 1000);
	}
	
	// Accept cookies
	acceptBtn.addEventListener('click', function() {
		localStorage.setItem('cookieConsent', 'accepted');
		localStorage.setItem('cookieConsentDate', new Date().toISOString());
		hidePopup();
	});
	
	// Decline cookies
	declineBtn.addEventListener('click', function() {
		localStorage.setItem('cookieConsent', 'declined');
		localStorage.setItem('cookieConsentDate', new Date().toISOString());
		hidePopup();
	});
	
	// Hide popup with animation
	function hidePopup() {
		cookieConsent.classList.add('translate-y-full');
		setTimeout(() => {
			cookieConsent.style.display = 'none';
		}, 500);
	}
});
</script>

<?php wp_footer(); ?>

</body>
</html>
