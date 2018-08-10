<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Philosophy</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">



    <!-- favicons
    ================================================== -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">


    <?php wp_head();?>
</head>

<body id="top" <?php body_class();?>>

<!-- pageheader
================================================== -->
<section class="s-pageheader
<?php if(is_home()){

    echo _e("s-pageheader--home");
}; ?>
">

    <header class="header">
        <div class="header__content row">

            <div class="header__logo">
                <?php  if(has_custom_logo()){
                                    the_custom_logo();
                                }else{
                                    echo "<h1><a href='".home_url("/")."'>".get_bloginfo('name')."</a></h1>";
                                } ?>

            </div> <!-- end header__logo -->


            <?php
            if(is_active_sidebar("header-section")){
                dynamic_sidebar("header-section");
            }
            ?>

            <a class="header__search-trigger" href="#0"></a>

            <div class="header__search">

                <?php get_search_form(); ?>

                <a href="#0" title="Close Search" class="header__overlay-close"> <?php echo _e("Closeexample.php", "philosophy")?></a>

            </div>  <!-- end header__search -->


            <a class="header__toggle-menu" href="#0" title="Menu"><span><?php echo _e("Menu", "philosophy")?></span></a>

            <nav class="header__nav-wrap">

                <h2 class="header__nav-heading h6">Site Navigation</h2>

                <?php get_template_part("template-parts/common/navigation"); ?>

                <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu"><?php echo _e("Close", "philosophy")?><</a>

            </nav> <!-- end header__nav-wrap -->

        </div> <!-- header-content -->
    </header> <!-- header -->



        <?php
        if(is_home()){

            get_template_part("template-parts/home-blog/feature");
        }


        ?>





</section>