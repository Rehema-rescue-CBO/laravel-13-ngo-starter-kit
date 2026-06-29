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
                @forelse ($publications as $publication)
                    <div class="col-lg-10 wow fadeInUp" data-wow-delay="{{ 0.1 * ($loop->index % 3 + 1) }}s">
                        <div class="card border-0 shadow rounded overflow-hidden">
                            <div class="row g-0">
                                <div class="col-md-5 position-relative">
                                    {{-- Image section --}}
                                    <img src="{{ $publication->image_path ? (str_starts_with($publication->image_path, 'http') ? $publication->image_path : asset('storage/' . $publication->image_path)) : asset('mentorship/Mentorship.jpg') }}" class="img-fluid h-100 w-100" alt="{{ $publication->title }}" style="object-fit: cover; min-height: 300px;">
                                </div>
                                <div class="col-md-7">
                                    <div class="card-body p-5 h-100 d-flex flex-column justify-content-center">
                                        {{-- Heading --}}
                                        <h3 class="card-title text-secondary mb-3">{{ $publication->title }}</h3>
                                        
                                        {{-- Category --}}
                                        @if ($publication->category)
                                            <h5 class="text-primary mb-3">{{ $publication->category->title }}</h5>
                                        @endif
                                        
                                        {{-- Description --}}
                                        <p class="card-text mb-4">{{ Str::limit($publication->description ?? $publication->content, 200) }}</p>
                                        
                                        {{-- PDF Download --}}
                                        <div>
                                            <a href="{{ $publication->file_path ? asset('storage/' . $publication->file_path) : '#' }}" class="btn btn-primary py-2 px-4 rounded-pill" {{ $publication->file_path ? '' : 'disabled' }}>
                                                <i class="fa fa-file-pdf me-2"></i>Download PDF
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-lg-10 text-center py-5 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="mb-4">
                            <i class="far fa-file-pdf text-muted" style="font-size: 4rem;"></i>
                        </div>
                        <h3 class="text-dark">No Publications Yet</h3>
                        <p class="text-muted">Check back soon for our latest newsletters and publications.</p>
                    </div>
                @endforelse
            </div>

            {{-- Pagination --}}
            @if ($publications->hasPages())
                <div class="d-flex justify-content-center mt-5 wow fadeInUp" data-wow-delay="0.1s">
                    {{ $publications->links() }}
                </div>
            @endif
        </div>
    </div>

@endsection
