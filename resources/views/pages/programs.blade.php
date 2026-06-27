@extends('layouts.base')
@section('content')
    @include('layouts.pageheader')

    <!-- Programs Start -->
    <div class="container-xxl py-5">
        <div class="container">
            {{-- heading and subheading for Programs --}}
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Our Programs</p>
                <h6 class="display-7 mb-5">Our program’s delivery and effectiveness are qualitatively and quantitatively
                    assessed through
                    structured beneficiary surveys, focus-group discussions, Key Informant Interviews (KIIs) with
                    stakeholders, review of school and institutional records.</h6>
            </div>

            <!-- Program 1: Image Left, Text Right -->
            <div class="row g-5 align-items-center mb-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative h-100">
                        <img class="img-fluid w-100 h-100" src="{{ asset('inc/graduation.png') }}" alt="Education Program"
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h3 class="mb-3">Education & Mentorship</h3>
                    <p class="mb-4">
                        Since 2018, Out of 455 rescued individuals, 420 have been successfully enrolled back to school
                        through Scholarships, Bursaries and Child Support Systems. A 92% success rate.
                        Beneficiaries’ statistics;
                        Primary education – 40 (8.79%)
                        Secondary – 240 (52.75%).
                        .</p>
                    <a class="btn btn-primary py-2 px-4" href="{{ route('getinvolved') }}">Support Program</a>
                </div>
            </div>

            <!-- Program 2: Text Left, Image Right -->
            <div class="row g-5 align-items-center mb-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="position-relative h-100">
                        <img class="img-fluid w-100 h-100" src="{{ asset('inc/Christmas.jpg') }}" alt="Health Program"
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="mb-3">Health & Nutrition</h3>
                    <p class="mb-4">
                        Through feeding programs, food donations, hospital referral systems and medical aid, 415 lives
                        have been directly impacted. With 72.3% being children aged below 12years.</p>
                    <a class="btn btn-primary py-2 px-4" href="{{ route('getinvolved') }}">Support Program</a>
                </div>
            </div>
            <!-- Program 3: Image Left, Text Right -->
            <div class="row g-5 align-items-center mb-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative h-100">
                        <img class="img-fluid w-100 h-100" src="{{ asset('sgvb/sgvb.jpg') }}" alt="Education Program"
                            style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h3 class="mb-3">SGBV Awareness.</h3>
                    <p class="mb-4">
                        We raise awareness and respond to <span class="text-secondary">Sexual and Gender-based
                            Violence</span> in the community through,
                        educating, empowering and mobilizing to address and act effectively to causes, consequences and
                        solutions.
                        .</p>
                    <a class="btn btn-primary py-2 px-4" href="{{ route('getinvolved') }}">Support Program</a>
                </div>
            </div>
            <!-- Program 4: Text Left, Image Right -->
            <div class="row g-5 align-items-center mb-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="position-relative h-100">
                        <img class="img-fluid w-100 h-100" src="{{ asset('mentorship/hiv.jpg') }}"
                            alt="Economic Empowerment Program" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="mb-3"> HIV/ AIDS.</h3>
                    <p class="mb-4">

                        As part of our efforts, sessions focused on empowering participants with accurate and practical
                        prevention strategies, are held to encourage confidence and de-stigmatization in the community.
                    </p>
                    <a class="btn btn-primary py-2 px-4" href="{{ route('getinvolved') }}">Support Program</a>
                </div>
            </div>
            <!-- Program 5: Image Left, Text Right -->
            <div class="row g-5 align-items-center mb-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative h-100">
                        <img class="img-fluid w-100 h-100" src="{{ asset('mentorship/Mentorship.jpg') }}"
                            alt="Water Project Program" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h3 class="mb-3"> Empowerment and Mentorship.</h3>
                    <p class="mb-4">

                        Through guidance and counselling, supportive care and soft skills impartation on mentored
                        individuals, 440 have widely benefited.
                    </p>
                    <a class="btn btn-primary py-2 px-4" href="{{ route('getinvolved') }}">Support Program</a>
                </div>
            </div>
            <!-- Program 6: Text Left, Image Right -->
            <div class="row g-5 align-items-center mb-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="position-relative h-100">
                        <img class="img-fluid w-100 h-100" src="{{ asset('mentorship/drug.jpg') }}"
                            alt="Economic Empowerment Program" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h3 class="mb-3"> Drugs and Substance Abuse..</h3>
                    <p class="mb-4">


                        Mental health considerations are paramount to all our beneficiaries. Since 2018, 124 of 174 addicts
                        have successfully completed this program. Marking a 71.3% success in relation to enrollment.
                    </p>
                    <a class="btn btn-primary py-2 px-4" href="{{ route('getinvolved') }}">Support Program</a>
                </div>
            </div>
                <!-- Program 7: Image Left, Text Right -->
                <div class="col-lg-6 wow fadeInUp mt-5" data-wow-delay="0.1s">
                    <div class="position-relative h-100">
                        <img class="img-fluid w-100 h-100" src="{{ asset('mentorship/skills.jpg') }}"
                            alt="Water Project Program" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp mt-5" data-wow-delay="0.3s">
                    <h3 class="mb-3"> Technical Skills Development.</h3>
                    <p class="mb-4">
                        Hosted successful career fairs (Gorgeous Institute) connecting youth with local businesses. With
                        85% of participants showing great improvements in skills integration as per pre-post training
                        assessment, 3 secured internships while 6 got job placements.
                    </p>
                    <a class="btn btn-primary py-2 px-4" href="{{ route('getinvolved') }}">Support Program</a>
                </div>
                <!-- Program 8: Text Left, Image Right -->
        </div>
        <hr>
        <!-- Programs End -->
    @endsection
