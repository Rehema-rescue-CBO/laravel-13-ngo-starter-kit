@extends('layouts.base')

@section('content')
    @include('layouts.pageheader')

    <style>
        .program-detail-img {
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            object-fit: cover;
            width: 100%;
            max-height: 500px;
        }

        .meta-container {
            border-top: 1px solid rgba(0, 0, 0, 0.06);
            border-bottom: 1px solid rgba(0, 0, 0, 0.06);
            padding: 15px 0;
            margin: 25px 0;
        }

        .meta-item {
            font-size: 0.9rem;
            color: #797E88;
            margin-right: 25px;
            display: inline-flex;
            align-items: center;
        }

        .meta-item i {
            color: #001ac3;
            font-size: 1rem;
        }

        .program-content-body {
            font-family: 'Open Sans', sans-serif;
            font-size: 1.1rem;
            line-height: 1.8;
            color: #4a4a4a;
        }

        .program-content-body p {
            margin-bottom: 25px;
        }

        .program-content-body blockquote {
            border-left: 4px solid #001ac3;
            padding: 15px 25px;
            margin: 30px 0;
            background-color: rgba(0, 26, 195, 0.03);
            font-style: italic;
            border-radius: 0 8px 8px 0;
            color: #333333;
        }

        .sidebar-card {
            border-radius: 16px;
            border: 1px solid rgba(0, 0, 0, 0.05);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.03);
            background: #ffffff;
            margin-bottom: 30px;
        }

        .sidebar-title {
            font-family: 'Josefin Sans', sans-serif;
            font-weight: 700;
            font-size: 1.25rem;
            color: #333333;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }

        .sidebar-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 40px;
            height: 3px;
            background-color: #001ac3;
            border-radius: 2px;
        }

        .other-program-item {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            text-decoration: none;
            transition: all 0.2s ease;
        }

        .other-program-item:last-child {
            margin-bottom: 0;
        }

        .other-program-img {
            width: 80px;
            height: 80px;
            border-radius: 8px;
            object-fit: cover;
            flex-shrink: 0;
            margin-right: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }

        .other-program-item:hover .other-program-img {
            transform: scale(1.05);
        }

        .other-program-title {
            font-family: 'Josefin Sans', sans-serif;
            font-weight: 600;
            font-size: 0.95rem;
            color: #333333;
            line-height: 1.4;
            margin-bottom: 5px;
            transition: color 0.2s ease;
        }

        .other-program-item:hover .other-program-title {
            color: #001ac3;
        }

        .other-program-tag {
            font-size: 0.8rem;
            color: #797E88;
        }

        .tag-badge-detail {
            background: rgba(0, 26, 195, 0.08);
            color: #001ac3;
            padding: 6px 16px;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            display: inline-block;
            margin-bottom: 15px;
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
    </style>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <!-- Program Detail Column -->
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                    <!-- Tag Badge -->
                    @if ($program->tag)
                        <span class="tag-badge-detail">
                            {{ $program->tag->title }}
                        </span>
                    @endif

                    <!-- Title -->
                    <h2 class="display-6 mb-4" style="font-family: 'Josefin Sans', sans-serif; font-weight: 700;">
                        {{ $program->title }}
                    </h2>

                    <!-- Main Image -->
                    <div class="mb-4 overflow-hidden rounded" style="border-radius: 16px;">
                        <img src="{{ $program->image_url ? (str_starts_with($program->image_url, 'http') ? $program->image_url : asset('storage/' . $program->image_url)) : 'https://placehold.co/900x500?text=No+Image' }}" 
                             class="program-detail-img" 
                             alt="{{ $program->title }}">
                    </div>

                    <!-- Meta Data -->
                    <div class="meta-container">
                        <div class="meta-item">
                            <i class="fa fa-tags me-2"></i>
                            Program Category: {{ $program->tag ? $program->tag->title : 'General' }}
                        </div>
                        @if ($program->user)
                            <div class="meta-item">
                                <i class="far fa-user me-2"></i>
                                Managed by: {{ $program->user->name }}
                            </div>
                        @endif
                    </div>

                    <!-- Program Content -->
                    <div class="program-content-body">
                        {!! $program->content !!}
                    </div>

                    <!-- Back to programs link -->
                    <div class="mt-5 pt-3 border-top">
                        <a href="{{ route('programs') }}" class="back-btn">
                            <i class="fa fa-arrow-left me-2"></i> Back to Our Programs
                        </a>
                    </div>
                </div>

                <!-- Sidebar Column -->
                <div class="col-lg-4">
                    <!-- Other Programs Widget -->
                    @if ($otherPrograms->isNotEmpty())
                        <div class="sidebar-card p-4 mb-4 wow fadeInUp" data-wow-delay="0.2s">
                            <h4 class="sidebar-title">Other Programs</h4>
                            <div class="d-flex flex-column">
                                @foreach ($otherPrograms as $other)
                                    <a href="{{ route('programs.show', $other) }}" class="other-program-item">
                                        <img src="{{ $other->image_url ? (str_starts_with($other->image_url, 'http') ? $other->image_url : asset('storage/' . $other->image_url)) : 'https://placehold.co/150x150?text=No+Image' }}" 
                                             class="other-program-img" 
                                             alt="{{ $other->title }}">
                                        <div>
                                            <h5 class="other-program-title">
                                                {{ \Illuminate\Support\Str::limit($other->title, 40) }}
                                            </h5>
                                            @if ($other->tag)
                                                <span class="other-program-tag">
                                                    <i class="fa fa-tag me-1"></i>
                                                    {{ $other->tag->title }}
                                                </span>
                                            @endif
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <!-- Donation CTA Banner -->
                    <div class="cta-banner p-4 wow fadeInUp" data-wow-delay="0.3s">
                        <h4 class="text-white mb-3" style="font-family: 'Josefin Sans', sans-serif; font-weight: 700;">Empower Our Program</h4>
                        <p class="text-white-50 mb-4" style="font-size: 0.95rem; line-height: 1.6;">
                            Your support provides shelter, education, medical aid, and counseling services to rescue beneficiaries.
                        </p>
                        <a href="{{ route('donation') }}" class="btn-cta">
                            <i class="fa fa-heart me-2"></i> Support Program
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
