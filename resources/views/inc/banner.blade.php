{{--  <!-- Banner Start -->
 <div class="container-fluid banner py-5">
     <div class="container">
         <div class="banner-inner bg-light p-5 wow fadeIn" data-wow-delay="0.1s">
             <div class="row justify-content-center">
                 <div class="col-lg-8 py-5 text-center">
                     <h1 class="display-6 wow fadeIn text-secondary" data-wow-delay="0.3s">Our Operations.</h1>
                     <p class="fs-5 mb-4 wow fadeIn" data-wow-delay="0.5s">
                         Our operations are fully governed by rules of operations as to compliance, with tasks being assigned through a Human Resource Plan.
                     </p>
                     <h4 class="text-secondary mt-5">Our Care Reforms</h4>
                     <p class="fs-5 mb-4 wow fadeIn" data-wow-delay="0.5s">
                        Our system on care reforms highlights our strong advocacy for children and the socially-vulnerable.
                     </p>
                     <div class="row g-4 justify-content-center text-start wow fadeIn" data-wow-delay="0.7s">
                         <div class="col-md-4 care-reform-item">
                             <h5 class="text-primary">Family Care</h5>
                             <p>Strengthening the family institution as the base for a stable lifestyle.</p>
                         </div>
                         <div class="col-md-4 care-reform-item">
                             <h5 class="text-primary">Alternative Care</h5>
                             <p>Maintaining social interactions by upholding a sense of belonging through foster families, adoption, kinship, and guardianship.</p>
                         </div>
                         <div class="col-md-4 care-reform-item">
                             <h5 class="text-primary">Community Based Care</h5>
                             <p>Rescuing, enlightening, and empowering families and communities through effective resource leveraging and utilization.</p>
                         </div>
                         <div class="col-md-4 care-reform-item">
                             <h5 class="text-primary">Tracing</h5>
                             <p>Conducting follow-ups on those enrolled in our programs to ensure continued well-being.</p>
                         </div>
                         <div class="col-md-4 care-reform-item">
                             <h5 class="text-primary">Supportive Care</h5>
                             <p>Increasing accessibility to physical, psycho-social, and economic support.</p>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <style>
    .care-reform-item {
        padding: 1.5rem;
        border-left: 3px solid var(--bs-primary);
        background-color: #f8f9fa;
        border-radius: .25rem;
    }
 </style>
 <!-- Banner End -->
 --}}

<!-- Operations Section Start -->


<style>
    /* =====================================================
   OPERATIONS & CARE REFORMS
===================================================== */
    .operations-section,
    .care-section {
        position: relative;
        padding: 80px 0;
        overflow: hidden;
    }

    .operations-section {
        background: linear-gradient(135deg, #eef8ff 0%, #f8fbff 55%, #e9fff4 100%);
    }

    .care-section {
        background: #fff;
    }

    .operations-section:before,
    .care-section:before {
        content: "";
        position: absolute;
        left: -120px;
        top: -120px;
        width: 320px;
        height: 320px;
        background: rgba(13, 110, 253, .06);
        border-radius: 50%;
    }

    .operations-section:after,
    .care-section:after {
        content: "";
        position: absolute;
        right: -100px;
        bottom: -100px;
        width: 260px;
        height: 260px;
        background: rgba(253, 126, 20, .08);
        border-radius: 50%;
    }

    .section-badge {
        display: inline-block;
        padding: 8px 22px;
        border-radius: 40px;
        background: #fff2e8;
        color: #fd7e14;
        font-weight: 600;
    }

    .section-title {
        color: #fd7e14;
        font-weight: 700;
        margin: 18px 0;
    }

    .section-text {
        color: #6c757d;
        line-height: 1.9
    }

    .image-box {
        height: 100%;
        min-height: 520px;
        border-radius: 22px;
        overflow: hidden;
        box-shadow: 0 20px 45px rgba(0, 0, 0, .12)
    }

    .image-box img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: .5s
    }

    .image-box:hover img {
        transform: scale(1.05)
    }

    .feature-box {
        display: flex;
        align-items: center;
        background: #fff;
        padding: 15px;
        border-radius: 12px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, .06);
        height: 100%
    }

    .feature-box i {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: #fd7e14;
        color: #fff;
        margin-right: 12px
    }

    .reform-card {
        background: #fff;
        border-radius: 18px;
        padding: 22px;
        box-shadow: 0 10px 28px rgba(0, 0, 0, .08);
        height: 100%;
        transition: .35s;
        position: relative;
        overflow: hidden
    }

    .reform-card:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 0;
        height: 4px;
        background: #fd7e14;
        transition: .35s
    }

    .reform-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 18px 40px rgba(253, 126, 20, .18)
    }

    .reform-card:hover:before {
        width: 100%
    }

    .reform-icon {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #fff;
        font-size: 24px;
        margin-bottom: 16px;
        transition: .3s
    }

    .reform-card:hover .reform-icon {
        transform: rotate(10deg) scale(1.08)
    }

    .reform-card h5 {
        color: #fd7e14;
        font-weight: 700
    }

    .reform-card p {
        margin: 0;
        color: #6c757d;
        line-height: 1.7
    }
</style>

<section class="operations-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-5 wow fadeInLeft">
                <div class="image-box">
                    <img src="{{ asset('banner/g2.jpg') }}" alt="Operations">
                </div>
            </div>
            <div class="col-lg-7 wow fadeInRight">
                <span class="section-badge">How We Work</span>
                <h2 class="display-5 section-title">Our Operations</h2>
                <p class="section-text">Our operations are guided by accountability, transparency and professionalism to
                    ensure every programme delivers measurable impact for children, youth and vulnerable families.</p>
                <p class="section-text mb-4">Working with communities and partners, we implement sustainable
                    interventions that strengthen families and create lasting opportunities.</p>
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="feature-box"><i class="fa fa-check"></i>Accountability & Transparency</div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-box"><i class="fa fa-users"></i>Qualified HR Team</div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-box"><i class="fa fa-scale-balanced"></i>Policy Compliance</div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-box"><i class="fa fa-handshake"></i>Community Partnerships</div>
                    </div>
                </div>
                <a href="{{ route('programs') }}" class="btn btn-primary rounded-pill px-5 py-3 mt-4">Our Programs</a>
            </div>
        </div>
    </div>
</section>

<section class="care-section">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-7">
                <span class="section-badge">Care Reforms</span>
                <h2 class="display-5 section-title">Building Strong Families & Communities</h2>
                <p class="section-text mb-4">Our care reforms prioritize family-based care, protection, rehabilitation
                    and community empowerment.</p>
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="reform-card">
                            <div class="reform-icon bg-primary"><i class="fa fa-home"></i></div>
                            <h5>Family Care</h5>
                            <p>Strengthening families to provide safe and loving homes.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="reform-card">
                            <div class="reform-icon bg-success"><i class="fa fa-people-roof"></i></div>
                            <h5>Alternative Care</h5>
                            <p>Supporting foster care, adoption and kinship care.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="reform-card">
                            <div class="reform-icon bg-warning"><i class="fa fa-handshake-angle"></i></div>
                            <h5>Community Care</h5>
                            <p>Empowering communities through education and partnerships.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="reform-card">
                            <div class="reform-icon bg-danger"><i class="fa fa-location-dot"></i></div>
                            <h5>Tracing</h5>
                            <p>Monitoring and following up beneficiaries for lasting impact.</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="reform-card">
                            <div class="reform-icon bg-info"><i class="fa fa-heart-circle-plus"></i></div>
                            <h5>Supportive Care</h5>
                            <p>Providing psychosocial, educational, healthcare and economic support that improves lives.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="image-box">
                    <img src="{{ asset('mentorship/Mentorship.jpg') }}" alt="Care Reforms">
                </div>
            </div>
        </div>
    </div>
</section>
