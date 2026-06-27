@extends('layouts.base')

@section('content')
    @include('layouts.pageheader')
    <!-- Beneficiaries Start  -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Testimonials</h6>
                <h1 class="mb-5">What Our Beneficiaries Say!</h1>
            </div>
            <div class="row g-5">
                {{-- 1 --}}
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card beneficiary-card">
                        <img src="{{ asset('testmonionals/Antony.png') }}" class="card-img-top" alt="Antony Githinji">
                        <div class="card-body">
                            <h5 class="card-title">Antony Githinji.</h5>
                            <p class="card-text">
                                “ If it were not for a genuine support, I would have been long dead. I have engaged
                                in criminal activities that I’m not proud of, I was shackled in that life and it was
                                difficult for me to quit, but when I heard about Rehema, I opted to join, After about 2
                                years of sessions and engaging in projects, I’m a changed man, self-dependant and
                                looking forward to a good future”,<br>
                                <span class="text-secondary">ex-addict</span>
                            </p>
                        </div>
                    </div>
                </div>
                {{-- 2 --}}
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="card beneficiary-card">
                        <img src="{{ asset('testmonionals/Patrick.png') }}" class="card-img-top" alt="Patrick Njenga">
                        <div class="card-body">
                            <h5 class="card-title"> Patrick Njenga.</h5>
                            <p class="card-text">
                                “, I’m a 3rd born in a family of 7, After primary education I was not able to advance
                                due to poverty, I had to hustle in Jua Kali but things didn’t turn out well,,,, I
                                started
                                to sell drugs for survival, and later became a thief, my friends got killed and I had
                                to change my ways, I heard about Rehema’s services and presented myself, they
                                took me in and never judged,. I’m thankful for their continuous support to my
                                wellbeing”,<br>
                                <span class="text-secondary">an ex-drug dealer</span>
                        </div>
                    </div>
                </div>
                {{-- 3 --}}
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="card beneficiary-card">
                        <img src="{{ asset('testmonionals/Marian.png') }}" class="card-img-top" alt="Marian Wanjiru">
                        <div class="card-body">
                            <h5 class="card-title">Marian
                                Wanjiru.</h5>
                            <p class="card-text">
                                “During the COVID-19 pandemic I got pregnant at form 3, I dropped out to take
                                care of my baby but it was difficult as I got deserted, but when I heard about Rehema
                                CBO and visited them, they showed me so much love on how I and my baby girl were
                                special, they took me back to school and I cleared form 4., now I’m happy that I
                                love my baby so much,, I also want to continue empowering others facing hardships, Thank you
                                Rehema and partners for the support”,.<br>
                                <span class="text-secondary"> a Teen-pregnancy Victim</span>
                            </p>
                        </div>
                    </div>
                </div>
                {{-- 4 --}}
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="card beneficiary-card">
                        <img src="{{ asset('frontend/img/logo.png') }}" class="card-img-top" alt="Wanjiku Mwende">
                        <div class="card-body">
                            <h5 class="card-title">Local Community Mobiliser.</h5>
                            <p class="card-text">
                                “,I’m happy to have been invited to celebrate the Elderly and PWD’s Day with my
                                fellow elderly, They ‘Rehema’ have been giving us support through food, financial
                                and medical assessments, some of us do not have people to take care of us but we
                                thank God that Rehema is here”,.<br>
                                <span class="text-secondary">Local Community Mobiliser.</span>
                            </p>
                        </div>
                    </div>
                </div>
                {{-- 5 --}}
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.9s">
                    <div class="card beneficiary-card">
                        <img src="{{ asset('frontend/img/logo.png') }}" class="card-img-top" alt="James Karanja">
                        <div class="card-body">
                            <h5 class="card-title"> Joseph Ogutu.</h5>
                            <p class="card-text">
                                “In 2024, Rehema organized a football tournament dubbed ‘Rehema Cup’. 10 teams
                                in our Ward (Thika Township) participated with 4 of them being ladies’. That
                                tournament brought together over 300 youths who witnessed great upcoming talents.
                                My team being one of the participants, we look forward to winning the next edition”,
                                .<br>
                                <span class="text-secondary">a
                                    Sports Academy Director</span>
                            </p>
                        </div>
                    </div>
                </div>
                {{-- 6 --}}
            </div>
        </div>
    </div>
    <!-- Beneficiaries End -->
@endsection
