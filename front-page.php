<?php
/**
 * The template for displaying the front page
 *
 * @package electro-service
 */

get_header();
?>

<main id="primary" class="site-main bg-[#f7f8f9]">

    <!-- Hero Section -->
    <section class="lg:py-[120px] bg-[#f7f8f9] relative">
        
        <!-- Mobile Background -->
        <div class="lg:hidden absolute inset-0 z-0">
             <img src="<?php echo get_template_directory_uri(); ?>/assets/image.png" alt="Engineering" class="w-full h-full object-cover">
        </div>
        
        <!-- Mobile Content Overlay -->
        <div class="lg:hidden absolute inset-0 bg-[#f7f8f9]/85 z-0"></div>

        <div class="max-w-[1200px] mx-auto px-[15px] flex flex-col lg:flex-row items-center justify-between relative z-10 pt-[60px] lg:py-0">
            
            <!-- Content -->
            <div class="w-full lg:w-[50%] lg:pr-[40px] mb-[50px] lg:mb-0 text-center lg:text-left">
                <!-- Badge -->
                <div class="inline-block md:w-auto w-full bg-[#3D8BFF]/50 rounded-[5px] px-[26px] py-[6px] mb-[20px] lg:mb-[30px]">
                    <span class="text-white lg:text-[#233B5D] text-[13px] lg:text-[15px] font-[300] lg:font-[300] leading-none">
                        Профессиональные электромонтажные работы
                    </span>
                </div>

                <!-- Heading -->
                <h1 class="text-[#2A2A2A] text-[28px] lg:text-[44px] font-[700] lg:font-[400] leading-[1.2] mb-[20px] lg:mb-[25px] relative z-10 lg:w-[220%]">
                    Электрофизические измерения и электроснабжение<br>под ключ в Беларуси
                </h1>

                <!-- Description -->
                <p class="text-[#2A2A2A] text-[16px] lg:text-[18px] font-[400] lg:font-[300] leading-[1.5] mb-[30px] lg:mb-[40px] max-w-[520px] mx-auto lg:mx-0">
                    Проектирование, монтаж и обслуживание электроустановок любой сложности. Работаем по всей Республике Беларусь.
                </p>

                <!-- Buttons -->
                <div class="flex flex-col lg:flex-row gap-[15px] lg:gap-[20px] mb-[40px] lg:mb-[50px]">
                    <a href="#consultation" class="bg-[#243B55] text-white text-[16px] font-[600] px-[32px] lg:px-[38.5px] py-[16px] lg:py-[14px] rounded-[6px] text-center hover:bg-[#3D8BFF] transition-colors duration-300 no-underline w-full lg:w-auto">
                        Бесплатная консультация
                    </a>
                    <a href="/services" class="border border-[#233B5D] bg-white/20 backdrop-blur-sm lg:bg-transparent lg:border-[#243B55] text-[#2A2A2A] text-[16px] font-[600] px-[32px] lg:px-[38.5px] py-[16px] lg:py-[14px] rounded-[6px] text-center hover:bg-[#243B55] hover:text-white transition-colors duration-300 no-underline w-full lg:w-auto">
                        Наши услуги
                    </a>
                </div>

                <!-- Features/Icons -->
                <div class="flex items-start lg:items-center justify-between lg:justify-start gap-[20px] sm:gap-[50px] mb-[40px] lg:mb-0">
                    <div class="flex flex-col lg:flex-row items-center gap-[8px] lg:gap-[12px] text-center lg:text-left w-1/2 lg:w-auto">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/protocol.svg" alt="Protocol" class="w-[32px] h-[32px] lg:w-[24px] lg:h-[24px]">
                        <span class="text-[#2A2A2A] text-[14px] font-[500] leading-[1.2]">Протоколы на<br class="lg:hidden"> следующий день</span>
                    </div>
                    <div class="flex flex-col lg:flex-row items-center gap-[8px] lg:gap-[12px] text-center lg:text-left w-1/2 lg:w-auto">
                         <img src="<?php echo get_template_directory_uri(); ?>/assets/garanty.svg" alt="Garanty" class="w-[32px] h-[32px] lg:w-[24px] lg:h-[24px]">
                        <span class="text-[#2A2A2A] text-[14px] font-[500] leading-[1.2]">Гарантия<br class="lg:hidden"> 2 года</span>
                    </div>
                </div>
                
                 <!-- Floating Card (Mobile Only Position) -->
                <div class="lg:hidden bg-[#F3F5F7] border border-[#233B5D] rounded-[24px] py-[15px] px-[20px] shadow-lg flex flex-col items-center justify-center w-full mx-auto">
                    <span class="block text-[#2A2A2A] text-[20px] font-[700] mb-[2px]">500+</span>
                    <span class="block text-[#555] text-[14px] font-[400]">выполненных работ</span>
                </div>
            </div>

            <!-- Right Image (Desktop Only) -->
            <div class="hidden lg:block w-full lg:w-[50%] relative pl-[15px] lg:mt-[-200px] lg:min-w-[589px]">
                <div class="relative rounded-[20px] overflow-hidden">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/image.png" alt="Engineering" class="w-full h-auto object-cover rounded-[20px]">
                </div>
                
                <!-- Floating Card (Desktop Only) -->
                <div class="absolute bottom-[-30px] left-[0px] sm:left-[-30px] bg-[#F3F5F7] border border-[#233B5D] rounded-[24px] py-[23px] px-[40px] sm:p-[24px] shadow-lg flex flex-col items-center justify-center min-w-[240px] min-h-[98px] text-center">
                    <span class="block text-[#2A2A2A] text-[20px] font-[700] mb-[5px]">500+</span>
                    <span class="block text-[#555] text-[14px] font-[400]">выполненных работ</span>
                </div>
            </div>

        </div>
    </section>

</main>

<section class="py-[80px] lg:py-[120px] bg-white">
    <div class="max-w-[1200px] mx-auto px-[15px]">
        
        <!-- Header -->
        <div class="text-center mb-[60px]">
            <h2 class="text-[#2A2A2A] text-[32px] lg:text-[48px] font-[700] mb-[20px]">Наши услуги</h2>
            <p class="text-[#6D6F73] text-[16px] lg:text-[18px] font-[300] max-w-[875px] mx-auto">
                Полный спектр услуг в области электроснабжения для промышленных и коммерческих объектов
            </p>
        </div>

        <!-- Grid / Slider Container -->
        <div id="services-slider" class="flex overflow-x-auto snap-x snap-mandatory lg:grid lg:grid-cols-3 gap-[20px] lg:gap-[30px] scroll-smooth no-scrollbar pb-[10px] lg:pb-0">
            
            <!-- Card 1 -->
            <div class="min-w-full lg:min-w-0 snap-center bg-[#F7F8F9] rounded-[20px] p-[20px] xs:p-[30px] lg:p-[40px] hover:shadow-lg transition-shadow duration-300 flex flex-col items-start text-left">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/i1.svg" alt="Электрофизические измерения" class="h-[48px] w-auto mb-[25px]">
                <h3 class="text-[#2A2A2A] text-[20px] font-[700] mb-[15px] leading-[1.3]">Электрофизические<br>измерения</h3>
                <p class="text-[#555] text-[15px] font-[400] leading-[1.6] mb-[25px] flex-grow text-opacity-80">
                    Полный комплекс измерений для подтверждения безопасности электроустановок
                </p>
                <a href="/services/efi" class="inline-flex items-center text-[#6FA4FF] hover:text-[#3D8BFF] font-[500] text-[16px] transition-colors gap-[10px] mt-auto">
                    <span class="border-b border-transparent hover:border-[#3D8BFF] transition-colors">Подробнее</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/arrow.svg" class="w-[18px] h-[18px]">
                </a>
            </div>

            <!-- Card 2 -->
             <div class="min-w-full lg:min-w-0 snap-center bg-[#F7F8F9] rounded-[20px] p-[20px] xs:p-[30px] lg:p-[40px] hover:shadow-lg transition-shadow duration-300 flex flex-col items-start text-left">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/i2.svg" alt="Измерения сопротивления заземления" class="h-[48px] w-auto mb-[25px]">
                <h3 class="text-[#2A2A2A] text-[20px] font-[700] mb-[15px] leading-[1.3]">Измерения сопротивления<br>заземления</h3>
                <p class="text-[#555] text-[15px] font-[400] leading-[1.6] mb-[25px] flex-grow text-opacity-80">
                    Проверка заземляющих устройств и молниезащиты с выдачей протоколов
                </p>
                <a href="/services/grounding" class="inline-flex items-center text-[#6FA4FF] hover:text-[#3D8BFF] font-[500] text-[16px] transition-colors gap-[10px] mt-auto">
                     <span class="border-b border-transparent hover:border-[#3D8BFF] transition-colors">Подробнее</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/arrow.svg" class="w-[18px] h-[18px]">
                </a>
            </div>

            <!-- Card 3 -->
             <div class="min-w-full lg:min-w-0 snap-center bg-[#F7F8F9] rounded-[20px] p-[20px] xs:p-[30px] lg:p-[40px] hover:shadow-lg transition-shadow duration-300 flex flex-col items-start text-left">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/i3.svg" alt="Измерения сопротивления изоляции" class="h-[48px] w-auto mb-[25px]">
                <h3 class="text-[#2A2A2A] text-[20px] font-[700] mb-[15px] leading-[1.3]">Измерения сопротивления<br>изоляции</h3>
                <p class="text-[#555] text-[15px] font-[400] leading-[1.6] mb-[25px] flex-grow text-opacity-80">
                    Диагностика состояния изоляции кабелей и электрооборудования
                </p>
                <a href="/services/isolation" class="inline-flex items-center text-[#6FA4FF] hover:text-[#3D8BFF] font-[500] text-[16px] transition-colors gap-[10px] mt-auto">
                     <span class="border-b border-transparent hover:border-[#3D8BFF] transition-colors">Подробнее</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/arrow.svg" class="w-[18px] h-[18px]">
                </a>
            </div>

            <!-- Card 4 -->
             <div class="min-w-full lg:min-w-0 snap-center bg-[#F7F8F9] rounded-[20px] p-[20px] xs:p-[30px] lg:p-[40px] hover:shadow-lg transition-shadow duration-300 flex flex-col items-start text-left">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/i4.svg" alt="Проектирование электроснабжения" class="h-[48px] w-auto mb-[25px]">
                <h3 class="text-[#2A2A2A] text-[20px] font-[700] mb-[15px] leading-[1.3]">Проектирование<br>электроснабжения</h3>
                <p class="text-[#555] text-[15px] font-[400] leading-[1.6] mb-[25px] flex-grow text-opacity-80">
                    Разработка проектов электроснабжения с согласованием в энергонадзоре
                </p>
                <a href="/services/design" class="inline-flex items-center text-[#6FA4FF] hover:text-[#3D8BFF] font-[500] text-[16px] transition-colors gap-[10px] mt-auto">
                     <span class="border-b border-transparent hover:border-[#3D8BFF] transition-colors">Подробнее</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/arrow.svg" class="w-[18px] h-[18px]">
                </a>
            </div>
            
            <!-- Card 5 -->
             <div class="min-w-full lg:min-w-0 snap-center bg-[#F7F8F9] rounded-[20px] p-[20px] xs:p-[30px] lg:p-[40px] hover:shadow-lg transition-shadow duration-300 flex flex-col items-start text-left">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/i5.svg" alt="Монтаж со сдачей энергонадзору" class="h-[48px] w-auto mb-[25px]">
                <h3 class="text-[#2A2A2A] text-[20px] font-[700] mb-[15px] leading-[1.3]">Монтаж со сдачей<br>энергонадзору</h3>
                <p class="text-[#555] text-[15px] font-[400] leading-[1.6] mb-[25px] flex-grow text-opacity-80">
                    Профессиональный монтаж электросетей под ключ с документацией
                </p>
                <a href="/services/montage" class="inline-flex items-center text-[#6FA4FF] hover:text-[#3D8BFF] font-[500] text-[16px] transition-colors gap-[10px] mt-auto">
                     <span class="border-b border-transparent hover:border-[#3D8BFF] transition-colors">Подробнее</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/arrow.svg" class="w-[18px] h-[18px]">
                </a>
            </div>

            <!-- Card 6 -->
             <div class="min-w-full lg:min-w-0 snap-center bg-[#F7F8F9] rounded-[20px] p-[20px] xs:p-[30px] lg:p-[40px] hover:shadow-lg transition-shadow duration-300 flex flex-col items-start text-left">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/i6.svg" alt="Топосъемка и архитектурные проекты" class="h-[48px] w-auto mb-[25px]">
                <h3 class="text-[#2A2A2A] text-[20px] font-[700] mb-[15px] leading-[1.3]">Топосъемка и<br>архитектурные проекты</h3>
                <p class="text-[#555] text-[15px] font-[400] leading-[1.6] mb-[25px] flex-grow text-opacity-80">
                    Геодезические работы и архитектурное проектирование
                </p>
                <a href="/services/topo" class="inline-flex items-center text-[#6FA4FF] hover:text-[#3D8BFF] font-[500] text-[16px] transition-colors gap-[10px] mt-auto">
                     <span class="border-b border-transparent hover:border-[#3D8BFF] transition-colors">Подробнее</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/arrow.svg" class="w-[18px] h-[18px]">
                </a>
            </div>

        </div>

        <!-- Pagination Buttons (Mobile Only) -->
        <div class="flex lg:hidden justify-center gap-[20px] mt-[30px]">
            <button id="slider-prev" class="w-[60px] h-[60px] bg-[#F7F8F9] hover:bg-[#e1e4e8] rounded-[2px] flex items-center justify-center transition-colors shadow-sm">
                 <img src="<?php echo get_template_directory_uri(); ?>/assets/arrow.svg" class="w-[24px] h-[24px] rotate-180 text-[#3D8BFF]">
            </button>
            <button id="slider-next" class="w-[60px] h-[60px] bg-[#F7F8F9] hover:bg-[#e1e4e8] rounded-[2px] flex items-center justify-center transition-colors shadow-sm">
                 <img src="<?php echo get_template_directory_uri(); ?>/assets/arrow.svg" class="w-[24px] h-[24px] text-[#3D8BFF]">
            </button>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const slider = document.getElementById('services-slider');
                const prevBtn = document.getElementById('slider-prev');
                const nextBtn = document.getElementById('slider-next');

                if (slider && prevBtn && nextBtn) {
                    prevBtn.addEventListener('click', () => {
                        slider.scrollBy({ left: -slider.offsetWidth, behavior: 'smooth' });
                    });

                    nextBtn.addEventListener('click', () => {
                        slider.scrollBy({ left: slider.offsetWidth, behavior: 'smooth' });
                    });
                }
            });
        </script>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="py-[80px] lg:py-[100px] bg-[#BAD5FF]">
    <div class="max-w-[1200px] mx-auto px-[15px]">
        
        <!-- Header -->
        <div class="text-center mb-[50px]">
            <h2 class="text-[#2A2A2A] text-[32px] lg:text-[40px] font-[700] mb-[15px]">Почему выбирают нас</h2>
            <p class="text-[#6D6F73] text-[16px] lg:text-[18px] font-[300] max-w-[850px] mx-auto text-opacity-80">
                Мы гарантируем высокое качество работ и индивидуальный подход к каждому клиенту
            </p>
        </div>

        <!-- Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-[20px] lg:gap-[30px]">
            
            <!-- Card 1 -->
            <div class="bg-[#F7F8F9] rounded-[20px] p-[20px] flex flex-col items-center text-center">
                <div class="mb-[25px]">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/f1.svg" alt="Бесплатный выезд" class="h-[80px] w-auto">
                </div>
                <h3 class="text-[#2A2A2A] text-[18px] lg:text-[24px] font-[600] mb-[15px] leading-[1.3]">Бесплатный выезд</h3>
                <p class="text-[#555] text-[13px] lg:text-[15px] font-[400] leading-[1.5] text-opacity-80">
                    Выезд специалиста для оценки объема работ — бесплатно по всей РБ
                </p>
            </div>

            <!-- Card 2 -->
             <div class="bg-[#F7F8F9] rounded-[20px] p-[20px] flex flex-col items-center text-center">
                <div class="mb-[25px]">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/f2.svg" alt="Гарантия 2 года" class="h-[80px] w-auto">
                </div>
                <h3 class="text-[#2A2A2A] text-[18px] lg:text-[24px] font-[600] mb-[15px] leading-[1.3]">Гарантия 2 года</h3>
                <p class="text-[#555] text-[13px] lg:text-[15px] font-[400] leading-[1.5] text-opacity-80">
                    Гарантируем качество всех выполненных работ и установленного оборудования
                </p>
            </div>

            <!-- Card 3 -->
             <div class="bg-[#F7F8F9] rounded-[20px] p-[20px] lg:px-[10px] flex flex-col items-center text-center">
                <div class="mb-[25px]">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/f3.svg" alt="Современное оборудование" class="h-[80px] w-auto">
                </div>
                <h3 class="text-[#2A2A2A] text-[18px] lg:text-[24px] font-[600] mb-[15px] leading-[1.3]">Современное<br>оборудование</h3>
                <p class="text-[#555] text-[13px] lg:text-[15px] font-[400] leading-[1.5] text-opacity-80">
                    Используем сертифицированное оборудование ведущих производителей
                </p>
            </div>

            <!-- Card 4 -->
             <div class="bg-[#F7F8F9] rounded-[20px] p-[20px] flex flex-col items-center text-center">
                <div class="mb-[25px]">
                     <img src="<?php echo get_template_directory_uri(); ?>/assets/f4.svg" alt="Работаем по всей РБ" class="h-[80px] w-auto">
                </div>
                <h3 class="text-[#2A2A2A] text-[18px] lg:text-[24px] font-[600] mb-[15px] leading-[1.3]">Работаем по всей<br>РБ</h3>
                <p class="text-[#555] text-[13px] lg:text-[15px] font-[400] leading-[1.5] text-opacity-80">
                    Выполняем заказы по всей территории Республики Беларусь
                </p>
            </div>

        </div>
    </div>
</section>

<!-- How We Work Section -->
<section class="py-[80px] lg:py-[100px] bg-[#F7F8F9]">
    <div class="max-w-[1200px] mx-auto px-[15px]">
        
        <!-- Header -->
        <div class="text-center mb-[60px]">
            <h2 class="text-[#2A2A2A] text-[32px] lg:text-[48px] font-[700] mb-[15px]">Как мы работаем</h2>
            <p class="text-[#6D6F73] text-[16px] lg:text-[18px] font-[300] max-w-[800px] mx-auto">
                Прозрачный и понятный процесс в 5 шагов
            </p>
        </div>

        <!-- Steps Container -->
        <div class="flex flex-col lg:flex-row items-start lg:items-stretch justify-between gap-[20px] lg:gap-[10px]">
            
            <!-- Step 1 -->
            <div class="relative flex-1 bg-[#F4F3F1] border-2 border-[#DCE0E3] rounded-[20px] p-[20px] min-w-[203px]">
                <div class="text-[#4C5F84] text-[24px] lg:text-[32px] font-[700] mb-[15px] leading-none">01</div>
                <h3 class="text-[#2A2A2A] text-[15px] lg:text-[18px] font-[300] mb-[12px]">Заявка</h3>
                <p class="text-[#555] text-[13px] lg:text-[15px] font-[300] leading-[1.5]">
                    Вы оставляете заявку на сайте или звоните нам
                </p>
            </div>

            <!-- Arrow 1 -->
            <div class="hidden lg:flex items-center justify-center flex-shrink-0 -mt-[40px]">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/arrow.svg" class="w-[24px] h-[24px] text-[#DCE0E3]">
            </div>

            <!-- Step 2 -->
            <div class="relative flex-1 bg-[#F4F3F1] border-2 border-[#DCE0E3] rounded-[20px] p-[15px] min-w-[203px]">
                <div class="absolute top-[12px] left-[66px]">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/b2.svg" alt="" class="w-[40px] h-[40px] opacity-60">
                </div>
                <div class="text-[#4C5F84] text-[24px] lg:text-[32px] font-[700] mb-[15px] leading-none">02</div>
                <h3 class="text-[#2A2A2A] text-[15px] lg:text-[18px] font-[300] mb-[12px]">Выезд специалиста</h3>
                <p class="text-[#555] text-[13px] lg:text-[15px] font-[300] leading-[1.5]">
                    Наш инженер выезжает на объект для оценки
                </p>
            </div>

            <!-- Arrow 2 -->
            <div class="hidden lg:flex items-center justify-center flex-shrink-0 -mt-[40px]">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/arrow.svg" class="w-[24px] h-[24px] text-[#DCE0E3]">
            </div>

            <!-- Step 3 -->
            <div class="relative flex-1 bg-[#F4F3F1] border-2 border-[#DCE0E3] rounded-[20px] p-[20px] min-w-[203px]">
                <div class="absolute top-[12px] left-[66px]">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/b3.svg" alt="" class="w-[40px] h-[40px] opacity-60">
                </div>
                <div class="text-[#4C5F84] text-[24px] lg:text-[32px] font-[700] mb-[15px] leading-none">03</div>
                <h3 class="text-[#2A2A2A] text-[15px] lg:text-[18px] font-[300] mb-[12px]">Коммерческое предложение</h3>
                <p class="text-[#555] text-[13px] lg:text-[14px] font-[400] leading-[1.5]">
                    Формируем смету и согласовываем сроки
                </p>
            </div>

            <!-- Arrow 3 -->
            <div class="hidden lg:flex items-center justify-center flex-shrink-0 -mt-[40px]">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/arrow.svg" class="w-[24px] h-[24px] text-[#DCE0E3]">
            </div>

            <!-- Step 4 -->
            <div class="relative flex-1 bg-[#F4F3F1] border-2 border-[#DCE0E3] rounded-[20px] p-[15px] min-w-[203px]">
                <div class="absolute top-[12px] left-[66px]">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/b4.svg" alt="" class="w-[40px] h-[40px] opacity-60">
                </div>
                <div class="text-[#4C5F84] text-[24px] lg:text-[32px] font-[700] mb-[15px] leading-none">04</div>
                <h3 class="text-[#2A2A2A] text-[15px] lg:text-[18px] font-[300] mb-[12px]">Выполнение работ</h3>
                <p class="text-[#555] text-[13px] lg:text-[14px] font-[400] leading-[1.5]">
                    Производим работы в согласованные сроки
                </p>
            </div>

            <!-- Arrow 4 -->
            <div class="hidden lg:flex items-center justify-center flex-shrink-0 -mt-[40px]">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/arrow.svg" class="w-[24px] h-[24px] text-[#DCE0E3]">
            </div>

            <!-- Step 5 -->
            <div class="relative flex-1 bg-[#F4F3F1] border-2 border-[#DCE0E3] rounded-[20px] p-[15px] min-w-[203px]">
                <div class="absolute top-[12px] left-[66px]">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/b5.svg" alt="" class="w-[40px] h-[40px] opacity-60">
                </div>
                <div class="text-[#4C5F84] text-[24px] lg:text-[32px] font-[700] mb-[15px] leading-none">05</div>
                <h3 class="text-[#2A2A2A] text-[15px] lg:text-[18px] font-[300] mb-[12px]">Сдача объекта</h3>
                <p class="text-[#555] text-[13px] lg:text-[14px] font-[400] leading-[1.5]">
                    Оформляем протоколы и передаем документы
                </p>
            </div>

        </div>
    </div>
</section>

<!-- Completed Projects Section -->
<section class="py-[80px] lg:py-[100px] bg-[#BAD5FF]">
    <div class="max-w-[1200px] mx-auto px-[15px]">
        
        <!-- Header -->
        <div class="text-center mb-[50px]">
            <h2 class="text-[#2A2A2A] text-[32px] lg:text-[48px] font-[700] mb-[15px]">Реализованные проекты</h2>
            <p class="text-[#6D6F73] text-[16px] lg:text-[18px] font-[300] max-w-[800px] mx-auto">Примеры наших работ</p>
        </div>

        <!-- Projects Carousel/Grid Container -->
        <div class="relative">
            <!-- Projects Grid/Slider -->
            <div id="projects-slider" class="flex overflow-x-auto snap-x snap-mandatory lg:grid lg:grid-cols-4 gap-[20px] lg:gap-[25px] scroll-smooth no-scrollbar pb-[10px] lg:pb-0">
            
                <?php
                // Query to get latest 4 projects
                $projects_query = new WP_Query(array(
                    'post_type' => 'project',
                    'posts_per_page' => 4,
                    'orderby' => 'date',
                    'order' => 'DESC'
                ));

                if ($projects_query->have_posts()) :
                    while ($projects_query->have_posts()) : $projects_query->the_post();
                        
                        // Get ACF fields
                        $project_name = get_field('project_name');
                        $project_category = get_field('project_category');
                        $project_work_type = get_field('project_work_type');
                        $project_image_1 = get_field('project_image_1');
                        
                        // Use first image or fallback
                        $image_url = $project_image_1 ? $project_image_1['url'] : get_template_directory_uri() . '/assets/image.png';
                        $image_alt = $project_image_1 ? $project_image_1['alt'] : $project_name;
                ?>
                
                <!-- Project Card -->
                <div class="min-w-full lg:min-w-0 snap-center group cursor-pointer">
                    <div class="relative h-[180px] lg:h-[200px] overflow-hidden rounded-[30px] mb-[20px]">
                        <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($image_alt); ?>" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        
                        <?php if ($project_category): ?>
                        <!-- Mobile: Badge on image top-left -->
                        <div class="lg:hidden absolute top-[20px] left-[20px] bg-white text-[#3D8BFF] text-[14px] font-[500] px-[20px] py-[10px] rounded-[30px] shadow-md">
                            <?php echo esc_html($project_category); ?>
                        </div>
                        <?php endif; ?>
                    </div>
                    
                    <?php if ($project_category): ?>
                    <!-- Desktop: Badge below image -->
                    <div class="hidden lg:flex justify-center mb-[15px]">
                        <div class="inline-block bg-white text-[#36A3DA] text-[15px] font-[300] px-[20px] py-[6px] rounded-[30px] shadow-md lg:mr-auto">
                            <?php echo esc_html($project_category); ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    
                    <h3 class="text-[#2A2A2A] text-[18px] lg:text-[24px] font-[400] leading-[1.3] text-left">
                        <?php echo esc_html($project_work_type ? $project_work_type : $project_name); ?>
                    </h3>
                </div>

                <?php
                    endwhile;
                    wp_reset_postdata();
                else:
                ?>
                
                <!-- No Projects Message -->
                <div class="col-span-full text-center py-[40px]">
                    <p class="text-[#555] text-[16px]">Проекты пока не добавлены</p>
                </div>
                
                <?php endif; ?>

            </div>

            <!-- Navigation Arrows (Mobile Only) -->
            <div class="flex lg:hidden justify-center gap-[20px] mt-[30px] mb-[30px]">
                <button id="projects-prev" class="w-[60px] h-[60px] bg-white hover:bg-[#e1e4e8] rounded-[8px] flex items-center justify-center transition-colors shadow-md">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/arrow.svg" class="w-[24px] h-[24px] rotate-180">
                </button>
                <button id="projects-next" class="w-[60px] h-[60px] bg-white hover:bg-[#e1e4e8] rounded-[8px] flex items-center justify-center transition-colors shadow-md">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/arrow.svg" class="w-[24px] h-[24px]">
                </button>
            </div>

            <!-- All Projects Button (Mobile Only) -->
            <div class="lg:hidden flex justify-center">
                <a href="/portfolio" class="block w-full max-w-[400px] text-center border-2 border-[#2A2A2A] text-[#2A2A2A] text-[16px] font-[600] py-[16px] px-[32px] rounded-[8px] hover:bg-[#2A2A2A] hover:text-white transition-colors duration-300 no-underline">
                    Все услуги
                </a>
            </div>

            <!-- All Projects Link (Desktop Only) -->
            <div class="hidden lg:flex absolute top-[-200px] right-[0px] justify-center mt-[40px]">
                <a href="/portfolio" class="inline-flex items-center text-[#2A2A2A] hover:text-[#3D8BFF] font-[500] text-[18px] transition-colors gap-[10px] group">
                    <span class="border-b border-[#2A2A2A] group-hover:border-[#3D8BFF] transition-colors">Все проекты</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/arrow-down.svg" class="w-[42px]">
                </a>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const slider = document.getElementById('projects-slider');
                const prevBtn = document.getElementById('projects-prev');
                const nextBtn = document.getElementById('projects-next');

                if (slider && prevBtn && nextBtn) {
                    prevBtn.addEventListener('click', () => {
                        slider.scrollBy({ left: -slider.offsetWidth, behavior: 'smooth' });
                    });

                    nextBtn.addEventListener('click', () => {
                        slider.scrollBy({ left: slider.offsetWidth, behavior: 'smooth' });
                    });
                }
            });
        </script>
    </div>
</section>

<!--Sertificates Projects Section -->
<section class="py-[80px] lg:py-[100px]">
    <div class="max-w-[1200px] mx-auto px-[15px]">
        
        <!-- Header -->
        <div class="text-center mb-[50px]">
            <h2 class="text-[#2A2A2A] text-[32px] lg:text-[48px] font-[700] mb-[15px]">Сертификаты и лицензии</h2>
            <p class="text-[#6D6F73] text-[16px] lg:text-[18px] font-[300] max-w-[800px] mx-auto">Все необходимые разрешительные документы для выполнения работ</p>
        </div>

        <!-- Certificates Container -->
        <div class="relative">
            <!-- Certificates Slider/Grid -->
            <div id="certificates-slider" class="flex overflow-x-auto snap-x snap-mandatory lg:flex lg:flex-row gap-[20px] scroll-smooth no-scrollbar pb-[10px] lg:pb-0">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/s1.png" alt="certificate" class="min-w-full lg:min-w-0 snap-center flex-1 rounded-[12px]">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/s2.png" alt="certificate" class="min-w-full lg:min-w-0 snap-center flex-1 rounded-[12px]">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/s3.png" alt="certificate" class="min-w-full lg:min-w-0 snap-center flex-1 rounded-[12px]">
            </div>

            <!-- Navigation Arrows (Mobile Only) -->
            <div class="flex lg:hidden justify-center gap-[20px] mt-[30px]">
                <button id="certificates-prev" class="w-[60px] h-[60px] bg-white hover:bg-[#e1e4e8] rounded-[8px] flex items-center justify-center transition-colors shadow-md">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/arrow.svg" class="w-[24px] h-[24px] rotate-180">
                </button>
                <button id="certificates-next" class="w-[60px] h-[60px] bg-white hover:bg-[#e1e4e8] rounded-[8px] flex items-center justify-center transition-colors shadow-md">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/arrow.svg" class="w-[24px] h-[24px]">
                </button>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const slider = document.getElementById('certificates-slider');
                const prevBtn = document.getElementById('certificates-prev');
                const nextBtn = document.getElementById('certificates-next');

                if (slider && prevBtn && nextBtn) {
                    prevBtn.addEventListener('click', () => {
                        slider.scrollBy({ left: -slider.offsetWidth, behavior: 'smooth' });
                    });

                    nextBtn.addEventListener('click', () => {
                        slider.scrollBy({ left: slider.offsetWidth, behavior: 'smooth' });
                    });
                }
            });
        </script>
    </div>
</section>

<!-- Review Form Section -->
<section class="py-[80px] lg:py-[100px] bg-[#BAD5FF]">
    <div class="max-w-[1200px] mx-auto px-[15px]">
        
        <!-- Header -->
        <div class="text-center mb-[50px]">
            <h2 class="text-[#2A2A2A] text-[32px] lg:text-[48px] font-[700] mb-[15px]">Оставьте отзыв о нашей работе</h2>
            <p class="text-[#6D6F73] text-[16px] lg:text-[18px] font-[300] mx-auto">
                Ваше мнение помогает нам становиться лучше. Отзыв появится на сайте после проверки администратором.
            </p>
        </div>

        <!-- Form and Image Container -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-[40px] lg:gap-[60px] items-center">
            
            <!-- Form Column -->
            <div>
                <form id="review-form" class="space-y-[20px]">
                    
                    <!-- Name Input -->
                    <div>
                        <label for="review-name" class="text-[#6D6F73] text-[15px] font-[300]">Ваше имя</label>
                        <input 
                            type="text" 
                            id="review-name" 
                            name="name" 
                            required
                            class="w-full mt-[10px] px-[20px] py-[14px] bg-white border-0 rounded-[8px] text-[#2A2A2A] text-[16px] focus:outline-none focus:ring-2 focus:ring-[#3D8BFF]"
                        >
                    </div>

                    <!-- Phone Input -->
                    <div>
                        <label for="review-phone" class="text-[#6D6F73] text-[15px] font-[300] mb-[10px]">Телефон (не публикуется)</label>
                        <input 
                            type="tel" 
                            id="review-phone" 
                            name="phone" 
                            placeholder="Нужен только для подтверждения"
                            class="w-full mt-[10px] px-[20px] py-[14px] bg-white border-0 rounded-[8px] text-[#2A2A2A] text-[16px] placeholder:text-[#999] focus:outline-none focus:ring-2 focus:ring-[#3D8BFF]"
                        >
                    </div>

                    <!-- Review Text -->
                    <div>
                        <label for="review-text" class="text-[#6D6F73] text-[15px] font-[300] mb-[10px]">Текст отзыва</label>
                        <textarea 
                            id="review-text" 
                            name="review" 
                            rows="5"
                            required
                            class="w-full mt-[10px] px-[20px] py-[14px] bg-white border-0 rounded-[8px] text-[#2A2A2A] text-[16px] resize-none focus:outline-none focus:ring-2 focus:ring-[#3D8BFF]"
                        ></textarea>
                    </div>

                    <!-- Photo Upload -->
                    <div>
                        <label class="flex items-center gap-[10px] cursor-pointer text-[#555] text-[14px]">
                            <div class="flex px-[15px] py-[16px] bg-white rounded-[8px] cursor-pointer">
															<svg class="w-[20px] mr-[10px] h-[20px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
																	<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path>
																	<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path>
															</svg>
															<span>Прикрепить фото</span>
														</div>
                            <span class="text-[#999]">*не обязательно</span>
                            <input type="file" name="photo" accept="image/*" class="hidden">
                        </label>
                    </div>

                    <!-- Privacy Checkbox -->
                    <div class="flex items-center gap-[10px]">
                        <input 
                            type="checkbox" 
                            id="privacy-consent" 
                            name="privacy" 
                            required
                            class="w-[18px] h-[18px] rounded border-2 border-[#3D8BFF] text-[#3D8BFF] focus:ring-0 focus:ring-offset-0 cursor-pointer"
                        >
                        <label for="privacy-consent" class="text-[#2A2A2A] text-[14px] cursor-pointer">
                            Я согласен на обработку персональных данных
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <button 
                        type="submit"
                        class="w-full bg-[#2A2A2A] hover:bg-[#3D8BFF] text-white text-[16px] font-[600] py-[16px] px-[32px] rounded-[8px] transition-colors duration-300"
                    >
                        Отправить отзыв
                    </button>

                </form>
            </div>

            <!-- Image Column -->
            <div class="hidden lg:block">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/hands.png" alt="Review" class="w-full h-auto">
            </div>

        </div>
    </div>
</section>

<?php
get_footer();
?>
```
