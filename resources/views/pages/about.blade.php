@extends('layouts.base')

@section('content')
    <style>
        .feature-card {
            border: 1px solid #e0e0e0;
            border-radius: 16px;
            transition: all 0.3s ease;
            background-color: #fff;
        }

        .feature-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.07);
            border-color: transparent;
        }
    </style>

    @include('layouts.pageheader')

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="h-100">
                        <h1 class="display-5 mb-4">Welcome to <span class="text-primary">Rehema Rescue CBO</span></h1>
                        <p>“Rehema Rescue CBO” is a Charitable Organization in Thika, Kiambu County, Kenya. Officially
                            founded on April 2018 and fully registered by the Directorate of Social Development pursuant and
                            in accordance with the provision of Community Groups Registration Act, NO.30 of 2022, under
                            Registration NO. DSD/22/114/02/96102.
                        </p>


                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="ratio ratio-16x9">
                        <video controls src="{{ asset('videos/History.mp4') }} "></video>
                          <span class="text-primary">Our History as a CBO, The past history of Kiandutu Village, Our Beneficiaries</span>
                    </div>
                </div>
                {{-- another video section --}}
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="ratio ratio-16x9">
                        <video controls src="{{ asset('videos/cohorts.mp4') }} "></video>
                          <span class="text-primary">The Cohort’s Graduation and Our Future as a TVET Institution.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Mission, Vision, What We Do Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <!-- Our Mission -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card h-100 p-4 text-center feature-card">
                        <div class="mb-3">
                            <i class="fa fa-bullseye fa-3x text-primary"></i>
                        </div>
                        <h4 class="mb-3">Our Mission</h4>
                        <p class="text-muted mb-0">To empower communities and restore hope through integrated care, connecting every aspect of life for sustainable growth.</p>
                    </div>
                </div>
                <!-- Our Vision -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="card h-100 p-4 text-center feature-card">
                        <div class="mb-3">
                            <i class="fa fa-eye fa-3x text-primary"></i>
                        </div>
                        <h4 class="mb-3">Our Vision</h4>
                        <p class="text-muted mb-0">A future where every individual has the opportunity to thrive, supported by a compassionate and empowered community.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mission, Vision, What We Do End -->

    {{-- Our beneficiaries --}}
  
@endsection
