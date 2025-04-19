@extends('layouts.app')
@section('page_title', 'Gallary')

@section('content')

<section class="page-banner text-white py-190 rpy-130" style="background-image: url(assets/images/banner/banner.jpg);">
    <div class="container">
        <div class="banner-inner">
            <h1 class="page-title wow fadeInRight delay-0-2s">Portfolio</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center wow fadeInLeft delay-0-2s">
                    <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                    <li class="breadcrumb-item active">Portfolio</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<!-- Page Banner End -->        

<!-- Gallery Area Start -->
<section class="gallery-page-area rel z-1 pt-120 rpt-90 pb-100 rpb-70">
    <div class="container">
       <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8">
                <div class="section-title text-center mb-70">
                    <h2 class="title">Latest photo gallery</h2>
                    <p>Take a peek into the world of style at Smart Hair Beauty. From trendy haircuts to stunning transformations, our gallery showcases the passion.</p>
                    <span class="sub-title">gallery</span>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-6 col-md-8">
                <div class="gallery-item style-two wow fadeInUp delay-0-2s">
                    <img src="assets/images/gellary/gallery-big1.jpg" alt="Gallery" height="513px" style="object-fit: cover">
                    <div class="gallery-content">
                        <a href="assets/images/gellary/gallery-big1.jpg" class="icon"></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4 col-sm-6">
                <div class="gallery-item style-two wow fadeInUp delay-0-4s">
                    <img src="assets/images/gellary/gallery3.jpg" alt="Gallery" height="513px" style="object-fit: cover">
                    <div class="gallery-content">
                        <a href="assets/images/gellary/gallery3.jpg" class="icon"></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="gallery-item style-two wow fadeInUp delay-0-6s">
                    <img src="assets/images/gellary/gallery5.jpg" alt="Gallery" height="513px" style="object-fit: cover">
                    <div class="gallery-content">
                        <a href="assets/images/gellary/gallery5.jpg" class="icon"></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="gallery-item style-two wow fadeInUp delay-0-2s">
                    <img src="assets/images/gellary/gallery2.jpg" alt="Gallery" height="513px" style="object-fit: cover">
                    <div class="gallery-content">
                        <a href="assets/images/gellary/gallery2.jpg" class="icon"></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-8 order-mo-2">
                <div class="gallery-item style-two wow fadeInUp delay-0-4s">
                    <img src="assets/images/gellary/gallery-big2.jpg" alt="Gallery" height="513px" style="object-fit: cover">
                    <div class="gallery-content">
                        <a href="assets/images/gellary/gallery-big2.jpg" class="icon"></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4 col-sm-6">
                <div class="gallery-item style-two wow fadeInUp delay-0-6s">
                    <img src="assets/images/gellary/gallery4.jpg" alt="Gallery" height="513px" style="object-fit: cover">
                    <div class="gallery-content">
                        <a href="assets/images/gellary/gallery4.jpg" class="icon"></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-8">
                <div class="gallery-item style-two wow fadeInUp delay-0-2s">
                    <img src="assets/images/gellary/gallery-big5.jpg" alt="Gallery" height="513px" style="object-fit: cover">
                    <div class="gallery-content">
                        <a href="assets/images/gellary/gallery-big5.jpg" class="icon"></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4 col-sm-6">
                <div class="gallery-item style-two wow fadeInUp delay-0-4s">
                    <img src="assets/images/gellary/gallery7.jpg" alt="Gallery" height="513px" style="object-fit: cover">
                    <div class="gallery-content">
                        <a href="assets/images/gellary/gallery7.jpg" class="icon"></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4 col-sm-6">
                <div class="gallery-item style-two wow fadeInUp delay-0-6s">
                    <img src="assets/images/gellary/gallery8.jpg" alt="Gallery" height="513px" style="object-fit: cover">
                    <div class="gallery-content">
                        <a href="assets/images/gellary/gallery8.jpg" class="icon"></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-8">
                <div class="gallery-item style-two wow fadeInUp delay-0-4s">
                    <img src="assets/images/gellary/gallery-big6.jpg" alt="Gallery" height="513px" style="object-fit: cover">
                    <div class="gallery-content">
                        <a href="assets/images/gellary/gallery-big6.jpg" class="icon"></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="gallery-item style-two wow fadeInUp delay-0-6s">
                    <img src="assets/images/gellary/gallery10.jpg" alt="Gallery" height="513px" style="object-fit: cover">
                    <div class="gallery-content">
                        <a href="assets/images/gellary/gallery10.jpg" class="icon"></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="gallery-item style-two wow fadeInUp delay-0-2s">
                    <img src="assets/images/gellary/gallery9.jpg" alt="Gallery" height="513px" style="object-fit: cover">
                    <div class="gallery-content">
                        <a href="assets/images/gellary/gallery9.jpg" class="icon"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Gallery Area End -->

@endsection
