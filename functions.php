<?php
/**
 * electro-service functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package electro-service
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function electro_service_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on electro-service, use a find and replace
		* to change 'electro-service' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'electro-service', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'electro-service' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'electro_service_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'electro_service_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function electro_service_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'electro_service_content_width', 640 );
}
add_action( 'after_setup_theme', 'electro_service_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function electro_service_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'electro-service' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'electro-service' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'electro_service_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function electro_service_scripts() {
	wp_enqueue_style( 'electro-service-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'electro-service-style', 'rtl', 'replace' );

	wp_enqueue_script( 'electro-service-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'electro_service_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Register Custom Post Type: Projects
 */
function electro_service_register_projects_cpt() {
	$labels = array(
		'name'                  => 'Проекты',
		'singular_name'         => 'Проект',
		'menu_name'             => 'Проекты',
		'name_admin_bar'        => 'Проект',
		'add_new'               => 'Добавить новый',
		'add_new_item'          => 'Добавить новый проект',
		'new_item'              => 'Новый проект',
		'edit_item'             => 'Редактировать проект',
		'view_item'             => 'Просмотреть проект',
		'all_items'             => 'Все проекты',
		'search_items'          => 'Искать проекты',
		'not_found'             => 'Проекты не найдены',
		'not_found_in_trash'    => 'В корзине проектов не найдено'
	);

	$args = array(
		'labels'                => $labels,
		'public'                => true,
		'publicly_queryable'    => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'projects' ),
		'capability_type'       => 'post',
		'has_archive'           => true,
		'hierarchical'          => false,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-portfolio',
		'supports'              => array( 'title', 'thumbnail' ),
		'show_in_rest'          => true,
	);

	register_post_type( 'project', $args );
}
add_action( 'init', 'electro_service_register_projects_cpt' );

/**
 * Register ACF Fields for Projects
 */
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_projects',
	'title' => 'Информация о проекте',
	'fields' => array(
		array(
			'key' => 'field_project_name',
			'label' => 'Название проекта',
			'name' => 'project_name',
			'type' => 'text',
			'instructions' => 'Введите название проекта',
			'required' => 1,
			'wrapper' => array(
				'width' => '50',
			),
		),
		array(
			'key' => 'field_project_address',
			'label' => 'Адрес',
			'name' => 'project_address',
			'type' => 'text',
			'instructions' => 'Введите адрес объекта',
			'required' => 1,
			'wrapper' => array(
				'width' => '50',
			),
		),
		array(
			'key' => 'field_project_year',
			'label' => 'Год',
			'name' => 'project_year',
			'type' => 'number',
			'instructions' => 'Введите год выполнения проекта',
			'required' => 1,
			'min' => 2000,
			'max' => 2100,
			'wrapper' => array(
				'width' => '25',
			),
		),
		array(
			'key' => 'field_project_category',
			'label' => 'Категория',
			'name' => 'project_category',
			'type' => 'text',
			'instructions' => 'Введите категорию проекта',
			'required' => 0,
			'wrapper' => array(
				'width' => '50',
			),
		),
		array(
			'key' => 'field_project_work_type',
			'label' => 'Вид работ',
			'name' => 'project_work_type',
			'type' => 'text',
			'instructions' => 'Введите вид выполненных работ',
			'required' => 0,
			'wrapper' => array(
				'width' => '50',
			),
		),
		array(
			'key' => 'field_project_description',
			'label' => 'Описание проекта',
			'name' => 'project_description',
			'type' => 'textarea',
			'instructions' => 'Введите описание проекта',
			'required' => 1,
			'rows' => 4,
		),
		array(
			'key' => 'field_project_image_1',
			'label' => 'Изображение 1',
			'name' => 'project_image_1',
			'type' => 'image',
			'instructions' => 'Загрузите первое изображение проекта',
			'required' => 0,
			'return_format' => 'array',
			'preview_size' => 'medium',
			'library' => 'all',
			'wrapper' => array(
				'width' => '50',
			),
		),
		array(
			'key' => 'field_project_image_2',
			'label' => 'Изображение 2',
			'name' => 'project_image_2',
			'type' => 'image',
			'instructions' => 'Загрузите второе изображение проекта',
			'required' => 0,
			'return_format' => 'array',
			'preview_size' => 'medium',
			'library' => 'all',
			'wrapper' => array(
				'width' => '50',
			),
		),
		array(
			'key' => 'field_project_image_3',
			'label' => 'Изображение 3',
			'name' => 'project_image_3',
			'type' => 'image',
			'instructions' => 'Загрузите третье изображение проекта',
			'required' => 0,
			'return_format' => 'array',
			'preview_size' => 'medium',
			'library' => 'all',
			'wrapper' => array(
				'width' => '50',
			),
		),
		array(
			'key' => 'field_project_image_4',
			'label' => 'Изображение 4',
			'name' => 'project_image_4',
			'type' => 'image',
			'instructions' => 'Загрузите четвертое изображение проекта',
			'required' => 0,
			'return_format' => 'array',
			'preview_size' => 'medium',
			'library' => 'all',
			'wrapper' => array(
				'width' => '50',
			),
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'project',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
));

endif;

/**
 * Register Custom Post Type: Services
 */
function electro_service_register_services_cpt() {
	$labels = array(
		'name'                  => 'Услуги',
		'singular_name'         => 'Услуга',
		'menu_name'             => 'Услуги',
		'name_admin_bar'        => 'Услуга',
		'add_new'               => 'Добавить новую',
		'add_new_item'          => 'Добавить новую услугу',
		'new_item'              => 'Новая услуга',
		'edit_item'             => 'Редактировать услугу',
		'view_item'             => 'Просмотреть услугу',
		'all_items'             => 'Все услуги',
		'search_items'          => 'Искать услуги',
		'not_found'             => 'Услуги не найдены',
		'not_found_in_trash'    => 'В корзине услуг не найдено'
	);

	$args = array(
		'labels'                => $labels,
		'public'                => true,
		'publicly_queryable'    => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'services' ),
		'capability_type'       => 'post',
		'has_archive'           => true,
		'hierarchical'          => false,
		'menu_position'         => 6,
		'menu_icon'             => 'dashicons-admin-tools',
		'supports'              => array( 'title', 'thumbnail' ),
		'show_in_rest'          => true,
	);

	register_post_type( 'service', $args );
}
add_action( 'init', 'electro_service_register_services_cpt' );

/**
 * Register ACF Fields for Services
 */
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_services',
	'title' => 'Информация об услуге',
	'fields' => array(
		array(
			'key' => 'field_service_icon',
			'label' => 'Иконка услуги',
			'name' => 'service_icon',
			'type' => 'image',
			'instructions' => 'Загрузите иконку для услуги',
			'required' => 0,
			'return_format' => 'array',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'wrapper' => array(
				'width' => '50',
			),
		),
		array(
			'key' => 'field_service_name',
			'label' => 'Название услуги',
			'name' => 'service_name',
			'type' => 'text',
			'instructions' => 'Введите название услуги',
			'required' => 1,
			'wrapper' => array(
				'width' => '50',
			),
		),
		array(
			'key' => 'field_service_description',
			'label' => 'Описание услуги',
			'name' => 'service_description',
			'type' => 'textarea',
			'instructions' => 'Введите описание услуги',
			'required' => 1,
			'rows' => 4,
		),
		array(
			'key' => 'field_service_price',
			'label' => 'Стоимость',
			'name' => 'service_price',
			'type' => 'text',
			'instructions' => 'Введите стоимость услуги (например: "от 5000 руб.")',
			'required' => 0,
			'wrapper' => array(
				'width' => '50',
			),
		),
		array(
			'key' => 'field_service_timeline',
			'label' => 'Сроки',
			'name' => 'service_timeline',
			'type' => 'text',
			'instructions' => 'Введите сроки выполнения (например: "1-2 дня")',
			'required' => 0,
			'wrapper' => array(
				'width' => '50',
			),
		),
		array(
			'key' => 'field_service_included',
			'label' => 'Что входит в услугу',
			'name' => 'service_included',
			'type' => 'textarea',
			'instructions' => 'Введите список услуг (каждый пункт с новой строки)',
			'required' => 0,
			'rows' => 6,
		),
		array(
			'key' => 'field_service_faq',
			'label' => 'Часто задаваемые вопросы',
			'name' => 'service_faq',
			'type' => 'wysiwyg',
			'instructions' => 'Добавьте вопросы и ответы. Формат: <strong>Вопрос:</strong> текст вопроса<br><strong>Ответ:</strong> текст ответа',
			'required' => 0,
			'tabs' => 'all',
			'toolbar' => 'basic',
			'media_upload' => 0,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'service',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
));

endif;

// Register Reviews Custom Post Type
function electro_service_register_reviews_cpt() {
	$labels = array(
		'name'                  => 'Отзывы',
		'singular_name'         => 'Отзыв',
		'menu_name'             => 'Отзывы',
		'name_admin_bar'        => 'Отзыв',
		'add_new'               => 'Добавить новый',
		'add_new_item'          => 'Добавить новый отзыв',
		'new_item'              => 'Новый отзыв',
		'edit_item'             => 'Редактировать отзыв',
		'view_item'             => 'Просмотреть отзыв',
		'all_items'             => 'Все отзывы',
		'search_items'          => 'Искать отзывы',
		'not_found'             => 'Отзывы не найдены',
		'not_found_in_trash'    => 'В корзине отзывов не найдено'
	);

	$args = array(
		'labels'                => $labels,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'query_var'             => true,
		'rewrite'               => array( 'slug' => 'reviews' ),
		'capability_type'       => 'post',
		'has_archive'           => true,
		'hierarchical'          => false,
		'menu_position'         => 7,
		'menu_icon'             => 'dashicons-star-filled',
		'supports'              => array( 'title' ),
		'show_in_rest'          => true,
	);

	register_post_type( 'review', $args );
}
add_action( 'init', 'electro_service_register_reviews_cpt' );

// Register ACF Fields for Reviews
if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_reviews',
	'title' => 'Информация об отзыве',
	'fields' => array(
		array(
			'key' => 'field_review_photo',
			'label' => 'Фото клиента',
			'name' => 'review_photo',
			'type' => 'image',
			'instructions' => 'Загрузите фотографию клиента',
			'required' => 0,
			'return_format' => 'array',
			'preview_size' => 'thumbnail',
			'library' => 'all',
			'mime_types' => 'jpg,jpeg,png',
		),
		array(
			'key' => 'field_review_client',
			'label' => 'Клиент',
			'name' => 'review_client',
			'type' => 'text',
			'instructions' => 'Введите имя клиента',
			'required' => 1,
			'placeholder' => 'Иван Иванов',
		),
		array(
			'key' => 'field_review_text',
			'label' => 'Текст отзыва',
			'name' => 'review_text',
			'type' => 'textarea',
			'instructions' => 'Введите текст отзыва',
			'required' => 1,
			'rows' => 6,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'review',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
));

endif;

// Register Projects CPT
function electro_service_projects_init() {
	$labels = array(
		'name' => 'Projects',
		'singular_name' => 'Project',
		'menu_name' => 'Projects',
		'add_new' => 'Add New',
		'add_new_item' => 'Add New Project',
		'edit_item' => 'Edit Project',
		'new_item' => 'New Project',
		'view_item' => 'View Project',
		'all_items' => 'All Projects',
		'search_items' => 'Search Projects',
		'not_found' => 'No projects found',
	);
	
	$args = array(
		'labels' => $labels,
		'public' => true,
		'has_archive' => true,
		'menu_icon' => 'dashicons-portfolio',
		'menu_position' => 8,
		'supports' => array('title', 'thumbnail'),
		'rewrite' => array('slug' => 'projects'),
		'show_in_rest' => true,
	);
	
	register_post_type('project', $args);
}
add_action('init', 'electro_service_projects_init');

// ACF Fields for Projects
if(function_exists('acf_add_local_field_group')):

acf_add_local_field_group(array(
	'key' => 'group_project_fields',
	'title' => 'Project Information',
	'fields' => array(
		array(
			'key' => 'field_proj_image',
			'label' => 'Project Image',
			'name' => 'project_image',
			'type' => 'image',
			'required' => 1,
			'return_format' => 'array',
		),
		array(
			'key' => 'field_proj_location',
			'label' => 'Location',
			'name' => 'project_location',
			'type' => 'text',
			'required' => 1,
		),
		array(
			'key' => 'field_proj_year',
			'label' => 'Year',
			'name' => 'project_year',
			'type' => 'number',
			'required' => 1,
			'default_value' => 2025,
			'min' => 2000,
			'max' => 2100,
		),
		array(
			'key' => 'field_proj_description',
			'label' => 'Description',
			'name' => 'project_description',
			'type' => 'textarea',
			'required' => 0,
			'rows' => 8,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'project',
			),
		),
	),
));

endif;
