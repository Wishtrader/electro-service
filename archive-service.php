<?php
/**
 * Template Name: Services Archive
 * Description: Archive page for Services
 */

get_header();
?>

<!-- Hero Section -->
<section class="relative py-[100px] lg:py-[140px] bg-cover bg-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/ubg.png');">
    
    <div class="relative max-w-[1200px] mx-auto px-[15px]">
        <!-- Breadcrumbs -->
        <div class="mb-[30px]">
            <nav class="text-white text-[14px] lg:text-[18px] font-[300]">
                <a href="<?php echo home_url(); ?>" class="hover:text-[#3D8BFF] transition-colors">Главная</a>
                <span class="mx-[8px]">/</span>
                <span class="text-[#2D3542]">Услуги</span>
            </nav>
        </div>

        <!-- Title and Descri§ption -->
        <div class="text-center">
            <h1 class="text-[#2A2A2A] text-[40px] lg:text-[48px] font-[700] mb-[20px]">Наши услуги</h1>
            <p class="text-white text-[18px] lg:text-[24px] font-[400] max-w-[900px] mx-auto leading-[1.6]">
                Комплексные решения в области электроснабжения для промышленных и коммерческих объектов. 
                Все работы выполняются квалифицированными специалистами с использованием современного оборудования.
            </p>
        </div>
    </div>
</section>

<!-- Services Grid Section -->
<section class="py-[80px] lg:py-[100px] bg-[#F7F8F9]">
    <div class="max-w-[1200px] mx-auto px-[15px]">
        
        <!-- Services Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-[30px]">
            
            <?php
            // Query to get all services
            $services_query = new WP_Query(array(
                'post_type' => 'service',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'DESC'
            ));

            if ($services_query->have_posts()) :
                while ($services_query->have_posts()) : $services_query->the_post();
                    
                    // Get ACF fields
                    $service_icon = get_field('service_icon');
                    $service_name = get_field('service_name');
                    $service_description = get_field('service_description');
                    $service_price = get_field('service_price');
                    $service_timeline = get_field('service_timeline');
                    
                    // Fallbacks
                    if (!$service_name) $service_name = get_the_title();
                    if (!$service_description) $service_description = get_the_excerpt();
                    if (!$service_price) $service_price = 'от 000 BYN';
                    if (!$service_timeline) $service_timeline = '0-0 дня';
            ?>
            
            <!-- Service Card -->
            <div class="bg-white rounded-[20px] p-[30px] lg:p-[35px] hover:shadow-lg transition-shadow duration-300">
                
                <!-- Icon -->
                <div class="mb-[25px]">
                    <?php if ($service_icon): ?>
                        <img src="<?php echo esc_url($service_icon['url']); ?>" alt="<?php echo esc_attr($service_name); ?>" class="w-[60px] h-[60px] object-contain">
                    <?php else: ?>
                        <div class="w-[60px] h-[60px] bg-[#3D8BFF] rounded-full flex items-center justify-center">
                            <svg class="w-[30px] h-[30px] text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Title -->
                <h3 class="text-[#2A2A2A] text-[20px] lg:text-[22px] font-[700] mb-[15px] leading-[1.3]">
                    <?php echo esc_html($service_name); ?>
                </h3>

                <!-- Description -->
                <p class="text-[#555] text-[15px] font-[400] leading-[1.6] mb-[25px]">
                    <?php 
                    // Limit description to 150 characters
                    echo esc_html(mb_substr($service_description, 0, 150)) . '...'; 
                    ?>
                </p>

                <!-- Price and Timeline -->
                <div class="flex justify-between items-center mb-[20px] pb-[20px] border-b border-[#E5E5E5]">
                    <div>
                        <div class="text-[#999] text-[12px] font-[400] mb-[4px]">Стоимость</div>
                        <div class="text-[#3D8BFF] text-[16px] font-[600]"><?php echo esc_html($service_price); ?></div>
                    </div>
                    <div class="text-right">
                        <div class="text-[#999] text-[12px] font-[400] mb-[4px]">Сроки</div>
                        <div class="text-[#3D8BFF] text-[16px] font-[600]"><?php echo esc_html($service_timeline); ?></div>
                    </div>
                </div>

                <!-- Read More Link -->
                <a href="<?php the_permalink(); ?>" class="inline-flex items-center gap-[8px] text-[#3D8BFF] text-[15px] font-[500] hover:gap-[12px] transition-all duration-300">
                    <span>Подробнее</span>
                    <svg class="w-[16px] h-[16px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                    </svg>
                </a>

            </div>

            <?php
                endwhile;
                wp_reset_postdata();
            else:
            ?>
            
            <!-- No Services Message -->
            <div class="col-span-full text-center py-[60px]">
                <svg class="w-[80px] h-[80px] mx-auto mb-[20px] text-[#999]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
                </svg>
                <h3 class="text-[#2A2A2A] text-[24px] font-[600] mb-[10px]">Услуги пока не добавлены</h3>
                <p class="text-[#555] text-[16px]">Скоро здесь появятся наши услуги</p>
            </div>
            
            <?php endif; ?>

        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section class="py-[80px] lg:py-[100px] bg-[#BAD5FF]">
    <div class="max-w-[1200px] mx-auto px-[15px]">
        
        <!-- Header -->
        <div class="text-center mb-[50px]">
            <h2 class="text-[#2A2A2A] text-[40px] lg:text-[48px] font-[700] mb-[20px]">Не нашли нужную услугу?</h2>
            <p class="text-[#6D6F73] text-[16px] lg:text-[18px] font-[300] max-w-[800px] mx-auto">
                Свяжитесь с нами для консультации. Мы решаем нестандартные задачи и комплексные проекты.
            </p>
        </div>

        <!-- Form Container -->
        <div class="max-w-[700px] mx-auto">
            <form id="services-contact-form" class="space-y-[20px]">
                
                <!-- Name Input -->
                <div>
                    <label for="service-name" class="block text-[#555] text-[14px] font-[400] mb-[8px]">Ваше имя*</label>
                    <input 
                        type="text" 
                        id="service-name" 
                        name="name" 
                        required
                        class="w-full px-[20px] py-[16px] bg-white border-0 rounded-[8px] text-[#2A2A2A] text-[16px] focus:outline-none focus:ring-2 focus:ring-[#3D8BFF]"
                    >
                </div>

                <!-- Phone Input -->
                <div>
                    <label for="service-phone" class="block text-[#555] text-[14px] font-[400] mb-[8px]">Телефон*</label>
                    <input 
                        type="tel" 
                        id="service-phone" 
                        name="phone" 
                        required
                        class="w-full px-[20px] py-[16px] bg-white border-0 rounded-[8px] text-[#2A2A2A] text-[16px] focus:outline-none focus:ring-2 focus:ring-[#3D8BFF]"
                    >
                </div>

                <!-- Service Selector -->
                <div>
                    <label for="service-select" class="block text-[#555] text-[14px] font-[400] mb-[8px]">Интересующая услуга</label>
                    <select 
                        id="service-select" 
                        name="service"
                        class="w-full px-[20px] py-[16px] bg-white border-0 rounded-[8px] text-[#2A2A2A] text-[16px] focus:outline-none focus:ring-2 focus:ring-[#3D8BFF] appearance-none cursor-pointer"
                        style="background-image: url('data:image/svg+xml;charset=UTF-8,%3csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27currentColor%27 stroke-width=%272%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3e%3cpolyline points=%276 9 12 15 18 9%27%3e%3c/polyline%3e%3c/svg%3e'); background-repeat: no-repeat; background-position: right 1rem center; background-size: 1.5em 1.5em;"
                    >
                        <option value="">Выберите услугу</option>
                        <?php
                        // Get all services for dropdown
                        $services_dropdown = new WP_Query(array(
                            'post_type' => 'service',
                            'posts_per_page' => -1,
                            'orderby' => 'title',
                            'order' => 'ASC'
                        ));
                        
                        if ($services_dropdown->have_posts()) :
                            while ($services_dropdown->have_posts()) : $services_dropdown->the_post();
                                $dropdown_name = get_field('service_name');
                                if (!$dropdown_name) $dropdown_name = get_the_title();
                        ?>
                        <option value="<?php echo esc_attr($dropdown_name); ?>"><?php echo esc_html($dropdown_name); ?></option>
                        <?php
                            endwhile;
                            wp_reset_postdata();
                        endif;
                        ?>
                    </select>
                </div>

                <!-- Privacy Checkbox -->
                <div class="flex items-start gap-[10px] pt-[10px]">
                    <input 
                        type="checkbox" 
                        id="service-privacy" 
                        name="privacy" 
                        required
                        class="w-[20px] h-[20px] rounded border-2 border-[#3D8BFF] text-[#3D8BFF] focus:ring-0 focus:ring-offset-0 cursor-pointer"
                    >
                    <label for="service-privacy" class="text-[#2A2A2A] text-[14px] cursor-pointer">
                        Я согласен на обработку персональных данных
                    </label>
                </div>

                <!-- Submit Button -->
                <button 
                    type="submit"
                    class="w-full bg-[#2A2A2A] hover:bg-[#3D8BFF] text-white text-[16px] font-[600] py-[18px] px-[32px] rounded-[8px] transition-colors duration-300"
                >
                    Отправить заявку
                </button>

            </form>

            <!-- Phone Number -->
            <div class="text-center mt-[40px]">
                <p class="text-[#2A2A2A] text-[18px] lg:text-[20px] font-[500]">
                    Либо звоните по телефону 
                    <a href="tel:+375296199302" class="text-[#2A2A2A] font-[700] hover:text-[#3D8BFF] transition-colors no-underline">
                        +375 (29)619-93-02
                    </a>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Advantages Section -->
<section class="py-[80px] lg:py-[100px] bg-white">
    <div class="max-w-[1200px] mx-auto px-[15px]">
        
        <!-- Header -->
        <div class="text-center mb-[60px]">
            <h2 class="text-[#2A2A2A] text-[40px] lg:text-[48px] font-[700] mb-[20px]">Преимущества работы с нами</h2>
            <p class="text-[#6D6F73] text-[16px] lg:text-[18px] font-[300] max-w-[800px] mx-auto">Профессиональный подход к каждому проекту</p>
        </div>

        <!-- Cards Container -->
        <div class="relative">
            <!-- Cards Slider/Grid -->
            <div id="advantages-slider" class="flex overflow-x-auto snap-x snap-mandatory md:grid md:grid-cols-3 gap-[25px] lg:gap-[30px] scroll-smooth no-scrollbar pb-[10px] md:pb-0">
                
                <!-- Card 1 -->
                <div class="min-w-full md:min-w-0 snap-center bg-[#6FA4FF] rounded-[20px] p-[35px] lg:p-[40px]">
                    <div class="mb-[25px]">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/g1.svg" alt="Допуски" class="w-[60px] h-[60px]">
                    </div>
                    <h3 class="text-white text-[20px] lg:text-[22px] font-[700] mb-[15px]">Все необходимые допуски</h3>
                    <p class="text-white text-[15px] font-[400] leading-[1.6] opacity-90">
                        Имеем все лицензии и сертификаты для проведения электрофизических измерений и монтажных работ
                    </p>
                </div>

                <!-- Card 2 -->
                <div class="min-w-full md:min-w-0 snap-center bg-[#6FA4FF] rounded-[20px] p-[35px] lg:p-[40px]">
                    <div class="mb-[25px]">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/g2.svg" alt="Оборудование" class="w-[60px] h-[60px]">
                    </div>
                    <h3 class="text-white text-[20px] lg:text-[22px] font-[700] mb-[15px]">Современное оборудование</h3>
                    <p class="text-white text-[15px] font-[400] leading-[1.6] opacity-90">
                        Используем только сертифицированное измерительное оборудование с актуальной поверкой
                    </p>
                </div>

                <!-- Card 3 -->
                <div class="min-w-full md:min-w-0 snap-center bg-[#6FA4FF] rounded-[20px] p-[35px] lg:p-[40px]">
                    <div class="mb-[25px]">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/g3.svg" alt="Документы" class="w-[60px] h-[60px]">
                    </div>
                    <h3 class="text-white text-[20px] lg:text-[22px] font-[700] mb-[15px]">Полный пакет документов</h3>
                    <p class="text-white text-[15px] font-[400] leading-[1.6] opacity-90">
                        Протоколы измерений, акты, технические отчеты — всё готово для предоставления в контролирующие органы
                    </p>
                </div>

            </div>

            <!-- Navigation Arrows (Mobile Only) -->
            <div class="flex md:hidden justify-center gap-[20px] mt-[40px]">
                <button id="advantages-prev" class="w-[60px] h-[60px] bg-white hover:bg-[#e1e4e8] rounded-[8px] flex items-center justify-center transition-colors shadow-md">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/arrow.svg" class="w-[24px] h-[24px] rotate-180">
                </button>
                <button id="advantages-next" class="w-[60px] h-[60px] bg-white hover:bg-[#e1e4e8] rounded-[8px] flex items-center justify-center transition-colors shadow-md">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/arrow.svg" class="w-[24px] h-[24px]">
                </button>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const slider = document.getElementById('advantages-slider');
                const prevBtn = document.getElementById('advantages-prev');
                const nextBtn = document.getElementById('advantages-next');

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

<?php
get_footer();
?>
