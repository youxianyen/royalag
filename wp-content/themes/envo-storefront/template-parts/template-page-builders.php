<?php
/**
 *
 * Template name: Page Builders
 * 
 */

// 获取当前页面 slug
$current_page_slug = get_post_field('post_name', get_post());
// 获取当前页面 ID
$current_page_id = get_the_ID();

// 定义引入 CSS 的函数
function enqueue_page_specific_css($css_file) {
    wp_enqueue_style(
        'page-specific-css',
        get_template_directory_uri(). '/css/'. $css_file,
        array(),
        filemtime(get_template_directory(). '/css/'. $css_file)
    );
}

// 使用 switch 语句根据 slug 判断
switch ($current_page_slug) {
    case 'home':
        // 引入 home 页面的 CSS 文件
        enqueue_page_specific_css('home.css');
        // 引入 home 页面的模板文件
        include get_template_directory() . '/template-parts/home.php';
        break;
    case 'checkout':
        // 引入 checkout 页面的 CSS 文件
        enqueue_page_specific_css('checkout.css');
        // 引入 checkout 页面的模板文件
        include get_template_directory() . '/template-parts/checkout.php';
        break;
    default:
        // 如果 slug 不匹配，再根据 ID 判断
        switch ($current_page_id) {
            case 123: // 假设页面 ID 为 123 的是某个特殊页面
                // 引入特殊页面 ID 为 123 的 CSS 文件
                enqueue_page_specific_css('special-page-id-123.css');
                include get_template_directory() . '/template-parts/special-page-id-123.php';
                break;
            case 456: // 假设页面 ID 为 456 的是另一个特殊页面
                // 引入特殊页面 ID 为 456 的 CSS 文件
                enqueue_page_specific_css('special-page-id-456.css');
                include get_template_directory() . '/template-parts/special-page-id-456.php';
                break;
            default:
                // 若 slug 和 ID 都不匹配，正常引入头部
                // 引入默认的 CSS 文件
                enqueue_page_specific_css('default.css');
                get_header('builders');
                ?>
                <div id="site-content" class="page-builders" role="main">
                    <div class="page-builders-content-area">
                        <!-- start content container -->
                        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                                <div <?php post_class(); ?>>
                                    <?php the_content(); ?>
                                </div>
                            <?php endwhile; ?>
                        <?php else : ?>
                            <?php get_template_part('content', 'none'); ?>
                        <?php endif; ?>
                        <!-- end content container -->
                    </div>
                </div>
                <?php
                // 正常引入底部
                get_footer();
        }
}







