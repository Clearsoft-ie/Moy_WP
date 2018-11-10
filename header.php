<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Clearsoft
 * @subpackage Moy
 * @since 1.0
 * @version 1.0
 */

?>

<!DOCTYPE html>
<html dir="ltr" lang="zxx">

<head>
    <meta charset="utf-8">
    <title>Moy Materials | Waterproofing &amp; Insulation Specialists</title>
    <meta name="description" content="Moy Materials is one of the UK and Ireland's leading suppliers of high performance innovative waterproofing and insulation systems. Providing systems and soloutions to deal with almost every waterproofing condition, Moy is the complete system provider for your next project. ">
    <meta name="author" content="author">

    <!-- Mobile Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ;?>/assets/images/favicon.ico">

    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=PT+Serif" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo get_template_directory_uri() ;?>/assets/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Font Awesome CSS -->
    <link href="<?php echo get_template_directory_uri() ;?>/assets/fonts/font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Plugins -->
    <link href="<?php echo get_template_directory_uri() ;?>/assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ;?>/assets/plugins/rs-plugin-5/css/settings.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ;?>/assets/plugins/rs-plugin-5/css/layers.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ;?>/assets/plugins/rs-plugin-5/css/navigation.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ;?>/assets/css/animations.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri() ;?>/assets/plugins/slick/slick.css" rel="stylesheet">

    <!-- The Project's core CSS file -->
    <!-- Use css/rtl_style.css for RTL version -->
    <link href="<?php echo get_template_directory_uri() ;?>/assets/css/style.css" rel="stylesheet" >
    <!-- The Project's Typography CSS file, includes used fonts -->
    <!-- Used font for body: Roboto -->
    <!-- Used font for headings: Raleway -->
    <!-- Use css/rtl_typography-default.css for RTL version -->
    <link href="<?php echo get_template_directory_uri() ;?>/assets/css/typography-default.css" rel="stylesheet" >
    <!-- Color Scheme (In order to change the color scheme, replace the blue.css with the color scheme that you prefer) -->
    <link href="<?php echo get_template_directory_uri() ;?>/assets/css/skins/MoyBlue.css" rel="stylesheet">


    <!-- Custom css -->
    <link href="<?php echo get_template_directory_uri() ;?>/assets/css/custom.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<!-- body classes:  -->
<!-- "boxed": boxed layout mode e.g. <body class="boxed"> -->
<!-- "pattern-1 ... pattern-9": background patterns for boxed layout mode e.g. <body class="boxed pattern-1"> -->
<!-- "transparent-header": makes the header transparent and pulls the banner to top -->
<!-- "gradient-background-header": applies gradient background to header -->
<!-- "page-loader-1 ... page-loader-6": add a page loader to the page (more info @components-page-loaders.html) -->
<body>

<!-- scrollToTop -->
<!-- ================ -->
<div class="scrollToTop circle"><i class="fa fa-angle-up"></i></div>

<!-- page wrapper start -->
<!-- ================ -->
<div class="page-wrapper">
    <!-- header-container start -->
    <div class="header-container">

        <div class="header-top" style="background-color:rgba(195,213,1,0.6);">
            <div class="container">
                <div class="row">
                    <div class="col-2 col-md-5">
                    </div>
                    <div class="col-10 col-md-7">

                        <!-- header-top-second start -->
                        <!-- ================ -->
                        <div id="header-top-second"  class="clearfix text-right">
                            <ul class="list-inline">
                                <?php
                                if ( has_nav_menu( 'header-menu' ) ) {
                                    wp_nav_menu( array(
                                        'container' 		=> '',
                                        'items_wrap' 		=> '%3$s',
                                        'theme_location' 	=> 'header-menu',
                                    ) );
                                } else {
                                    wp_list_pages( array(
                                        'container' => '',
                                        'title_li' 	=> '',
                                    ) );
                                }
                                ?>
                            </ul>
                        </div>
                        <!-- header-top-second end -->

                    </div>
                </div>
            </div>
        </div>
        <!-- header-top end -->

        <!-- ================ -->
        <header class="header fixed fixed-desktop clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-auto hidden-md-down pl-3">
                        <!-- header-first start -->
                        <!-- ================ -->
                        <div class="header-first clearfix">

                            <!-- logo -->
                            <div id="logo" class="logo">
                                <a href="<?php echo home_url('/'); ?>"><img id="logo_img" src="<?php echo get_template_directory_uri() ;?>/assets/images/Logo.png" alt="Moy Materials"></a>
                            </div>

                            <!-- name-and-slogan -->
                            <div class="site-slogan">
                                Moy Materials
                            </div>

                        </div>
                        <!-- header-first end -->

                    </div>
                    <div class="col-lg-8 ml-lg-auto">

                        <!-- header-second start -->
                        <!-- ================ -->
                        <div class="header-second clearfix">

                            <!-- main-navigation start -->
                            <!-- classes: -->
                            <!-- "onclick": Makes the dropdowns open on click, this the default bootstrap behavior e.g. class="main-navigation onclick" -->
                            <!-- "animated": Enables animations on dropdowns opening e.g. class="main-navigation animated" -->
                            <!-- ================ -->
                            <div class="main-navigation main-navigation--mega-menu  animated">
                                <nav class="navbar navbar-expand-lg navbar-light p-0">
                                    <div class="navbar-brand clearfix hidden-lg-up">

                                        <!-- logo -->
                                        <div id="logo-mobile" class="logo">
                                            <a href="<?php echo home_url('/'); ?>"><img id="logo-img-mobile" src="<?php echo get_template_directory_uri() ;?>/assets/images/Logo.png" alt="Moy Materials"></a>
                                        </div>

                                        <!-- name-and-slogan -->
                                        <div class="site-slogan">
                                            Moy Materials
                                        </div>

                                    </div>



                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-1" aria-controls="navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                    </button>

                                    <div class="collapse navbar-collapse" id="navbar-collapse-1">
                                        <!-- main-menu -->
                                        <ul class="navbar-nav ml-xl-auto">
                                            <?php
                                            if ( has_nav_menu( 'primary-menu' ) ) {
                                                wp_nav_menu( array(
                                                    'container' 		=> '',
                                                    'items_wrap' 		=> '%3$s',
                                                    'theme_location' 	=> 'primary-menu',
                                                    'walker'  => new Child_Wrap(),
                                                ) );
                                            } else {
                                                wp_list_pages( array(
                                                    'container' => '',
                                                    'title_li' 	=> '',
                                                ) );
                                            }
                                            ?>
                                        </ul>
                                        <!-- main-menu end -->
                                    </div>
                                </nav>
                            </div>
                            <!-- main-navigation end -->
                        </div>
                        <!-- header-second end -->

                    </div>
                    <div class="col-auto hidden-md-down pl-0 pl-md-1">
                        <!-- header dropdown buttons -->
                        <div class="header-dropdown-buttons">
                            <!--<a href="#" style="margin-right: 10px" class="btn btn-sm btn-default">Contact Us <i class="fa fa-envelope-o pl-1"></i></a>-->
                            <div class="btn-group">
                                <button type="button" class="btn dropdown-toggle dropdown-toggle--no-caret" id="header-drop-1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-search"></i></button>
                                <ul class="dropdown-menu dropdown-menu-right dropdown-animation" aria-labelledby="header-drop-1">
                                    <li>
                                        <form role="search" method="get" id="searchform" class="search-box margin-clear" action="<?php echo home_url('/'); ?>">
                                            <div class="form-group has-feedback">
                                                <input type="text" name="s" placeholder="Search" class="form-control" />
                                                <i class="fa fa-search form-control-feedback"></i>
                                            </div>
                                            <!-- <button type="submit" class="search-submit"><span class="screen-reader-text">Search</span></button> -->
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- header dropdown buttons end -->
                    </div>
                </div>
            </div>
        </header>
        <!-- header end -->
    </div>

    <?php if ( is_front_page()) : ?>
    <?php else: ?>
        <div class=container>
    <?php endif; ?>