
<style>
    .about-home-top {

        background-color: #ffffff;

        padding: 90px 0;

    }


    .about-img-wrapper {

        position: relative;

        border-radius: 24px;

        overflow: hidden;

        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);

        height: 100%;

        min-height: 400px;

    }


    .about-img-wrapper img {

        width: 100%;

        height: 100%;

        object-fit: cover;

        transition: transform 0.5s ease;

    }


    .about-img-wrapper:hover img {

        transform: scale(1.03);

    }


    .about-text-card {

        padding: 30px 15px;

    }


    .theme-banner-light {

        border-left: 4px solid rgb(182, 82, 11);

        padding-left: 20px;

        margin-top: 30px;

    }


    /* Bottom Section */

    .values-section {

        background-color: #f8f9fa;

        padding: 90px 0;

    }


    .value-card-modern {

        background: #ffffff;

        border: 1px solid rgba(0, 0, 0, 0.04);

        border-radius: 24px;

        padding: 40px;

        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.02);

        transition: all 0.4s ease;

        height: 100%;

    }


    .value-card-modern:hover {

        transform: translateY(-5px);

        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);

    }


    .value-item-modern {

        background: #f8f9fa;

        border-radius: 16px;

        padding: 24px;

        margin-bottom: 20px;

        transition: all 0.3s ease;

        border: 1px solid rgba(0, 0, 0, 0.02);

    }


    .value-item-modern:hover {

        background: #ffffff;

        border-color: rgba(0, 26, 195, 0.1);

        transform: translateX(5px);

        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.04);

    }


    .stat-box-modern {

        background: linear-gradient(135deg, #001ac3 0%, rgba(0, 26, 195, 0.9) 100%);

        border-radius: 24px;

        padding: 45px 35px;

        text-align: center;

        color: #ffffff;

        position: relative;

        overflow: hidden;

        border: none;

        display: flex;

        flex-direction: column;

        justify-content: center;

        align-items: center;

        height: 100%;

        box-shadow: 0 15px 35px rgba(0, 26, 195, 0.25);

        transition: all 0.4s ease;

    }


    .stat-box-modern:hover {

        transform: translateY(-5px);

        box-shadow: 0 20px 45px rgba(0, 26, 195, 0.35);

    }


    .stat-box-modern::before {

        content: '';

        position: absolute;

        width: 150px;

        height: 150px;

        background: rgba(255, 255, 255, 0.05);

        border-radius: 50%;

        top: -50px;

        right: -50px;

    }
</style>



<!-- Top Section: About Us & Theme with image on the left -->

<div class="container-fluid about-home-top">

    <div class="container">

        <div class="row g-5 align-items-center">

          


            <!-- Right Side: Content -->

            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">

                <div class="about-text-card">

                    <span class="text-secondary fw-bold text-uppercase tracking-wider mb-2 d-inline-block">Rehema Rescue CBO</span>

                    <h2 class="display-6 text-dark mb-4 fw-bold">Who We Are</h2>

                    <p class="fs-5 text-muted mb-0" style="line-height: 1.8; font-weight: 300;">

                        A team; united by compassion, devoted through our hearts and acts to transforming lives,

                        empowering communities and restoring hope through integrated care — connecting every aspect of
                        life.

                    </p>


                    <div class="theme-banner-light">

                        <span class="text-secondary fw-semibold d-block mb-1 text-uppercase tracking-wider"
                            style="font-size: 0.85rem;">Our Theme</span>

                        <h3 class="text-primary mb-0" style="font-weight: 600; line-height: 1.4;">

                            Building Capacity for Growth, Impact and Sustainability.

                        </h3>

                    </div>

                </div>

            </div>
              <!-- Left Side: Image -->

            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">

                <div class="about-img-wrapper">

                    <img src="{{ asset('inc/whatwedo.jpg') }}" alt="About Us">

                </div>

            </div>

        </div>

    </div>

</div>



<!-- Bottom Section: Core Values & Accountability without background image -->

<div class="container-fluid values-section">

    <div class="container">

        <div class="row g-5 align-items-stretch">

            <!-- Core Values Panel -->

            <div class="col-lg-7 wow fadeIn" data-wow-delay="0.2s">

                <div class="value-card-modern">

                

                    <h3 class="text-secondary  mb-4 fw-bold" style="font-size: 2rem;">Our Core Values</h3>

                    <p class="text-muted mb-4">Our principles are pillared on:</p>


                    <div class="value-item-modern">

                        <div class="d-flex align-items-start">

                            <div class="btn-lg-square bg-light text-primary rounded-circle me-4 flex-shrink-0"
                                style="box-shadow: 0 5px 15px rgba(0,0,0,0.05);">

                                <i class="fa fa-heart fa-lg"></i>

                            </div>

                            <div>

                                <h5 class="text-dark mb-2 fw-bold">Pillars of Care</h5>

                                <p class="text-muted mb-0" style="font-size: 1rem; line-height: 1.6;">

                                    Respect, Empowerment, Hope, Equity.

                                </p>

                            </div>

                        </div>

                    </div>


                    <div class="value-item-modern mb-0">

                        <div class="d-flex align-items-start">

                            <div class="btn-lg-square bg-light text-primary rounded-circle me-4 flex-shrink-0"
                                style="box-shadow: 0 5px 15px rgba(0,0,0,0.05);">

                                <i class="fa fa-hands-helping fa-lg"></i>

                            </div>

                            <div>

                                <h5 class="text-dark mb-2 fw-bold">Mentorship & Advocacy</h5>

                                <p class="text-muted mb-0" style="font-size: 1rem; line-height: 1.6;">

                                    Advocating for the vulnerable in communities, translating to "REHEMA RESCUE".

                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>


            <!-- Accountability / Vision Panel -->

            <div class="col-lg-5 wow fadeIn" data-wow-delay="0.4s">

                <div class="stat-box-modern">

                    <div class="btn-lg-square bg-white text-primary rounded-circle mb-4"
                        style="width: 70px; height: 70px; box-shadow: 0 10px 20px rgba(0,0,0,0.1);">

                        <i class="fa fa-chart-line fa-2x"></i>

                    </div>

                    <h3 class="text-white mb-3 fw-bold" style="font-size: 1.75rem;">Accountability</h3>

                    <p class="text-white opacity-90 mb-4 px-3" style="font-size: 1.05rem; line-height: 1.8;">

                        Our program’s delivery and effectiveness are qualitatively and quantitatively assessed through
                        structured beneficiary feedback.

                    </p>

                    <a class="btn btn-light text-primary py-3 px-5 rounded-pill fw-bold" href="{{ route('programs') }}"
                        style="font-size: 1rem; transition: all 0.3s ease; box-shadow: 0 10px 20px rgba(0,0,0,0.1);">

                        Our Programs <i class="fa fa-arrow-right ms-2"></i>

                    </a>

                </div>

            </div>

        </div>

    </div>

</div>
