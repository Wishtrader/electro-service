<?php
/**
 * The template for displaying 404 pages (not found)
 */

get_header();
?>

<main class="min-h-[800px] bg-white flex items-center justify-center py-[60px] relative overflow-hidden">
    
    <!-- Left Plug -->
    <div class="absolute left-0 bottom-0 w-[300px] lg:w-[400px] pointer-events-none">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/404_1.png" alt="" class="w-full h-auto">
    </div>

    <!-- Right Plug -->
    <div class="absolute right-0 bottom-0 w-[300px] lg:w-[400px] pointer-events-none">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/404_2.png" alt="" class="w-full h-auto">
    </div>

    <!-- Content -->
    <div class="relative z-10 max-w-[800px] mx-auto px-[15px] text-center">
        
        <h1 class="text-[#2A2A2A] text-[32px] lg:text-[48px] font-[700] mb-[25px] leading-[1.2]">
            Цепь разомкнулась — страница не найдена
        </h1>

        <div class="text-[#555] text-[16px] lg:text-[18px] mb-[35px] space-y-[10px]">
            <p>Запрошенный адрес не подключён к сети сайта.</p>
            <p>Возможно, страница была удалена, переименована или вы ввели адрес с ошибкой.</p>
        </div>

        <a href="<?php echo home_url(); ?>" class="inline-block bg-[#233B5D] hover:bg-[#3D8BFF] text-white text-[16px] font-[600] py-[16px] px-[45px] rounded-[8px] transition-colors duration-300">
            Перейти на главную
        </a>

    </div>

</main>

<?php
get_footer();
