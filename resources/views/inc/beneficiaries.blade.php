<style>
    .home-testimonial-card {
        border-radius: 15px;
        overflow: hidden;
        border: none;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        transition: all 0.3s ease-in-out;
        background: #ffffff;
    }
    .home-testimonial-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
    }
    .home-testimonial-img-wrapper {
        height: 200px;
        overflow: hidden;
        position: relative;
    }
    .home-testimonial-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s ease;
    }
    .home-testimonial-card:hover .home-testimonial-img {
        transform: scale(1.05);
    }
    .home-testimonial-quote {
        font-style: italic;
        color: #4a5568;
        line-height: 1.6;
    }
</style>

<!-- Testimonial Start -->
<div class="container-fluid py-5">
    <div class="container">
        <div class="row g-5">
            <div class="col-md-12 col-lg-4 col-xl-3 wow fadeIn" data-wow-delay="0.1s">
                <div class="testimonial-title">
                    <h3 class="display-7 mb-4">Our Beneficiaries Voices.</h3>
                    <p class="fs-5 mb-0">We work to bring smiles, hope, and a brighter future to those in need.</p>
                </div>
            </div>
            <div class="col-md-12 col-lg-8 col-xl-9">
                <div class="row g-4">
                    @php
                        $items = $testmonials ?? collect();
                        if ($items->isEmpty()) {
                            $items = collect([
                                (object)[
                                    'name' => 'Antony Githinji',
                                    'position' => 'ex-addict',
                                    'image' => 'slider/Antony.png',
                                    'content' => 'If it were not for a genuine support, I would have been long dead. I have engaged in criminal activities that I’m not proud of.',
                                    'is_static' => true,
                                ],
                                (object)[
                                    'name' => 'Joseph Ogutu',
                                    'position' => 'Sports Academy Director',
                                    'image' => 'frontend/img/logo.jpg',
                                    'content' => 'In 2024, Rehema organized a football tournament dubbed ‘Rehema Cup’. 10 teams in our Ward (Thika Township) participated with 4 of them being ladies’.',
                                    'is_static' => true,
                                ],
                                (object)[
                                    'name' => 'Marian Wanjiru',
                                    'position' => 'A Teen-pregnancy Victim',
                                    'image' => 'slider/Marian.png',
                                    'content' => 'During the COVID-19 pandemic I got pregnant at form 3, dropped out to take care of my baby but it was difficult as I got deserted, but when I heard about Rehema CBO.',
                                    'is_static' => true,
                                ]
                            ]);
                        }
                    @endphp

                    @foreach ($items as $item)
                        @php
                            $imageUrl = '';
                            if (isset($item->is_static) && $item->is_static) {
                                $imageUrl = asset($item->image);
                            } else {
                                $imageUrl = $item->image ? (str_starts_with($item->image, 'http') ? $item->image : asset('storage/' . $item->image)) : asset('frontend/img/logo.jpg');
                            }
                            $linkUrl = (isset($item->is_static) && $item->is_static)
                                ? route('beneficiaries')
                                : route('testmonials.show', $item);
                        @endphp
                        <div class="col-md-6 col-lg-4 wow fadeIn" data-wow-delay="{{ 0.1 + (0.2 * $loop->index) }}s">
                            <div class="card home-testimonial-card h-100">
                                <div class="home-testimonial-img-wrapper">
                                    <img class="home-testimonial-img" src="{{ $imageUrl }}" alt="{{ $item->name }}">
                                </div>
                                <div class="card-body p-4 d-flex flex-column">
                                    <p class="home-testimonial-quote flex-grow-1 mb-3">
                                        “{{ Str::limit(strip_tags($item->content), 120) }}”
                                    </p>
                                    <div class="d-flex align-items-center mt-auto pt-3 border-top border-light">
                                        <div class="btn-sm-square bg-light text-secondary flex-shrink-0" style="border-radius: 50%;">
                                            <i class="fa fa-quote-right"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h5 class="mb-0 text-dark fw-bold" style="font-size: 1.05rem;">{{ $item->name }}</h5>
                                            @if ($item->position)
                                                <small class="text-secondary d-block">{{ $item->position }}</small>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <a class="btn btn-secondary btn-sm py-2 px-3 w-100 rounded-pill text-white" href="{{ $linkUrl }}">
                                            Read Full Story <i class="fa fa-arrow-right ms-1"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->
