{{-- three cards with name image and testimonial text --}}
@extends('layouts.base')

@section('content')
    @include('layouts.pageheader')  

    <!-- Testimonials Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card testimonial-card">
                        <div class="card-body">
                            <h5 class="card-title">John Doe</h5>
                            <p class="card-text">"Rehema Rescue CBO has changed my life. The support I received helped me get back to school and pursue my dreams."</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="card testimonial-card">
                        <div class="card-body">
                            <h5 class="card-title">Jane Smith</h5>
                            <p class="card-text">"Thanks to the health programs, my family has access to nutritious food and medical care."</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="card testimonial-card">
                        <div class="card-body">
                            <h5 class="card-title">Michael Johnson</h5>
                            <p class="card-text">"The mentorship I received has been invaluable. I now have the skills and confidence to succeed."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonials End -->

@endsection