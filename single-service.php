<?php
/**
 * Single Service Template
 */

get_header();

while (have_posts()) : the_post();
    
    // Get ACF fields
    $service_icon = get_field('service_icon');
    $service_name = get_field('service_name');
    $service_description = get_field('service_description');
    $service_price = get_field('service_price');
    $service_timeline = get_field('service_timeline');
    $service_included = get_field('service_included');
    $service_faq = get_field('service_faq');
    
    // Fallbacks
    if (!$service_name) $service_name = get_the_title();
    if (!$service_description) $service_description = 'Комплексная проверка электроустановок с выдачей протоколов';
    if (!$service_price) $service_price = 'от 000 BYN';
    if (!$service_timeline) $service_timeline = '0-0 дня';
?>

<!-- Hero Section -->
<section class="relative py-[100px] lg:py-[140px] bg-cover bg-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/ubg.png');">
    
    <div class="relative max-w-[1200px] mx-auto px-[15px]">
        <!-- Breadcrumbs -->
        <div class="mb-[30px]">
            <nav class="text-white text-[14px] lg:text-[16px] font-[300]">
                <a href="<?php echo home_url(); ?>" class="hover:text-[#3D8BFF] transition-colors">Главная</a>
                <span class="mx-[8px]">/</span>
                <a href="<?php echo home_url('/services'); ?>" class="hover:text-[#3D8BFF] transition-colors">Услуги</a>
                <span class="mx-[8px]">/</span>
                <span class="text-[#2D3542]"><?php echo esc_html($service_name); ?></span>
            </nav>
        </div>

        <!-- Content -->
        <div class="text-center">
            <h1 class="text-[#2A2A2A] text-[36px] lg:text-[48px] font-[700] mb-[20px]"><?php echo esc_html($service_name); ?></h1>
            <p class="text-white text-[16px] lg:text-[20px] font-[400] mb-[40px] max-w-[800px] mx-auto">
                <?php echo esc_html($service_description); ?>
            </p>

            <!-- Price and Timeline -->
            <div class="flex justify-center gap-[60px] mb-[40px]">
                <div>
                    <div class="text-white text-[14px] font-[400] mb-[8px] opacity-80">Стоимость</div>
                    <div class="text-white text-[24px] lg:text-[28px] font-[700]"><?php echo esc_html($service_price); ?></div>
                </div>
                <div>
                    <div class="text-white text-[14px] font-[400] mb-[8px] opacity-80">Сроки</div>
                    <div class="text-white text-[24px] lg:text-[28px] font-[700]"><?php echo esc_html($service_timeline); ?></div>
                </div>
            </div>

            <!-- Order Button -->
            <a href="#order-form" class="inline-block bg-[#2A2A2A] hover:bg-[#3D8BFF] text-white text-[16px] font-[600] py-[16px] px-[40px] rounded-[8px] transition-colors duration-300">
                Заказать услугу
            </a>
        </div>
    </div>
</section>

<!-- What's Included & Order Form Section -->
<section class="py-[80px] lg:py-[100px] bg-white">
    <div class="max-w-[1200px] mx-auto px-[15px]">
        <div class="grid grid-cols-1 lg:grid-cols-[65%_35%] gap-[60px]">
            
            <!-- What's Included Column -->
            <div>
                <h2 class="text-[#2A2A2A] text-[32px] lg:text-[36px] font-[700] mb-[40px]">Что входит в услугу</h2>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-[15px]">
                    <?php
                    if ($service_included) {
                        $items = explode("\n", $service_included);
                        foreach ($items as $item) {
                            $item = trim($item);
                            if ($item) {
                    ?>
                    <div class="flex items-start gap-[12px] bg-[#E8F1FF] rounded-[12px] p-[18px]">
                        <div class="flex-shrink-0 w-[20px] h-[20px] bg-[#3D8BFF] rounded-full flex items-center justify-center mt-[2px]">
                            <svg class="w-[12px] h-[12px] text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path>
                            </svg>
                        </div>
                        <p class="text-[#2A2A2A] text-[15px] font-[400] flex-1 leading-[1.4]"><?php echo esc_html($item); ?></p>
                    </div>
                    <?php
                            }
                        }
                    } else {
                        echo '<p class="text-[#555] text-[16px]">Информация не указана</p>';
                    }
                    ?>
                </div>

                <!-- How it Works -->
                <div class="mt-[60px]">
                    <h2 class="text-[#2A2A2A] text-[32px] lg:text-[36px] font-[700] mb-[40px]">Как проходит работа</h2>
                    
                    <!-- Timeline -->
                    <div class="space-y-[40px]">
                        
                        <!-- Step 1 -->
                        <div class="flex gap-[20px]">
                            <div class="flex-shrink-0">
                                <div class="w-[60px] h-[60px] bg-[#2A2A2A] rounded-full flex items-center justify-center">
                                    <svg class="w-[30px] h-[30px] text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                                    </svg>
                                </div>
                                <div class="w-[2px] h-[50px] bg-[#E5E5E5] mx-auto"></div>
                            </div>
                            <div class="flex-1 pt-[12px]">
                                <div class="text-[#3D8BFF] text-[14px] font-[600] mb-[6px]">Шаг 1</div>
                                <h3 class="text-[#2A2A2A] text-[18px] font-[700] mb-[6px]">Заявка</h3>
                                <p class="text-[#555] text-[15px] leading-[1.6]">Вы оставьте заявку на сайте или звоните нам</p>
                            </div>
                        </div>

                        <!-- Step 2 -->
                        <div class="flex gap-[20px]">
                            <div class="flex-shrink-0">
                                <div class="w-[60px] h-[60px] bg-[#2A2A2A] rounded-full flex items-center justify-center">
                                    <svg class="w-[30px] h-[30px] text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                    </svg>
                                </div>
                                <div class="w-[2px] h-[50px] bg-[#E5E5E5] mx-auto"></div>
                            </div>
                            <div class="flex-1 pt-[12px]">
                                <div class="text-[#3D8BFF] text-[14px] font-[600] mb-[6px]">Шаг 2</div>
                                <h3 class="text-[#2A2A2A] text-[18px] font-[700] mb-[6px]">Выезд специалиста</h3>
                                <p class="text-[#555] text-[15px] leading-[1.6]">Согласовываем дату и время выезда на объект</p>
                            </div>
                        </div>

                        <!-- Step 3 -->
                        <div class="flex gap-[20px]">
                            <div class="flex-shrink-0">
                                <div class="w-[60px] h-[60px] bg-[#2A2A2A] rounded-full flex items-center justify-center">
                                    <svg class="w-[30px] h-[30px] text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4"></path>
                                    </svg>
                                </div>
                                <div class="w-[2px] h-[50px] bg-[#E5E5E5] mx-auto"></div>
                            </div>
                            <div class="flex-1 pt-[12px]">
                                <div class="text-[#3D8BFF] text-[14px] font-[600] mb-[6px]">Шаг 3</div>
                                <h3 class="text-[#2A2A2A] text-[18px] font-[700] mb-[6px]">Проведение измерений</h3>
                                <p class="text-[#555] text-[15px] leading-[1.6]">Выполняем необходимые измерения и испытания</p>
                            </div>
                        </div>

                        <!-- Step 4 -->
                        <div class="flex gap-[20px]">
                            <div class="flex-shrink-0">
                                <div class="w-[60px] h-[60px] bg-[#2A2A2A] rounded-full flex items-center justify-center">
                                    <svg class="w-[30px] h-[30px] text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="flex-1 pt-[12px]">
                                <div class="text-[#3D8BFF] text-[14px] font-[600] mb-[6px]">Шаг 4</div>
                                <h3 class="text-[#2A2A2A] text-[18px] font-[700] mb-[6px]">Оформление документов</h3>
                                <p class="text-[#555] text-[15px] leading-[1.6]">Составляем протоколы и технические отчеты</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Order Form Column -->
            <div id="order-form">
                <div class="bg-[#F7F8F9] rounded-[20px] p-[35px] sticky top-[100px]">
                    <h3 class="text-[#2A2A2A] text-[24px] font-[700] mb-[25px]">Заказать услугу</h3>
                    
                    <form class="space-y-[20px]">
                        <!-- Name Input -->
                        <div>
                            <label class="block text-[#555] text-[14px] font-[400] mb-[8px]">Ваше имя*</label>
                            <input 
                                type="text" 
                                name="name" 
                                required
                                class="w-full px-[20px] py-[14px] bg-white border-0 rounded-[8px] text-[#2A2A2A] text-[16px] focus:outline-none focus:ring-2 focus:ring-[#3D8BFF]"
                            >
                        </div>

                        <!-- Phone Input -->
                        <div>
                            <label class="block text-[#555] text-[14px] font-[400] mb-[8px]">Телефон*</label>
                            <input 
                                type="tel" 
                                name="phone" 
                                required
                                class="w-full px-[20px] py-[14px] bg-white border-0 rounded-[8px] text-[#2A2A2A] text-[16px] focus:outline-none focus:ring-2 focus:ring-[#3D8BFF]"
                            >
                        </div>

                        <!-- Service (readonly) -->
                        <div>
                            <label class="block text-[#555] text-[14px] font-[400] mb-[8px]">Интересующая услуга</label>
                            <input 
                                type="text" 
                                name="service" 
                                value="<?php echo esc_attr($service_name); ?>"
                                readonly
                                class="w-full px-[20px] py-[14px] bg-[#E5E5E5] border-0 rounded-[8px] text-[#2A2A2A] text-[16px] cursor-not-allowed"
                            >
                        </div>

                        <!-- Privacy Checkbox -->
                        <div class="flex items-start gap-[10px]">
                            <input 
                                type="checkbox" 
                                id="privacy" 
                                name="privacy" 
                                required
                                class="mt-[4px] w-[18px] h-[18px] rounded border-2 border-[#3D8BFF] text-[#3D8BFF] focus:ring-0 cursor-pointer"
                            >
                            <label for="privacy" class="text-[#2A2A2A] text-[14px] cursor-pointer">
                                Я согласен на обработку персональных данных
                            </label>
                        </div>

                        <!-- Submit Button -->
                        <button 
                            type="submit"
                            class="w-full bg-[#2A2A2A] hover:bg-[#3D8BFF] text-white text-[16px] font-[600] py-[16px] rounded-[8px] transition-colors duration-300"
                        >
                            Отправить заявку
                        </button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- FAQ Section -->
<?php if ($service_faq): ?>
<section class="py-[80px] lg:py-[100px] bg-[#F7F8F9]">
    <div class="max-w-[1200px] mx-auto px-[15px]">
        <h2 class="text-[#2A2A2A] text-[32px] lg:text-[40px] font-[700] mb-[50px] text-center">Часто задаваемые вопросы</h2>
        
        <div class="max-w-[900px] mx-auto bg-white rounded-[20px] p-[30px] lg:p-[40px]">
            <div class="space-y-[15px]">
                <?php
                // Parse FAQ content - split by <strong> or line breaks
                $faq_content = $service_faq;
                
                // Try to extract questions and answers from WYSIWYG content
                // Format expected: Question: text\nAnswer: text OR <strong>Question:</strong> text <strong>Answer:</strong> text
                
                // Remove HTML tags except strong/b
                $faq_text = strip_tags($faq_content, '<strong><b><p><br>');
                
                // Split by paragraphs or line breaks
                $lines = preg_split('/(<p>|<\/p>|<br\s*\/?>)/i', $faq_text, -1, PREG_SPLIT_NO_EMPTY);
                
                $questions = [];
                $current_question = '';
                $current_answer = '';
                
                foreach ($lines as $line) {
                    $line = trim(strip_tags($line));
                    if (empty($line)) continue;
                    
                    // Check if line starts with "Вопрос:" or "Question:"
                    if (preg_match('/^(Вопрос|Question):/i', $line)) {
                        if ($current_question && $current_answer) {
                            $questions[] = ['q' => $current_question, 'a' => $current_answer];
                        }
                        $current_question = preg_replace('/^(Вопрос|Question):\s*/i', '', $line);
                        $current_answer = '';
                    }
                    // Check if line starts with "Ответ:" or "Answer:"
                    elseif (preg_match('/^(Ответ|Answer):/i', $line)) {
                        $current_answer = preg_replace('/^(Ответ|Answer):\s*/i', '', $line);
                    }
                    // Otherwise, if we have a question but no answer yet, this is the question
                    elseif (!$current_question) {
                        $current_question = $line;
                    }
                    // If we have a question and this doesn't start with answer marker, it's the answer
                    elseif ($current_question && !$current_answer) {
                        $current_answer = $line;
                    }
                }
                
                // Add the last Q&A
                if ($current_question && $current_answer) {
                    $questions[] = ['q' => $current_question, 'a' => $current_answer];
                }
                
                // If no questions parsed, show default ones
                if (empty($questions)) {
                    $questions = [
                        ['q' => 'Как часто нужно проводить электрофизические измерения?', 'a' => 'Согласно нормативам, измерения проводятся ежегодно или после проведения ремонтных работ.'],
                        ['q' => 'Сколько времени занимает измерение?', 'a' => 'В зависимости от объема работ, от 2 часов до нескольких дней.']
                    ];
                }
                
                foreach ($questions as $index => $qa):
                ?>
                <!-- FAQ Item -->
                <div class="service-faq-item <?php echo $index < count($questions) - 1 ? 'border-b border-[#E5E5E5] pb-[15px]' : ''; ?>">
                    <button class="service-faq-question w-full flex justify-between items-center text-left py-[15px] text-[#2A2A2A] text-[16px] lg:text-[18px] font-[500] hover:text-[#3D8BFF] transition-colors">
                        <span><?php echo esc_html($qa['q']); ?></span>
                        <svg class="service-faq-icon w-[24px] h-[24px] flex-shrink-0 transition-transform duration-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                        </svg>
                    </button>
                    <div class="service-faq-answer hidden overflow-hidden">
                        <div class="pt-[10px] pb-[15px] text-[#555] text-[15px] leading-[1.6]">
                            <?php echo esc_html($qa['a']); ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const faqItems = document.querySelectorAll('.service-faq-item');
            
            faqItems.forEach(item => {
                const question = item.querySelector('.service-faq-question');
                const answer = item.querySelector('.service-faq-answer');
                const icon = item.querySelector('.service-faq-icon');
                
                question.addEventListener('click', () => {
                    const isOpen = !answer.classList.contains('hidden');
                    
                    // Close all other items
                    faqItems.forEach(otherItem => {
                        if (otherItem !== item) {
                            otherItem.querySelector('.service-faq-answer').classList.add('hidden');
                            otherItem.querySelector('.service-faq-icon').style.transform = 'rotate(0deg)';
                        }
                    });
                    
                    // Toggle current item
                    if (isOpen) {
                        answer.classList.add('hidden');
                        icon.style.transform = 'rotate(0deg)';
                    } else {
                        answer.classList.remove('hidden');
                        icon.style.transform = 'rotate(180deg)';
                    }
                });
            });
        });
    </script>
</section>
<?php endif; ?>

<?php
endwhile;
get_footer();
?>
