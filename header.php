<?php defined("ABSPATH") || die("Ooooops! Please load this file in wp core"); ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="shortcut icon" type="image/x-icon" href="<?php echo SKYSR_TEMPLATE_DIR_URI; ?>/favicon.png" />
    <script src="//www.youtube.com/iframe_api"></script>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<!--Start Preloader-->
<div class="preloader" id="preloader"></div>
<!--End Preloader-->	
       

<!-- header top begin -->
<header class="header-section" id="header-section">
    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 d-flex justify-content-start reunir-content-center">
                    <div class="header-left">
                        <ul>
                            <li class="header-left-list">
                                <p class="header-left-text">
                                    <span class="header-left-icon">
                                        <i class="icofont-headphone-alt"></i>
                                    </span>Support
                                </p>
                            </li>
                            <li class="header-left-list">
                                <p class="header-left-text">
                                    <span class="header-left-icon">
                                        <i class="icofont-email"></i>
                                    </span>info@reunir.com
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 d-flex justify-content-end reunir-content-center">
                    <div class="header-right">
                        <ul>
                            <li class="header-right-list">
                                <div class="dropdown show header-dropdown">
                                    <span class="header-left-icon"><i class="icofont-web"></i></span>
                                    <select class="selectpicker" name="languages" tabindex="-98">
                                        <option value="">English</option>
                                        <option value="1">Bengali</option>
                                        <option value="2">Dutch</option>
                                    </select>
                                </div>
                            </li>
                            <li class="header-right-list">
                                <p class="header-right-text"><span class="header-right-icon carticon"><i class="icofont-shopping-cart"></i></span>My cart (0)</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- nav top begin -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-light reunir-navbar">
        <div class="container">

            <div class="logo-section">
                <a class="logo-title navbar-brand" href="#"><img src="<?php echo SKYR_ASSETS_DIR_URI; ?>/img/logo.png" alt="logo">REUNIR</a>
            </div>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="icofont-navigation-menu"></i>
            </button>
            <div class="collapse navbar-collapse nav-main justify-content-end" id="navbarNav">
                <ul class="navbar-nav" id="primary-menu">
                    <li class="nav-item active">
                        <a class="nav-link active" href="#header-section">HOME
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about-section">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#affiliate-section">AFFILIATES</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#investment-section">PLANS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">BLOG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact-us-section">CONTACT</a>
                    </li>
                </ul>
            </div>
            <div class="right-side-box">
                <a class="join-btn" href="#">JOIN US</a>
            </div>
        </div>
    </nav>
    <!-- nav top end -->
</header>
<!-- header top end -->