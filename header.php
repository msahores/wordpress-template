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
        
<div class="container">
    <div class="row">
     <div class="col-xs-12 col-sm-12">
     <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Awesome</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php wp_nav_menu(array(
                'theme_location' => 'primary',
                'container' => false,
                'menu_class' => 'navbar-nav mr-auto'
            ) ); ?>
            
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        </nav>
     </div>
    </div>
    <!-- <img src=<?php //header_image(); ?> 
         alt="" 
         height=<?php //echo get_custom_header() -> height ?> 
         width=<?php //echo get_custom_header() -> width ?> /> -->