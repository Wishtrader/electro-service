<?php
/**
 * Template Name: Projects Page
 * Description: Our projects page
 */

get_header();
?>

<!-- Hero Section -->
<section class="relative py-[100px] lg:py-[140px] bg-cover bg-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/service-bg.png');">
    
    
    <div class="relative max-w-[1200px] mx-auto px-[15px]">
        <!-- Breadcrumbs -->
        <div class="mb-[30px]">
            <nav class="text-white text-[14px] lg:text-[16px] font-[300]">
                <a href="<?php echo home_url(); ?>" class="hover:text-[#3D8BFF] transition-colors">Главная</a>
                <span class="mx-[8px]">/</span>
                <span class="text-[#2D3542]">Наши работы</span>
            </nav>
        </div>

        <!-- Content -->
        <div class="text-center max-w-[900px] mx-auto">
            <h1 class="text-[#2A2A2A] text-[36px] lg:text-[48px] font-[700] mb-[20px]">
                Реализованные проекты
            </h1>
            <p class="text-white text-[16px] lg:text-[24px] font-[400] mb-[40px] leading-[1.6]">
                Примеры наших работ: от небольших коммерческих объектов до крупных промышленных комплексов
            </p>

            <!-- CTA Button -->
            <a href="<?php echo home_url('/services'); ?>" class="inline-block bg-[#233B5D] hover:bg-[#3D8BFF] text-white text-[16px] font-[600] py-[16px] px-[40px] rounded-[8px] transition-colors duration-300">
                Заказать услугу
            </a>
        </div>
    </div>
</section>

<!-- Projects Grid Section -->
<section class="py-[80px] lg:py-[100px] bg-white">
    <div class="max-w-[1200px] mx-auto px-[15px]">
        
        <?php
        // Query projects
        $projects_query = new WP_Query(array(
            'post_type' => 'project',
            'posts_per_page' => -1,
            'orderby' => 'date',
            'order' => 'DESC'
        ));

        if ($projects_query->have_posts()) :
        ?>
        
        <!-- Projects Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-[25px]">
            
            <?php
            while ($projects_query->have_posts()) : $projects_query->the_post();
                
                // Get ACF fields
                $project_image = get_field('project_image');
                $project_location = get_field('project_location');
                $project_year = get_field('project_year');
                $project_title = get_the_title();
                
                // Fallbacks
                if (!$project_location) $project_location = 'Местоположение не указано';
                if (!$project_year) $project_year = date('Y');
            ?>
            
            <!-- Project Card -->
            <div class="bg-white rounded-[16px] overflow-hidden shadow-md hover:shadow-xl transition-shadow duration-300">
                
                <!-- Project Image -->
                <div class="relative h-[220px] bg-[#F7F8F9] overflow-hidden">
                    <?php if ($project_image): ?>
                        <img src="<?php echo esc_url($project_image['url']); ?>" alt="<?php echo esc_attr($project_title); ?>" class="w-full h-full object-cover">
                    <?php else: ?>
                        <div class="w-full h-full flex items-center justify-center">
                            <svg class="w-[60px] h-[60px] text-[#999]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                            </svg>
                        </div>
                    <?php endif; ?>
                </div>

                <!-- Project Info -->
                <div class="p-[20px]">
                    
                    <!-- Location -->
                    <div class="flex items-center gap-[8px] mb-[12px]">
                        <svg class="w-[16px] h-[16px] text-[#3D8BFF] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span class="text-[#3D8BFF] text-[14px] font-[400]"><?php echo esc_html($project_location); ?></span>
                    </div>

                    <!-- Year -->
                    <div class="flex items-center gap-[8px] mb-[15px]">
                        <svg class="w-[16px] h-[16px] text-[#3D8BFF] flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <span class="text-[#3D8BFF] text-[14px] font-[400]"><?php echo esc_html($project_year); ?></span>
                    </div>

                    <!-- Title -->
                    <h3 class="text-[#2A2A2A] text-[18px] font-[700] leading-[1.3]">
                        <?php echo esc_html($project_title); ?>
                    </h3>

                </div>
            </div>

            <?php
            endwhile;
            wp_reset_postdata();
            ?>

        </div>

        <?php
        else:
        ?>
        
        <!-- No Projects Message -->
        <div class="text-center py-[80px]">
            <svg class="w-[100px] h-[100px] mx-auto mb-[30px] text-[#999]" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
            </svg>
            <h2 class="text-[#2A2A2A] text-[32px] font-[700] mb-[15px]">Проекты пока не добавлены</h2>
            <p class="text-[#555] text-[18px] mb-[30px]">Скоро здесь появятся наши реализованные проекты</p>
            <a href="<?php echo home_url('/services'); ?>" class="inline-block bg-[#3D8BFF] hover:bg-[#2A2A2A] text-white text-[16px] font-[600] py-[14px] px-[35px] rounded-[8px] transition-colors duration-300">
                Посмотреть услуги
            </a>
        </div>

        <?php endif; ?>

    </div>
</section>


<section class="py-[80px] lg:py-[100px] bg-[#BAD5FF]">
    <div class="max-w-[1200px] mx-auto px-[15px]">
        
        <!-- Header -->
        <div class="text-center mb-[50px]">
            <h2 class="text-[#2A2A2A] text-[40px] lg:text-[48px] font-[700] mb-[20px]">Хотите реализовать свой проект?</h2>
            <p class="text-[#6D6F73] text-[16px] lg:text-[18px] font-[300] max-w-[800px] mx-auto">
                Мы готовы взяться за проект любой сложности
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

<?php
get_footer();
?>
