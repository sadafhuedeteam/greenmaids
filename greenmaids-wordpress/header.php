<!DOCTYPE html>
<html lang="en">

<head>
    <?php wp_head(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Maids : Home</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/library.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/responsive.css">
</head>

<body>

    <!-- navigation -->
    <div class="gm-header">
        <div class="top-haeder d-none d-lg-block">
            <div class="container">
                <div class="d-flex justify-content-between align-items-center">
                    <p class="gm-white fs-12 text-uppercase">Call out atlanta maid cleaning service <a
                            href="" class="gm-lightblue">678.653.0541</a></p>
                    <div class="d-flex align-items-center">
                        <p class="gm-white fs-12 text-uppercase">Already using Atlanta maid cleaning service?</p>
                        <a href="" class="sign-in-btn ms-4">Sign In</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="gm-main-header ">
            <div class="container d-flex justify-content-between align-items-center">
                <div class="logo-block">
                    <a href="">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/greenmaids-logo.svg" alt="greenmaids-logo"
                            class="img-fluid greenmaids-logo">
                    </a>
                </div>
                <nav class="navbar d-none d-lg-flex">
                    <ul class="nav">
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li class="nav-dropdown">
                            <div class="dropdown-center">
                                <button class="btn-tertiary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Services
                                </button>
                                <ul class="dropdown-menu">
                                  <li><a class="dropdown-item" href="service.html">Service</a></li>
                                  <li><a class="dropdown-item" href="airbnb.html">Airbnb</a></li>
                                  <li><a class="dropdown-item" href="green-cleaning.html">Green Cleaning</a></li>
                                  <li><a class="dropdown-item" href="move-in-move-out.html">Move In Move Out</a></li>
                                  <li><a class="dropdown-item" href="office-cleaning.html">Office Cleaning</a></li>
                                </ul>
                              </div>
                        </li>
                        <li>
                            <a href="deals-&-promotions.html">Deals</a>
                        </li>
                        <li>
                            <a href="">Gift card</a>
                        </li>
                        <li>
                            <a href="faq.html">FAQ</a>
                        </li>
                        <li>
                            <a href="job.html">Job</a>
                        </li>
                    </ul>
                    <button class="btn btn-sm btn-secondary">Book NOW</button>
                </nav>
                <button class="hamburger-btn d-flex d-lg-none" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Hamburger.svg" class="hamburger-icon">
                </button>

                <div class="offcanvas offcanvas-start greenmaids-offcanvas" tabindex="-1" id="offcanvasExample"
                    aria-labelledby="offcanvasExampleLabel">
                    <div class="offcanvas-header">
                        <a href="">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/greenmaids-logo.svg" alt="greenmaids-logo"
                                class="img-fluid greenmaids-logo">
                        </a>
                        <button type="button" class="header-close-btn" data-bs-dismiss="offcanvas" aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none">
                                <path
                                    d="M12 13.2L6.825 18.375C6.65833 18.5417 6.45833 18.625 6.225 18.625C5.99167 18.625 5.79167 18.5417 5.625 18.375C5.45833 18.2083 5.375 18.0083 5.375 17.775C5.375 17.5417 5.45833 17.3417 5.625 17.175L10.8 12L5.625 6.825C5.45833 6.65833 5.375 6.45833 5.375 6.225C5.375 5.99167 5.45833 5.79167 5.625 5.625C5.79167 5.45833 5.99167 5.375 6.225 5.375C6.45833 5.375 6.65833 5.45833 6.825 5.625L12 10.8L17.175 5.625C17.3417 5.45833 17.5417 5.375 17.775 5.375C18.0083 5.375 18.2083 5.45833 18.375 5.625C18.5417 5.79167 18.625 5.99167 18.625 6.225C18.625 6.45833 18.5417 6.65833 18.375 6.825L13.2 12L18.375 17.175C18.5417 17.3417 18.625 17.5417 18.625 17.775C18.625 18.0083 18.5417 18.2083 18.375 18.375C18.2083 18.5417 18.0083 18.625 17.775 18.625C17.5417 18.625 17.3417 18.5417 17.175 18.375L12 13.2Z"
                                    fill="white" />
                            </svg>
                        </button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="offcanvas-header-nav">
                            <li>
                                <a href="index.html">Home</a>
                            </li>
                            <li>
                                <a href="service.html">Services</a>
                            </li>
                            <li>
                                <a href="deals-&-promotions.html">Deals</a>
                            </li>
                            <li>
                                <a href="">Gift card</a>
                            </li>
                            <li>
                                <a href="faq.html">FAQ</a>
                            </li>
                            <li>
                                <a href="job.html">Job</a>
                            </li>
                        </ul>
                    </div>

                    <div class="offcanvas-footer">
                        <p class="gm-white fs-10">Call Out Atlanta Maid Cleaning Service <a
                            href="" class="gm-lightblue">678.653.0541</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- navigation -->