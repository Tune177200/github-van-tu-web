<?php get_header(); ?>
<div class="content">
    <?php 
        if(have_posts()) : 
            if (is_home() && !is_front_page()) : ?>
                <header>
                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                </header>
            <?php 
            endif;
            
            while(have_posts()) : the_post(); 
                get_template_part('template-parts/content', get_post_format());
            endwhile; 
                vantu_panigation(); 
             else: 
                get_teamplate_part('template-parts/content', 'none'); 
            endif;
    ?>
    </div>
<?php get_footer(); ?>