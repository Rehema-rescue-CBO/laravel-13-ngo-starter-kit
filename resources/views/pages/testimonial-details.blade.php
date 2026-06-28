@extends('layouts.base')

@section('content')
    @include('layouts.pageheader')

    <style>
        .testimonial-detail-img {
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            object-fit: cover;
            width: 100%;
            max-height: 400px;
        }

        .testimonial-content-body {
            font-family: 'Open Sans', sans-serif;
            font-size: 1.15rem;
            line-height: 1.9;
            color: #4a4a4a;
        }

        .testimonial-content-body p {
            margin-bottom: 25px;
        }

        .quote-icon {
            color: rgba(0, 26, 195, 0.12);
            font-size: 3.5rem;
            line-height: 1;
        }

        .back-btn {
            display: inline-flex;
            align-items: center;
            color: #001ac3;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .back-btn i {
            transition: transform 0.2s ease;
        }

        .back-btn:hover i {
            transform: translateX(-5px);
        }

        .cta-banner {
            background: linear-gradient(135deg, #001ac3 0%, #001284 100%);
            border-radius: 16px;
            color: #ffffff;
            padding: 35px 25px;
            text-align: center;
            box-shadow: 0 10px 25px rgba(0, 26, 195, 0.2);
        }

        .btn-cta {
            background-color: #ffffff;
            color: #001ac3;
            font-weight: 700;
            border-radius: 50px;
            padding: 10px 25px;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-block;
            margin-top: 15px;
            box-shadow: 0 4px 15px rgba(255, 255, 255, 0.2);
        }

        .btn-cta:hover {
            background-color: #f1f1f1;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(255, 255, 255, 0.3);
            color: #001ac3;
        }
    </style>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <!-- Main Content Column -->
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                    <!-- Name -->
                    <div class="d-flex align-items-start mb-3">
                        <div class="quote-icon me-3">
                            <i class="fas fa-quote-left"></i>
                        </div>
                        <div>
                            <h2 class="display-6 mb-2" style="font-family: 'Josefin Sans', sans-serif; font-weight: 700;">
                                {{ $testimonial->name }}
                            </h2>
                            @if ($testimonial->position)
                                <span class="text-primary fw-semibold fs-5">{{ $testimonial->position }}</span>
                            @endif
                        </div>
                    </div>

                    <!-- Image -->
                    @if ($testimonial->image)
                        <div class="mb-4 overflow-hidden rounded" style="border-radius: 16px;">
                            <img src="{{ str_starts_with($testimonial->image, 'http') ? $testimonial->image : asset('storage/' . $testimonial->image) }}" 
                                 class="testimonial-detail-img" 
                                 alt="{{ $testimonial->name }}">
                        </div>
                    @endif

                    <!-- Content -->
                    <div class="testimonial-content-body">
                        <blockquote class="fs-4 fst-italic" style="border-left: 4px solid #001ac3; padding: 20px 25px; background: rgba(0,26,195,0.03); border-radius: 0 8px 8px 0;">
                            {!! nl2br(e($testimonial->content)) !!}
                        </blockquote>
                    </div>

                    <!-- Back link -->
                    <div class="mt-5 pt-3 border-top">
                        <a href="{{ route('beneficiaries') }}" class="back-btn">
                            <i class="fa fa-arrow-left me-2"></i> Back to All Testimonials
                        </a>
                    </div>
                </div>

                <!-- Sidebar Column -->
                <div class="col-lg-4">
                    <!-- Other Testimonials Widget -->
                    @if ($otherTestimonials->isNotEmpty())
                        <div class="border-0 shadow-sm rounded p-4 mb-4 wow fadeInUp" data-wow-delay="0.2s" style="background: #ffffff; border: 1px solid rgba(0,0,0,0.05);">
                            <h4 class="fw-bold mb-4" style="font-family: 'Josefin Sans', sans-serif; position: relative; padding-bottom: 10px;">
                                More Stories
                                <span style="content: ''; position: absolute; left: 0; bottom: 0; width: 40px; height: 3px; background: #001ac3; border-radius: 2px; display: block;"></span>
                            </h4>
                            <div class="d-flex flex-column">
                                @foreach ($otherTestimonials as $other)
                                    <a href="{{ route('testmonials.show', $other) }}" class="text-decoration-none mb-3 pb-3" style="border-bottom: 1px solid rgba(0,0,0,0.05); display: flex; align-items: center;">
                                        <img src="{{ $other->image ? (str_starts_with($other->image, 'http') ? $other->image : asset('storage/' . $other->image)) : asset('frontend/img/logo.png') }}" 
                                             style="width: 60px; height: 60px; border-radius: 8px; object-fit: cover; margin-right: 12px; flex-shrink: 0;">
                                        <div>
                                            <h5 class="mb-1" style="font-size: 0.95rem; font-weight: 600; color: #333; transition: color 0.2s;">
                                                {{ Str::limit($other->name, 30) }}
                                            </h5>
                                            @if ($other->position)
                                                <span style="font-size: 0.8rem; color: #797E88;">{{ Str::limit($other->position, 35) }}</span>
                                            @endif
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <!-- Donation CTA -->
                    <div class="cta-banner p-4 wow fadeInUp" data-wow-delay="0.3s">
                        <h4 class="text-white mb-3" style="font-family: 'Josefin Sans', sans-serif; font-weight: 700;">Support Our Rescue Efforts</h4>
                        <p class="text-white-50 mb-4" style="font-size: 0.95rem; line-height: 1.6;">
                            Your donations directly empower local youth, children, and families with education, nutrition, health, and safe shelters.
                        </p>
                        <a href="{{ route('donation') }}" class="btn-cta">
                            <i class="fa fa-heart me-2"></i> Donate Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
