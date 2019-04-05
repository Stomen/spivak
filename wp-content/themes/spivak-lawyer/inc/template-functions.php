<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package spivak-lawyer
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function spivak_lawyer_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'spivak_lawyer_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function spivak_lawyer_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'spivak_lawyer_pingback_header' );


## Отключает новый редактор блоков в WordPress (Гутенберг).
## ver: 1.0
if( 'disable_gutenberg' ){
    add_filter( 'use_block_editor_for_post_type', '__return_false', 100 );

    // Move the Privacy Policy help notice back under the title field.
    add_action( 'admin_init', function(){
        remove_action( 'admin_notices', [ 'WP_Privacy_Policy_Content', 'notice' ] );
        add_action( 'edit_form_after_title', [ 'WP_Privacy_Policy_Content', 'notice' ] );
    } );
}


/**
 * Enqueue scripts and styles.
 */
function spivak_lawyer_scripts() {
    wp_enqueue_style( 'spivak-lawyer-style', get_stylesheet_uri() );

    //wp_enqueue_script( 'spivak-lawyer-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

}
add_action( 'wp_enqueue_scripts', 'spivak_lawyer_scripts' );

function breadcrumbs() {

    /* === ОПЦИИ === */
    $text['home'] = 'Головна'; // текст ссылки "Главная"
    $text['category'] = '%s'; // текст для страницы рубрики
    $text['search'] = 'Результати пошуку за запитом "%s"'; // текст для страницы с результатами поиска
    $text['tag'] = 'Записи з тегом "%s"'; // текст для страницы тега
    $text['author'] = 'Статті автора %s'; // текст для страницы автора
    $text['404'] = 'Помилка 404'; // текст для страницы 404
    $text['page'] = 'Сорінка %s'; // текст 'Страница N'
    $text['cpage'] = 'Сторінка коментарів %s'; // текст 'Страница комментариев N'

    $wrap_before = '<ul  itemscope itemtype="http://schema.org/BreadcrumbList">'; // открывающий тег обертки
    $wrap_after = '</ul><!-- .breadcrumbs -->'; // закрывающий тег обертки
    $sep = ''; // разделитель между "крошками"
    $sep_before = '<li class="sep">'; // тег перед разделителем
    $sep_after = '</li>'; // тег после разделителя
    $show_home_link = 1; // 1 - показывать ссылку "Главная", 0 - не показывать
    $show_on_home = 0; // 1 - показывать "хлебные крошки" на главной странице, 0 - не показывать
    $show_current = 1; // 1 - показывать название текущей страницы, 0 - не показывать
    $before = '<li class="current">'; // тег перед текущей "крошкой"
    $after = '</li>'; // тег после текущей "крошки"
    /* === КОНЕЦ ОПЦИЙ === */

    global $post;
    $home_url = home_url('/');
    $link_before = '<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">';
    $link_after = '</li>';
    $link_attr = ' itemprop="item"';
    $link_in_before = '<span itemprop="name">';
    $link_in_after = '</span>';
    $link = $link_before . '<a href="%1$s"' . $link_attr . '>' . $link_in_before . '%2$s' . $link_in_after . '</a>' . $link_after;
    $frontpage_id = get_option('page_on_front');
    $parent_id = ($post) ? $post->post_parent : '';
    $sep = ' ' . $sep_before . $sep . $sep_after . ' ';
    $home_link = $link_before . '<a href="' . $home_url . '"' . $link_attr . ' class="home">' . $link_in_before . $text['home'] . $link_in_after . '</a>' . $link_after;

    if (is_home() || is_front_page()) {

        if ($show_on_home) echo $wrap_before . $home_link . $wrap_after;

    } else {

        echo $wrap_before;
        if ($show_home_link) echo $home_link;

        if ( is_category() ) {
            $cat = get_category(get_query_var('cat'), false);
            if ($cat->parent != 0) {
                $cats = get_category_parents($cat->parent, TRUE, $sep);
                $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
                $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
                if ($show_home_link) echo $sep;
                echo $cats;
            }
            if ( get_query_var('paged') ) {
                $cat = $cat->cat_ID;
                echo $sep . sprintf($link, get_category_link($cat), get_cat_name($cat)) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
            } else {
                if ($show_current) echo $sep . $before . sprintf($text['category'], single_cat_title('', false)) . $after;
            }

        } elseif ( is_search() ) {
            if (have_posts()) {
                if ($show_home_link && $show_current) echo $sep;
                if ($show_current) echo $before . sprintf($text['search'], get_search_query()) . $after;
            } else {
                if ($show_home_link) echo $sep;
                echo $before . sprintf($text['search'], get_search_query()) . $after;
            }

        } elseif ( is_day() ) {
            if ($show_home_link) echo $sep;
            echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y')) . $sep;
            echo sprintf($link, get_month_link(get_the_time('Y'), get_the_time('m')), get_the_time('F'));
            if ($show_current) echo $sep . $before . get_the_time('d') . $after;

        } elseif ( is_month() ) {
            if ($show_home_link) echo $sep;
            echo sprintf($link, get_year_link(get_the_time('Y')), get_the_time('Y'));
            if ($show_current) echo $sep . $before . get_the_time('F') . $after;

        } elseif ( is_year() ) {
            if ($show_home_link && $show_current) echo $sep;
            if ($show_current) echo $before . get_the_time('Y') . $after;

        } elseif ( is_single() && !is_attachment() ) {
            if ($show_home_link) echo $sep;
            if ( get_post_type() != 'post' ) {
                $post_type = get_post_type_object(get_post_type());
                $slug = $post_type->rewrite;
                printf($link, $home_url . $slug['slug'] . '/', $post_type->labels->singular_name);
                if ($show_current) echo $sep . $before . get_the_title() . $after;
            } else {
                $cat = get_the_category(); $cat = $cat[0];
                $cats = get_category_parents($cat, TRUE, $sep);
                if (!$show_current || get_query_var('cpage')) $cats = preg_replace("#^(.+)$sep$#", "$1", $cats);
                $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
                echo $cats;
                if ( get_query_var('cpage') ) {
                    echo $sep . sprintf($link, get_permalink(), get_the_title()) . $sep . $before . sprintf($text['cpage'], get_query_var('cpage')) . $after;
                } else {
                    if ($show_current) echo $before . get_the_title() . $after;
                }
            }

            // custom post type
        } elseif ( !is_single() && !is_page() && get_post_type() != 'post' && !is_404() ) {
            $post_type = get_post_type_object(get_post_type());
            if ( get_query_var('paged') ) {
                echo $sep . sprintf($link, get_post_type_archive_link($post_type->name), $post_type->label) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
            } else {
                if ($show_current) echo $sep . $before . $post_type->label . $after;
            }

        } elseif ( is_attachment() ) {
            if ($show_home_link) echo $sep;
            $parent = get_post($parent_id);
            $cat = get_the_category($parent->ID); $cat = $cat[0];
            if ($cat) {
                $cats = get_category_parents($cat, TRUE, $sep);
                $cats = preg_replace('#<a([^>]+)>([^<]+)<\/a>#', $link_before . '<a$1' . $link_attr .'>' . $link_in_before . '$2' . $link_in_after .'</a>' . $link_after, $cats);
                echo $cats;
            }
            printf($link, get_permalink($parent), $parent->post_title);
            if ($show_current) echo $sep . $before . get_the_title() . $after;

        } elseif ( is_page() && !$parent_id ) {
            if ($show_current) echo $sep . $before . get_the_title() . $after;

        } elseif ( is_page() && $parent_id ) {
            if ($show_home_link) echo $sep;
            if ($parent_id != $frontpage_id) {
                $breadcrumbs = array();
                while ($parent_id) {
                    $page = get_page($parent_id);
                    if ($parent_id != $frontpage_id) {
                        $breadcrumbs[] = sprintf($link, get_permalink($page->ID), get_the_title($page->ID));
                    }
                    $parent_id = $page->post_parent;
                }
                $breadcrumbs = array_reverse($breadcrumbs);
                for ($i = 0; $i < count($breadcrumbs); $i++) {
                    echo $breadcrumbs[$i];
                    if ($i != count($breadcrumbs)-1) echo $sep;
                }
            }
            if ($show_current) echo $sep . $before . get_the_title() . $after;

        } elseif ( is_tag() ) {
            if ( get_query_var('paged') ) {
                $tag_id = get_queried_object_id();
                $tag = get_tag($tag_id);
                echo $sep . sprintf($link, get_tag_link($tag_id), $tag->name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
            } else {
                if ($show_current) echo $sep . $before . sprintf($text['tag'], single_tag_title('', false)) . $after;
            }

        } elseif ( is_author() ) {
            global $author;
            $author = get_userdata($author);
            if ( get_query_var('paged') ) {
                if ($show_home_link) echo $sep;
                echo sprintf($link, get_author_posts_url($author->ID), $author->display_name) . $sep . $before . sprintf($text['page'], get_query_var('paged')) . $after;
            } else {
                if ($show_home_link && $show_current) echo $sep;
                if ($show_current) echo $before . sprintf($text['author'], $author->display_name) . $after;
            }

        } elseif ( is_404() ) {
            if ($show_home_link && $show_current) echo $sep;
            if ($show_current) echo $before . $text['404'] . $after;

        } elseif ( has_post_format() && !is_singular() ) {
            if ($show_home_link) echo $sep;
            echo get_post_format_string( get_post_format() );
        }

        echo $wrap_after;

    }
}


function create_questions_post_type() {
    register_post_type( 'faq',
        array(
            'labels' => array(
                'name' => __( 'Часто задаваемые вопросы' ),
                'singular_name' => __( 'Вопрос' ),
                'add_new'            =>  __( 'Добавить' ),
                'add_new_item'       =>  __( 'Добавление' ),
                'edit_item'          =>  __( 'Редактирование' ),
                'new_item'           =>  __( 'Новое' ),
                'view_item'          =>  __( 'Смотреть' ),
                'search_items'       =>  __( 'Искать' ),
                'not_found'          =>  __( 'Не найдено' ),
                'not_found_in_trash' =>  __( 'Не найдено в корзине' )
            ),
            'public' => true,
            'menu_icon' => 'dashicons-megaphone',
            'taxonomies' => array('questions-cat'),
            'menu_position' => 25,
            'rewrite' => false,
            'supports'           => array('title','editor','comments', 'custom-fields', 'author', 'thumbnail')
        )
    );
}
add_action( 'init', 'create_questions_post_type' );

add_action( 'init', 'create_questions_cat_taxonomy', 0 );

function create_questions_cat_taxonomy() {

// Labels part for the GUI

    $labels = array(
        'name' => __( 'Тема вопроса' ),
        'singular_name' => __( 'Тема вопроса'),
        'search_items' =>  __( 'Поиск по темам вопросов' ),
        'popular_items' => __( 'Популярные темы вопросов' ),
        'all_items' => __( 'Все темы' ),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Редактировать тему вопроса' ),
        'update_item' => __( 'Обновить тему вопроса' ),
        'add_new_item' => __( 'Добавить новую тему вопроса' ),
        'new_item_name' => __( 'Новая тема вопроса' ),
        'separate_items_with_commas' => __( 'Разделять темы запятыми' ),
        'add_or_remove_items' => __( 'Добавить или удалить тему вопроса' ),
        'choose_from_most_used' => __( 'Выберите из популярных тем вопросов' ),
        'menu_name' => __( 'Темы вопросов' ),
    );

// Now register the non-hierarchical taxonomy like tag

    register_taxonomy('questions-cat',['faq'],array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'update_count_callback' => '_update_post_term_count',
        'rewrite' => false
    ));
}


function create_services_post_type() {
    register_post_type( 'services',
        array(
            'labels' => array(
                'name' => __( 'Услуги' ),
                'singular_name' => __( 'Услуги' ),
                'add_new'            =>  __( 'Добавить' ),
                'add_new_item'       =>  __( 'Добавление' ),
                'edit_item'          =>  __( 'Редактирование' ),
                'new_item'           =>  __( 'Новое' ),
                'view_item'          =>  __( 'Смотреть' ),
                'search_items'       =>  __( 'Искать' ),
                'not_found'          =>  __( 'Не найдено' ),
                'not_found_in_trash' =>  __( 'Не найдено в корзине' )
            ),
            'public' => true,
            'menu_icon' => 'dashicons-clipboard',
            'taxonomies' => array('services-cat'),
            'menu_position' => 26,
            'rewrite' => false,
            'supports'           => array('title','editor', 'custom-fields', 'author', 'thumbnail')
        )
    );
}
add_action( 'init', 'create_services_post_type' );

//**add_action( 'init', 'create_services_cat_taxonomy', 0 );*/

/*function create_services_cat_taxonomy() {

// Labels part for the GUI

    $labels = array(
        'name' => __( 'Категоря услуг' ),
        'singular_name' => __( 'Категоря услуг'),
        'search_items' =>  __( 'Поиск по категориям услуг' ),
        'popular_items' => __( 'Популярные категориям услуг' ),
        'all_items' => __( 'Все категории услуг' ),
        'parent_item' => null,
        'parent_item_colon' => null,
        'edit_item' => __( 'Редактировать категория услуг' ),
        'update_item' => __( 'Обновить категорию услуг' ),
        'add_new_item' => __( 'Добавить новую категорию услуг' ),
        'new_item_name' => __( 'Новая категория услуг' ),
        'separate_items_with_commas' => __( 'Разделять категории услуг запятыми' ),
        'add_or_remove_items' => __( 'Добавить или удалить категорию услуг' ),
        'choose_from_most_used' => __( 'Выберите из популярных категорий услуг' ),
        'menu_name' => __( 'Категории услуг' ),
    );

// Now register the non-hierarchical taxonomy like tag

    register_taxonomy('services-cat',['services'],array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'update_count_callback' => '_update_post_term_count',
        'rewrite' => false
    ));
}
*/

add_filter( 'excerpt_length', function(){
    return 10;
} );
add_filter('excerpt_more', function($more) {
    return '...';
});

function remove_menus(){
    remove_menu_page( 'edit-comments.php' );          //Комментарии
}
add_action( 'admin_menu', 'remove_menus' );


function send_file_function(){
    $post_id_btn = $_POST['data_id'];
    $email_send_file = $_POST['data_email'];
    $message = "";
    $attachments = '';
    $headers[] = 'Content-type: text/html; charset=utf-8';

    $message = get_field('text_to_letter', $post_id_btn);
    $attachments = get_field('file_attach_block', $post_id_btn);

    $attachments =  $attachments['url'];

    $attachments_str = strpos($attachments, 'uploads');

    $attachments_str = substr($attachments, $attachments_str, strlen($attachments));

    $mail_attachment = array(WP_CONTENT_DIR . '/'.$attachments_str);

    wp_mail($email_send_file, 'Spivak', $message, $headers, $mail_attachment);

    die();
}

add_action('wp_ajax_send_file_action', 'send_file_function');
add_action('wp_ajax_nopriv_send_file_action', 'send_file_function');

function remove_more_link_scroll( $link ) {
    $link = preg_replace( '|#more-[0-9]+|', '', $link );
    return $link;
}
add_filter( 'the_content_more_link', 'remove_more_link_scroll' );
