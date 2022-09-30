<?php
/**
 * @ Khai báo hang gia tri
 * @ THEME_URL = lấy đường dẫn thư mục themes: VD: wp-content/themes/vantu/
 * @ CORE = lấy đường dẫn của thư mục /core: VD: wp-content/themes/vantu/core
 **/

//  define('THEME_URL', get_stylesheet_directory());
//  define('CORE', THEME_URL ."/core");

 /**
  * @ Nhúng file /core/init.php
  */
//   require_once(CORE . "/init.php");

  /**
   * @ Thiết lập chiều rộng nội dung
   */
  if(!isset($content_width)){
    $content_width = 620;
  }

  /**
   * @ Khai báo chức năng của themes
   */
  if(!function_exists('vantu_theme_setup')){
    function vantu_theme_setup(){
        /* Thiết lập text domain */
        load_theme_textdomain('vantu', get_template_directory() .'/languages');

        /* Tự động thêm link RSS lên <head>*/
        add_theme_support('automatic-feed-links');

        /* Thêm Post Thumbnail (hình đại diện cho post) */
        add_theme_support('post-thumbnails');

        /* Post Format */
        // add_theme_support('post-formats', array(
        //     'image',
        //     'video',
        // ));
        /* Theme title-tag */
        add_theme_support('title-tag');

        /* Them custom background */
        // add_theme_support('custom-background');

        /* Thêm Menu */
        register_nav_menus(
            array(
                'menu-1' => esc_html__('Menu Chính', 'vantu'),
                'menu-2' => esc_html__('Menu 2', 'vantu'),
                'menu-3' => esc_html__('Menu 3', 'vantu'),
            )
        );

        /**
         * Tạo sidebar
         */
        $sidebar = array(
            'name' => __('Main Sidebar', 'vantu'),
            'id' => 'main-sidebar',
            'description' => __('Đây là Sidebar chính'),
            'class' => 'main-sidebar',
            'before_title' => '<h3 class="widget-title>',
            'after_title' => '</h3>',
        );
        register_sidebar($sidebar);
    }
    add_action('init', 'vantu_theme_setup');
  }

  /**
   * Thiết lập menu
   */
  if(!function_exists('vantu_menu')){
    function vantu_menu($menu){
      $menu = array(
        'theme_location' => $menu,
        'container' => 'nav',
        'container_class' => $menu,
      );
      wp_nav_menu( $menu );
    }
  }

  /** hàm tạo phân trang */
  if(!function_exists('vantu_panigation')){
    function vantu_panigation(){
      if($GLOBALS['wp_query']->max_num_pages <2){
        return '';
      } ?>
      <nav class="pagination" role="navigation">
        <?php if(get_next_posts_link()) : ?>
          <div class="prev"><?php next_post_link(__('Older Posts', 'vantu')); ?></div>
        <?php endif; ?>
        <?php if(get_previous_post_link()) : ?>
          <div class="next"><?php previous_posts_link(__('Newest Posts', 'vantu')); ?></div>
        <?php endif; ?>  
      </nav>
    <?php }
  }