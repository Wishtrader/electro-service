<?php
/**
 * Template Name: About Page
 * Description: About company page
 */

get_header();
?>

<!-- Hero Section -->
<section class="relative py-[100px] lg:py-[140px] bg-cover bg-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/about.png');">
    
    <div class="relative max-w-[1200px] mx-auto px-[15px]">
        <!-- Breadcrumbs -->
        <div class="mb-[30px]">
            <nav class="text-white text-[14px] lg:text-[16px] font-[300]">
                <a href="<?php echo home_url(); ?>" class="hover:text-[#3D8BFF] transition-colors">Главная</a>
                <span class="mx-[8px]">/</span>
                <span class="text-[#2D3542]">О компании</span>
            </nav>
        </div>

        <!-- Content -->
        <div class="text-center max-w-[900px] mx-auto">
            <h1 class="text-[#2A2A2A] text-[36px] lg:text-[48px] font-[700] mb-[20px]">
                О компании "ЭлектроСервис-Кировск"
            </h1>
            <p class="text-white text-[16px] lg:text-[24px] font-[400] mb-[40px] leading-[1.6]">
                Комплексные электрофизические измерения, проектирование и монтаж электроснабжения с протоколами "под ключ" по всей Беларуси.
            </p>

            <!-- CTA Button -->
            <a href="<?php echo home_url(); ?>/services" class="inline-block bg-[#233B5D] hover:bg-[#3D8BFF] text-white text-[16px] font-[300] py-[16px] px-[77px] rounded-[8px] transition-colors duration-300">
                Заказать услугу
            </a>
        </div>
    </div>
</section>

<!-- About Content Section -->
<section class="py-[80px] lg:py-[120px] bg-white">
    <div class="max-w-[1200px] mx-auto px-[15px]">
        
        <!-- Content with Image Carousel -->
        <div class="relative flex flex-col lg:flex-row gap-[60px] items-center">
            
            <!-- Text Block -->
            <div class="lg:absolute top-[40%] left-[0] lg:w-[65%] z-10">
                <div class="bg-[#BAD5FF] rounded-[20px] p-[40px] lg:p-[50px]">
                    <p class="text-[#2A2A2A] text-[16px] lg:text-[18px] font-[400] leading-[1.7] mb-[20px]">
                        Частное унитарное предприятие «ЭлектроСервис-Кировск» выполняет электрофизические измерения, разработку проектов электроснабжения и электроотопления, а также монтаж с последующей сдачей объектов в энергонадзор. Работаем с частными клиентами, строительными организациями, предприятиями и ЖКХ.
                    </p>
                </div>

                <!-- Navigation Arrows -->
                <div class="flex gap-[15px] mt-[30px]">
                    <button id="about-prev" class="w-[50px] h-[50px] bg-[#F7F8F9] hover:bg-[#E5E5E5] rounded-[8px] flex items-center justify-center transition-colors">
                        <svg class="w-[24px] h-[24px] text-[#2A2A2A]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                        </svg>
                    </button>
                    <button id="about-next" class="w-[50px] h-[50px] bg-[#F7F8F9] hover:bg-[#E5E5E5] rounded-[8px] flex items-center justify-center transition-colors">
                        <svg class="w-[24px] h-[24px] text-[#2A2A2A]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                        </svg>
                    </button>
                </div>
            </div>

            <!-- Image Carousel -->
            <div class="lg:w-[65%] relative lg:ml-auto">
                <div class="relative overflow-hidden rounded-[20px]">
                    <div id="about-slider" class="flex transition-transform duration-500 ease-in-out">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/about-bg.png" alt="О компании" class="w-full h-auto object-cover flex-shrink-0">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/about-bg.png" alt="О компании" class="w-full h-auto object-cover flex-shrink-0">
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- Services Carousel Section -->
<section class="py-[80px] lg:py-[100px] bg-white">
    <div class="max-w-[1200px] mx-auto px-[15px]">
        <h2 class="text-[#2A2A2A] text-[32px] lg:text-[40px] font-[700] mb-[60px] text-center">Что мы делаем</h2>
        
        <div class="relative">
            <!-- Services Slider -->
            <div class="overflow-hidden">
                <div id="services-slider" class="flex gap-[30px] transition-transform duration-500 ease-in-out">
                    
                    <?php
                    // Query services
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
                            
                            // Fallbacks
                            if (!$service_name) $service_name = get_the_title();
                            if (!$service_description) $service_description = get_the_excerpt();
                    ?>
                    
                    <!-- Service Card -->
                    <div class="flex-shrink-0 w-full md:w-[calc(50%-15px)] lg:w-[calc(33.333%-20px)]">
                        <div class="bg-[#F7F8F9] rounded-[16px] p-[35px] h-full flex flex-col">
                            <!-- Icon -->
                            <div class="mb-[20px]">
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
                            <h3 class="text-[#2A2A2A] text-[20px] font-[700] mb-[12px]">
                                <?php echo esc_html($service_name); ?>
                            </h3>

                            <!-- Description -->
                            <p class="text-[#555] text-[15px] leading-[1.6] mb-[20px] flex-grow">
                                <?php echo esc_html(mb_substr($service_description, 0, 120)) . '...'; ?>
                            </p>

                            <!-- Link -->
                            <a href="<?php the_permalink(); ?>" class="inline-flex items-center gap-[8px] text-[#3D8BFF] text-[15px] font-[500] hover:gap-[12px] transition-all duration-300">
                                <span>Подробнее</span>
                                <svg class="w-[16px] h-[16px]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                </svg>
                            </a>
                        </div>
                    </div>

                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>

                </div>
            </div>

            <!-- Navigation Arrows -->
            <button id="services-prev" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-1/2 lg:-translate-x-full lg:left-0 w-[50px] h-[50px] bg-white hover:bg-[#E5E5E5] rounded-[8px] flex items-center justify-center transition-colors shadow-lg z-10">
                <svg class="w-[24px] h-[24px] text-[#2A2A2A]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            <button id="services-next" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-1/2 lg:translate-x-full lg:right-0 w-[50px] h-[50px] bg-white hover:bg-[#E5E5E5] rounded-[8px] flex items-center justify-center transition-colors shadow-lg z-10">
                <svg class="w-[24px] h-[24px] text-[#2A2A2A]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
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

<script>
document.addEventListener('DOMContentLoaded', function() {
    // About Image Carousel
    const aboutSlider = document.getElementById('about-slider');
    const aboutPrevBtn = document.getElementById('about-prev');
    const aboutNextBtn = document.getElementById('about-next');
    let aboutCurrentIndex = 0;
    const aboutTotalSlides = 2;

    if (aboutSlider && aboutPrevBtn && aboutNextBtn) {
        aboutPrevBtn.addEventListener('click', () => {
            aboutCurrentIndex = (aboutCurrentIndex - 1 + aboutTotalSlides) % aboutTotalSlides;
            updateAboutSlider();
        });

        aboutNextBtn.addEventListener('click', () => {
            aboutCurrentIndex = (aboutCurrentIndex + 1) % aboutTotalSlides;
            updateAboutSlider();
        });

        function updateAboutSlider() {
            aboutSlider.style.transform = `translateX(-${aboutCurrentIndex * 100}%)`;
        }
    }

    // Services Carousel
    const servicesSlider = document.getElementById('services-slider');
    const servicesPrevBtn = document.getElementById('services-prev');
    const servicesNextBtn = document.getElementById('services-next');
    let servicesCurrentIndex = 0;

    if (servicesSlider && servicesPrevBtn && servicesNextBtn) {
        // Calculate cards per view based on screen size
        function getCardsPerView() {
            if (window.innerWidth >= 1024) return 3;  // lg
            if (window.innerWidth >= 768) return 2;   // md
            return 1;  // mobile
        }

        function updateServicesSlider() {
            const cardWidth = servicesSlider.querySelector('.flex-shrink-0').offsetWidth;
            const gap = 30;
            const offset = servicesCurrentIndex * (cardWidth + gap);
            servicesSlider.style.transform = `translateX(-${offset}px)`;
        }

        servicesPrevBtn.addEventListener('click', () => {
            if (servicesCurrentIndex > 0) {
                servicesCurrentIndex--;
                updateServicesSlider();
            }
        });

        servicesNextBtn.addEventListener('click', () => {
            const totalCards = servicesSlider.querySelectorAll('.flex-shrink-0').length;
            const cardsPerView = getCardsPerView();
            if (servicesCurrentIndex < totalCards - cardsPerView) {
                servicesCurrentIndex++;
                updateServicesSlider();
            }
        });

        // Reset on resize
        window.addEventListener('resize', () => {
            servicesCurrentIndex = 0;
            updateServicesSlider();
        });
    }

    // Reviews Carousel
    const reviewsSlider = document.getElementById('reviews-slider');
    const reviewsPrevBtn = document.getElementById('reviews-prev');
    const reviewsNextBtn = document.getElementById('reviews-next');
    let reviewsCurrentIndex = 0;

    if (reviewsSlider && reviewsPrevBtn && reviewsNextBtn) {
        // Calculate cards per view based on screen size
        function getReviewsCardsPerView() {
            if (window.innerWidth >= 1024) return 3;  // lg
            if (window.innerWidth >= 768) return 2;   // md
            return 1;  // mobile
        }

        function updateReviewsSlider() {
            const cardWidth = reviewsSlider.querySelector('.flex-shrink-0').offsetWidth;
            const gap = 30;
            const offset = reviewsCurrentIndex * (cardWidth + gap);
            reviewsSlider.style.transform = `translateX(-${offset}px)`;
        }

        reviewsPrevBtn.addEventListener('click', () => {
            if (reviewsCurrentIndex > 0) {
                reviewsCurrentIndex--;
                updateReviewsSlider();
            }
        });

        reviewsNextBtn.addEventListener('click', () => {
            const totalCards = reviewsSlider.querySelectorAll('.flex-shrink-0').length;
            const cardsPerView = getReviewsCardsPerView();
            if (reviewsCurrentIndex < totalCards - cardsPerView) {
                reviewsCurrentIndex++;
                updateReviewsSlider();
            }
        });

        // Reset on resize
        window.addEventListener('resize', () => {
            reviewsCurrentIndex = 0;
            updateReviewsSlider();
        });
    }
});
</script>

<!-- Work Across Belarus Section -->
<section class="py-[80px] lg:py-[100px] bg-[#BAD5FF] bg-cover bg-center relative" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/map.png');">
    <div class="max-w-[1200px] mx-auto px-[15px] text-center relative z-10">
        <h2 class="text-[#2A2A2A] text-[32px] lg:text-[48px] font-[700] mb-[20px]">
            Работаем по всей Беларуси
        </h2>
        <p class="text-[#2A2A2A] text-[16px] lg:text-[18px] font-[400] max-w-[900px] mx-auto leading-[1.7]">
            Базируемся в Кировске, но выполняем заказы в Бобруйске, Осиповичах, Рогачёве, Быхове, Глуске и других городах. При необходимости выезжаем в любой регион Республики Беларусь.
        </p>
    </div>
</section>

<!-- Reviews Section -->
<section class="py-[80px] lg:py-[100px] bg-white">
    <div class="max-w-[1200px] mx-auto px-[15px]">
        
        <!-- Header -->
        <div class="text-center mb-[50px]">
            <h2 class="text-[#2A2A2A] text-[32px] lg:text-[40px] font-[700] mb-[15px]">Отзывы</h2>
            <p class="text-[#555] text-[16px] font-[400] max-w-[800px] mx-auto">
                Все отзывы оставлены нашими клиентами через сайт после выполненных работ.Вы так же можете оставить свой отзыв.
            </p>
        </div>

        <div class="relative">
            <!-- Reviews Slider -->
            <div class="overflow-hidden">
                <div id="reviews-slider" class="flex gap-[30px] transition-transform duration-500 ease-in-out">
                    
                    <?php
                    // Query reviews
                    $reviews_query = new WP_Query(array(
                        'post_type' => 'review',
                        'posts_per_page' => -1,
                        'orderby' => 'date',
                        'order' => 'DESC'
                    ));

                    if ($reviews_query->have_posts()) :
                        while ($reviews_query->have_posts()) : $reviews_query->the_post();
                            
                            // Get ACF fields
                            $review_photo = get_field('review_photo');
                            $review_client = get_field('review_client');
                            $review_text = get_field('review_text');
                            
                            // Fallbacks
                            if (!$review_client) $review_client = get_the_title();
                            if (!$review_text) $review_text = 'Отзыв не указан';
                    ?>
                    
                    <!-- Review Card -->
                    <div class="flex-shrink-0 w-full md:w-[calc(50%-15px)] lg:w-[calc(33.333%-20px)]">
                        <div class="bg-white border-2 border-[#E5E5E5] rounded-[16px] p-[25px] h-full flex flex-col">
                            
                            <!-- Photo/Logo -->
                            <div class="mb-[20px]">
                                <?php if ($review_photo): ?>
                                    <img src="<?php echo esc_url($review_photo['url']); ?>" alt="<?php echo esc_attr($review_client); ?>" class="w-full h-[200px] object-cover rounded-[12px]">
                                <?php else: ?>
                                    <div class="w-full h-[200px] bg-[#F7F8F9] rounded-[12px] flex items-center justify-center">
                                        <svg class="w-[60px] h-[60px] text-[#3D8BFF]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path>
                                        </svg>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <!-- Client Name -->
                            <h3 class="text-[#2A2A2A] text-[18px] font-[700] mb-[15px]">
                                <?php echo esc_html($review_client); ?>
                            </h3>

                            <!-- Review Text -->
                            <p class="text-[#555] text-[15px] leading-[1.6] flex-grow">
                                <?php echo esc_html($review_text); ?>
                            </p>

                        </div>
                    </div>

                    <?php
                        endwhile;
                        wp_reset_postdata();
                    else:
                    ?>
                    
                    <!-- No Reviews Message -->
                    <div class="w-full text-center py-[60px]">
                        <svg class="w-[80px] h-[80px] mx-auto mb-[20px] text-[#999]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"></path>
                        </svg>
                        <h3 class="text-[#2A2A2A] text-[24px] font-[600] mb-[10px]">Отзывы пока не добавлены</h3>
                        <p class="text-[#555] text-[16px]">Скоро здесь появятся отзывы наших клиентов</p>
                    </div>
                    
                    <?php endif; ?>

                </div>
            </div>

            <!-- Navigation Arrows -->
            <?php if ($reviews_query->have_posts() && $reviews_query->post_count > 1): ?>
            <button id="reviews-prev" class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-1/2 lg:-translate-x-full lg:left-0 w-[50px] h-[50px] bg-white hover:bg-[#E5E5E5] rounded-[8px] flex items-center justify-center transition-colors shadow-lg z-10 border-2 border-[#E5E5E5]">
                <svg class="w-[24px] h-[24px] text-[#2A2A2A]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                </svg>
            </button>
            <button id="reviews-next" class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-1/2 lg:translate-x-full lg:right-0 w-[50px] h-[50px] bg-white hover:bg-[#E5E5E5] rounded-[8px] flex items-center justify-center transition-colors shadow-lg z-10 border-2 border-[#E5E5E5]">
                <svg class="w-[24px] h-[24px] text-[#2A2A2A]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </button>
            <?php endif; ?>
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

<!-- CTA Section -->
<section class="py-[80px] lg:py-[100px] bg-[#F7F8F9]">
    <div class="max-w-[1200px] mx-auto px-[15px]">
        
        <!-- Header -->
        <div class="text-center mb-[50px]">
            <h2 class="text-[#2A2A2A] text-[32px] lg:text-[48px] font-[700] mb-[15px]">Готовы начать работу?</h2>
            <p class="text-[#6D6F73] text-[16px] lg:text-[18px] max-w-[685px] text-center mx-auto font-[300]">
                Оставьте заявку, и наш специалист свяжется с вами в течение 15 минут для консультации и согласования времени выезда.
            </p>
        </div>

        <!-- Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-[40px] lg:gap-[60px] items-center">
            
            <!-- Features Column -->
            <div class="space-y-[30px]">
                
                <!-- Feature 1 -->
                <div class="flex items-start gap-[20px]">
                    <div class="flex-shrink-0 w-[81px] h-[81px] bg-[#3D8BFF] rounded-full flex items-center justify-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/k1.svg" alt="" class="w-[81px] h-[81px]">
                    </div>
                    <div>
                        <h3 class="text-[#2A2A2A] text-[18px] lg:text-[18px] font-[400] mb-[8px]">Бесплатный выезд</h3>
                        <p class="text-[#555] text-[15px] font-[300] leading-[1.5]">Консультация и оценка без платы</p>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="flex items-start gap-[20px]">
                    <div class="flex-shrink-0 w-[81px] h-[81px] bg-[#3D8BFF] rounded-full flex items-center justify-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/k2.svg" alt="" class="w-[81px] h-[81px]">
                    </div>
                    <div>
                        <h3 class="text-[#2A2A2A] text-[18px] lg:text-[18px] font-[400] mb-[8px]">Быстрые сроки</h3>
                        <p class="text-[#555] text-[15px] font-[300] leading-[1.5]">Протоколы на следующий день</p>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="flex items-start gap-[20px]">
                    <div class="flex-shrink-0 w-[81px] h-[81px] bg-[#3D8BFF] rounded-full flex items-center justify-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/k3.png" alt="" class="w-[81px] h-[81px]">
                    </div>
                    <div>
                        <h3 class="text-[#2A2A2A] text-[18px] lg:text-[18px] font-[400] mb-[8px]">Гарантия качества</h3>
                        <p class="text-[#555] text-[15px] font-[300] leading-[1.5]">2 года на все работы</p>
                    </div>
                </div>

            </div>

            <!-- Form Column -->
            <div class="p-[30px] lg:p-[40px]">
                <form id="cta-form" class="space-y-[20px]">
                    
                    <!-- Name Input -->
                    <div>
                        <label for="cta-name" class="block text-[#6D6F73] text-[15px] font-[300] mb-[8px]">Ваше имя*</label>
                        <input 
                            type="text" 
                            id="cta-name" 
                            name="name" 
                            required
                            class="w-full bg-[#F4F3F1] px-[20px] py-[14px] border-0 rounded-[18px] text-[#2A2A2A] text-[16px] focus:outline-none focus:ring-2 focus:ring-[#3D8BFF]"
                        >
                    </div>

                    <!-- Phone Input -->
                    <div>
                        <label for="cta-phone" class="block text-[#6D6F73] text-[15px] font-[300] mb-[8px]">Телефон*</label>
                        <input 
                            type="tel" 
                            id="cta-phone" 
                            name="phone" 
                            required
                            class="w-full bg-[#F4F3F1] px-[20px] py-[14px] border-0 rounded-[18px] text-[#2A2A2A] text-[16px] focus:outline-none focus:ring-2 focus:ring-[#3D8BFF]"
                        >
                    </div>

                    <!-- Service Input -->
                    <div>
                        <label for="cta-service" class="block text-[#6D6F73] text-[15px] font-[300] mb-[8px]">Интересующая услуга</label>
                        <select 
                            id="cta-service" 
                            name="service"
                            class="w-full bg-[#F4F3F1] px-[20px] py-[14px] border-0 rounded-[8px] text-[#6D6F73] text-[15px] focus:outline-none focus:ring-2 focus:ring-[#3D8BFF] appearance-none cursor-pointer"
                            style="background-image: url('data:image/svg+xml;charset=UTF-8,%3csvg xmlns=%27http://www.w3.org/2000/svg%27 viewBox=%270 0 24 24%27 fill=%27none%27 stroke=%27currentColor%27 stroke-width=%272%27 stroke-linecap=%27round%27 stroke-linejoin=%27round%27%3e%3cpolyline points=%276 9 12 15 18 9%27%3e%3c/polyline%3e%3c/svg%3e'); background-repeat: no-repeat; background-position: right 1rem center; background-size: 1.5em 1.5em;"
                        >
                            <option value="">Выберите услугу</option>
                            <option value="efi">Электрофизические измерения</option>
                            <option value="grounding">Измерения сопротивления заземления</option>
                            <option value="isolation">Измерения сопротивления изоляции</option>
                            <option value="design">Проектирование электроснабжения</option>
                            <option value="montage">Монтаж со сдачей энергонадзору</option>
                            <option value="topo">Топосъемка и архитектурные проекты</option>
                        </select>
                    </div>

                    <!-- Privacy Checkbox -->
                    <div class="flex items-start gap-[10px]">
                        <input 
                            type="checkbox" 
                            id="cta-privacy" 
                            name="privacy" 
                            required
                            class="w-[18px] h-[18px] rounded border-2 border-[#3D8BFF] text-[#3D8BFF] focus:ring-0 focus:ring-offset-0 cursor-pointer"
                        >
                        <label for="cta-privacy" class="text-[#2A2A2A] text-[14px] cursor-pointer">
                            Я согласен на обработку персональных данных
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <button 
                        type="submit"
                        class="w-full bg-[#233B5D] hover:bg-[#3D8BFF] text-white text-[16px] font-[600] py-[16px] px-[32px] rounded-[8px] transition-colors duration-300"
                    >
                        Отправить заявку
                    </button>

                </form>
            </div>

        </div>
    </div>
</section>

<?php
get_footer();
?>
