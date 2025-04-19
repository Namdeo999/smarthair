@extends('layouts.app')
@section('page_title', 'Home')

@section('content')
    <!-- Hero Section Start -->
    <section class="hero-section py-250" style="background-image: url(assets/images/hero/hero-bg.jpg);">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-7 col-lg-8">
                    <div class="hero-content py-10 rpt-0 text-white rmb-70">
                        <h1 class="wow fadeInUp delay-0-2s">Barbers & Hair Cutting</h1>
                        <p class="wow fadeInUp delay-0-4s">Experience the future of hair & beauty. With our easy online
                            booking system, you’re just a few clicks away from your next flawless look.</p>
                        <a href="{{ url('/service') }}" class="theme-btn wow fadeInUp delay-0-6s">explore our services <i
                                class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="hero-video text-lg-right wow zoomIn delay-0-6s">
                        <a href="{{ asset('assets/images/video.mp4') }}" class="mfp-iframe video-play"><i
                                class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-bg-shapes"></div>
    </section>
    <!-- Hero Section End -->
    <!-- What We Do Area Start -->
    <section class="what-we-do-area pb-130 rpb-100">
        <div class="container">
            <div class="what-we-do-inner">
                <div class="row">
                    <div class="col-xl-4">
                        <div class="feature-image wow fadeInLeft delay-0-2s"
                            style="background-image: url(assets/images/about/what-we-do.jpg);"></div>
                    </div>
                    <div class="col-xl-8 align-self-center">
                        <div class="what-we-do-content wow fadeInRight delay-0-2s">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="section-title mb-35">
                                        <h2 class="title">What We Do</h2>
                                        <p>We combine expert stylists with modern technology to give you a salon experience
                                            like never before.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="feature-item">
                                        <div class="icon">
                                            <i class="flaticon-scissors"></i>
                                        </div>
                                        <div class="content">
                                            <h4><a href="service-details.php">Hair Cutting</a></h4>
                                            <p>Expert haircuts styled to match your personality and look.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-item">
                                        <div class="icon">
                                            <i class="flaticon-straight-razor"></i>
                                        </div>
                                        <div class="content">
                                            <h4><a href="service-details.php">Shaving Style</a></h4>
                                            <p>Clean shaves and trendy beard styles, done to perfection.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-item">
                                        <div class="icon">
                                            <i class="flaticon-beauty-treatment"></i>
                                        </div>
                                        <div class="content">
                                            <h4><a href="service-details.php">Hair Patch</a></h4>
                                            <p>Natural-looking, non-surgical hair patch solutions.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-item">
                                        <div class="icon">
                                            <i class="flaticon-hot-stones"></i>
                                        </div>
                                        <div class="content">
                                            <h4><a href="service-details.php">Body Treatments</a></h4>
                                            <p>Skin and body treatments that refresh, and leave you feeling brand new.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- What We Do Area End -->
    <!-- About Us Area Start -->
    <section class="about-us-area">
        <div class="row">
            <div class="col-xl-3 col-sm-6">
                <div class="about-left-image wow fadeInUp delay-0-2s">
                    <img src="assets/images/about/about-left.jpg" alt="About Left" >
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 order-xl-2">
                <div class="about-right-image wow fadeInUp delay-0-6s">
                    <img src="assets/images/about/about-right.jpg" alt="About Right" height="490px">
                </div>
            </div>
            <div class="col-xl-6 align-self-center">
                <div class="about-content rp-15 rpb-90 text-center wow fadeInUp delay-0-4s">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="section-title mb-35">
                                <h2 class="title">we’re Best barbers & hair cutting salon</h2>
                            </div>
                        </div>
                    </div>
                    <p>At SmartHair Salon, we blend style, skill, and smart technology to give you an unmatched grooming
                        experience. Our team of expert barbers and stylists are dedicated to helping you look and feel your
                        best. Whether it’s a classic cut, a bold new style, or a personalized grooming session — we make it
                        all about you.

                        Step into a salon where precision meets passion, and walk out with confidence.</p>
                    {{-- <div class="our-author mt-20">
                        <img src="assets/images/about/author.jpg" alt="Authro">
                        <div class="content">
                            <h4>Randall J. Goodman</h4>
                            <img src="assets/images/about/signature.png" alt="Signature">
                        </div>
                    </div>
                    <img class="about-bg-shape" src="assets/images/about/about-bg-shape.png" alt="BG Shape"> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Area End -->
    <!-- Call To Action Start -->
    <section class="cta-area bgs-cover bg-yellow text-white py-40"
        style="background-image: url(assets/images/background/cta-bg.png);">
        <div class="container">
            <div class="row justify-content-center text-center align-items-center">
                <div class="col-xl-6 col-lg-7">
                    <div class="section-title mt-5 wow fadeInLeft delay-0-2s">
                        <h2>Ready to get our service ?</h2>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <a href="contact.php" class="theme-btn btn-border my-10 wow fadeInRight delay-0-2s">appointment
                        now <i class="far fa-long-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action End -->
    <!-- Services Area Start -->
    <section class="services-area rel z-1 pt-120 rpt-90 pb-100 rpb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="section-title text-center mb-55">
                        <h2 class="title">Service we provide</h2>
                        <p>Discover a full range of grooming and beauty services designed to meet your style and self-care
                            needs. From haircuts to hair replacement, we ensure quality, comfort, and confidence in every
                            service.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp delay-0-2s">
                        <div class="icon">
                            <i class="flaticon-salon"></i>
                        </div>
                        <div class="content">
                            <h3><a href="service-details.php">Hair Cutting Style</a></h3>
                            <p>Trendy and classic haircuts tailored to suit your unique style and face shape.</p>
                            <a href="service-details.php" class="details-btn"><i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp delay-0-4s">
                        <div class="icon">
                            <i class="flaticon-shampoo"></i>
                        </div>
                        <div class="content">
                            <h3><a href="service-details.php">Hair Washing</a></h3>
                            <p>Deep cleansing and scalp-refreshing washes for a healthy, shiny look.</p>
                            <a href="service-details.php" class="details-btn"><i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp delay-0-6s">
                        <div class="icon">
                            <i class="flaticon-hot-stone"></i>
                        </div>
                        <div class="content">
                            <h3><a href="service-details.php">Body Treatments</a></h3>
                            <p>Relaxing body care therapies to nourish, refresh, and rejuvenate your skin.</p>
                            <a href="service-details.php" class="details-btn"><i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp delay-0-2s">
                        <div class="icon">
                            <i class="flaticon-treatment"></i>
                        </div>
                        <div class="content">
                            <h3><a href="service-details.php">Hair Patch</a></h3>
                            <p>Natural-looking, non-surgical hair patch solutions for fuller hair and confidence.</p>
                            <a href="service-details.php" class="details-btn"><i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp delay-0-4s">
                        <div class="icon">
                            <i class="flaticon-shaving-razor"></i>
                        </div>
                        <div class="content">
                            <h3><a href="service-details.php">Stylist Shaving</a></h3>
                            <p>Smooth shaves and sharp beard styles crafted with precision and care.</p>
                            <a href="service-details.php" class="details-btn"><i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp delay-0-6s">
                        <div class="icon">
                            <i class="flaticon-hair-dye"></i>
                        </div>
                        <div class="content">
                            <h3><a href="service-details.php">Multi Hair Colors</a></h3>
                            <p>Vibrant hair coloring options to match your vibe and express your style.</p>
                            <a href="service-details.php" class="details-btn"><i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="services-shapes">
            <img class="shape-one" src="assets/images/shapes/service-one.png" alt="Shape">
            <img class="shape-two" src="assets/images/shapes/service-two.png" alt="Shape">
        </div>
    </section>
    <!-- Services Area End -->
    <!-- Pricing Plan Area Start -->
    <section class="pricing-plan-area bgs-cover pt-120 rpt-90 pb-130 rpb-100"
        style="background-image: url(assets/images/background/pricing-plan-bg1.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="section-title text-white text-center mb-55">
                        <h2 class="title">awesome pricing plan</h2>
                        <p>Get premium grooming and styling services at prices that suit your budget, we’ve got a plan that
                            fits your style and wallet.</p>
                    </div>
                </div>
            </div>
            <div class="price-tab-wrap p-40 bg-white">
                <ul class="nav nav-justified price-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#hair">
                            <i class="flaticon-beauty-salon"></i>
                            <span>hair solutions</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#beauty">
                            <i class="flaticon-relax"></i>
                            <span>beauty & spa</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#bodyy">
                            <i class="flaticon-massage"></i>
                            <span>body treatments</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#washing">
                            <i class="flaticon-spa"></i>
                            <span>Fash washing</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#meditations">
                            <i class="flaticon-yoga"></i>
                            <span>meditations</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#shaving">
                            <i class="flaticon-razor-blade"></i>
                            <span>shaving</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content price-tab-content">
                    <div class="tab-pane fade show active" id="hair">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="price-item wow fadeInUp delay-0-2s">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image1.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Hair Cutting & Fitting</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹199</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="price-item wow fadeInUp delay-0-4s">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image2.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Shaving & Facial</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹150</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="price-item wow fadeInUp delay-0-2s">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image3.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Hair Color & Wash</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹180</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="price-item wow fadeInUp delay-0-4s">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image4.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Body Massage</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹250</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="price-item wow fadeInUp delay-0-2s">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image5.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Beauty & Spa</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹2700</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="price-item wow fadeInUp delay-0-4s">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image6.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Facial & Face Wash</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹630</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="price-item wow fadeInUp delay-0-2s">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image7.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Backbone Massage</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹200</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="price-item wow fadeInUp delay-0-4s">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image8.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Meditation & Massage</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹740</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="beauty">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="price-item">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image6.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Facial & Face Wash</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹400</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="price-item">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image7.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Backbone Massage</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹430</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="price-item">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image1.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Hair Cutting & Fitting</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹89</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="price-item">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image2.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Shaving & Facial</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹45</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="price-item">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image3.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Hair Color & Wash</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹35</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="price-item">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image4.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Body Massage</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹56</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="price-item">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image5.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Beauty & Spa</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹27</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="price-item">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image8.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Meditation & Massage</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹74</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="bodyy">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="price-item">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image4.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Body Massage</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹56</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="price-item">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image5.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Beauty & Spa</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹27</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="price-item">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image6.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Facial & Face Wash</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹63</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="price-item">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image1.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Hair Cutting & Fitting</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹89</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="price-item">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image2.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Shaving & Facial</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹45</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="price-item">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image3.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Hair Color & Wash</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹35</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="price-item">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image7.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Backbone Massage</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹43</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="price-item">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image8.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Meditation & Massage</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹74</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="washing">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="price-item">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image2.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Shaving & Facial</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹45</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="price-item">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image3.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Hair Color & Wash</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹35</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="price-item">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image1.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Hair Cutting & Fitting</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹89</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="price-item">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image4.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Body Massage</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹56</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="price-item">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image5.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Beauty & Spa</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹27</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="price-item">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image6.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Facial & Face Wash</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹63</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="price-item">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image7.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Backbone Massage</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹43</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="price-item">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image8.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Meditation & Massage</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹74</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="meditations">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="price-item">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image3.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Hair Color & Wash</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹35</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="price-item">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image4.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Body Massage</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹56</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="price-item">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image5.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Beauty & Spa</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹27</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="price-item">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image6.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Facial & Face Wash</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹63</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="price-item">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image1.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Hair Cutting & Fitting</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹89</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="price-item">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image2.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Shaving & Facial</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹45</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="price-item">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image7.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Backbone Massage</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹43</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="price-item">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image8.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Meditation & Massage</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹74</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="shaving">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="price-item">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image6.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Facial & Face Wash</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹63</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="price-item">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image7.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Backbone Massage</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹43</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="price-item">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image8.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Meditation & Massage</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹74</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="price-item">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image1.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Hair Cutting & Fitting</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹89</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="price-item">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image2.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Shaving & Facial</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹45</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="price-item">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image3.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Hair Color & Wash</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹35</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="price-item">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image4.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Body Massage</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹56</span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="price-item">
                                    <div class="image">
                                        <img src="assets/images/price/pp-image5.jpg" alt="Price">
                                    </div>
                                    <div class="content">
                                        <h5>Beauty & Spa</h5>
                                        <span>Clean & simple 30-40 minutes</span>
                                    </div>
                                    <span class="price">₹27</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Plan Area End -->
    <!-- Gallery Area Start -->
    <section class="gallery-area rel z-1 pt-120 rpt-90 pb-100 rpb-70">
        <div class="container">
            <div class="row justify-content-between align-items-end mb-40">
                <div class="col-xl-5 col-lg-6">
                    <div class="section-title mb-15 wow fadeInLeft delay-0-2s">
                        <h2 class="title">Latest photo gallery</h2>
                        <p>Fresh looks. Real clients. Authentic style</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="section-header-btn text-lg-right mb-20 wow fadeInRight delay-0-2s">
                        <a href="portfolio.php" class="theme-btn">explore more gallery <i
                                class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-sm-6">
                    <div class="gallery-item wow fadeInUp delay-0-2s">
                        <img src="assets/images/gellary/gallery1.jpg" alt="Gallery">
                        <div class="gallery-content">
                            <h3>Hair Cutting</h3>
                            <p>Barbers & Salon Services</p>
                            <a href="portfolio-details.php" class="details-btn"><i
                                    class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="gallery-item wow fadeInUp delay-0-4s">
                        <img src="assets/images/gellary/gallery2.jpg" alt="Gallery">
                        <div class="gallery-content">
                            <h3>Hair Cutting</h3>
                            <p>Barbers & Salon Services</p>
                            <a href="portfolio-details.php" class="details-btn"><i
                                    class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="gallery-item wow fadeInUp delay-0-6s">
                        <img src="assets/images/gellary/gallery3.jpg" alt="Gallery">
                        <div class="gallery-content">
                            <h3>Hair Cutting</h3>
                            <p>Barbers & Salon Services</p>
                            <a href="portfolio-details.php" class="details-btn"><i
                                    class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="gallery-item wow fadeInUp delay-0-8s">
                        <img src="assets/images/gellary/gallery4.jpg" alt="Gallery">
                        <div class="gallery-content">
                            <h3>Hair Cutting</h3>
                            <p>Barbers & Salon Services</p>
                            <a href="portfolio-details.php" class="details-btn"><i
                                    class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Gallery Area End -->
    <!-- Contact Section Start -->
    <section class="contact-area rel z-1">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-8">
                </div>
            </div>
            <div class="contact-form-wrap">
                <div class="image wow fadeInUp delay-0-2s" style="background-image: url(assets/images/contact/left.jpg);">
                </div>
                <form action="#" class="bg-yellow bgs-cover wow fadeInUp delay-0-4s"
                    style="background-image: url(assets/images/contact/contact-bg.png);">
                    <div class="row justify-content-center mb-35 text-white text-center">
                        <div class="col-lg-10">
                            <div class="section-title text-white">
                                <h2 class="title">Make appointment</h2>
                            </div>
                            <p>Simple. Quick. Hassle-free bookings at your convenience.</p>
                        </div>
                    </div>
                    <div class="row small-gap">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" id="name" name="name" class="form-control" value=""
                                    placeholder="Your Full Name" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="email" id="email" name="email" class="form-control" value=""
                                    placeholder="Email Address" required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" id="phone" name="phone" class="form-control" value=""
                                    placeholder="Phone Number" required>
                            </div>
                        </div>
                        <div class="col-lg-6 mb-20">
                            <div class="form-group">
                                <select name="select-category" id="select-category">
                                    <option value="value1">Select Category</option>
                                    <option value="value1">Beauty & Spa</option>
                                    <option value="value1">Body Massage</option>
                                    <option value="value1">Shaving & Facial</option>
                                    <option value="value1">Hair Color</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="date-time"><i class="far fa-calendar-alt"></i></label>
                                <input type="text" id="date-time" name="date-time" class="form-control"
                                    value="" placeholder="Appointment Date & Time">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea name="message" id="message" class="form-control" rows="4" placeholder="Write Message" required></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group mb-0">
                                <button type="submit" class="theme-btn btn-border w-100">appointment now<i
                                        class="far fa-long-arrow-right"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="image wow fadeInUp delay-0-6s"
                    style="background-image: url(assets/images/contact/right.jpg);"></div>
            </div>
        </div>
        <div class="contact-shapes">
            <img class="shape-one" src="assets/images/shapes/contact-one.png" alt="Shape">
            <img class="shape-two" src="assets/images/shapes/contact-two.png" alt="Shape">
        </div>
    </section>
    <!-- Contact Section End -->
    <!-- Team Area Start -->
    <section class="team-area rel z-1 pt-120 rpt-90 pb-95 rpb-65">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="section-title text-center mb-50">
                        <h2 class="title">Meet our specialist</h2>
                        <p>Because true style starts with the right professional.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="team-member-wrap">
                <div class="team-member wow fadeInUp delay-0-2s">
                    <div class="image">
                        <img src="assets/images/team/member1.jpg" alt="Member">
                        <div class="social-style-two">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-rocketchat"></i></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Scott K. Henderson</h3>
                        <span class="designation">Hair Specialist</span>
                    </div>
                </div>
                <div class="team-member wow fadeInUp delay-0-3s">
                    <div class="image">
                        <img src="assets/images/team/member2.jpg" alt="Member">
                        <div class="social-style-two">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-rocketchat"></i></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Donald J. Cuellar</h3>
                        <span class="designation">Hair Specialist</span>
                    </div>
                </div>
                <div class="team-member wow fadeInUp delay-0-4s">
                    <div class="image">
                        <img src="assets/images/team/member3.jpg" alt="Member">
                        <div class="social-style-two">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-rocketchat"></i></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Nicholas E. Sapien</h3>
                        <span class="designation">Hair Specialist</span>
                    </div>
                </div>
                <div class="team-member wow fadeInUp delay-0-5s">
                    <div class="image">
                        <img src="assets/images/team/member4.jpg" alt="Member">
                        <div class="social-style-two">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-rocketchat"></i></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Richard L. Miller</h3>
                        <span class="designation">Hair Specialist</span>
                    </div>
                </div>
                <div class="team-member wow fadeInUp delay-0-6s">
                    <div class="image">
                        <img src="assets/images/team/member5.jpg" alt="Member">
                        <div class="social-style-two">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-rocketchat"></i></a>
                        </div>
                    </div>
                    <div class="content">
                        <h3>Melvin L. Hoffman</h3>
                        <span class="designation">Hair Specialist</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Area End -->
    <!-- CTA Video Start -->
    <section class="cta-video-area rel z-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="cta-part bg-yellow text-center text-white p-40 rpy-55 wow fadeInLeft delay-0-2s"
                        style="background-image: url(assets/images/background/video-cta-bg.png);">
                        <div class="section-title mb-15">
                            <h2>Come &<br> get Freshness</h2>
                            <p>Because true freshness isn’t just how you look — it’s how you feel inside and out.</p>
                        </div>
                        <a href="contact.php" class="theme-btn btn-border">contact with us <i
                                class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="video-part rmt-30 wow fadeInRight delay-0-2s">
                        <img src="assets/images/background/video-bg.jpg" alt="Video">
                        <a href="https://www.youtube.com/watch?v=9Y7ma241N8k" class="mfp-iframe video-play"><i
                                class="fas fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CTA Video End -->
    <!-- Testimonial Area Start -->
    <section class="testimonial-area rel z-1 pt-120 rpt-90 pb-125 rpb-95">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="section-title text-center mb-50">
                        <h2 class="title">What our clients say</h2>
                        <p>At Smart Hair Beauty, we believe in creating an experience that goes beyond just great hair, What clients might say after having a great experience at your salon.</p>
                    </div>
                </div>
            </div>
            <div class="testimonial-wrap">
                <div class="testimonial-item wow fadeInUp delay-0-2s">
                    <div class="image">
                        <img src="assets/images/testimonials/testimonial1.jpg" alt="Author">
                    </div>
                    <div class="description">
                        <p>I had an amazing experience at Smart Hair Beauty! From the moment I walked in, I felt welcomed
                            and relaxed. </p>
                        <h4>Donald A. Guthrie</h4>
                        <span class="designation">Senior Manager</span>
                        <div class="ratting">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item wow fadeInUp delay-0-4s">
                    <div class="image">
                        <img src="assets/images/testimonials/testimonial2.jpg" alt="Author">
                    </div>
                    <div class="description">
                        <p>The service at Smart Hair Beauty is unbeatable. I went in for a deep conditioning treatment and left with silky, smooth hair. </p>
                        <h4>Justin D. Thompson</h4>
                        <span class="designation">Senior Manager</span>
                        <div class="ratting">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item wow fadeInUp delay-0-2s">
                    <div class="image">
                        <img src="assets/images/testimonials/testimonial1.jpg" alt="Author">
                    </div>
                    <div class="description">
                        <p>Quis autem vel eum iure repreh enderit quin voluptate velit esse quam nihil molestiae
                            consequa tur veillumqus dolore fugiat quo voluptas pariatuLorem psum</p>
                        <h4>Donald A. Guthrie</h4>
                        <span class="designation">Senior Manager</span>
                        <div class="ratting">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item wow fadeInUp delay-0-2s">
                    <div class="image">
                        <img src="assets/images/testimonials/testimonial2.jpg" alt="Author">
                    </div>
                    <div class="description">
                        <p>Sed ut perspiciatis unde omnis natus error sit voluac cusantium doloremque laudantium
                            totame rem aperiam eaque quae abillo inventore veritatis et quase</p>
                        <h4>Justin D. Thompson</h4>
                        <span class="designation">Senior Manager</span>
                        <div class="ratting">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial-bg bg-lighter">
            <img class="bg" src="assets/images/shapes/testi-bg.png" alt="BG">
            <img class="shape" src="assets/images/shapes/testi-right.png" alt="Shape">
        </div>
    </section>
    <!-- Testimonial Area End -->
    <!-- Client Logo Area Start -->
    {{-- <section class="client-logo-area rel z-1 pb-130 rpb-100">
        <div class="container">
            <div class="client-logo-inner">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-10">
                        <div class="section-title text-center mb-50">
                            <h2 class="title">premium sponsors</h2>
                            <p>Sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt labore dolore
                                magna aliqua suspendisse</p>
                        </div>
                    </div>
                </div>
                <div class="client-logo-active">
                    <div class="client-logo-item wow fadeInUp delay-0-2s">
                        <a href="#"><img src="assets/images/client-logos/logo1.png" alt="Client Logo"></a>
                    </div>
                    <div class="client-logo-item wow fadeInUp delay-0-3s">
                        <a href="#"><img src="assets/images/client-logos/logo2.png" alt="Client Logo"></a>
                    </div>
                    <div class="client-logo-item wow fadeInUp delay-0-4s">
                        <a href="#"><img src="assets/images/client-logos/logo3.png" alt="Client Logo"></a>
                    </div>
                    <div class="client-logo-item wow fadeInUp delay-0-5s">
                        <a href="#"><img src="assets/images/client-logos/logo4.png" alt="Client Logo"></a>
                    </div>
                    <div class="client-logo-item wow fadeInUp delay-0-6s">
                        <a href="#"><img src="assets/images/client-logos/logo5.png" alt="Client Logo"></a>
                    </div>
                    <div class="client-logo-item wow fadeInUp delay-0-7s">
                        <a href="#"><img src="assets/images/client-logos/logo6.png" alt="Client Logo"></a>
                    </div>
                    <div class="client-logo-item wow fadeInUp delay-0-8s">
                        <a href="#"><img src="assets/images/client-logos/logo1.png" alt="Client Logo"></a>
                    </div>
                    <div class="client-logo-item wow fadeInUp delay-0-2s">
                        <a href="#"><img src="assets/images/client-logos/logo2.png" alt="Client Logo"></a>
                    </div>
                    <div class="client-logo-item wow fadeInUp delay-0-2s">
                        <a href="#"><img src="assets/images/client-logos/logo3.png" alt="Client Logo"></a>
                    </div>
                    <div class="client-logo-item wow fadeInUp delay-0-2s">
                        <a href="#"><img src="assets/images/client-logos/logo4.png" alt="Client Logo"></a>
                    </div>
                    <div class="client-logo-item wow fadeInUp delay-0-2s">
                        <a href="#"><img src="assets/images/client-logos/logo5.png" alt="Client Logo"></a>
                    </div>
                    <div class="client-logo-item wow fadeInUp delay-0-2s">
                        <a href="#"><img src="assets/images/client-logos/logo6.png" alt="Client Logo"></a>
                    </div>
                </div>
            </div>
        </div>
        <img class="client-logo-bg" src="assets/images/background/client-logo-bg.png" alt="Background">
    </section> --}}
    <!-- Client Logo Area End -->
    <!-- News Area Start -->
    {{-- <section class="news-area rel z-2 pt-120 rpt-90 pb-100 rpb-70">
        <div class="container">
            <div class="row justify-content-between align-items-end mb-10">
                <div class="col-xl-5 col-lg-6">
                    <div class="section-title mb-15">
                        <h2 class="title">Latest Blog & News</h2>
                        <p>Sit amet consectetur adipiscing elit sed do eiusmod tempor incididunt labore dolore magna
                            aliqua suspendisse</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="slider-btns text-lg-right mb-20">
                        <button class="news-prev"><i class="far fa-long-arrow-left"></i></button>
                        <button class="news-next"><i class="far fa-long-arrow-right"></i></button>
                    </div>
                </div>
            </div>
            <div class="news-slider-wrap">
                <div class="news-item wow fadeInUp delay-0-2s">
                    <div class="image">
                        <img src="assets/images/blog/news1.jpg" alt="News">
                    </div>
                    <div class="content">
                        <ul class="blog-meta">
                            <li><i class="far fa-user-circle"></i> <a href="#">Michael M.</a></li>
                            <li><i class="far fa-comments"></i> <a href="#">Comm (05)</a></li>
                        </ul>
                        <h5><a href="blog-details.php">Started With Node An Introduction To APIs, HTTP And ES6+
                                JavaScript</a></h5>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantim doloremque
                            laudantium totam</p>
                        <a href="blog-details.php" class="read-more">Read more <i
                                class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="news-item wow fadeInUp delay-0-4s">
                    <div class="image">
                        <img src="assets/images/blog/news2.jpg" alt="News">
                    </div>
                    <div class="content">
                        <ul class="blog-meta">
                            <li><i class="far fa-user-circle"></i> <a href="#">Michael M.</a></li>
                            <li><i class="far fa-comments"></i> <a href="#">Comm (05)</a></li>
                        </ul>
                        <h5><a href="blog-details.php">Video Playback On The Web Video See Delivery Best Practices
                                Part 2</a></h5>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantim doloremque
                            laudantium totam</p>
                        <a href="blog-details.php" class="read-more">Read more <i
                                class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="news-item wow fadeInUp delay-0-6s">
                    <div class="image">
                        <img src="assets/images/blog/news3.jpg" alt="News">
                    </div>
                    <div class="content">
                        <ul class="blog-meta">
                            <li><i class="far fa-user-circle"></i> <a href="#">Michael M.</a></li>
                            <li><i class="far fa-comments"></i> <a href="#">Comm (05)</a></li>
                        </ul>
                        <h5><a href="blog-details.php">Started With Node An Introduction To APIs, HTTP And ES6+
                                JavaScript</a></h5>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantim doloremque
                            laudantium totam</p>
                        <a href="blog-details.php" class="read-more">Read more <i
                                class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="news-item wow fadeInUp delay-0-2s">
                    <div class="image">
                        <img src="assets/images/blog/news1.jpg" alt="News">
                    </div>
                    <div class="content">
                        <ul class="blog-meta">
                            <li><i class="far fa-user-circle"></i> <a href="#">Michael M.</a></li>
                            <li><i class="far fa-comments"></i> <a href="#">Comm (05)</a></li>
                        </ul>
                        <h5><a href="blog-details.php">Started With Node An Introduction To APIs, HTTP And ES6+
                                JavaScript</a></h5>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantim doloremque
                            laudantium totam</p>
                        <a href="blog-details.php" class="read-more">Read more <i
                                class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="news-item wow fadeInUp delay-0-2s">
                    <div class="image">
                        <img src="assets/images/blog/news2.jpg" alt="News">
                    </div>
                    <div class="content">
                        <ul class="blog-meta">
                            <li><i class="far fa-user-circle"></i> <a href="#">Michael M.</a></li>
                            <li><i class="far fa-comments"></i> <a href="#">Comm (05)</a></li>
                        </ul>
                        <h5><a href="blog-details.php">Video Playback On The Web Video See Delivery Best Practices
                                Part 2</a></h5>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantim doloremque
                            laudantium totam</p>
                        <a href="blog-details.php" class="read-more">Read more <i
                                class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="news-item wow fadeInUp delay-0-2s">
                    <div class="image">
                        <img src="assets/images/blog/news3.jpg" alt="News">
                    </div>
                    <div class="content">
                        <ul class="blog-meta">
                            <li><i class="far fa-user-circle"></i> <a href="#">Michael M.</a></li>
                            <li><i class="far fa-comments"></i> <a href="#">Comm (05)</a></li>
                        </ul>
                        <h5><a href="blog-details.php">Started With Node An Introduction To APIs, HTTP And ES6+
                                JavaScript</a></h5>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantim doloremque
                            laudantium totam</p>
                        <a href="blog-details.php" class="read-more">Read more <i
                                class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- News Area End -->

@endsection
