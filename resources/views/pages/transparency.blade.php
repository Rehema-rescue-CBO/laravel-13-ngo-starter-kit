@extends('layouts.base')

@section('content')
    @include('layouts.pageheader')

    <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
        <p class="section-title bg-white text-center text-primary px-3">TRANSPARENCY AND MANAGEMENT
            MANAGEMENT.</p>
        <h6 class="display-7 mb-5">Our management and governance is well-structured to promote sound leadership and
            accountability in accordance with Article 10 and Article 32 of The Constitution of Kenya
            and The PBO Act of 2013.</h6>

    </div>
    {{-- Leadership --}}
    {{-- make them horizonal with three cards --}}
    <div class="container-xxl py-5">
        <div class="container">
            {{-- title Heang and description --}}
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h3 class="display-7 mb-4 text-secondary">Our Leadership Structure</h3>
                <p class="mb-5">Rehema Rescue CBO operates with a clear and effective leadership structure to ensure
                    transparency, accountability, and efficient service delivery across all levels.</p>
            </div>
            {{-- main card container --}}
            <div class="row g-4 justify-content-center mb-5">
                {{-- excutive card --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-card h-100">
                        <div class="position-relative d-inline-block mb-4 image-wrapper">
                            <img class="img-fluid rounded-circle" src="{{ asset('team/executive.jpg') }}"
                                alt="Executive Board">
                            <a href="#" class="view-icon" data-bs-toggle="modal" data-bs-target="#imageModal"
                                data-bs-img="{{ asset('team/executive.jpg') }}">
                                <i class="fa fa-eye"></i>
                            </a>
                        </div>
                        <h5 class="mb-1 text-secondary">Executive Board.</h5>
                        <p class="mt-2">The supreme governing organ of Rehema Rescue CBO, responsible for overall
                            strategic direction and high-level oversight.</p>
                    </div>
                </div>
                {{-- supervisory board card --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-card h-100">
                        <div class="position-relative d-inline-block mb-4 image-wrapper">
                            <img class="img-fluid rounded-circle" src="{{ asset('team/super.jpg') }}"
                                alt="Supervisory Board">
                            <a href="#" class="view-icon" data-bs-toggle="modal" data-bs-target="#imageModal"
                                data-bs-img="{{ asset('team/super.jpg') }}">
                                <i class="fa fa-eye"></i>
                            </a>
                        </div>
                        <h5 class="mb-1 text-secondary">Supervisory Board.</h5>
                        <p class="mt-2">An essential organ tasked with crucial decision-making and strategic planning to
                            guide the CBO's initiatives and ensure compliance.</p>
                    </div>
                </div>
                {{-- director card --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-card h-100">
                        <div class="position-relative d-inline-block mb-4 image-wrapper">
                            <img class="img-fluid rounded-circle" src="{{ asset('team/rhoda.jpeg') }}"
                                alt="Rhoda Kabirithu">
                            <a href="#" class="view-icon" data-bs-toggle="modal" data-bs-target="#imageModal"
                                data-bs-img="{{ asset('team/rhoda.jpeg') }}">
                                <i class="fa fa-eye"></i>
                            </a>
                        </div>
                        <h5 class="mb-1 text-secondary">CEO/Director.</h5>
                        <span class="role text-primary"> Rhoda Kabirithu.</span>
                        <p class="mt-2">Responsible for implementing the decisions of both the Executive and Supervisory
                            Boards.</p>
                    </div>
                </div>
            </div>
            {{-- end main card container --}}

            {{-- leadership card for project manager,senior and interns --}}

            <div class="row g-4 justify-content-center mb-5">
                {{-- project Manager card --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-card h-100">
                        <div class="position-relative d-inline-block mb-4 image-wrapper">
                            <img class="img-fluid rounded-circle" src="{{ asset('frontend/img/logo.png') }}"
                                alt="Executive Board">
                            <a href="#" class="view-icon" data-bs-toggle="modal" data-bs-target="#imageModal"
                                data-bs-img="{{ asset('frontend/img/logo.png') }}">
                                <i class="fa fa-eye"></i>
                            </a>
                        </div>
                        <h5 class="mb-1 text-secondary">The Project Manager.</h5>
                        <p class="mt-2">
                            Carries out all project
                            management responsibilities
                            within the CBO, ensuring that all departments are working cohesively towards common goals.
                            <!-- #region -->.
                        </p>
                    </div>
                </div>
                {{-- project Coordinator card --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-card h-100">
                        <div class="position-relative d-inline-block mb-4 image-wrapper">
                            <img class="img-fluid rounded-circle" src="{{ asset('frontend/img/logo.png') }}"
                                alt="Supervisory Board">
                            <a href="#" class="view-icon" data-bs-toggle="modal" data-bs-target="#imageModal"
                                data-bs-img="{{ asset('frontend/img/logo.png') }}">
                                <i class="fa fa-eye"></i>
                            </a>
                        </div>
                        <h5 class="mb-1 text-secondary">The Project Coordinator.</h5>
                        <p class="mt-2"> Works alongside the Project
                            Manager to coordinate
                            all activities of the various programs, ensuring smooth and effective implementation.</p>
                    </div>
                </div>
                {{-- department heads card --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-card h-100">
                        <div class="position-relative d-inline-block mb-4 image-wrapper">
                            <img class="img-fluid rounded-circle" src="{{ asset('frontend/img/logo.png') }}"
                                alt="Rhoda Kabirithu">
                            <a href="#" class="view-icon" data-bs-toggle="modal" data-bs-target="#imageModal"
                                data-bs-img="{{ asset('frontend/img/logo.png') }}">
                                <i class="fa fa-eye"></i>
                            </a>
                        </div>
                        <h5 class="mb-1 text-secondary">Department Heads.</h5>
                        {{-- <span class="role">CEO/Director</span> --}}
                        <p class="mt-2">Lead specific departments within the
                            CBO,
                            efficient service delivery and specialized management within their areas.</p>
                    </div>
                </div>
                {{-- General staff volunteers & beneficiaries card --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-card h-100">
                        <div class="position-relative d-inline-block mb-4 image-wrapper">
                            <img class="img-fluid rounded-circle" src="{{ asset('team/senior.jpg') }}"
                                alt="Rhoda Kabirithu">
                            <a href="#" class="view-icon" data-bs-toggle="modal" data-bs-target="#imageModal"
                                data-bs-img="{{ asset('team/senior.jpg') }}">
                                <i class="fa fa-eye"></i>
                            </a>
                        </div>
                        <h5 class="mb-1 text-secondary">General Staff (Volunteers).</h5>
                        {{-- <span class="role">CEO/Director</span> --}}
                        <p class="mt-2">Comprises all our
                                    invaluable volunteers who are
                                    in direct contact with the beneficiaries, providing essential support and services.</p>
                    </div>
                </div>
                {{-- interns --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-card h-100">
                        <div class="position-relative d-inline-block mb-4 image-wrapper">
                            <img class="img-fluid rounded-circle" src="{{ asset('frontend/img/logo.png') }}"
                                alt="Rhoda Kabirithu">
                            <a href="#" class="view-icon" data-bs-toggle="modal" data-bs-target="#imageModal"
                                data-bs-img="{{ asset('frontend/img/logo.png') }}">
                                <i class="fa fa-eye"></i>
                            </a>
                        </div>
                        <h5 class="mb-1 text-secondary">Interns.</h5>
                        {{-- <span class="role">CEO/Director</span> --}}
                        <p class="mt-2"> Persons undergoing practice and industrial
                            attachment at the CBO,
                            contributing to our mission while gaining practical experience.
                            .</p>
                    </div>
                </div>

                {{--   end cards --}}
            </div>
            {{-- end leadership --}}








            {{--  <div class="row justify-content-center">
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.3s">
                    <ul class="list-unstyled vstack gap-4">
                        <li class="mb-3">
                            <i class="fa fa-check text-primary me-2"></i>
                            <strong class="text-primary">The Project Manager:</strong> Carries out all project
                            management responsibilities
                            within the CBO, ensuring that all departments are working cohesively towards common goals.
                        </li>
                        <li class="mb-3">
                            <i class="fa fa-check text-primary me-2"></i>
                            <strong class="text-primary">The Project Coordinator:</strong> Works alongside the Project
                            Manager to coordinate
                            all activities of the various programs, ensuring smooth and effective implementation.
                        </li>
                        <li class="mb-3">
                            <i class="fa fa-check text-primary me-2"></i>
                            <strong class="text-primary">Department Heads:</strong> Lead specific departments within the
                            CBO,
                            efficient service delivery and specialized management within their areas.
                        </li>

                        <li class="d-md-flex align-items-center">
                            <div class="flex-shrink-0 mb-3 mb-md-0 me-md-4 text-center">
                                <div class="position-relative d-inline-block image-wrapper">
                                    <img src="{{ asset('team/senior.jpg') }}" alt="Senior Staff" class="img-fluid rounded"
                                        style="width: 200px;">
                                    <a href="#" class="view-icon" data-bs-toggle="modal" data-bs-target="#imageModal"
                                        data-bs-img="{{ asset('team/senior.jpg') }}">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                </div>
                                <div class="mt-2"><span class="text-secondary">Senior and General staff</span></div>
                            </div>
                            <div>
                                <p><i class="fa fa-check text-primary me-2"></i>
                                    <strong class="text-primary">General Staff (Volunteers):</strong> Comprises all our
                                    invaluable volunteers who are
                                    in direct contact with the beneficiaries, providing essential support and services.
                                </p>
                            </div>
                        </li>

                        <li class="mb-3">
                            <i class="fa fa-check text-primary me-2"></i>
                            <strong class="text-primary">Interns:</strong> Persons undergoing practicum and industrial
                            attachment at the CBO,
                            contributing to our mission while gaining practical experience.
                </div>
                </li>
                </ul>
            </div> --}}
        </div>
    </div>
    </div>
    {{-- end leadership --}}

    {{-- section --}}
    <!-- Operations & Objectives Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <!-- Operations Section -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="h-100 p-5 bg-light border-start border-5 border-primary">
                        <h3 class="display-7 mb-4 text-secondary">Operations</h3>
                        <p>Our operations are fully governed by rules of operation (modus operandi, policies, and
                            laws) to ensure compliance with tasks assigned through a Human Resource Plan.</p>
                    </div>
                </div>
                <!-- Objectives Section -->
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="h-100 p-5 bg-light border-start border-5 border-primary">
                        <h3 class="display-7 mb-4 text-secondary">Objectives</h3>
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fa fa-check text-primary me-2"></i>Facilitate access to quality
                                education</li>
                            <li class="mb-2"><i class="fa fa-check text-primary me-2"></i>Provide life skills and
                                empowerment for self-sustainability</li>
                            <li class="mb-2"><i class="fa fa-check text-primary me-2"></i>Provide guidance and
                                counselling</li>
                            <li class="mb-2"><i class="fa fa-check text-primary me-2"></i>To provide preventive
                                rehabilitation</li>
                            <li class="mb-2"><i class="fa fa-check text-primary me-2"></i>To promote health and
                                wellbeing</li>
                            <li class="mb-2"><i class="fa fa-check text-primary me-2"></i>To fight against SGBV,
                                advocate and protect victims</li>
                            <li class="mb-2"><i class="fa fa-check text-primary me-2"></i>To promote access to
                                HIV/AIDs Care</li>
                            <li class="mb-2"><i class="fa fa-check text-primary me-2"></i>To promote and nurture
                                talents and gifting</li>
                            <li class="mb-2"><i class="fa fa-check text-primary me-2"></i>To advocate for
                                environmental safety and preservation</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Operations & Objectives End -->



















    {{-- end  --}}











    {{--  <div class="container-xxl py-5">
        <div class="container">
            <!-- The Executive Board -->
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h3 class="display-7 mb-5 text-secondary">The Executive Board</h3>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-card">
                        <img class="img-fluid rounded-circle mb-4" src="{{ asset('team/rhoda.jpeg') }}" alt="Team Member">
                        <h5 class="mb-1">Rhoda Kabirithu</h5>
                        <span class="role">Board Member</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-card">
                        <img class="img-fluid rounded-circle mb-4" src="{{ asset('team/joseph.jpeg') }}"
                            alt="Team Member">
                        <h5 class="mb-1">Joseph mogeto</h5>
                        <span class="role">Board Member</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-card">
                        <img class="img-fluid rounded-circle mb-4" src="{{ asset('team/groupb.jpeg') }}"
                            alt="Team Member">
                        <h5 class="mb-1">Executive Members</h5>
                        <span class="role">Board Member</span>
                    </div>
                </div>
            </div> --}}

    <!-- Add other team sections here following the same structure -->

    </div>
    </div>

    <!-- Image Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-transparent border-0 shadow-none">
                <div class="modal-body p-0 text-center position-relative">
                    <button type="button" class="btn-close position-absolute top-0 end-0 m-3 bg-white"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                    <img src="" id="modalImage" class="img-fluid rounded" alt="Preview"
                        style="max-height: 90vh;">
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var imageModal = document.getElementById('imageModal');
            imageModal.addEventListener('show.bs.modal', function(event) {
                var button = event.relatedTarget;
                var imgSrc = button.getAttribute('data-bs-img');
                var modalImage = imageModal.querySelector('#modalImage');
                modalImage.src = imgSrc;
            });
        });
    </script>

    <style>
        .team-card {
            text-align: center;
            padding: 2rem 1.5rem;
            background-color: #fff;
            border-radius: .5rem;
            border: 1px solid #f0f0f0;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .team-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }

        .team-card img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border: 5px solid #f8f9fa;
        }

        .team-card .role {
            color: var(--bs-primary);
            font-weight: 600;
        }

        .image-wrapper:hover .view-icon {
            opacity: 1;
        }

        .view-icon {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: rgba(0, 0, 0, 0.5);
            color: #fff;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 1;
            transition: opacity 0.3s;
            text-decoration: none;
        }

        .view-icon:hover {
            background: var(--bs-primary);
            color: #fff;
        }
    </style>
@endsection
