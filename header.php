<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta name="theme-color" content="#eaf2f7">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;500;700&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php
    if(is_home() && !is_front_page()){
        $id= 14;
    } else{
        $id = get_the_ID();
    };
    $bg = get_field('header_background', 'options');
    $dTitle = get_field( 'display_title', $id);
    $dImg = get_field( 'dib', $id);
    $bgCustom = get_field( 'background_img', $id);
    $bgColor = "";
    if($dImg == 1){
        $bg = $bg;
    } elseif($dImg == 2){
        $bg = $bgCustom;
    } elseif($dImg == 3){
        $bg = "";
        $bgColor = "bg-none";
    }

    ?>
    <header id="header" class="<?php echo $bgColor; ?>" itemscope itemtype="http://schema.org/WPHeader" style="background-image:url(<?php echo $bg; ?>);">
        <div class="js-navbar">
            <div class="container-fluid">
                <div class="row">
                    <div class="navbar ">
                        <?php get_template_part('templates-parts/header/header', 'brand'); ?>
                        <?php get_template_part('templates-parts/header/header', 'nav'); ?>
                        <?php get_template_part('templates-parts/header/header', 'contact'); ?>
                        <?php get_template_part('templates-parts/header/header', 'burger'); ?>
                    </div>
                </div>
            </div>
        </div>
        <?php if($dTitle   || is_singular('post')  || is_tag() || is_category() || is_tax()) { ?>
        <div>
            <div class="container-fluid">
                <div class="row">
                    <?php get_template_part( 'templates-parts/header/header', 'title' ); ?>
                    <div class="scroll-down">
                        <svg class="scroll-down__bg" xmlns="http://www.w3.org/2000/svg" width="209.998" height="60.997" viewBox="0 0 209.998 60.997">
                            <path id="Shape_698" data-name="Shape 698" d="M1934.612,614.4a60.463,60.463,0,0,0-104.262-4.865,15.692,15.692,0,0,0-1.432,2.283A60.571,60.571,0,0,1,1776,643h210A60.517,60.517,0,0,1,1934.612,614.4Z" transform="translate(-1775.999 -581.999)" fill="#fff" />
                        </svg>
                        <span class="scroll-down__ani"></span>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
        <span class="go__bg"></span>
        <span class="go__bg__two"></div>
    </header>

    <main id="main">
        <div class="container">
            <div class="row">
