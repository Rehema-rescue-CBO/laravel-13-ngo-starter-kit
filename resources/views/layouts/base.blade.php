<?php

$config = [
    'app_name' => 'Rehema Rescue CBO',
    'ContactEmail' => 'info@rehemarescue.org',
    'Gmail' => 'rehemarescueorg@gmail.com',
    'ContactPhone1' => '+2547 13 370 599',
    'ContactPhone2' => '+2547 13 370 599',
    'Address' => 'Mburu Plaza,Kwame Nkuruma Road. P.O BOX 7927-01000,Kiambu,Thika,Kenya',
    'Address2' => 'Mburu Plaza, Thika, Kenya',
    'Website' => 'www.rehemarescue.org',
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ $title ?? 'rehema rescue' }} - Rehema rescue CBO</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta
        content="Rehema Rescue CBO,Community Based Services,Mental Health Support,Gender-Based Violence Rescue,Volunteer Opportunities in Thika "
        name="keywords">
    <meta content=" " name="description">

    <!-- Favicon links -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favcon/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favcon/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favcon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('favcon/site.webmanifest')}}">
  <link href="{{ asset('favcon/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@600;700&family=Open+Sans&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    {{-- awlecorousel --}}
    <!-- Libraries Stylesheet -->
    <link href="{{ asset('frontend/lib/jquery/jquery.min.js') }}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/jquery/jquery.min.js') }}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">

    {{-- Stack for page/partial-specific styles --}}
    @stack('styles')

    {{-- css Overwrite --}}
    <style>
        .btn-secondary {
            background-color: #001ac3 !important;

        }

        .text-secondary {
            color: rgb(182, 82, 11) !important;

        }

        .bg-secondary {
            background-color: #001ac3 !important;
        }

        .text-blue {
            color: #001ac3 !important;
            font-weight: 600;
        }

        .logo-container img {
            width: 30%;
            /* Default for large screens */
        }

        @media (max-width: 991.98px) {
            .logo-container {
                text-align: center;
            }

            .logo-container img {
                width: 50%;
                /* Larger on small screens */
            }
        }
    </style>
    {{-- end css Overwrite --}}

    <!-- collect Chat -->
    <script>
        (function(w, d) {
            w.CollectId = "691821e8ffa0db31dbe41465";
            var h = d.head || d.getElementsByTagName("head")[0];
            var s = d.createElement("script");
            s.setAttribute("type", "text/javascript");
            s.async = true;
            s.setAttribute("src", "https://collectcdn.com/launcher.js");
            h.appendChild(s);
        })(window, document);
    </script>

    <!-- end Collect Chat -->
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-secondary top-bar wow fadeIn" data-wow-delay="0.1s">
        <div class="row align-items-center h-100">
            <div class="col-lg-4 logo-container">
                <a href="/">
                    <img src="{{ asset('frontend/img/logo.png') }}" alt="Logo">
                </a>
            </div>
            <div class="col-lg-8 d-none d-lg-block">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="d-flex justify-content-end">
                            <div class="flex-shrink-0 btn-square bg-primary">
                                <i class="fa fa-phone-alt text-dark"></i>
                            </div>
                            <div class="ms-2">
                                <h6 class="text-primary mb-0">Call Us</h6>
                                <span class="text-white">{{ $config['ContactPhone1'] }}</span>
                            </div>


                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex justify-content-end">
                            <div class="flex-shrink-0 btn-square bg-primary">
                                <i class="fa fa-envelope-open text-dark"></i>
                            </div>
                            <div class="ms-2">
                                <h6 class="text-primary mb-0">Mail Us</h6>
                                <span class="text-white">{{ $config['ContactEmail'] }}</span>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="d-flex justify-content-end">
                            <div class="flex-shrink-0 btn-square bg-primary">
                                <i class="fa fa-map-marker-alt text-dark"></i>
                            </div>
                            <div class="ms-2">
                                <h6 class="text-primary mb-0">Address</h6>
                                <span class="text-white">{{ $config['Address2'] }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-secondary px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="nav-bar">
            <nav class="navbar navbar-expand-lg bg-primary navbar-dark px-4 py-lg-0">
                <h4 class="d-lg-none m-0">Menu</h4>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav me-auto">
                        <a href="/" class="nav-item nav-link active">Home</a>
                        {{-- About Tabs --}}
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About Us</a>
                            <div class="dropdown-menu bg-light m-0">
                                <a href="{{ route('about') }}" class="dropdown-item">Our History</a>
                                {{-- <a href="{{ route('about') }}" class="dropdown-item">Our Team</a> --}}
                                {{-- <a href="{{ route('beneficiaries') }}" class="dropdown-item">Our Beneficiries</a> --}}
                                <a href="{{ route('transparency') }}" class="dropdown-item">Transparency &
                                    Management</a>

                            </div>
                        </div>
                        {{-- End About Tabs --}}
                        {{-- get involved --}}
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Get
                                Involved</a>
                            <div class="dropdown-menu bg-light m-0">
                                <a href="{{ route('volunteer') }}" class="dropdown-item">Volunteer</a>
                                <a href="{{ route('partner') }}" class="dropdown-item">Partner With Us</a>
                                <a href="{{ route('donation') }}" class="dropdown-item">Donate</a>
                                <a href="{{ route('partners') }}" class="dropdown-item">Collaborators</a>
                            </div>
                        </div>
                        {{-- end get involved --}}
                        <a href="{{ route('programs') }}" class="nav-item nav-link">Our Programs</a>
                        {{-- Resources --}}
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle"
                                data-bs-toggle="dropdown">Resources</a>
                            <div class="dropdown-menu bg-light m-0">
                                {{-- <a href="event.html" class="dropdown-item">Stories</a> --}}
                                {{-- publications --}}
                                <a href="{{ route('publications') }}" class="dropdown-item">Publications</a>
                                <a href="{{ route('events') }}" class="dropdown-item">Events</a>
                                   {{-- blogs --}}
                                <a href="{{ route('blogs') }}" class="dropdown-item">Blogs</a>
                                <a href="{{ route('beneficiaries') }}" class="dropdown-item">Testimonials</a>
                                {{-- <a href="404.html" class="dropdown-item">News/Blog</a> --}}
                                <a href="{{ route('privacy') }}" class="dropdown-item">Privacy Policy.</a>
                            </div>
                        </div>
                        {{-- End Resources --}}


                        <a href="{{ route('faqs') }}" class="nav-item nav-link">FAQs</a>
                        <a href="{{ route('contact') }}" class="nav-item nav-link">Contact Us</a>
                    </div>
                    <div class="d-none d-lg-flex ms-auto">
                        <a class="btn btn-square btn-primary me-2"
                            href="https://x.com/RehemaRescue?t=sz-mpZvgrcjoSE7aqZNR8w&s=09"><i
                                class="fab fa-x-twitter"></i></a>
                        <a class="btn btn-square btn-primary me-2"
                            href="https://www.facebook.com/profile.php?id=61562350683270"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary me-2"
                            href="https://youtube.com/@rehemarescue?si=pmpVst5ddhEg5xGV"><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-primary me-2" href="https://www.instagram.com/rehema.rescue"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    {{-- Floating Donation Button --}}
    <a href="{{ route('donation') }}" class="btn btn-secondary btn-lg"
        style="position: fixed; bottom: 30px; left: 30px; z-index: 9999; border-radius: 50px; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
        Donate Now
    </a>
    <!-- Floating Donation Button End -->


    @yield('content')

    <!-- Footer Start -->
    <div class="container-fluid bg-secondary  footer py-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 py-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Our Office</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>{{ $config['Address'] }}</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>{{ $config['ContactPhone1'] }}</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>{{ $config['Gmail'] }}</p>

                    <div class="d-flex pt-3">
                        <a class="btn btn-square btn-primary me-2"
                            href="https://x.com/RehemaRescue?t=sz-mpZvgrcjoSE7aqZNR8w&s=09"><i
                                class="fab fa-x-twitter"></i></a>
                        <a class="btn btn-square btn-primary me-2"
                            href="https://www.facebook.com/profile.php?id=61562350683270"><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary me-2"
                            href="https://youtube.com/@rehemarescue?si=pmpVst5ddhEg5xGV"><i
                                class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-primary me-2" href="https://www.instagram.com/rehema.rescue"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="{{ route('about') }}">About Us</a>
                    <a class="btn btn-link" href="{{ route('programs') }}">Our Programs</a>
                    <a class="btn btn-link" href="{{ route('contact') }}">Contact Us</a>
                    <a class="btn btn-link" href="{{ route('partners') }}">Our Collaborators</a>
                    <a class="btn btn-link" href="{{ route('events') }}">Events</a>
                    <a class="btn btn-link" href="{{ route('faqs') }}">FAQs</a>
                    <a class="btn btn-link" href="{{ route('privacy') }}">Privacy Policy</a>
                    <a class="btn btn-link" href="{{ route('recommendations') }}">Recommendations</a>
                    <a class="btn btn-link" href="{{ route('publications') }}">Publications</a>

                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Working Hours</h4>
                    <p class="mb-1">Monday - Friday</p>
                    <h6 class="text-light">09:00 am - 07:00 pm</h6>
                    <p class="mb-1">Saturday</p>
                    <h6 class="text-light">09:00 am - 12:00 pm</h6>
                    <p class="mb-1">Sunday</p>
                    <h6 class="text-light">Closed</h6>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Gallery</h4>
                    <div class="row g-2">
                        <div class="col-4">
                            <img class="img-fluid w-100" src="{{ asset('inc/Christmas.jpg') }}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid w-100" src="{{ asset('inc/goverment.jpg') }}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid w-100" src="{{ asset('inc/graduation.png') }}    " alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid w-100" src="{{ asset('inc/Graduationmen.png') }}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid w-100" src="{{ asset('inc/need1.jpg') }}" alt="">
                        </div>
                        <div class="col-4">
                            <img class="img-fluid w-100" src="{{ asset('slider/g1.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright pt-5">
                <div class="row">
                    <div class="col-md-6 text-center text-md-center mb-3 mb-md-0">
                        &copy; <a class="fw-semi-bold" href="#">{{ 'Rehema Rescue CBO |' }}
                            {{ date('Y') }}</a>,
                        All
                        Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">

                        {{-- Dev <a class="fw-semi-bold" href="">Murimicodes</a> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    {{-- google analytics code --}}

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Z4NYK0FLYT"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-Z4NYK0FLYT');
    </script>
    {{-- end google analytics code --}}

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/counterup/counterup.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>

</body>

</html>
