@extends('layouts.app')
@section('page_title', 'Home')

@section('content')
    <!-- Hero Section Start -->
    <section class="hero-section py-250" style="background-image: url(assets/images/hero/hero.jpg);">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-xl-7 col-lg-8">
                    <div class="hero-content py-10 rpt-0 text-white rmb-70">
                        <h1 class=" custom-font delay-0-2s">Smart Hair Beauty</h1>
                        <p class="wow fadeInUp delay-0-4s">Experience the future of smart hair & beauty. With our easy online
                            booking system, you’re just a few clicks away from your next flawless look.</p>
                        <a href="{{ url('/service') }}" class="theme-btn wow fadeInUp delay-0-6s">explore our services <i
                                class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="hero-video text-lg-right wow zoomIn delay-0-6s">
                        <a href="{{ asset('assets/images/video1.mp4') }}" class="mfp-iframe video-play"><i
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
                            style="background-image: url(assets/images/about/what-we-do.png); "></div>
                    </div>
                    <div class="col-xl-8 align-self-center">
                        <div class="what-we-do-content wow fadeInRight delay-0-2s">
                            <div class="row">
                                <div class="col-lg-11">
                                    <div class="section-title mb-35">
                                        <h2 class="title">What We Do</h2>
                                        <p>At Smart Hair Beauty, we specialize in non-surgical hair patching, advanced hair
                                            replacement systems, and effective solutions for hair loss. Our mission is to
                                            restore not just hair, but confidence—using natural-looking, customized
                                            treatments trusted by clients across Bhopal.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="feature-item">
                                        {{-- <div class="icon">
                                            <i class="flaticon-hair-patch"></i>
                                        </div> --}}
                                        <div class="content">
                                            <h4><a href="service-details.php">Hair Patching</a></h4>
                                            <p>Expert non-surgical hair patch solutions for a natural, full-head look.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-item">
                                        {{-- <div class="icon">
                                            <i class="flaticon-hair-replacement"></i>
                                        </div> --}}
                                        <div class="content">
                                            <h4><a href="service-details.php">Hair Replacement</a></h4>
                                            <p>Advanced, hair replacement systems tailored to your needs.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-item">
                                        {{-- <div class="icon">
                                            <i class="flaticon-natural-hair"></i>
                                        </div> --}}
                                        <div class="content">
                                            <h4><a href="service-details.php">Hair Loss Solutions</a></h4>
                                            <p>Personalized treatments to prevent hair loss and restore natural hair.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-item">
                                        {{-- <div class="icon">
                                            <i class="flaticon-consultation"></i>
                                        </div> --}}
                                        <div class="content">
                                            <h4><a href="service-details.php">Free Consultation</a></h4>
                                            <p>Get expert advice on the best hair restoration solution for you.</p>
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
    <section class="about-us-area mb-30">
        <div class="row">
            <div class="col-xl-3 col-sm-6">
                <div class="about-left-image wow fadeInUp delay-0-2s">
                    <img src="assets/images/about/about-left.jpg" alt="About Left" width="500px">
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 order-xl-2">
                <div class="about-right-image wow fadeInUp delay-0-6s">
                    <img src="assets/images/about/about-right.jpg" alt="About Right" style="object-fit: cover">
                </div>
            </div>
            <div class="col-xl-6 align-self-center">
                <div class="about-content rp-15 rpb-90 text-center wow fadeInUp delay-0-4s">
                    <div class="row justify-content-center">
                        <div class="col-lg-9">
                            <div class="section-title mb-35">
                                <h2 class="title">We’re the Best in Hair Patching & Hair Replacement</h2>
                            </div>
                        </div>
                    </div>
                    <p class="text-justify">At SmartHair Beauty, we combine advanced hair replacement technology with expert
                        care to provide
                        solutions that restore both your hair and confidence. Our skilled professionals specialize in hair
                        patching, customized hair wigs, and non-surgical hair loss treatments that cater to your unique
                        needs. Whether you’re looking to cover thinning spots, restore a full head of hair, or find a
                        solution for hair loss, we offer personalized services designed just for you. Step into SmartHair
                        Beauty and leave with a renewed sense of confidence and natural-looking hair.</p>
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
    <section class="pricing-plan-area bgs-cover pt-120 rpt-90 pb-130 rpb-100"
        style="background-image: url(assets/images/background/pricing-plan-bg1.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="section-title text-white text-center mb-55">
                        <h2 class="title">Smart Hair Beauty Solution</h2>
                        <p>At Smart Hair Beauty, we specialize in transforming lives through high-quality non-surgical hair replacement solutions. From custom hair patches to natural-looking wigs, our services are designed to restore not just your hair — but your confidence too.

                        </p>
                    </div>
                </div>
            </div>
            <div class="price-tab-wrap p-40  bg-white">
                <section class="smart-hair-about py-5">
                    <div class="container">
                      <div class="row align-items-center">
                        
                        <!-- Image -->
                        <div class="col-md-6 mb-4 mb-md-0">
                          <img src="assets/images/about/hair-replacement-banner.jpg" alt="Smart Hair Beauty" class="img-fluid rounded-4 shadow">
                        </div>
                  
                        <!-- Content -->
                        <div class="col-md-6">
                          <h2 class="mb-3">Why Choose Smart Hair Beauty?</h2>
                          <p>
                            At Smart Hair Beauty, we specialize in non-surgical hair patching and hair replacement solutions designed for both men and women dealing with hair thinning, baldness, or medical hair loss. Our systems are customized to ensure a natural look and snug fit — whether it’s a lace system, full wig, or partial hair patch. Using premium synthetic and 100% natural human hair, we deliver seamless, breathable, and undetectable results that bring confidence back to your everyday life. Every product is crafted for both style and comfort, empowering you to look great and feel even better.
                          </p>
                          <ul class="list-unstyled mt-3">
                            <li>✔️ Tailored Hair Patching & Replacement</li>
                            <li>✔️ Lace Wigs, Hair Extensions & Toupees</li>
                            <li>✔️ Chemotherapy Wigs & Medical Hair Systems</li>
                            <li>✔️ Lightweight, Breathable & Natural-Looking</li>
                            <li>✔️ Wig Accessories & Maintenance Essentials</li>
                          </ul>
                        </div>
                  
                      </div>
                    </div>
                  </section>
                  
            </div>
        </div>
    </section>
    <!-- Services Area Start -->
    <section class="services-area rel z-1 pt-120 rpt-90 pb-100 rpb-70">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-8">
                    <div class="section-title text-center mb-55">
                        <h2 class="title">Service we provide</h2>
                        <p>Explore our extensive range of specialized services tailored to enhance your style and self-care.
                            Whether you’re looking for a haircut, hair replacement, or a complete transformation, we deliver
                            exceptional quality, comfort, and confidence with every treatment.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp delay-0-2s">
                        {{-- <div class="icon">
                            <i class="flaticon-hair-patch"></i>
                        </div> --}}
                        <div class="content">
                            <h3><a href="service-details.php">Hair Patch Solutions</a></h3>
                            <p>Non-surgical hair patching to restore volume and boost your confidence.</p>
                            {{-- <a href="service-details.php" class="details-btn"><i class="far fa-long-arrow-right"></i></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp delay-0-4s">
                        {{-- <div class="icon">
                            <i class="flaticon-hair-replacement"></i>
                        </div> --}}
                        <div class="content">
                            <h3><a href="service-details.php">Hair Replacement</a></h3>
                            <p>Advanced hair replacement systems for permanent and natural-looking results.</p>
                            {{-- <a href="service-details.php" class="details-btn"><i class="far fa-long-arrow-right"></i></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp delay-0-6s">
                        {{-- <div class="icon">
                            <i class="flaticon-hair-bonding"></i>
                        </div> --}}
                        <div class="content">
                            <h3><a href="service-details.php">Hair Bonding </a></h3>
                            <p>Expert bonding techniques to create a seamless, natural-looking hairline.</p>
                            {{-- <a href="service-details.php" class="details-btn"><i class="far fa-long-arrow-right"></i></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp delay-0-2s">
                        {{-- <div class="icon">
                            <i class="flaticon-hair-extension"></i>
                        </div> --}}
                        <div class="content">
                            <h3><a href="service-details.php">Hair Extension Services</a></h3>
                            <p>High-quality hair extensions to add volume, length, and style.</p>
                            {{-- <a href="service-details.php" class="details-btn"><i class="far fa-long-arrow-right"></i></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp delay-0-4s">
                        {{-- <div class="icon">
                            <i class="flaticon-hair-fall"></i>
                        </div> --}}
                        <div class="content">
                            <h3><a href="service-details.php">Hair Patching Products</a></h3>
                            <p>Perfect Fit. Natural Look. Instant Transformation.</p>
                            {{-- <a href="service-details.php" class="details-btn"><i class="far fa-long-arrow-right"></i></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-item wow fadeInUp delay-0-6s">
                        {{-- <div class="icon">
                            <i class="flaticon-hair-weaving"></i>
                        </div> --}}
                        <div class="content">
                            <h3><a href="service-details.php">Hair Weaving</a></h3>
                            <p>Customized hair weaving techniques for a fuller, more natural look.</p>
                            {{-- <a href="service-details.php" class="details-btn"><i class="far fa-long-arrow-right"></i></a> --}}
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
    <!-- our product Area Start -->
    <section class="pricing-plan-area bgs-cover pt-120 rpt-90 pb-130 rpb-100"
        style="background-image: url(assets/images/background/pricing-plan-bg1.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="section-title text-white text-center mb-55">
                        <h2 class="title">Our Products</h2>
                        <p>Get premium grooming and styling services at prices that suit your budget, we’ve got a plan that
                            fits your style and wallet.</p>
                    </div>
                </div>
            </div>
            <div class="price-tab-wrap p-40  bg-white">
                <ul class="nav nav-justified price-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#hair">
                            {{-- <i class="flaticon-man"></i> --}}
                            <span>Mens Wigs</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#beauty">
                            {{-- <i class="flaticon-woman"></i> --}}
                            <span>Women Hair Wigs</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#bodyy">
                            {{-- <i class="flaticon-wig"></i> --}}
                            <span>Lace Hair System</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#washing">
                            {{-- <i class="flaticon-comb"></i> --}}
                            <span>Hair Extension</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#meditations">
                            {{-- <i class="flaticon-hair-dye"></i> --}}
                            <span>Hair Patch Accessories</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#shaving">
                            {{-- <i class="flaticon-care"></i> --}}
                            <span>Chemotherapy Wigs</span>
                        </a>
                    </li>
                </ul>

                <br>
                <div class="tab-content price-tab-content ">
                    <div class="tab-pane fade show active" id="hair">

                        <div class="row ">
                            <div class="col-lg-6">

                                <div class="wig-card wow fadeInUp delay-0-2s">

                                    <div class="content">
                                        <h5>Mens Lace Hair Wig</h5>
                                        <p class="wig-description">Our company is a market-leading manufacturer, exporter,
                                            and supplier of premium quality Mens Lace Hair Wigs. Crafted from high-grade
                                            synthetic hair, our lace wigs provide a natural look and comfortable fit. We
                                            source materials from trusted vendors, ensuring that every product meets strict
                                            quality standards.</p>
                                    </div>
                                    <div class="image">
                                        <a href="assets/images/about/mens-lace.jpg">
                                            <img src="assets/images/about/mens-lace.jpg" alt="Mens Lace Hair Wig">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="wig-card wow fadeInUp delay-0-4s">

                                    <div class="content">
                                        <h5>Stylish Mens Hair Wig</h5>
                                        <p class="wig-description">We specialize in the manufacture, export, and supply of
                                            premium-quality Stylish Mens Hair Wigs at the most affordable prices. <br>As a
                                            trusted name in the wig industry, we are proud to be one of Bhopal’s leading
                                            men’s wig exporters, offering fashionable and natural-looking hair solutions.
                                        </p>
                                    </div>
                                    <div class="image">
                                        <a href="assets/images/about/stylish-mens.jpg">
                                            <img src="assets/images/about/stylish-mens.jpg" alt="Stylish Mens Hair Wig">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="wig-card wow fadeInUp delay-0-2s">

                                    <div class="content">
                                        <h5>Full Gents Hair Wig</h5>
                                        <p class="wig-description">We are a trusted manufacturer, exporter, and supplier of
                                            Full Gents Hair Wigs, based in Bhopal, India. <br>Crafted using high-quality
                                            synthetic materials, this wig offers a full-cap coverage that comfortably fits
                                            the entire head.</p>
                                    </div>
                                    <div class="image">
                                        <a href="assets/images/about/full-gents.jpg">
                                            <img src="assets/images/about/full-gents.jpg" alt="Full Gents Hair Wig">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="wig-card wow fadeInUp delay-0-4s">

                                    <div class="content">
                                        <h5>Hair Patch Wig</h5>
                                        <p class="wig-description">We are proud to be counted among Bhopal, India's leading
                                            manufacturers, exporters, and suppliers of premium Hair Patch Wigs. The patch
                                            features a rectangular base design that fits naturally and is secured with
                                            body-safe adhesive for a strong yet gentle hold.</p>
                                    </div>
                                    <div class="image">
                                        <a href="assets/images/about/hair-patch.jpg">
                                            <img src="assets/images/about/hair-patch.jpg" alt="Hair Patch Wig">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="wig-card wow fadeInUp delay-0-2s">

                                    <div class="content">
                                        <h5>Natural Hair Wig</h5>
                                        <p class="wig-description">Our Natural Hair Wigs are crafted from 100%
                                            premium-quality human hair, offering a natural look and feel. Available in a
                                            variety of stylish shades, these wigs blend seamlessly with your own hair,
                                            enhancing both comfort and confidence.</p>
                                    </div>
                                    <div class="image">
                                        <a href="assets/images/about/natural-hair.jpg">
                                            <img src="assets/images/about/natural-hair.jpg" alt="Natural Hair Wig">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="wig-card wow fadeInUp delay-0-4s">

                                    <div class="content">
                                        <h5>Polyfuse Hair Wig</h5>
                                        <p class="wig-description">Our Polyfuse Hair Wigs are designed to enhance your
                                            appearance with versatility and style. Available in a wide range of colors and
                                            trendy styles, these wigs offer a natural and confident look for every
                                            individual. We also provide custom design options based on customer preferences.
                                        </p>
                                    </div>
                                    <div class="image">
                                        <a href="assets/images/about/polyfuse.jpg">
                                            <img src="assets/images/about/polyfuse.jpg" alt="Polyfuse Hair Wig">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade " id="beauty">
                        <div class="row">
                            <!-- First 6 Cards (initially visible) -->
                            <div class="col-lg-6  ">
                                <div class="wig-card wow fadeInUp delay-0-2s">
                                    <div class="content">
                                        <h5>Front Lace Patch Hair Wig</h5>
                                        <p class="wig-description">Perfect for a natural look with a lace front that blends
                                            seamlessly with your scalp.</p>
                                    </div>
                                    <div class="image">
                                        <img src="assets/images/wigs/front-lace-patch.jpg"
                                            alt="Front Lace Patch Hair Wig">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 ">
                                <div class="wig-card wow fadeInUp delay-0-2s">
                                    <div class="content">
                                        <h5>Light Brown Hair Wig</h5>
                                        <p class="wig-description">Soft, smooth texture in a natural light brown shade,
                                            ideal
                                            for all skin tones.</p>
                                    </div>
                                    <div class="image">
                                        <img src="assets/images/wigs/light-brown.jpg" alt="Light Brown Hair Wig">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 ">
                                <div class="wig-card wow fadeInUp delay-0-2s">
                                    <div class="content">
                                        <h5>Remy Single Drawn Hair Wig</h5>
                                        <p class="wig-description">Premium Remy hair with single drawn strands for a
                                            natural,
                                            luxurious finish.</p>
                                    </div>
                                    <div class="image">
                                        <img src="assets/images/wigs/remy-single-drawn.jpg"
                                            alt="Remy Single Drawn Hair Wig">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 ">
                                <div class="wig-card wow fadeInUp delay-0-2s">
                                    <div class="content">
                                        <h5>Curly Hair Women Wig</h5>
                                        <p class="wig-description">A beautiful curly texture for a bouncy, voluminous look.
                                        </p>
                                    </div>
                                    <div class="image">
                                        <img src="assets/images/wigs/curly-women.jpg" alt="Curly Hair Women Wig">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 ">
                                <div class="wig-card wow fadeInUp delay-0-2s">
                                    <div class="content">
                                        <h5>Dark Brown Hair Women Wig</h5>
                                        <p class="wig-description">Rich dark brown shade, designed for a sleek and
                                            sophisticated appearance.</p>
                                    </div>
                                    <div class="image">
                                        <img src="assets/images/wigs/dark-brown.jpg" alt="Dark Brown Hair Women Wig">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 ">
                                <div class="wig-card wow fadeInUp delay-0-2s">
                                    <div class="content">
                                        <h5>Designer Women Hair Wig</h5>
                                        <p class="wig-description">Chic and stylish wigs, perfect for special occasions or
                                            everyday glam.</p>
                                    </div>
                                    <div class="image">
                                        <img src="assets/images/wigs/designer-women.jpg" alt="Designer Women Hair Wig">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="bodyy">
                        <div class="row">
                            <!-- Card 1 -->
                            <div class="col-lg-6 ">
                                <div class="wig-card wow fadeInUp delay-0-2s">
                                    <div class="content">
                                        <h5>Ladies Lace Hair System</h5>
                                        <p class="wig-description">
                                            Crafted with delicate lace for a seamless, breathable fit. Designed to offer
                                            natural-looking volume and effortless elegance.
                                        </p>
                                    </div>
                                    <div class="image">
                                        <img src="assets/images/wigs/ladies-lace-system.jpg"
                                            alt="Ladies Lace Hair System">
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="col-lg-6 ">
                                <div class="wig-card wow fadeInUp delay-0-2s">
                                    <div class="content">
                                        <h5>Mens Lace Hair System</h5>
                                        <p class="wig-description">
                                            Ultra-thin lace base for undetectable finish. Perfectly blends with the scalp
                                            and
                                            provides a secure, natural hairline.
                                        </p>
                                    </div>
                                    <div class="image">
                                        <img src="assets/images/wigs/mens-lace-system.jpg" alt="Mens Lace Hair System">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="washing">
                        <div class="row">
                            <!-- Card 1 -->
                            <div class="col-lg-6 ">
                                <div class="wig-card wow fadeInUp delay-0-2s">
                                    <div class="content">
                                        <h5>Body Wave Hair Extension</h5>
                                        <p class="wig-description">
                                            Luxurious body wave texture adds natural volume and bounce. Perfect for everyday
                                            glam or special occasions.
                                        </p>
                                    </div>
                                    <div class="image">
                                        <img src="assets/images/wigs/body-wave.jpg" alt="Body Wave Hair Extension">
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="col-lg-6 ">
                                <div class="wig-card wow fadeInUp delay-0-2s">
                                    <div class="content">
                                        <h5>Indian Wavy Hair Extension</h5>
                                        <p class="wig-description">
                                            Authentic Indian wavy hair with a silky, natural flow. Blends beautifully with
                                            most
                                            hair types.
                                        </p>
                                    </div>
                                    <div class="image">
                                        <img src="assets/images/wigs/indian-wavy.jpg" alt="Indian Wavy Hair Extension">
                                    </div>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div class="col-lg-6 ">
                                <div class="wig-card wow fadeInUp delay-0-2s">
                                    <div class="content">
                                        <h5>Clip In Hair Extension</h5>
                                        <p class="wig-description">
                                            Easy to use and secure. Instantly add length and volume with no damage to your
                                            natural hair.
                                        </p>
                                    </div>
                                    <div class="image">
                                        <img src="assets/images/wigs/clip-in.jpg" alt="Clip In Hair Extension">
                                    </div>
                                </div>
                            </div>

                            <!-- Card 4 -->
                            <div class="col-lg-6 ">
                                <div class="wig-card wow fadeInUp delay-0-2s">
                                    <div class="content">
                                        <h5>Micro Hair Extension</h5>
                                        <p class="wig-description">
                                            Lightweight and virtually invisible micro-ring extensions that provide a
                                            seamless,
                                            long-lasting transformation.
                                        </p>
                                    </div>
                                    <div class="image">
                                        <img src="assets/images/wigs/micro.jpg" alt="Micro Hair Extension">
                                    </div>
                                </div>
                            </div>

                            <!-- Card 5 -->
                            <div class="col-lg-6 ">
                                <div class="wig-card wow fadeInUp delay-0-2s">
                                    <div class="content">
                                        <h5>Indian Remy Hair Extension</h5>
                                        <p class="wig-description">
                                            Premium Remy hair sourced from India. Naturally aligned cuticles for durability,
                                            softness, and shine.
                                        </p>
                                    </div>
                                    <div class="image">
                                        <img src="assets/images/wigs/remy.jpg" alt="Indian Remy Hair Extension">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="meditations">
                        <div class="row">
                            <!-- Card 1 -->
                            <div class="col-lg-6 ">
                                <div class="wig-card wow fadeInUp delay-0-2s">
                                    <div class="content">
                                        <h5>C-22 Solvent Citrus Adhesive Remover</h5>
                                        <p class="wig-description">
                                            Effective and skin-safe citrus-based remover for tapes and glues. Quick, clean,
                                            and
                                            gentle on the skin.
                                        </p>
                                    </div>
                                    <div class="image">
                                        <img src="assets/images/wigs/c22-solvent.jpg"
                                            alt="C-22 Solvent Citrus Adhesive Remover">
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="col-lg-6 ">
                                <div class="wig-card wow fadeInUp delay-0-2s">
                                    <div class="content">
                                        <h5>Hair Soften Essence Capsules</h5>
                                        <p class="wig-description">
                                            Enriched with nourishing oils to keep your wig hair soft, manageable, and full
                                            of
                                            life.
                                        </p>
                                    </div>
                                    <div class="image">
                                        <img src="assets/images/wigs/essence-capsules.jpg"
                                            alt="Hair Soften Essence Capsules">
                                    </div>
                                </div>
                            </div>

                            <!-- Card 3 -->
                            <div class="col-lg-6 ">
                                <div class="wig-card wow fadeInUp delay-0-2s">
                                    <div class="content">
                                        <h5>Hair Patch Clips</h5>
                                        <p class="wig-description">
                                            Durable metal clips with strong grip. Easy to sew and securely attach patches or
                                            wigs to your hair.
                                        </p>
                                    </div>
                                    <div class="image">
                                        <img src="assets/images/wigs/patch-clips.jpg" alt="Hair Patch Clips">
                                    </div>
                                </div>
                            </div>

                            <!-- Card 4 -->
                            <div class="col-lg-6 ">
                                <div class="wig-card wow fadeInUp delay-0-2s">
                                    <div class="content">
                                        <h5>Vapon No Tape Silicone Bonding Adhesive</h5>
                                        <p class="wig-description">
                                            Clear, waterproof silicone adhesive that holds securely without the need for
                                            tape.
                                        </p>
                                    </div>
                                    <div class="image">
                                        <img src="assets/images/wigs/vapon.jpg"
                                            alt="Vapon No Tape Silicone Bonding Adhesive">
                                    </div>
                                </div>
                            </div>

                            <!-- Card 5 -->
                            <div class="col-lg-6 ">
                                <div class="wig-card wow fadeInUp delay-0-2s">
                                    <div class="content">
                                        <h5>Top Loc Knot Sealer</h5>
                                        <p class="wig-description">
                                            Extends the life of your lace wig by sealing knots and preventing hair fall.
                                        </p>
                                    </div>
                                    <div class="image">
                                        <img src="assets/images/wigs/knot-sealer.jpg" alt="Top Loc Knot Sealer">
                                    </div>
                                </div>
                            </div>

                            <!-- Card 6 -->
                            <div class="col-lg-6 ">
                                <div class="wig-card wow fadeInUp delay-0-2s">
                                    <div class="content">
                                        <h5>Red Tape Rolls</h5>
                                        <p class="wig-description">
                                            High-adhesion red tape rolls perfect for daily and extended wear. Comfortable
                                            and
                                            secure hold.
                                        </p>
                                    </div>
                                    <div class="image">
                                        <img src="assets/images/wigs/red-tape.jpg" alt="Red Tape Rolls">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="shaving">
                        <div class="row" id="chemo-wig-cards">
                            <!-- Card 1 -->
                            <div class="col-lg-6 ">
                                <div class="wig-card wow fadeInUp delay-0-2s">
                                    <div class="content">
                                        <h5>Ladies Chemotherapy Wigs</h5>
                                        <p class="wig-description">
                                            Soft, breathable wigs designed for comfort and style during hair loss.
                                            Lightweight
                                            and gentle on sensitive scalps.
                                        </p>
                                    </div>
                                    <div class="image">
                                        <img src="assets/images/wigs/ladies.jpg" alt="Ladies Chemotherapy Wigs">
                                    </div>
                                </div>
                            </div>

                            <!-- Card 2 -->
                            <div class="col-lg-6 ">
                                <div class="wig-card wow fadeInUp delay-0-2s">
                                    <div class="content">
                                        <h5>Mens Chemotherapy Wigs</h5>
                                        <p class="wig-description">
                                            Natural-looking hair systems crafted specifically for men undergoing
                                            chemotherapy.
                                            Discreet and comfortable fit.
                                        </p>
                                    </div>
                                    <div class="image">
                                        <img src="assets/images/wigs/mens.jpg" alt="Mens Chemotherapy Wigs">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our product  Area End -->

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
                        <a href="{{ url('/gallary') }}" class="theme-btn">explore more gallery <i
                                class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-sm-6">
                    <div class="gallery-item wow fadeInUp delay-0-2s">
                        <img src="assets/images/gellary/gallary1.jpg" alt="Gallery">
                        <div class="gallery-content">
                            <h3>Hair patching</h3>
                            <p>Hair replacement Services</p>
                            {{-- <a href="portfolio-details.php" class="details-btn"><i class="far fa-long-arrow-right"></i></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="gallery-item wow fadeInUp delay-0-4s">
                        <img src="assets/images/gellary/gallary2.jpg" alt="Gallery">
                        <div class="gallery-content">
                            <h3>Hair patching</h3>
                            <p>Hair replacement Services</p>
                            {{-- <a href="portfolio-details.php" class="details-btn"><i class="far fa-long-arrow-right"></i></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="gallery-item wow fadeInUp delay-0-6s">
                        <img src="assets/images/gellary/gallary3.jpg" alt="Gallery">
                        <div class="gallery-content">
                            <h3>Hair patching</h3>
                            <p>Hair replacement Services</p>
                            {{-- <a href="portfolio-details.php" class="details-btn"><i class="far fa-long-arrow-right"></i></a> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6">
                    <div class="gallery-item wow fadeInUp delay-0-8s">
                        <img src="assets/images/gellary/gallary4.jpg" alt="Gallery">
                        <div class="gallery-content">
                            <h3>Hair patching</h3>
                            <p>Hair replacement Services</p>
                            {{-- <a href="portfolio-details.php" class="details-btn"><i class="far fa-long-arrow-right"></i></a> --}}
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
        {{-- <div class="contact-shapes">
            <img class="shape-one" src="assets/images/shapes/contact-one.png" alt="Shape">
            <img class="shape-two" src="assets/images/shapes/contact-two.png" alt="Shape">
        </div> --}}
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
                        <p>At Smart Hair Beauty, we believe in creating an experience that goes beyond just great hair, What
                            clients might say after having a great experience at your salon.</p>
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
                        <p>The service at Smart Hair Beauty is unbeatable. I went in for a deep conditioning treatment and
                            left with silky, smooth hair. </p>
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
