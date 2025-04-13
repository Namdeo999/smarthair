@extends('layouts.app')
@section('page_title', 'Gallary')

@section('content')

    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Gallary</h2>
                </div>

            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- gallary Start -->
    <div class="gallery">
        <div class="container">
            <div class="section-header text-center">
                <p>Gallery</p>
                <h2>Our Best Collection</h2>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/images/galla/gallary.png') }}" alt="Image">
                        </div>
                        <div class="gallery-text">
                            <h2>Hair Cut</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/images/galla/gallary-1.png') }}" alt="Image">
                        </div>
                        <div class="gallery-text">
                            <h2>Hair Wash</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/images/galla/gallary-2.png') }}" alt="Image">
                        </div>
                        <div class="gallery-text">
                            <h2>Hair Color</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/images/galla/gallary-3.png') }}" alt="Image">
                        </div>
                        <div class="gallery-text">
                            <h2>Hair Shave</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/images/galla/gallary-4.png') }}" alt="Image">
                        </div>
                        <div class="gallery-text">
                            <h2>Hair Straight</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/images/galla/gallary-5.png') }}" alt="Image">
                        </div>
                        <div class="gallery-text">
                            <h2>Facial</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/images/galla/gallary-6.png') }}" alt="Image">
                        </div>
                        <div class="gallery-text">
                            <h2>Shampoo</h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="gallery-item">
                        <div class="gallery-img">
                            <img src="{{ asset('assets/images/galla/gallary-7.png') }}" alt="Image">
                        </div>
                        <div class="gallery-text">
                            <h2>Beard Trim</h2>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- Gallary End -->




@endsection
