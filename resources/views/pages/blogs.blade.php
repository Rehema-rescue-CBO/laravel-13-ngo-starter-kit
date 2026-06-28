@extends('layouts.base')

@section('content')
    @include('layouts.pageheader')

    <style>
        .blog-card {
            border-radius: 16px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.04) !important;
            border: 1px solid rgba(0, 0, 0, 0.05) !important;
            background: #ffffff;
        }
        
        .blog-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 35px rgba(0, 26, 195, 0.12) !important;
            border-color: rgba(0, 26, 195, 0.15) !important;
        }
        
        .blog-img-container {
            border-top-left-radius: 16px;
            border-top-right-radius: 16px;
            overflow: hidden;
            position: relative;
        }
        
        .img-zoom {
            transition: transform 0.5s ease;
        }
        
        .blog-card:hover .img-zoom {
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
        
        .blog-card:hover .overlay-hover {
            opacity: 1;
        }
        
        .category-badge {
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
        
        .blog-card:hover .category-badge {
            background: #001ac3;
            color: #ffffff;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 26, 195, 0.2);
        }
        
        .blog-title {
            font-family: 'Josefin Sans', sans-serif;
            font-size: 1.25rem;
            font-weight: 700;
            line-height: 1.4;
        }
        
        .hover-primary {
            color: #333333;
            transition: color 0.2s ease;
        }
        
        .blog-card:hover .hover-primary {
            color: #001ac3;
        }
        
        .hover-primary:hover {
            color: #001ac3 !important;
        }
        
        .hover-arrow {
            font-size: 0.95rem;
            font-weight: 700;
            color: #001ac3 !important;
            text-decoration: none;
            transition: all 0.2s ease;
            display: inline-flex;
            align-items: center;
        }
        
        .hover-arrow i {
            transition: transform 0.2s ease;
        }
        
        .hover-arrow:hover i {
            transform: translateX(6px);
        }

        .meta-item {
            font-size: 0.85rem;
            color: #797E88;
            display: flex;
            align-items: center;
        }

        .meta-item i {
            color: #001ac3;
        }
    </style>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="section-title bg-white text-center text-primary px-3">Our Blogs</p>
                <h1 class="display-6 mb-5">Latest Stories, News & Updates</h1>
            </div>

            <div class="row g-4 justify-content-center">
                @forelse ($blogs as $blog)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="{{ 0.1 * ($loop->index % 3 + 1) }}s">
                        <div class="card h-100 border-0 shadow-sm blog-card position-relative overflow-hidden">
                            <!-- Category Badge -->
                            @if ($blog->category)
                                <span class="category-badge">
                                    {{ $blog->category->title }}
                                </span>
                            @endif
                            
                            <!-- Blog Image -->
                            <div class="blog-img-container" style="height: 240px;">
                                <img src="{{ $blog->image_url ? (str_starts_with($blog->image_url, 'http') ? $blog->image_url : asset('storage/' . $blog->image_url)) : 'https://placehold.co/600x400?text=No+Image' }}" 
                                     class="card-img-top w-100 h-100 img-zoom" 
                                     alt="{{ $blog->title }}"
                                     style="object-fit: cover;">
                                <div class="overlay-hover"></div>
                            </div>

                            <!-- Card Body -->
                            <div class="card-body p-4 d-flex flex-column">
                                <!-- Meta Info -->
                                <div class="d-flex align-items-center mb-3 text-muted text-xs">
                                    <span class="meta-item me-3">
                                        <i class="far fa-calendar-alt me-2"></i>
                                        {{ $blog->created_at->format('M d, Y') }}
                                    </span>
                                    @if ($blog->user)
                                        <span class="meta-item">
                                            <i class="far fa-user me-2"></i>
                                            By {{ $blog->user->name }}
                                        </span>
                                    @endif
                                </div>

                                <!-- Title -->
                                <h4 class="card-title mb-3 blog-title">
                                    <a href="{{ route('blogs.show', $blog) }}" class="text-dark text-decoration-none hover-primary">
                                        {{ \Illuminate\Support\Str::limit($blog->title, 55) }}
                                    </a>
                                </h4>

                                <!-- Excerpt -->
                                <p class="card-text text-muted mb-4 flex-grow-1">
                                    {{ \Illuminate\Support\Str::limit(strip_tags($blog->content), 120) }}
                                </p>

                                <!-- Read More Button -->
                                <div class="mt-auto pt-2">
                                    <a href="{{ route('blogs.show', $blog) }}" class="hover-arrow">
                                        Read More <i class="fa fa-arrow-right ms-2"></i>
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
                        <h3 class="text-dark">No Blogs Published Yet</h3>
                        <p class="text-muted">Check back soon for new stories, updates, and inspiring highlights.</p>
                    </div>
                @endforelse
            </div>

            <!-- Pagination -->
            @if ($blogs->hasPages())
                <div class="d-flex justify-content-center mt-5 wow fadeInUp" data-wow-delay="0.1s">
                    {{ $blogs->links() }}
                </div>
            @endif
        </div>
    </div>
@endsection