<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Solders - Home</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/logo.jpg" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page" data-bs-spy="scroll" data-bs-target="#navmenu">

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container-fluid d-flex align-items-center justify-content-between">

            <a href="index.html" class="logo d-flex align-items-center me-auto me-xl-0">
                <!-- Uncomment the line below if you also wish to use an image logo -->
                <!-- <img src="assets/img/logo.png" alt=""> -->
                <h1>Solders</h1>
                <span>.</span>
            </a>

            <!-- Nav Menu -->
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="index.html#hero" class="active">Home</a></li>
                    <li><a href="index.html#about">About</a></li>
                    <li><a href="index.html#services">Services</a></li>
                    <li><a href="#portfolio">Components</a></li>
                    <li><a href="index.html#team">Team</a></li>
                    <li><a href="index.html#contact">Contact</a></li>
                </ul>

                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav><!-- End Nav Menu -->
            <?php
            if (!isset($_SESSION["u"])) {
            ?>
                <a class="btn-getstarted" href="Login_signup/login.php">Login/Signup</a>
            <?php
            } else {
            ?>
                <a class="btn-getstarted bg-white text-dark" id="wn" href="dashboard/html/dashboard.php">Welcome, <?php echo $_SESSION["u"]["fnam"] ?></a>
            <?php
            }
            ?>


        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- Hero Section - Home Page -->
        <section id="hero" class="hero">

            <img src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in">

            <div class="container">
                <div class="row">
                    <div class="col-lg-10">
                        <h2 data-aos="fade-up" data-aos-delay="100">Welcome to Solders</h2>
                        <p data-aos="fade-up" data-aos-delay="200">We are team of talented engineers providing solutions for your problems.</p>
                    </div>
                    <div class="col-lg-5">
                        <form action="#" class="sign-up-form d-flex" data-aos="fade-up" data-aos-delay="300">
                            <input type="text" class="form-control" placeholder="Enter email address">
                            <input type="submit" class="btn btn-primary" value="Sign up">
                        </form>
                    </div>
                </div>
            </div>

        </section><!-- End Hero Section -->

        <!-- Clients Section - Home Page -->
        <section id="clients" class="clients">

            <div class="container-fluid" data-aos="fade-up">

                <div class="row gy-4">

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="assets/img/clients/client-1.png" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="assets/img/clients/client-2.png" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="assets/img/clients/client-3.png" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="assets/img/clients/client-4.png" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="assets/img/clients/client-5.png" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                    <div class="col-xl-2 col-md-3 col-6 client-logo">
                        <img src="assets/img/clients/client-6.png" class="img-fluid" alt="">
                    </div><!-- End Client Item -->

                </div>

            </div>

        </section><!-- End Clients Section -->

        <!-- About Section - Home Page -->
        <section id="about" class="about">

            <div class="container" data-aos="fade-up" data-aos-delay="100">
                <div class="row align-items-xl-center gy-5">

                    <div class="col-xl-5 content">
                        <h3>About </h3>
                        <h2>Welcome to the Solders webpage!</h2>
                        <p> We are a team of skilled engineers dedicated to developing innovative solutions for detecting and diverting muddy water in pipelines. With expertise in various engineering disciplines, we strive to ensure a reliable and clean water supply for households, businesses, and industries. Our commitment to quality, innovation, and collaboration sets us apart in the field. Explore our products and learn how our team can make a positive impact on water supply and quality.</p>
                        <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
                    </div>

                    <div class="col-xl-7">
                        <div class="row gy-4 icon-boxes">

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                                <div class="icon-box">
                                    <i class="bi bi-buildings"></i>
                                    <h3>Expertise in Sensor Technologies</h3>
                                    <p>The Solder Engineers leverage their deep understanding of sensor technologies to develop precise solutions for detecting turbidity in water pipelines.</p>
                                </div>
                            </div> <!-- End Icon Box -->

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                                <div class="icon-box">
                                    <i class="bi bi-clipboard-pulse"></i>
                                    <h3>Advanced Control Systems</h3>
                                    <p>Our team excels in designing and implementing advanced control systems that efficiently divert contaminated water, ensuring the integrity of the water supply.</p>
                                </div>
                            </div> <!-- End Icon Box -->

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
                                <div class="icon-box">
                                    <i class="bi bi-command"></i>
                                    <h3>Innovative Product Development</h3>
                                    <p> The Solder Engineers are dedicated to innovation, continuously exploring new technologies and techniques to enhance the performance and functionality of our products.</p>
                                </div>
                            </div> <!-- End Icon Box -->

                            <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
                                <div class="icon-box">
                                    <i class="bi bi-graph-up-arrow"></i>
                                    <h3>Customer Collaboration and Satisfaction</h3>
                                    <p>We prioritize collaboration with our customers, actively engaging with them to understand their unique requirements and ensure their satisfaction with our tailored solutions.</p>
                                </div>
                            </div> <!-- End Icon Box -->

                        </div>
                    </div>

                </div>
            </div>

        </section><!-- End About Section -->

        <!-- Stats Section - Home Page -->
        <section id="stats" class="stats">

            <img src="assets/img/stats-bg.jpg" alt="" data-aos="fade-in">

            <div class="container position-relative" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="1" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Products</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Projects</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="500" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Hours Of Support</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-3 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="4" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Workers</p>
                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>

        </section><!-- End Stats Section -->

        <!-- Services Section - Home Page -->
        <section id="services" class="services">

            <!--  Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Services</h2>
                <p>services aim to support customers throughout their journey, from the initial purchase to ongoing support and assistance, ensuring their satisfaction and success with the products or services provided by the company.</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="100">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><i class="bi bi-briefcase"></i></div>
                            <div>
                                <h4 class="title"><a class="stretched-link">Product Sales</a></h4>
                                <p class="description">The company offers a range of products for customers to purchase, meeting their specific needs and requirements.</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Service Item -->

                    <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="200">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><i class="bi bi-card-checklist"></i></div>
                            <div>
                                <h4 class="title"><a class="stretched-link">Installation and Setup</a></h4>
                                <p class="description">The company provides installation and setup services to ensure that customers can properly use and benefit from the products they purchase.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="300">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><i class="bi bi-bar-chart"></i></div>
                            <div>
                                <h4 class="title"><a class="stretched-link">Consulting and Advisory</a></h4>
                                <p class="description">The company provides consulting and advisory services, offering expert advice and guidance to customers in specific areas or industries to help them make informed decisions and achieve their goals.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="400">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><i class="bi bi-binoculars"></i></div>
                            <div>
                                <h4 class="title"><a class="stretched-link">Technical Support</a></h4>
                                <p class="description">The company offers technical support services to assist customers with any issues or questions they may have regarding the products or services they have purchased.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="500">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><i class="bi bi-brightness-high"></i></div>
                            <div>
                                <h4 class="title"><a class="stretched-link">Training and Education</a></h4>
                                <p class="description">The company offers training and education services to help customers better understand and utilize the products or services they have purchased, ensuring they can maximize their benefits.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                    <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="600">
                        <div class="service-item d-flex">
                            <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week"></i></div>
                            <div>
                                <h4 class="title"><a class="stretched-link">Maintenance and Repairs</a></h4>
                                <p class="description">The company provides maintenance and repair services to ensure the longevity and optimal performance of the products or equipment that customers have purchased.</p>
                            </div>
                        </div>
                    </div><!-- End Service Item -->

                </div>

            </div>

        </section><!-- End Services Section -->

        <!-- Features Section - Home Page -->
        <section id="features" class="features">

            <!--  Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Features</h2>
                <p>These features collectively provide a comprehensive solution for detecting and managing muddy water in pipelines, ensuring a safe and clean water supply for households, businesses, and industries.</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4 align-items-center features-item">
                    <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                        <h3>Contaminated water/Mud Detection</h3>
                        <p>
                            The product utilizes advanced sensor technologies, such as the TS-300B Turbidity Sensor,
                            to accurately detect and identify the presence of mud in water pipelines. This ensures reliable and precise detection of muddy water.
                        </p>
                        <a href="#" class="btn btn-get-started">Learn more →</a>
                    </div>
                    <div class="col-lg-7 order-1 order-lg-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                        <div class="image-stack">
                            <img src="assets/img/mud from tap.jpg" alt="" class="stack-front">
                            <img src="assets/img/Turbidity-Sensor.jpg" alt="" class="stack-back">
                        </div>
                    </div>
                </div><!-- Features Item -->

                <div class="row gy-4 align-items-stretch justify-content-between features-item ">
                    <div class="col-lg-6 d-flex align-items-center features-img-bg" data-aos="zoom-out">
                        <img src="assets/img/diversion.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                        <h3>Automatic Diversion</h3>
                        <p>The product is equipped with a T junction and two solenoids, allowing for automatic diversion of contaminated water.
                            When mud is detected, the solenoids control the flow, redirecting the muddy water away from the main supply and preventing it from reaching end-users.</p>

                        <a href="#" class="btn btn-get-started align-self-start">Learn more →</a>
                    </div>
                </div><!-- Features Item -->
                <div class="row gy-4 align-items-center features-item">

                    <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                        <h3>Continuous Monitoring</h3>
                        <p>
                            The product provides continuous monitoring of water quality, constantly evaluating the turbidity levels in the pipeline. This enables real-time surveillance and immediate action in response to any changes or potential issues.
                        </p>
                        <a href="#" class="btn btn-get-started">Learn more →</a>
                    </div>
                    <div class="col-lg-7 order-1 order-lg-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                        <div class="image-stack">
                            <img src="assets/img/monitoring.jpeg" alt="" class="stack-front">
                            <img src="assets/img/monitoring1.webp" alt="" class="stack-back">
                        </div>
                    </div>

                </div><!-- Features Item -->

                <div class="row gy-4 align-items-stretch justify-content-between features-item ">
                    <div class="col-lg-6 d-flex align-items-center features-img-bg" data-aos="zoom-out">
                        <img src="assets/img/notification.png" class="img-fluid" alt="" style="background-position-x: 100px;">
                    </div>
                    <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                        <h3>Notification System</h3>
                        <p>
                            The product features a built-in notification system that promptly alerts users of any detected mud or changes in water quality. This ensures timely awareness and allows for quick response and necessary actions to be taken.
                        </p>

                        <a href="#" class="btn btn-get-started align-self-start">Learn more →</a>
                    </div>
                </div><!-- Features Item -->

                <div class="row gy-4 align-items-center features-item">

                    <div class="col-lg-5 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
                        <h3>Water Flow Control</h3>
                        <p>
                            The product provides continuous monitoring of water quality, constantly evaluating the turbidity levels in the pipeline. This enables real-time surveillance and immediate action in response to any changes or potential issues.
                        </p>
                        <a href="#" class="btn btn-get-started">Learn more →</a>
                    </div>
                    <div class="col-lg-7 order-1 order-lg-2 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="100">
                        <div class="image-stack">
                            <img src="assets/img/flow.jpg" alt="" class="stack-front">
                            <img src="assets/img/flow1.webp" alt="" class="stack-back">
                        </div>
                    </div>

                </div><!-- Features Item -->
                <div class="row gy-4 align-items-stretch justify-content-between features-item ">
                    <div class="col-lg-6 d-flex align-items-center features-img-bg" data-aos="zoom-out">
                        <img src="assets/img/App-Integration.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                        <h3>Mobile App Integration</h3>
                        <p>
                            The product features a built-in notification system that promptly alerts users of any detected mud or changes in water quality. This ensures timely awareness and allows for quick response and necessary actions to be taken.
                        </p>

                        <a href="#" class="btn btn-get-started align-self-start">Learn more →</a>
                    </div>
                </div><!-- Features Item -->
            </div>

        </section><!-- End Features Section -->

        <!-- Portfolio Section - Home Page -->
        <section id="portfolio" class="portfolio">

            <!--  Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Components</h2>
                <p>Relaible, accurate and efficient components for better future</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                    <!-- <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-app">App</li>
                        <li data-filter=".filter-product">Card</li>
                        <li data-filter=".filter-branding">Web</li>
                    </ul> -->

                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app border-1">
                            <img src="assets/img/Turbidity-Sensor.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Sensor</h4>
                                <p>TS-300B | High Quality Arduino Turbidity Sensor</p>
                                <a href="assets/img/Turbidity-Sensor.jpg" title="Sensor" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product border-1">
                            <img src="assets/img/masonry-portfolio/solenoid.png" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Solenoid</h4>
                                <p>Double head for diversion</p>
                                <a href="assets/img/masonry-portfolio/solenoid.png" title="Solenoid" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding border-1">
                            <img src="assets/img/masonry-portfolio/esp.webp" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>ESP8266-12F </h4>
                                <p>Micro controller of the system</p>
                                <a href="assets/img/masonry-portfolio/esp.webp" title="ESP8266-12F" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app border-1">
                            <img src="assets/img/masonry-portfolio/Enclosure out new.JPG" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Enclosure</h4>
                                <p>Proposed enclosure</p>
                                <a href="assets/img/masonry-portfolio/Enclosure out new.JPG" title="Enclosure" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            </div>
                        </div><!-- End Portfolio Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
                            <img src="assets/img/masonry-portfolio/preview 3 crop.png" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Interier</h4>
                                <p>Inside view of the product</p>
                                <a href="assets/img/masonry-portfolio/preview 3 crop.png" title="Interier" data-gallery="portfolio-gallery-app" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                            </div>
                        </div> 



                    </div><!-- End Portfolio Container -->

                </div>

            </div>

        </section><!-- End Portfolio Section -->

        <!-- Pricing Section - Home Page -->
        <section id="pricing" class="pricing">

            <!--  Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Pricing</h2>
                
            </div><!-- End Section Title -->

            <div class="container" data-aos="zoom-in" data-aos-delay="100">

                <div class="row g-4">

                    <div class="row gy-4 align-items-stretch justify-content-between features-item ">
                        <div class="col-lg-6 d-flex align-items-center features-img-bg" data-aos="zoom-out">
                            <img src="assets/img/masonry-portfolio/Enclosure out new.JPG" class="img-fluid" alt="">
                        </div>
                        <div class="col-lg-5 d-flex justify-content-center flex-column" data-aos="fade-up">
                            <h1 class="text-bolt">9999.99 Rs</h1>
                            <p>
                                Our product is priced at an affordable 9999.99Rs, making it accessible to a wide range of customers. We believe this price offers a competitive and cost-effective solution for detecting and managing muddy water in pipelines, ensuring a clean and safe water supply.
                            </p>

                            <a href="#" class="btn btn-get-started align-self-start">Learn more →</a>
                        </div>
                    </div><!-- Features Item -->


                </div>

            </div>

        </section><!-- End Pricing Section -->



        <!-- Team Section - Home Page -->
        <section id="team" class="team">

            <!--  Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Team</h2>
                <p>Hard working extreamly tallented engineers.</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-5">

                    <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
                        <div class="member-img">
                            <img src="assets/img/team/lasindu.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>Lasindu Dilshan</h4>
                            <span>Product Manager</span>
                            <!-- <p>Aliquam iure quaerat voluptatem praesentium possimus unde laudantium vel dolorum distinctio dire flow</p> -->
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
                        <div class="member-img">
                            <img src="assets/img/team/nidula.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>Nidula Gunawardana</h4>
                            <span>Chief Executive Officer</span>
                            <!-- <p>Labore ipsam sit consequatur exercitationem rerum laboriosam laudantium aut quod dolores exercitationem ut</p> -->
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
                        <div class="member-img">
                            <img src="assets/img/team/Tharoosha.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>Tharoosha Lakshan</h4>
                            <span>CTO</span>
                            <!-- <p>Illum minima ea autem doloremque ipsum quidem quas aspernatur modi ut praesentium vel tque sed facilis at qui</p> -->
                        </div>
                    </div><!-- End Team Member -->

                    <div class="col-lg-4 offset-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="500">
                        <div class="member-img">
                            <img src="assets/img/team/team-5.jpg" class="img-fluid" alt="">
                            <div class="social">
                                <a href="#"><i class="bi bi-twitter"></i></a>
                                <a href="#"><i class="bi bi-facebook"></i></a>
                                <a href="#"><i class="bi bi-instagram"></i></a>
                                <a href="#"><i class="bi bi-linkedin"></i></a>
                            </div>
                        </div>
                        <div class="member-info text-center">
                            <h4>Dinethra Diwanjana</h4>
                            <span>Marketing</span>
                            <!-- <p>Qui consequuntur quos accusamus magnam quo est molestiae eius laboriosam sunt doloribus quia impedit laborum velit</p> -->
                        </div>
                    </div><!-- End Team Member -->
                </div>

            </div>

        </section><!-- End Team Section -->

        <!-- Call-to-action Section - Home Page -->
        <section id="call-to-action" class="call-to-action">

            <img src="assets/img/cta-bg.jpg" alt="">

            <div class="container">
                <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-10">
                        <div class="text-center">
                            <h3>GET IN TOUCH WITH US</h3>
                            <a class="cta-btn" href="#">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- End Call-to-action Section -->


        <!-- Contact Section - Home Page -->
        <section id="contact" class="contact">

            <!--  Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>We would love to hear from you! Contact us for any inquiries, support, or partnership opportunities. Our dedicated team is ready to assist you and provide the information you need. Reach out to us today to learn more about our products and services.</p>
            </div><!-- End Section Title -->

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-6">

                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="200">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Address</h3>
                                    <p>123/C,</p>
                                    <p>Katubedda road,</p>
                                    <p>Moratuwa.</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="300">
                                    <i class="bi bi-telephone"></i>
                                    <h3>Call Us</h3>
                                    <p>+94 332284756</p>
                                    <p>+94 778458745</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="400">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Email Us</h3>
                                    <p>info@solders.tk</p>
                                    <p>contact@solders.tk</p>
                                </div>
                            </div><!-- End Info Item -->

                            <div class="col-md-6">
                                <div class="info-item" data-aos="fade" data-aos-delay="500">
                                    <i class="bi bi-clock"></i>
                                    <h3>Open Hours</h3>
                                    <p>Monday - Friday</p>
                                    <p>9:00AM - 05:00PM</p>
                                </div>
                            </div><!-- End Info Item -->

                        </div>

                    </div>

                    <div class="col-lg-6">
                        <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>

                                    <button type="submit">Send Message</button>
                                </div>

                            </div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- End Contact Section -->

    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="container footer-top">
            <div class="row gy-4 align-content-center ">
                <div class="col-lg-5 offset-lg-1 col-md-12 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center">
                        <span>Solders</span>
                    </a>
                    <p>Explore these valuable resources to gain deeper insights and make the most of our product.</p>
                    <div class="social-links d-flex mt-4">
                        <a href=""><i class="bi bi-twitter"></i></a>
                        <a href=""><i class="bi bi-facebook"></i></a>
                        <a href=""><i class="bi bi-instagram"></i></a>
                        <a href=""><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Terms of service</a></li>
                        <li><a href="#">Privacy policy</a></li>
                    </ul>
                </div>



                <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                    <h4>Contact Us</h4>
                    <p>123/C,</p>
                    <p>Katubedda road,</p>
                    <p>Moratuwa.</p>
                    <p class="mt-4"><strong>Phone:</strong> <span>+94 332284756</span></p>
                    <p><strong>Email:</strong> <span>info@solders.tk</span></p>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p>&copy; <span>Copyright</span> <strong class="px-1">Solders</strong> <span>All Rights Reserved</span></p>
            <div class="credits">
                Designed by <a href="#">Nidula Gunawardana</a>
            </div>
        </div>

    </footer><!-- End Footer -->

    <!-- Scroll Top Button -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>



</body>

</html>