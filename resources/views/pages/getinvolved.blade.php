@extends('layouts.base')


@section('content')
    @include('layouts.pageheader')

    <!-- Get Involved Start -->
    <div class="container-xxl py-5">
        <div class="container">
            {{-- heading and subheading for Get Involved --}}
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h3 class="section-title bg-white text-center text-primary px-3">Get Involved</h3>
                <h6 class="display-7 mb-5">Join us in making a difference! Your support can transform lives and build a brighter future for those in need. Whether through <span class="text-secondary">   volunteering, donations, or spreading awareness,</span> every action counts.</h6>
            </div>
        </div>
    </div>
    <!-- Get Involved End -->

    <!-- CTA Cards & Social Media Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <!-- Partner Card -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" >
                    <div class="service-item h-100 p-5">
                        <div class="btn-square bg-light mb-4" style="width: 64px; height: 64px;">
                            <i class="fa fa-handshake fa-2x text-secondary"></i>
                        </div>
                        <h4 class="mb-3 text-secondary">Partner With Us</h4>
                        <p class="mb-4">Collaborate with us to create sustainable impact and drive change in our communities.</p>
                        <a class="btn btn-primary py-2 px-4" href="{{ route('partner') }}">Partner</a>
                    </div>
                </div>
                <!-- Volunteer Card -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item h-100 p-5">
                        <div class="btn-square bg-light mb-4" style="width: 64px; height: 64px;">
                            <i class="fa fa-hands-helping fa-2x text-secondary"></i>
                        </div>
                        <h4 class="mb-3 text-secondary">Volunteer</h4>
                        <p class="mb-4">Join our team of dedicated volunteers and contribute your time and skills to make a difference.</p>
                        <a class="btn btn-primary py-2 px-4" href="{{ route('volunteer') }}">Volunteer</a>
                    </div>
                </div>
                <!-- Donate Card -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item h-100 p-5">
                        <div class="btn-square bg-light mb-4" style="width: 64px; height: 64px;">
                            <i class="fa fa-donate fa-2x text-secondary"></i>
                        </div>
                        <h4 class="mb-3 text-secondary">Donate</h4>
                        <p class="mb-4">Your generous donation will directly support our programs and help us reach more people in need.</p>
                        <a class="btn btn-primary py-2 px-4" href="{{ route('donation') }}">Donate</a>
                    </div>
                </div>
            </div>

            <!-- Social Media Icons -->
            <div class="text-center mx-auto mt-5 pt-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h3 class="section-title bg-white text-center text-primary px-3 text-secondary">Follow Us</h3>
                <div class="d-flex justify-content-center display-6">
                   <a class="btn btn-square btn-primary me-2" href="https://x.com/RehemaRescue?t=sz-mpZvgrcjoSE7aqZNR8w&s=09"><i
                                class="fab fa-x-twitter"></i></a>
                        <a class="btn btn-square btn-primary me-2" href="https://www.facebook.com/profile.php?id=61562350683270"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary me-2" href="https://youtube.com/@rehemarescue?si=pmpVst5ddhEg5xGV"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-primary me-2" href="https://www.instagram.com/rehema.rescue"><i
                                class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- CTA Cards & Social Media End -->
@endsection