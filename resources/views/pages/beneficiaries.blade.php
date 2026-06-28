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
                @forelse ($beneficiaries as $testimonial)
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="{{ 0.1 + (0.2 * ($loop->index % 3)) }}s">
                        <div class="card beneficiary-card h-100">
                            <img src="{{ $testimonial->image ? (str_starts_with($testimonial->image, 'http') ? $testimonial->image : asset('storage/' . $testimonial->image)) : asset('frontend/img/logo.png') }}" class="card-img-top" alt="{{ $testimonial->name }}">
                            <div class="card-body d-flex flex-column">
                                <h5 class="card-title">{{ $testimonial->name }}</h5>
                                <p class="card-text flex-grow-1">
                                    {{ Str::limit(strip_tags($testimonial->content), 150) }}
                                </p>
                                @if ($testimonial->position)
                                    <span class="text-secondary d-block mb-3">{{ $testimonial->position }}</span>
                                @endif
                                <a href="{{ route('testmonials.show', $testimonial) }}" class="btn btn-primary rounded-pill px-4 mt-auto align-self-start">
                                    Read Full Story <i class="fa fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-5">
                        <div class="mb-4">
                            <i class="far fa-comment-dots text-muted" style="font-size: 4rem;"></i>
                        </div>
                        <h3 class="text-dark">No Testimonials Yet</h3>
                        <p class="text-muted">Check back soon for stories from our beneficiaries.</p>
                    </div>
                @endforelse
            </div>

            {{-- Pagination --}}
            @if ($beneficiaries->hasPages())
                <div class="d-flex justify-content-center mt-5 wow fadeInUp" data-wow-delay="0.1s">
                    {{ $beneficiaries->links() }}
                </div>
            @endif
        </div>
    </div>
    <!-- Beneficiaries End -->
@endsection
