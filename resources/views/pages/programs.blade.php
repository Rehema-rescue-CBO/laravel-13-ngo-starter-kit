@extends('layouts.base')

@section('content')
    @include('layouts.pageheader')

    <style>
        .program-card {
            border-radius: 16px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.04) !important;
            border: 1px solid rgba(0, 0, 0, 0.05) !important;
            background: #ffffff;
        }
        
        .program-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(0, 26, 195, 0.12) !important;
            border-color: rgba(0, 26, 195, 0.15) !important;
        }
        
        .program-img-container {
            border-top-left-radius: 16px;
            border-top-right-radius: 16px;
            overflow: hidden;
            position: relative;
        }
        
        .img-zoom {
            transition: transform 0.5s ease;
        }
        
        .program-card:hover .img-zoom {
            transform: scale(1.06);
        }
        
        .overlay-hover {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to bottom, rgba(0, 26, 195, 0) 50%, rgba(0, 26, 195, 0.15) 100%);
            opacity: 0;
            transition: opacity 0.3s ease;
            pointer-events: none;
        }
        
        .program-card:hover .overlay-hover {
            opacity: 1;
        }
        
        .tag-badge {
            position: absolute;
            top: 15px;
            left: 15px;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(8px);
            color: #001ac3;
            padding: 6px 14px;
            border-radius: 50px;
            font-size: 0.75rem;
            font-weight: 700;
            z-index: 10;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.5);
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .program-card:hover .tag-badge {
            background: #001ac3;
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 26, 195, 0.2);
        }
        
        .program-title {
            font-family: 'Josefin Sans', sans-serif;
            font-size: 1.25rem;
            font-weight: 700;
            line-height: 1.4;
        }
        
        .hover-primary {
            color: #333333;
            transition: color 0.2s ease;
        }
        
        .program-card:hover .hover-primary {
            color: #001ac3;
        }
        
        .hover-primary:hover {
            color: #001ac3 !important;
        }
    </style>

    <!-- Programs Start -->
    <div class="container-xxl py-5">
        <div class="container">
            {{-- heading and subheading for Programs --}}
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 650px;">
                <p class="section-title bg-white text-center text-primary px-3">Our Programs</p>
                <h1 class="display-6 mb-3">Empowering Communities Through Impactful Initiatives</h1>
                <p class="text-muted mb-5">
                    Our program’s delivery and effectiveness are qualitatively and quantitatively assessed through structured beneficiary surveys, focus-group discussions, Key Informant Interviews (KIIs) with stakeholders, review of school and institutional records.
                </p>
            </div>

            <div class="row g-4 justify-content-center">
                @forelse ($programs as $program)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ 0.1 * ($loop->index % 3 + 1) }}s">
                        <div class="card h-100 border-0 shadow-sm program-card position-relative overflow-hidden">
                            <!-- Tag Badge -->
                            @if ($program->tag)
                                <span class="tag-badge">
                                    {{ $program->tag->title }}
                                </span>
                            @endif
                            
                            <!-- Program Image -->
                            <div class="program-img-container" style="height: 240px;">
                                <img src="{{ $program->image_url ? (str_starts_with($program->image_url, 'http') ? $program->image_url : asset('storage/' . $program->image_url)) : 'https://placehold.co/600x400?text=No+Image' }}" 
                                     class="card-img-top w-100 h-100 img-zoom" 
                                     alt="{{ $program->title }}"
                                     style="object-fit: cover;">
                                <div class="overlay-hover"></div>
                            </div>

                            <!-- Card Body -->
                            <div class="card-body p-4 d-flex flex-column">
                                <!-- Title -->
                                <h4 class="card-title mb-3 program-title">
                                    <a href="{{ route('programs.show', $program) }}" class="text-dark text-decoration-none hover-primary">
                                        {{ $program->title }}
                                    </a>
                                </h4>

                                <!-- Content -->
                                <p class="card-text text-muted mb-4 flex-grow-1">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($program->content), 150) }}
                                </p>

                                <!-- Support Button -->
                                <div class="mt-auto pt-2">
                                    <a class="btn btn-primary w-100 py-2 px-4 rounded-pill" href="{{ route('getinvolved') }}">
                                        Support Program
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="mb-4">
                            <i class="far fa-folder-open text-muted" style="font-size: 4rem;"></i>
                        </div>
                        <h3 class="text-dark">No Programs Added Yet</h3>
                        <p class="text-muted">We are setting up our rescue programs. Please check back soon.</p>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            @if ($programs->hasPages())
                <div class="d-flex justify-content-center mt-5 wow fadeInUp" data-wow-delay="0.1s">
                    {{ $programs->links() }}
                </div>
            @endif
        </div>
    </div>
    <hr>
    <!-- Programs End -->
@endsection
