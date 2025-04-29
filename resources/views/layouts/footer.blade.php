<div class="container">
      <!-- resources/views/components/whatsapp-button.blade.php -->
      @props(['phone' => '918889666653', 'message' => "Hello! I’d like to know more about your salon services. Could you share details and pricing?"])

      <a href="https://wa.me/{{ $phone }}?text={{ urlencode($message) }}" class="whatsapp-float" target="_blank">
          <img src="{{ asset('assets/images/whatsapp-icon.png') }}" alt="WhatsApp" class="whatsapp-icon">
      </a>
  
    <div class="footer-logo-newsletter mb-70">
        <div class="footer-logo wow fadeInLeft delay-0-2s">
            <a href="{{url('/home')  }}"><img src="assets/images/logos/logo.png" alt="Logo"></a>
        </div>
        <div class="footer-newsletter wow fadeInRight delay-0-2s">
            <form action="#">
                <input type="email" placeholder="Enter Your Email" required>
                <button class="theme-btn">subscribe now <i class="far fa-long-arrow-right"></i></button>
            </form>
        </div>
    </div>
    <div class="row justify-content-between">
        <div class="col-xl-2 col-6 col-small">
            <div class="footer-widget menu-widget wow fadeInUp delay-0-2s">
                <h5 class="footer-title">Quick Links</h5>
                <ul>
                    <li><a href="{{ url('/service') }}">Our Services</a></li>
                    <li><a href="about.php">Meet Our Team</a></li>
                    <li><a href="{{ url('/service') }}">Our Portfolio</a></li>
                    <li><a href="contact.php">Need a Career ?</a></li>
                    <li><a href="{{ url('/about') }}">About</a></li>
                </ul>
            </div>
        </div>
        <div class="col-xl-2 col-6 col-small">
            <div class="footer-widget menu-widget wow fadeInUp delay-0-4s">
                <h5 class="footer-title">services</h5>
                <ul>
                    <li><a href="{{ url('/service') }}">Hair Weaving</a></li>
                    <li><a href="{{ url('/service') }}">Bonding Treatment</a></li>
                    <li><a href="{{ url('/service') }}">Hair Fall </a></li>
                    <li><a href="{{ url('/service') }}">Hair Replacement</a></li>
                    <li><a href="{{ url('/service') }}">Hair Extension </a></li>
                </ul>
            </div>
        </div>
        {{-- <div class="col-xl-4 col-md-6">
            <div class="footer-widget news-widget wow fadeInUp delay-0-6s">
                <h5 class="footer-title">recent news</h5>
                <ul>
                    <li>
                        <div class="image">
                            <img src="assets/images/widgets/news-widget1.jpg" alt="Newx">
                        </div>
                        <div class="content">
                            <h6><a href="blog-details.php">Get Started With Node Introduction APIs HTTP And ES6 JavaScript</a></h6>
                            <span class="date">
                                <i class="far fa-calendar-alt"></i>
                                25 september 2021
                            </span>
                        </div>
                    </li>
                    <li>
                        <div class="image">
                            <img src="assets/images/widgets/news-widget2.jpg" alt="Newx">
                        </div>
                        <div class="content">
                            <h6><a href="blog-details.php">Web Standards: The What The Why And The How Learn CSS</a></h6>
                            <span class="date">
                                <i class="far fa-calendar-alt"></i>
                                25 september 2021
                            </span>
                        </div>
                    </li>
                </ul>
            </div>
        </div> --}}
        <div class="col-xl-3 col-md-6">
            <div class="footer-widget contact-widget wow fadeInUp delay-0-8s">
                <h5 class="footer-title">Contact Us</h5>
                <ul>
                    <li>
                        <i class="far fa-map-marker-alt"></i>
                        <span>E-4 /151 FLAT NO. 4 HARERAM COMPLEX, 10 No. market, E-4, Arera Colony, Bhopal, Madhya Pradesh 462016</span>
                    </li>
                    <li>
                        <i class="far fa-phone"></i>
                        <a href="calto:+918889666653">+91 8889666653 9009255060  </a>
                    </li>
                    <li>
                        <i class="far fa-clock"></i>
                        <span>Mon - Sun, 10:00 am – 08:00 pm</span>
                    </li>
                    <li>
                        <i class="far fa-envelope"></i>
                        <a href="mailto:support@gmail.com">support@gmail.com</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="copyright-area bg-black-two border-0 text-center p-15 mt-15">
        <p>Copyright © 2025 <a href="index.php">Samrth</a>. All Rights Reserved.</p>
    </div>
</div>