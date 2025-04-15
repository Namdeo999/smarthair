@extends('layouts.app')
@section('page_title', 'About')

@section('content')

    <!-- Page Header Start -->
    <section class="page-banner text-white py-190 rpy-130" style="background-image: url(assets/images/banner/banner.jpg);">
        <div class="container">
            <div class="banner-inner">
                <h1 class="page-title wow fadeInRight delay-0-2s">About</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center wow fadeInLeft delay-0-2s">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">About</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- Page Header End -->

    <!-- About Start -->
    <section class="about-us-area-two pt-130 rpt-100">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <div class="about-image-two rmb-75 wow fadeInLeft delay-0-2s">
                        <img src="assets/images/about/about-two.jpg" alt="About">
                        <span class="big-letter">b</span>
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6 align-self-center">
                    <div class="about-content-two wow fadeInRight delay-0-2s">
                        <div class="logo mb-40">
                            <img src="assets/images/about/logo.png" alt="Logo">
                        </div>
                        <div class="section-title mb-25">
                            <h2 class="title">Best barbers & hair cutting salon</h2>
                        </div>
                        <p>At Smart Hair Beauty, we’re all about precision, style, and comfort. Our expert barbers and
                            stylists are passionate about bringing out the best in every client — whether it’s a sharp new
                            fade, a classic cut, or a fresh modern look. We focus on clean techniques, top-tier products,
                            and a welcoming atmosphere where every visit feels like a treat. </p>
                        <a href="about.php" class="theme-btn style-two mt-30">more about us <i
                                class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
    <!-- About End -->


    <!-- Team Start -->
    {{-- <div class="team">
        <div class="container">
            <div class="section-header text-center">
                <p>Our Barber Team</p>
                <h2>Meet Our Hair Cut Expert Barber</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-1.jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Adam Phillips</h2>
                            <p>Master Barber</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-2.jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Dylan Adams</h2>
                            <p>Hair Expert</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-3.jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Gloria Edwards</h2>
                            <p>Beard Expert</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="team-item">
                        <div class="team-img">
                            <img src="img/team-4.jpg" alt="Team Image">
                        </div>
                        <div class="team-text">
                            <h2>Josh Dunn</h2>
                            <p>Color Expert</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Team End -->

@endsection
