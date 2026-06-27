@extends('layouts.base')
@section('content')
    @include('layouts.pageheader')
    {{-- header --}}

    @include('inc.videotestmonials')

    @include('inc.videos')

    @include('inc.graduationvideos')
    {{-- banner  --}}
    <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
        <h6 class="section-title bg-white text-center text-primary px-3">Gallery</h6>

        <div class="position-relative">
            <div class="position-relative">
                <img src="{{ asset('inc/heads.jpg') }}" alt="Background" class="img-fluid"
                    style="width: 100%; height: auto; filter: brightness(20%);">
                <div class="position-absolute top-0 start-0 w-100 h-100 bg-blue opacity-30"></div>
            </div>
            <div class="position-absolute top-50 start-50 translate-middle text-white">
                <p>Thika West Sub-County Government heads, Rehema Heads of Departments,
                    Directors of Organizations, leaders and Clergy in the First Grand Graduation 2024.</p>
            </div>
        </div>
    </div>
    {{-- banner end --}}
    {{-- Gallery Start three images with title and caption --}}


    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card">
                        <img src="{{ asset('inc/Graduationmen.png') }}" class="card-img-top" alt="Gallery Image 1">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Graduation</h5>
                            <p class="card-text">
                                Our 2024 male graduants.
                            </p>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="card">
                        <img src="{{ asset('sgvb/sgvb.jpg') }}" class="card-img-top" alt="Gallery Image 2">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Rehabilitation Programs</h5>
                            <p class="card-text">Providing essential rehabilitation services to those in need.</p>
                        </div>
                    </div>
                </div> --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="card">
                        <img src="{{ asset('inc/graduation.png') }}" class="card-img-top" alt="Gallery Image 3">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Graduation Ceremony</h5>
                            <p class="card-text">
                                Our 2024 female graduants.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Gallery End -->
@endsection
