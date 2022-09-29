<?php 
/*
    Template Name: Trang chủ
*/
get_header();
echo 'đây là trang chủ';
echo get_stylesheet_directory();
echo get_template_directory();

echo get_template_directory() .'/languages';

get_footer();