<?php
/**
 * 根据页面的 slug 或 ID 引入相应的模板文件和 CSS 文件
 */

// 获取当前页面的 slug 和 ID
$current_page_slug = get_post_field('post_name', get_post());
$current_page_id = get_the_ID();




// echo 'content-page.php';die;
// echo $current_page_slug;die;

/**
 * 引入模板文件并处理文件不存在的情况
 *
 * @param string $template_path 模板文件相对于主题目录的路径
 */
function include_template($template_path) {
    $full_path = get_template_directory() . '/' . $template_path;
    if (file_exists($full_path)) {
        include $full_path;
    } else {
        // 记录错误日志
        error_log("Template file $full_path not found.");
        // 可以根据需要向用户显示更友好的错误信息
        echo '<p>An error occurred while loading the page template. Please try again later.</p>';
    }
}

/**
 * 引入 CSS 文件并处理文件不存在的情况
 *
 * @param string $css_path CSS 文件相对于主题目录的路径
 */
function enqueue_css($css_path) {
    $full_path = get_template_directory() . '/' . $css_path;
    if (file_exists($full_path)) {
        wp_enqueue_style(
            sanitize_title_with_dashes($css_path),
            get_template_directory_uri() . '/' . $css_path,
            array(),
            filemtime($full_path)
        );
    } else {
        // 记录错误日志
        error_log("CSS file $full_path not found.");
    }
}

// 定义特殊页面的映射关系，同时关联模板文件和 CSS 文件
$special_pages = [
    'slug' => [
        'home' => [
            'template' => 'template-parts/home.php',
            'css' => 'css/home.css'
        ],
        'checkout' => [
            'template' => 'template-parts/checkout.php',
            'css' => 'css/checkout.css'
        ],
        'privacy' => [
            'template' => 'template-parts/privacy.php',
            'css' => 'css/privacy.css'
        ]
    ],
    'id' => [
        123 => [
            'template' => 'template-parts/special-page-id-123.php',
            'css' => 'css/special-page-id-123.css'
        ],
        456 => [
            'template' => 'template-parts/special-page-id-456.php',
            'css' => 'css/special-page-id-456.css'
        ]
    ]
];


// echo '<pre>';
// // print_r($special_pages);
// print_r($special_pages['slug']);
// print_r($current_page_slug);die;
// die;
// 首先根据 slug 进行匹配
if (isset($special_pages['slug'][$current_page_slug])) {
    $page_info = $special_pages['slug'][$current_page_slug];
    // echo '2';die;
    // enqueue_css($page_info['css']);
    include_template($page_info['template']);
} elseif (isset($special_pages['id'][$current_page_id])) {
    // 如果 slug 不匹配，再根据 ID 进行匹配
    // echo '23';die;
    $page_info = $special_pages['id'][$current_page_id];
    // enqueue_css($page_info['css']);
    include_template($page_info['template']);
} else if ($current_page_slug === 'privacy' || $current_page_slug === 'private') {
    include_template('template-parts/privacy.php');
} else {
    // 若 slug 和 ID 都不匹配，正常引入头部
    // get_header('builders');
    // 引入默认的 CSS 文件
    // echo $current_page_slug . 'dddddddddddddddddd';die;
    enqueue_css('css/default.css');
    ?>
    <div id="site-content" class="page-builders" role="main">
        <div class="page-builders-content-area">
            <!-- 开始内容循环 -->
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <div <?php post_class(); ?>>
                    <?php the_content(); ?>
                </div>
            <?php endwhile; ?>
            <?php else : ?>
                <?php get_template_part('content', 'none'); ?>
            <?php endif; ?>
            <!-- 结束内容循环 -->
        </div>
    </div>
    <?php
    // 正常引入底部
    get_footer();
}


