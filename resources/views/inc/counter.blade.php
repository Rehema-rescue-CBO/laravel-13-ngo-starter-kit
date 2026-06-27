<!-- What we do Start -->

<div class="container-fluid py-5" id="what-we-do">
    <div class="container">
        <div class="what-we-do-section wow fadeIn" data-wow-delay="0.1s">
            <div class="content-overlay">
                <h1 class="display-6 mb-4 wow fadeIn text-white"    data-wow-delay="0.2s">What We Do.</h1>
                <p class="mb-4 wow fadeIn text-white" data-wow-delay="0.3s" style="font-weight:600;">Child
                    Protection and Advocacy, Education, Mental
                    Health, Alcohol and Substance Abuse, Mentorship,
                    Technical Skills Development, Health and Nutrition.</p>

                <div class="d-flex mt-4 wow fadeIn" data-wow-delay="0.7s">
                    <a class="btn btn-primary py-3 px-4 me-3" href="{{ route('getinvolved') }}">Get Involved</a>
                 
                </div>
            </div>
        </div>
    </div>
</div>
<!-- What we do End -->

<!-- Our Impact Start -->
<div class="container-xxl py-5">
    <div class="container">


                <div class="rounded overflow-hidden ">
                    <div class="text-center mx-auto wow fadeInUp"  data-wow-delay="0.1s"
                style="max-width: 500px;">
                <h3 class="section-title bg-white text-center text-primary px-3">Our Impact</h3>
            </div>
                    <div class="row g-0">
                        <div class="col-sm-6 wow fadeIn rounded" data-wow-delay="0.1s">
                            <div class="text-center bg-primary py-5 px-4 h-100">
                                <i class="fa fa-users fa-3x text-secondary mb-3"></i>
                                <h1 class="display-5 mb-0" data-toggle="counter-up">420</h1>
                                <span class="text-dark">
                                    <h5 class="text-secondary">Education:</h5> <br> Teens and youths, successfully
                                    enrolled
                                    in
                                    schools
                                    and institutions of
                                    higher learning.
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn rounded" data-wow-delay="0.3s">
                            <div class="text-center bg-secondary py-5 px-4 h-100">
                                <i class="fa fa-award fa-3x text-primary mb-3"></i>
                                <h1 class="display-5 text-white mb-0" data-toggle="counter-up">85</h1>
                                <span class="text-white">
                                    <h5 class="text-secondary">Skills Development:</h5> <br>
                                    85% of participants
                                    show great
                                    skills integration.
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn rounded" data-wow-delay="0.5s">
                            <div class="text-center bg-secondary py-5 px-4 h-100">
                                <i class="fa fa-list-check fa-3x text-primary mb-3"></i>
                                <h1 class="display-5 text-white mb-0" data-toggle="counter-up">71</h1>
                                <span class="text-white">
                                    <h5 class="text-secondary">Drugs & Substance Abuse:</h5> <br>
                                    71.3% of addicts enrolled , have successfully reformed.
                                </span>
                            </div>
                        </div>
                        <div class="col-sm-6 wow fadeIn rounded" data-wow-delay="0.7s">
                            <div class="text-center bg-primary py-5 px-4 h-100">
                                <i class="fa fa-comments fa-3x text-secondary mb-3"></i>
                                <h1 class="display-5 mb-0" data-toggle="counter-up">440</h1>
                                <span class="text-dark">
                                    <h5 class="text-secondary">Mentorship:</h5> Through empowerment, supportive care,
                                    guidance and
                                    counselling, 440
                                    individuals have benefited.
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
</div>
<!-- Our Impact End -->

<style>
    .what-we-do-section {
        position: relative;
        background-image: url('{{ asset('inc/whatwedo.jpg') }}');
        background-size: cover;
        background-position: center;
        border-radius: .5rem;
        overflow: hidden;
        min-height: 450px;
        /* Ensure a minimum height for the section */
    }

    .content-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(0, 0, 0, 0.6);
        /* Semi-transparent dark overlay */
        display: flex;
        flex-direction: column;
        justify-content: center;
        /* Center content vertically */
        align-items: center;
        /* Center content horizontally */
        text-align: center;
        /* Ensure text is centered */
        padding: 2rem;
        /* Padding for the content inside the overlay */
    }

    .rounded {
        border-radius: .5rem !important;
        overflow: hidden;
    }
</style>
