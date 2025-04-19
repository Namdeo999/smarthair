@extends('layouts.app')
@section('page_title', 'contact')

@section('content')

  <section class="page-banner text-white py-190 rpy-130" style="background-image: url(assets/images/banner/banner.jpg);">
            <div class="container">
                <div class="banner-inner">
                    <h1 class="page-title wow fadeInRight delay-0-2s">Contact</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center wow fadeInLeft delay-0-2s">
                            <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Contact</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
        <!-- Page Banner End -->        
        
        <!-- Contact Page Section Start -->
        <section class="contact-page pt-120 pb-130 rpt-90 rpb-100">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-4 col-lg-5">
                        <div class="contact-info-wrap rmb-55 wow fadeInLeft delay-0-2s">
                            <div class="section-title mb-40">
                                <h2>Contact Us</h2>
                                <p> Our friendly team at Smart Hair Beauty is always happy to assist you.</p>
                            </div>
                            <div class="contact-info-part p-40">
                                <div class="contact-info-item">
                                    <div class="icon">
                                        <i class="fal fa-map-marker-alt"></i>
                                    </div>
                                    <div class="content">
                                        <h3>Address</h3>
                                        <span>E-4 /151 FLAT NO. 4 HARERAM COMPLEX, 10 No. market, E-4, Arera Colony, Bhopal, Madhya Pradesh 462016</span>
                                    </div>
                                </div>
                                <div class="contact-info-item">
                                    <div class="icon">
                                        <i class="fal fa-envelope-open"></i>
                                    </div>
                                    <div class="content">
                                        <h3>Email Us</h3>
                                        <a href="mailto:support@gmail.com">support@gmail.com</a><br>
                                        <a href="www.smarthairbeauty.com">www.smarthairbeauty.com</a>
                                    </div>
                                </div>
                                <div class="contact-info-item">
                                    <div class="icon">
                                        <i class="fal fa-phone"></i>
                                    </div>
                                    <div class="content">
                                        <h3>Phone</h3>
                                        <a href="calto:+918889666653">+91 8889666653</a><br>
                                        <a href="calto:+919009255060">+91 9009255060</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="contact-page-form wow fadeInRight delay-0-2s">
                            <div class="row">
                                <div class="col-lg-11 col-md-10">
                                    <div class="section-title mb-40">
                                        <h2>send us message</h2>
                                        <p>Got a question, feedback, or want to book an appointment? We’d love to hear from you! Simply fill out the form below and our team will get back to you shortly.</p>
                                    </div>
                                </div>
                            </div>
                            <form id="contactForm" action="assets/php/form-process.php" name="contactForm" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="name" name="name" class="form-control" value="" placeholder="Your Full name" required="" data-error="Please enter your name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="phone" name="phone" class="form-control" value="" placeholder="Phone Number" >
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" id="email" name="email" class="form-control" value="" placeholder="Email Address" required="" data-error="Please enter your Email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="subject" name="subject" class="form-control" value="" placeholder="Subject">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" id="message" class="form-control" rows="3" placeholder="Write message" required="" data-error="Please enter your Message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="form-group mb-0">
                                            <button type="submit" class="theme-btn">send message <i class="far fa-long-arrow-right"></i></button>
                                            <div id="msgSubmit" class="hidden"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Page Section End -->

       
       <!-- Map Area Start -->
        <div class="contact-page-map wow fadeInUp delay-0-2s">
            {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d136834.1519573059!2d-74.0154445224086!3d40.7260256534837!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1639991650837!5m2!1sen!2sbd" style="border:0; width: 100%;" allowfullscreen="" loading="lazy"></iframe> --}}
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d117336.18126155136!2d77.35347380127457!3d23.21557343379343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1744824089301!5m2!1sen!2sin"style="border:0; width: 100%;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <!-- Map Area End -->
       

@endsection
