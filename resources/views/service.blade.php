@extends('layouts.app')
@section('page_title', 'service')

@section('content')

    <!-- Page Header Start -->
    <section class="page-banner text-white py-190 rpy-130" style="background-image: url(assets/images/banner/banner.jpg);">
        <div class="container">
            <div class="banner-inner">
                <h1 class="page-title wow fadeInRight delay-0-2s">Services</h1>
                {{-- <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center wow fadeInLeft delay-0-2s">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                        <li class="breadcrumb-item active">Services</li>
                    </ol>
                </nav> --}}
            </div>
        </div>

    </section>
    <!-- Page Header End -->

    <!-- About Us Area Start -->
    <section class="about-us-four py-130 rpt-100 rpb-90">
        <div class="container">
            <div class="row align-items-center justify-content-around">
                <div class="col-lg-6">
                    <div class="about-left-image rmb-55 wow fadeInUp delay-0-2s">
                        <img src="assets/images/about/service-page-about.jpg" alt="About Left">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="about-content-four wow fadeInUp delay-0-4s">
                        <h3 class="experience mb-35"><span class="number">15</span> years of experience</h3>
                        <div class="section-title mb-35">
                            <h2 class="title">we’re Best barbers & hair cutting salon</h2>
                        </div>
                        <p>At Smart Hair Beauty, excellence is more than a promise — it’s our standard. With a team of
                            skilled barbers and stylists, we deliver precision cuts, fresh fades, and timeless styles
                            tailored just for you. Every service is backed by quality, care, and a passion for making you
                            look and feel your absolute best.

                            We combine expert technique with a welcoming vibe to give you more than just a haircut — we give
                            you a full grooming experience. Whether you're after a classic look or a bold new style, you're
                            in the right hands.</p>
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
        </div>
    </section>
    <!-- About Us Area End -->

    <!--Services Area Start -->
    <section class="pricing-plan-area bgs-cover pt-120 rpt-90 pb-130 rpb-100"
        style="background-image: url(assets/images/background/pricing-plan-bg1.jpg);">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-8">
                    <div class="section-title text-white text-center mb-55">
                        <h2 class="title">Our Services</h2>
                        <p>We offer a complete grooming and self-care experience. From sharp barbering services to soothing treatments, our goal is to help you look fresh and feel good.

                            Servic</p>
                    </div>
                </div>
            </div>
            <div class="price-tab-wrap p-40 bg-white">
                <ul class="nav nav-justified price-tab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab" href="#hair">
                            <i class="flaticon-beauty-salon"></i>
                            <span>Hair weaving</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#beauty">
                            <i class="flaticon-relax"></i>
                            <span>Hair bonding <br>treatment</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#bodyy">
                            <i class="flaticon-massage"></i>
                            <span>Hair fall <br>treatment</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#washing">
                            <i class="flaticon-spa"></i>
                            <span>Hair replacement <br> service</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#meditations">
                            <i class="flaticon-yoga"></i>
                            <span>Hair extension <br>service</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#shaving">
                            <i class="flaticon-razor-blade"></i>
                            <span>Hair fixing <br> service</span>
                        </a>
                    </li>
                </ul>
                <div class="tab-content price-tab-content">
                    <div class="tab-pane fade show active" id="hair">
                        <div class="row">
                            <div class="py-5 mt-5 ">
                                <div class="container">
                                    <div class="row my-4">
                                        <div class="col text-center">
                                            <h2 class="fw-bold">Hair Weaving in Bhopal</h2>
                                            <p class="text-muted">Non-surgical solutions for hair loss — natural, safe, and
                                                confident.</p>
                                        </div>
                                    </div>

                                    <div class="row align-items-center">
                                        <div class="col-md-3">
                                            <img src="{{ asset('/assets/images/price/hair_weaving.png') }}"
                                                style="object-fit: cover; height: 300px;" alt="Hair Weaving in Bhopal"
                                                class="img-fluid rounded shadow">
                                        </div>
                                        <div class="col-md-9">
                                            <p>Hair weaving is a non-surgical method for restoring hair and treating partial
                                                baldness, ideal for both men and women. At <strong>Smart Hair
                                                    Beauty</strong>, we
                                                offer advanced and painless hair weaving services in Bhopal using safe and
                                                skin-friendly techniques.</p>
                                            <ul class="list-unstyled">
                                                <li class="gold-check"> 100% non-surgical and pain-free</li>
                                                <li class="gold-check"> Fixed hair patch — stays in place</li>
                                                <li class="gold-check"> Skin-friendly with no irritation</li>
                                                <li class="gold-check"> Allows bathing, swimming, gym & more</li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="beauty">
                        <div class="row">
                            <section class="py-5 mt-5 " id="hair-bonding">
                                <div class="container">
                                  <div class="row my-4">
                                    <div class="col text-center">
                                      <h2 class="fw-bold">Hair Bonding in Bhopal</h2>
                                      <p class="text-muted">Advanced, safe & affordable non-surgical solution for hair loss.</p>
                                    </div>
                                  </div>
                              
                                  <div class="row align-items-center">
                                    <div class="col-md-3">
                                      <img src="{{ asset('/assets/images/price/hair_bonding.png') }}"  style="object-fit: cover; height: 300px;" alt="Hair Bonding in Bhopal" class="img-fluid rounded shadow">
                                    </div>
                                    <div class="col-md-9">
                                      <p>
                                        At <strong>Smart Hair Beauty</strong>, we provide professional hair bonding treatments in Bhopal that restore your look with zero pain or surgery. This quick and cost-effective solution works for all stages of baldness and suits both men and women.
                                      </p>
                                      <ul class="list-unstyled">
                                        <li class="gold-check"> Non-surgical and painless hair replacement</li>
                                        <li class="gold-check"> One-day procedure — walk in, walk out with hair</li>
                                        <li class="gold-check"> Skin-friendly, dermatologically tested patches</li>
                                        <li class="gold-check"> Easy to remove and reattach when needed</li>
                                        <li class="gold-check"> Ideal for low-maintenance hair restoration</li>
                                      </ul>
                                      {{-- <a href="#contact" class="btn btn-warning mt-3">Book a Free Consultation</a> --}}
                                    </div>
                                  </div>
                                </div>
                              </section>
                              
                        </div>
                    </div>
                    <div class="tab-pane fade" id="bodyy">
                        <div class="row">
                            <section class="py-5 " id="hair-fall-treatment">
                                <div class="container">
                                  <div class="row my-4">
                                    <div class="col text-center">
                                      <h2 class="fw-bold">Hair Fall Treatment in Bhopal</h2>
                                      <p class="text-muted">Restore your natural hair and confidence with our expert care.</p>
                                    </div>
                                  </div>
                              
                                  <div class="row align-items-center">
                                    <div class="col-md-3">
                                      <img src="{{ asset('/assets/images/price/hair_fall.png') }}"  style="object-fit: cover; height: 300px;" alt="Hair Fall Treatment" class="img-fluid rounded shadow">
                                    </div>
                                    <div class="col-md-9">
                                      <p>
                                        At <strong>Smart Hair Beauty</strong>, we provide expert, non-surgical hair fall treatments designed to address the root cause of hair loss. Our advanced therapies are suitable for both men and women, using techniques like scalp nourishment, herbal therapy, and modern technology to stimulate healthy hair growth.
                                      </p>
                                      <p>
                                        Whether you're suffering from hair thinning, bald patches, or receding hairlines, we evaluate your condition and craft a personalized plan for maximum results — all at affordable prices.
                                      </p>
                                      <ul class="list-unstyled">
                                        <li class="gold-check"> Safe, non-invasive treatments with no side effects</li>
                                        <li class="gold-check"> Dermatologist-approved and quality-tested products</li>
                                        <li class="gold-check"> Results visible in just a few sessions</li>
                                        <li class="gold-check"> Experienced specialists and friendly staff</li>
                                        <li class="gold-check"> Consultation and after-care included</li>
                                      </ul>
                                      {{-- <a href="#contact" class="btn btn-warning mt-3">Book a Free Hair Consultation</a> --}}
                                    </div>
                                  </div>
                                </div>
                              </section>
                              
                        </div>
                    </div>
                    <div class="tab-pane fade" id="washing">
                        <div class="row">
                            <section class="py-5 " id="hair-replacement">
                                <div class="container">
                                  <div class="row my-4 text-center">
                                    <div class="col">
                                      <h2 class="fw-bold">Hair Replacement Service</h2>
                                      <p class="text-muted">Non-surgical hair restoration solutions tailored to your style and comfort.</p>
                                    </div>
                                  </div>
                                  <div class="row align-items-center">
                                    <div class="col-md-3">
                                        <img src="{{ asset('/assets/images/price/hair_replacement.png') }}"  style="object-fit: cover; height: 300px;" alt="Hair Replacement in Bhopal" class="img-fluid rounded shadow">
                                    </div>
                                    <div class="col-md-9">
                                      <p>
                                        At <strong>Bhatis Hair</strong>, we specialize in restoring your hair and confidence with modern, non-surgical hair replacement techniques. Whether you need bonding, weaving, clipping, or taping, our experts ensure a natural finish and secure fit — all customized to suit your hair type and style.
                                      </p>
                                      <ul class="list-unstyled">
                                        <li class="gold-check"> Personalized hair system matching your natural hair</li>
                                        <li class="gold-check"> Painless, affordable, and surgery-free</li>
                                        <li class="gold-check"> Long-lasting hold with breathable materials</li>
                                        <li class="gold-check"> Trusted by hundreds of happy clients in Bhopal</li>
                                      </ul>
                                      {{-- <a href="#contact" class="btn btn-dark mt-3">Book Your Appointment</a> --}}
                                    </div>
                                  </div>
                                </div>
                              </section>
                              
                        </div>
                    </div>
                    <div class="tab-pane fade" id="meditations">
                        <div class="row">
                            <section class="py-5 " id="hair-extension">
                                <div class="container">
                                  <div class="row text-center my-4">
                                    <div class="col">
                                      <h2 class="fw-bold">Hair Extension Services</h2>
                                      <p class="text-muted">Get fuller, longer, and stunning hair with our expert hair extension solutions.</p>
                                    </div>
                                  </div>
                                  <div class="row align-items-center">
                                    <div class="col-md-3">
                                        <img src="{{ asset('/assets/images/price/hair_extention.png') }}"  style="object-fit: cover; height: 300px;" alt="Hair Extensions in Bhopal" class="img-fluid rounded shadow">
                                    </div>
                                    <div class="col-md-9">
                                      <p>
                                        At <strong>Bhatis Hair</strong>, we offer premium hair extension services that are natural-looking, smooth, and professionally fitted. Our team ensures the extensions blend perfectly with your hair for a flawless and confident look. From adding volume to achieving extra length — we’ve got you covered!
                                      </p>
                                      <ul class="list-unstyled">
                                        <li class="gold-check"> Long-lasting and tangle-free quality</li>
                                        <li class="gold-check"> Safe & damage-free application</li>
                                        <li class="gold-check"> Available in multiple shades and styles</li>
                                        <li class="gold-check"> Affordable pricing for every budget</li>
                                      </ul>
                                      {{-- <a href="#appointment" class="btn btn-warning mt-3">Book Now</a> --}}
                                    </div>
                                  </div>
                                </div>
                              </section>
                              
                        </div>
                    </div>
                    <div class="tab-pane fade" id="shaving">
                        <div class="row">
                            <section class="py-5" id="hair-fixing">
                                <div class="container">
                                  <div class="row text-center my-4">
                                    <div class="col">
                                      <h2 class="fw-bold">Hair Fixing Services</h2>
                                      <p class="text-muted">Rediscover your confidence with natural-looking, non-surgical hair solutions.</p>
                                    </div>
                                  </div>
                                  <div class="row align-items-center">
                                    <div class="col-md-3">
                                        <img src="{{ asset('/assets/images/price/hair_fixing.png') }}"  style="object-fit: cover; height: 300px;" class="img-fluid rounded shadow">
                                    </div>
                                    <div class="col-md-9">
                                      <p>
                                        At <strong>Bhatis Hair</strong>, we offer personalized hair fixing services using advanced techniques that deliver a seamless and secure hair restoration experience. Our team ensures every client leaves with healthy, fuller, and natural-looking hair.
                                      </p>
                                      <ul class="list-unstyled">
                                        <li class="gold-check">Completely non-surgical & pain-free</li>
                                        <li class="gold-check">Customized fitting for every scalp type</li>
                                        <li class="gold-check">Breathable and lightweight systems</li>
                                        <li class="gold-check">Reasonably priced with long-term durability</li>
                                      </ul>
                                      {{-- <a href="#appointment" class="btn btn-warning mt-3">Book Appointment</a> --}}
                                    </div>
                                  </div>
                                </div>
                              </section>
                              
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Area End -->

    <!-- What We Offer Start -->
    {{-- <section class="what-we-offer-three bg-black rel z-2 pt-120 rpt-90 pb-130 rpb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 col-md-10">
                    <div class="section-title text-white text-center mb-55">
                        <h2 class="title">what we offers</h2>
                        <p>We offer a complete grooming and self-care experience. From sharp barbering services to soothing
                            treatments, our goal is to help you look fresh and feel good.</p>
                        <span class="sub-title">Services</span>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-xl-2 col-lg-3 col-md-4 col-6 col-small">
                    <div class="ww-offer-item wow fadeInUp delay-0-2s">
                        <i class="flaticon-salon"></i>
                        <h4><a href="service-details.php">Hair Cutting</a></h4>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-6 col-small">
                    <div class="ww-offer-item wow fadeInUp delay-0-3s">
                        <i class="flaticon-shampoo"></i>
                        <h4><a href="service-details.php">Hair Washing</a></h4>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-6 col-small">
                    <div class="ww-offer-item wow fadeInUp delay-0-4s">
                        <i class="flaticon-hot-stone"></i>
                        <h4><a href="service-details.php">Body Massage</a></h4>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-6 col-small">
                    <div class="ww-offer-item wow fadeInUp delay-0-5s">
                        <i class="flaticon-treatment"></i>
                        <h4><a href="service-details.php">Beauty & Spa</a></h4>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-6 col-small">
                    <div class="ww-offer-item wow fadeInUp delay-0-6s">
                        <i class="flaticon-shaving-razor"></i>
                        <h4><a href="service-details.php">Stylist Shaving</a></h4>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-3 col-md-4 col-6 col-small">
                    <div class="ww-offer-item wow fadeInUp delay-0-7s">
                        <i class="flaticon-hair-dye"></i>
                        <h4><a href="service-details.php">Hair Colors</a></h4>
                    </div>
                </div>
            </div>
            <div class="row align-items-center mt-30">
                <div class="col-lg-5">
                    <div class="morder-tools-content text-white rmb-55 wow fadeInLeft delay-0-2s">
                        <h3>modern tools for your hair style fashion</h3>
                        <p>we blend creativity with cutting-edge technology to give you the perfect look. Our salon is
                            equipped with the latest tools and professional-grade equipment, ensuring every cut, style, and
                            treatment is done with precision and care.</p>
                        <a href="about.php" class="theme-btn style-four mt-20">learn more <i
                                class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="morder-toots-image wow fadeInRight delay-0-2s">
                        <img src="assets/images/about/modern-tools.jpg" alt="Modern Tools">
                    </div>
                </div>
            </div>
        </div>
        <div class="services-shapes">
            <img class="shape-one" src="assets/images/shapes/wwo-one.png" alt="Shape">
            <img class="shape-two" src="assets/images/shapes/wwo-two.png" alt="Shape">
        </div>
    </section> --}}
    <!-- What We Offer End -->


    <!-- Working + Contact Start -->
    <section class="working-contact pt-100 rpt-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="working-hour text-white bgs-cover mt-30 br-10 overflow-hidden p-60 py-50 wow fadeInUp delay-0-2s"
                        style="background-image: url(assets/images/background/working-hour-bg.jpg);">
                        <h3>working hours</h3>
                        <p>We’re here to keep you looking fresh — every day of the week!</p>
                        <table>
                            <tr>
                                <td>MONDAY</td>
                                <td>10.00-08.00</td>
                            </tr>
                            <tr>
                                <td>TUESDAY</td>
                                <td>10.00-08.00</td>
                            </tr>
                            <tr>
                                <td>WEDNASDAY</td>
                                <td>10.00-08.00</td>
                            </tr>
                            <tr>
                                <td>THURSDAY</td>
                                <td>10.00-08.00</td>
                            </tr>
                            <tr>
                                <td>FRIDAY</td>
                                <td>10.00-08.00</td>
                            </tr>
                            <tr>
                                <td>SATUREDAY</td>
                                <td>10.00-08.00</td>
                            </tr>
                            <tr>
                                <td>SUNDAY</td>
                                <td><span class="color-yellow">Closed</span></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact-form-wrap br-10 overflow-hidden mt-30 mb-30">
                        <form action="#" class="bg-yellow bgs-cover wow fadeInUp delay-0-4s"
                            style="background-image: url(assets/images/contact/contact-bg.png);">
                            <div class="row justify-content-center mb-35 text-white text-center">
                                <div class="col-lg-10">
                                    <div class="section-title text-white">
                                        <h2 class="title">Make appointment</h2>
                                    </div>
                                    <p>Ready for a fresh new look? Booking your appointment at Smart Hair Beauty is quick
                                        and easy!</p>
                                </div>
                            </div>
                            <div class="row small-gap">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="name" name="name" class="form-control"
                                            value="" placeholder="Your Full Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" id="email" name="email" class="form-control"
                                            value="" placeholder="Email Address" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="phone" name="phone" class="form-control"
                                            value="" placeholder="Phone Number" required>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-20">
                                    <div class="form-group">
                                        <select name="select-category" id="select-category">
                                            <option value="value1">Select Category</option>
                                            <option value="value1">Hair Cutting</option>
                                            <option value="value1">Hair Color</option>
                                            <option value="value1">Shaving & Facial</option>
                                            <option value="value1">Hair Patch</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="date-time"><i class="far fa-calendar-alt"></i></label>
                                        <input type="text" id="date-time" name="date-time" class="form-control"
                                            value="" placeholder="Appointment Date & Time">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group mb-0">
                                        <button type="submit" class="theme-btn btn-border w-100">appointment now<i
                                                class="far fa-long-arrow-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Working + Contact End -->

@endsection
