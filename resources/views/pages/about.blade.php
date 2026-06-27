@extends('layouts.base')

@section('content')
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

    {{-- Our beneficiaries --}}
  
@endsection
