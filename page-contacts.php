<?php
/**
 * Template Name: Contacts Page
 * Description: Contact page
 */

get_header();
?>

<!-- Hero Section -->
<section class="py-[80px] lg:py-[100px] bg-[#233B5D]">
    <div class="max-w-[1200px] mx-auto px-[15px] text-center">
        <h1 class="text-white text-[36px] lg:text-[48px] font-[700] mb-[15px]">Контакты</h1>
        <p class="text-white text-[16px] lg:text-[18px] font-[300]">Готовы ответить на ваши вопросы и приступить к работе</p>
    </div>
</section>

<!-- Contact Info Section -->
<section class="py-[60px] bg-white">
    <div class="max-w-[1200px] mx-auto px-[15px]">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-[30px]">
            
            <!-- Phone -->
            <div class="text-center">
                <div class="w-[60px] h-[60px] bg-[#E8F1FF] rounded-full flex items-center justify-center mx-auto mb-[15px]">
                    <svg class="w-[30px] h-[30px] text-[#3D8BFF]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                    </svg>
                </div>
                <h3 class="text-[#2A2A2A] text-[18px] font-[700] mb-[8px]">Телефон</h3>
                <a href="tel:+375296189302" class="text-[#555] text-[15px] hover:text-[#3D8BFF] transition-colors">+375 (29) 618-93-02</a>
            </div>

            <!-- Email -->
            <div class="text-center">
                <div class="w-[60px] h-[60px] bg-[#E8F1FF] rounded-full flex items-center justify-center mx-auto mb-[15px]">
                    <svg class="w-[30px] h-[30px] text-[#3D8BFF]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <h3 class="text-[#2A2A2A] text-[18px] font-[700] mb-[8px]">E-mail</h3>
                <a href="mailto:elektro-servis_kirovsk@mail.ru" class="text-[#555] text-[15px] hover:text-[#3D8BFF] transition-colors break-all">elektro-servis_kirovsk@mail.ru</a>
            </div>

            <!-- Address -->
            <div class="text-center">
                <div class="w-[60px] h-[60px] bg-[#E8F1FF] rounded-full flex items-center justify-center mx-auto mb-[15px]">
                    <svg class="w-[30px] h-[30px] text-[#3D8BFF]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                    </svg>
                </div>
                <h3 class="text-[#2A2A2A] text-[18px] font-[700] mb-[8px]">Адрес</h3>
                <p class="text-[#555] text-[15px]">г. Кировск, ул. Тевелевская,<br>д.20, пом.2</p>
            </div>

            <!-- Working Hours -->
            <div class="text-center">
                <div class="w-[60px] h-[60px] bg-[#E8F1FF] rounded-full flex items-center justify-center mx-auto mb-[15px]">
                    <svg class="w-[30px] h-[30px] text-[#3D8BFF]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-[#2A2A2A] text-[18px] font-[700] mb-[8px]">Режим работы</h3>
                <p class="text-[#555] text-[15px]">Пн-Пт: 8:00 - 18:00<br>Сб-Вс: по договорённости</p>
            </div>

        </div>
    </div>
</section>

<!-- Messengers Section -->
<section class="py-[50px] bg-[#BAD5FF]">
    <div class="max-w-[1200px] mx-auto px-[15px] text-center">
        <h2 class="text-[#2A2A2A] text-[24px] lg:text-[28px] font-[700] mb-[25px]">Также мы в мессенджерах</h2>
        <div class="flex justify-center gap-[15px] flex-wrap">
            <a href="viber://chat?number=+375296189302" class="inline-flex items-center gap-[10px] bg-white hover:bg-[#7360F2] text-[#7360F2] hover:text-white px-[25px] py-[12px] rounded-[8px] transition-colors duration-300 font-[500]">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/viber.svg" alt="Viber" class="w-[24px] h-[24px]">
                <span>Viber</span>
            </a>
            <a href="https://wa.me/375296189302" target="_blank" class="inline-flex items-center gap-[10px] bg-white hover:bg-[#25D366] text-[#25D366] hover:text-white px-[25px] py-[12px] rounded-[8px] transition-colors duration-300 font-[500]">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/wa.svg" alt="WhatsApp" class="w-[24px] h-[24px]">
                <span>WhatsApp</span>
            </a>
        </div>
    </div>
</section>

<!-- Form and Map Section -->
<section class="py-[80px] bg-white">
    <div class="max-w-[1200px] mx-auto px-[15px]">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-[60px]">
            
            <!-- Contact Form -->
            <div>
                <h2 class="text-[#2A2A2A] text-[28px] lg:text-[32px] font-[700] mb-[15px]">Оставить заявку</h2>
                <p class="text-[#555] text-[15px] mb-[30px]">Мы готовы взяться за проект любой сложности</p>
                
                <form class="space-y-[20px]">
                    <!-- Name -->
                    <div>
                        <label class="block text-[#555] text-[14px] mb-[8px]">Ваше имя*</label>
                        <input type="text" required class="w-full px-[20px] py-[14px] border border-[#E5E5E5] rounded-[8px] focus:outline-none focus:border-[#3D8BFF]">
                    </div>

                    <!-- Phone -->
                    <div>
                        <label class="block text-[#555] text-[14px] mb-[8px]">Телефон*</label>
                        <input type="tel" required class="w-full px-[20px] py-[14px] border border-[#E5E5E5] rounded-[8px] focus:outline-none focus:border-[#3D8BFF]">
                    </div>

                    <!-- Service -->
                    <div>
                        <label class="block text-[#555] text-[14px] mb-[8px]">Интересующая услуга</label>
                        <select class="w-full px-[20px] py-[14px] border border-[#E5E5E5] rounded-[8px] focus:outline-none focus:border-[#3D8BFF] appearance-none bg-white bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTIiIGhlaWdodD0iOCIgdmlld0JveD0iMCAwIDEyIDgiIGZpbGw9Im5vbmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PHBhdGggZD0iTTEgMUw2IDZMMTEgMSIgc3Ryb2tlPSIjOTk5IiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCIvPjwvc3ZnPg==')] bg-[length:12px] bg-[right_20px_center] bg-no-repeat">
                            <option>Выберите услугу</option>
                            <?php
                            $services = get_posts(array('post_type' => 'service', 'posts_per_page' => -1));
                            foreach($services as $service) {
                                echo '<option>' . esc_html(get_field('service_name', $service->ID) ?: $service->post_title) . '</option>';
                            }
                            ?>
                        </select>
                    </div>

                    <!-- Privacy -->
                    <div class="flex items-start gap-[10px]">
                        <input type="checkbox" id="privacy-contact" required class="mt-[4px] w-[18px] h-[18px] rounded border-2 border-[#3D8BFF] text-[#3D8BFF] focus:ring-0">
                        <label for="privacy-contact" class="text-[#2A2A2A] text-[14px] cursor-pointer">Я согласен на обработку персональных данных</label>
                    </div>

                    <!-- Submit -->
                    <button type="submit" class="w-full bg-[#2A2A2A] hover:bg-[#3D8BFF] text-white text-[16px] font-[600] py-[16px] rounded-[8px] transition-colors duration-300">
                        Отправить заявку
                    </button>

                    <p class="text-[#999] text-[13px] text-center">
                        Либо звоните по телефону: <a href="tel:+375296189302" class="text-[#3D8BFF] hover:underline">+375 (29)618-93-02</a>
                    </p>
                </form>
            </div>

            <!-- Map -->
            <div>
                <h2 class="text-[#2A2A2A] text-[28px] lg:text-[32px] font-[700] mb-[15px]">Где мы находимся</h2>
                <p class="text-[#555] text-[15px] mb-[20px]">Зона обслуживания:<br>Выполняем работы по всей территории Республики Беларусь</p>
                
                <!-- Google Map Embed -->
                <div class="rounded-[16px] overflow-hidden mb-[15px]">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2411.234567890123!2d29.238!3d53.265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTPCsDE1JzU0LjAiTiAyOcKwMTQnMTYuOCJF!5e0!3m2!1sru!2sby!4v1234567890123!5m2!1sru!2sby" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>

                <!-- City Tags -->
                <div class="flex flex-wrap gap-[10px]">
                    <span class="px-[15px] py-[8px] bg-[#F7F8F9] text-[#2A2A2A] text-[14px] rounded-[6px]">Минск</span>
                    <span class="px-[15px] py-[8px] bg-[#F7F8F9] text-[#2A2A2A] text-[14px] rounded-[6px]">Могилев</span>
                    <span class="px-[15px] py-[8px] bg-[#F7F8F9] text-[#2A2A2A] text-[14px] rounded-[6px]">Гомель</span>
                    <span class="px-[15px] py-[8px] bg-[#F7F8F9] text-[#2A2A2A] text-[14px] rounded-[6px]">Полоцк</span>
                    <span class="px-[15px] py-[8px] bg-[#F7F8F9] text-[#2A2A2A] text-[14px] rounded-[6px]">Гродно</span>
                    <span class="px-[15px] py-[8px] bg-[#F7F8F9] text-[#2A2A2A] text-[14px] rounded-[6px]">Брест</span>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Legal Info Section -->
<section class="py-[60px] bg-[#F7F8F9]">
    <div class="max-w-[1200px] mx-auto px-[15px]">
        <h2 class="text-[#2A2A2A] text-[28px] lg:text-[32px] font-[700] mb-[30px] text-center">Юридическая информация</h2>
        
        <div class="bg-white border-2 border-[#E5E5E5] rounded-[16px] p-[30px] lg:p-[40px]">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-x-[60px] gap-y-[20px]">
                
                <div>
                    <p class="text-[#999] text-[14px] mb-[5px]">Полное наименование</p>
                    <p class="text-[#2A2A2A] text-[16px] font-[500]">УНП</p>
                </div>

                <div>
                    <p class="text-[#999] text-[14px] mb-[5px]">УНП</p>
                    <p class="text-[#2A2A2A] text-[16px] font-[500]">123456789</p>
                </div>

                <div>
                    <p class="text-[#999] text-[14px] mb-[5px]">Юридический адрес</p>
                    <p class="text-[#2A2A2A] text-[16px] font-[500]">г. Кировск, ул. Тевелевская, д.20, пом.2</p>
                </div>

                <div>
                    <p class="text-[#999] text-[14px] mb-[5px]">Расчётный счёт</p>
                    <p class="text-[#2A2A2A] text-[16px] font-[500]">BY12 BANK 1234 5678 9012 3456 7890</p>
                </div>

                <div>
                    <p class="text-[#999] text-[14px] mb-[5px]">Банк</p>
                    <p class="text-[#2A2A2A] text-[16px] font-[500]">ОАО "Беларусь-Банк"</p>
                </div>

                <div>
                    <p class="text-[#999] text-[14px] mb-[5px]">БИК</p>
                    <p class="text-[#2A2A2A] text-[16px] font-[500]">AKBBY2X</p>
                </div>

                <div class="md:col-span-2">
                    <p class="text-[#999] text-[14px] mb-[5px]">Аттестат энергонадзора</p>
                    <p class="text-[#2A2A2A] text-[16px] font-[500]">№ BY/112.3.0/23.01 от 15.03.2023</p>
                </div>

            </div>
        </div>
    </div>
</section>

<?php
get_footer();
?>
