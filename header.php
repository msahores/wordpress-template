<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Awesome Template</title>
    <?php wp_head(); ?>
</head>
    <?php 
    if(is_front_page() ): //is_home() is used for blog page
        $awesome_classes = array('awesome_class', 'my_class');
    else:
        $awesome_classes = array('not_awesome_class');
    endif;
    ?>
<body <?php body_class($awesome_classes ); ?>>
    <?php wp_nav_menu(array('theme_location' => 'primary') ); ?>
    <?php //var_dump(get_custom_header()) ?>
    
    <img src=<?php header_image(); ?> 
         alt="" 
         height=<?php echo get_custom_header() -> height ?> 
         width=<?php echo get_custom_header() -> width ?> >