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

<?php
get_footer();
