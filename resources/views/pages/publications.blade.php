@extends('layouts.base')
@section('content')
    @include('layouts.pageheader')

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Publications</p>
                <h1 class="display-6 mb-5">Our Latest Newsletters</h1>
            </div>

            <div class="row g-5 justify-content-center">
                <div class="col-lg-10 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card border-0 shadow rounded overflow-hidden">
                        <div class="row g-0">
                            <div class="col-md-5 position-relative">
                                {{-- Image section --}}
                                <img src="{{ asset('mentorship/Mentorship.jpg') }}" class="img-fluid h-100 w-100" alt="Newsletter Cover" style="object-fit: cover; min-height: 300px;">
                            </div>
                            <div class="col-md-7">
                                <div class="card-body p-5 h-100 d-flex flex-column justify-content-center">
                                    {{-- Heading --}}
                                    <h3 class="card-title text-secondary mb-3">Empowering Youth and Transforming Futures.</h3>
                                    
                                    {{-- Sub-Heading --}}
                                    <h5 class="text-primary mb-3">Youth Empowerment Programme 2025 Newsletter.</h5>
                                    
                                    {{-- Description --}}
                                    <p class="card-text mb-4">A year of resilience, mentorship and measurable impact; restoring hope and building sustainable pathways for vulnerable youth.</p>
                                    
                                    {{-- PDF Download --}}
                                    <div>
                                        <a href="{{ asset('newletter.pdf') }}" class="btn btn-primary py-2 px-4 rounded-pill">
                                            <i class="fa fa-file-pdf me-2"></i>Download PDF
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection