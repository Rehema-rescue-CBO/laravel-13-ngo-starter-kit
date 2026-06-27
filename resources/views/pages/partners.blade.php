@extends('layouts.base')
@section('content')
    @include('layouts.pageheader')
       <div class="container-fluid py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeIn" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="section-title bg-white text-center text-primary px-3">Collaborators</p>
                <h1 class="display-6 mb-4">Be a Part of a Global Movement</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="partner-item h-100">
                        <img src="{{asset('partners/p15.png')}}" alt="Action Children Logo">
                        <h5 class="mt-3">Action Children</h5>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="partner-item h-100">
                        <img src="{{asset('partners/p10.png')}}" alt="Partner Logo">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="partner-item h-100">
                        <img src="{{asset('partners/p14.png')}}" alt="Partner Logo">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="partner-item h-100">
                        <img src="{{asset('partners/p12.png')}}" alt="Partner Logo">
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="partner-item h-100">
                        <img src="{{asset('partners/p4.jpg')}}" alt="Partner Logo">
                    </div>
                </div>
                
                {{-- ---- --}}
                
                {{-- ---- --}}
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="partner-item h-100">
                        <img src="{{asset('partners/p7.png')}}" alt="Partner Logo">
                    </div>
                </div>
                {{-- ---- --}}
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="partner-item h-100">
                        <img src="{{asset('partners/p2.jpg')}}" alt="Partner Logo">
                    </div>
                </div>
                {{-- ---- --}}
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="partner-item h-100">
                        <img src="{{asset('partners/p13.png')}}" alt="Partner Logo">
                    </div>
                </div>
                {{-- ---- --}}
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="partner-item h-100">
                        <img src="{{asset('partners/p11.png')}}" alt="Partner Logo">
                    </div>
                </div>
                {{-- ---- --}}
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="partner-item h-100">
                        <img src="{{asset('partners/p9.png')}}" alt="Partner Logo">
                    </div>
                </div>
                {{--  --}}
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="partner-item h-100">
                        <img src="{{asset('partners/p3.jpg')}}" alt="Partner Logo">
                    </div>
                </div>
                {{--  --}}
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="partner-item h-100">
                        <img src="{{asset('partners/p1.png')}}" alt="Partner Logo">
                    </div>
                </div>
                {{--  --}}
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="partner-item h-100">
                        <img src="{{asset('partners/p5.png')}}" alt="Partner Logo">
                    </div>
                </div>
                {{--  --}}
                <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="partner-item h-100">
                        <img src="{{asset('partners/p6.png')}}" alt="Partner Logo">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .partner-item {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background-color: #ffffff;
            border-radius: .5rem;
            padding: 2rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: 1px solid #f0f0f0;
        }
        .partner-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        }
        .partner-item img {
            max-height: 120px;
            width: auto;
            max-width: 100%;
            object-fit: contain;
        }
    </style>
@endsection