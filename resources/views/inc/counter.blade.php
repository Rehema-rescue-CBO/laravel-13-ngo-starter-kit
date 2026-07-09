<style>
    /* Attractive section background */
.impact-section{
    background: linear-gradient(135deg,#eef8ff 0%,#f8fbff 50%,#e9fff4 100%);
    position: relative;
    overflow: hidden;
}

.impact-section::before{
    content:"";
    position:absolute;
    width:320px;
    height:320px;
    background:rgba(13,110,253,.08);
    border-radius:50%;
    top:-120px;
    left:-120px;
}

.impact-section::after{
    content:"";
    position:absolute;
    width:280px;
    height:280px;
    background:rgba(25,135,84,.08);
    border-radius:50%;
    bottom:-100px;
    right:-100px;
}

/* Card */
.impact-card{
    position:relative;
    background:#fff;
    border-radius:18px;
    padding:40px 25px;
    height:100%;
    box-shadow:0 10px 30px rgba(0,0,0,.08);
    transition:all .35s ease;
    z-index:2;
}

.impact-card:hover{
    transform:translateY(-12px);
    box-shadow:0 20px 45px rgba(13,110,253,.18);
}

/* Top border animation */
.impact-card::before{
    content:"";
    position:absolute;
    top:0;
    left:50%;
    transform:translateX(-50%);
    width:0;
    height:5px;
    background:#0d6efd;
    border-radius:10px;
    transition:.4s;
}

.impact-card:hover::before{
    width:100%;
}

/* Icon */
.icon-box{
    width:85px;
    height:85px;
    margin:0 auto 25px;
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    color:#fff;
    font-size:34px;
    transition:.35s;
}

.impact-card:hover .icon-box{
    transform:rotate(10deg) scale(1.1);
}

.counter{
    font-size:3rem;
    font-weight:700;
    margin-bottom:20px;
}

.impact-card p{
    color:#6c757d;
    line-height:1.8;
    margin-bottom:0;
    font-size:15px;
}
</style>




<section class="impact-section py-5">
    <div class="container">

        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width:650px;">
            <span class="text-primary fw-bold text-uppercase">Our Impact</span>
            <h2 class="display-6 fw-bold mt-2">Changing Lives, Building Hope</h2>
            <p class="text-muted">
                Every number represents a life transformed through education, mentorship,
                rehabilitation, and community empowerment.
            </p>
        </div>

        <div class="row g-4">

            <!-- Card -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="impact-card text-center">

                    <div class="icon-box bg-primary">
                        <i class="fa fa-graduation-cap"></i>
                    </div>

                    <h2 class="counter text-primary">
                        <span data-toggle="counter-up">420</span>
                    </h2>

                    <p>
                        Children, teens and young adults have been enrolled in schools
                        and institutions of higher learning.
                    </p>

                </div>
            </div>

            <!-- Card -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="impact-card text-center">

                    <div class="icon-box bg-success">
                        <i class="fa fa-award"></i>
                    </div>

                    <h2 class="counter text-success">
                        <span data-toggle="counter-up">85</span>%
                    </h2>

                    <p>
                        Participants have successfully integrated vocational and life
                        skills into their daily lives.
                    </p>

                </div>
            </div>

            <!-- Card -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="impact-card text-center">

                    <div class="icon-box bg-warning">
                        <i class="fa fa-heart"></i>
                    </div>

                    <h2 class="counter text-warning">
                        <span data-toggle="counter-up">71</span>%
                    </h2>

                    <p>
                        Individuals enrolled in our rehabilitation programmes have
                        successfully overcome drug and substance abuse.
                    </p>

                </div>
            </div>

            <!-- Card -->
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                <div class="impact-card text-center">

                    <div class="icon-box bg-info">
                        <i class="fa fa-users"></i>
                    </div>

                    <h2 class="counter text-info">
                        <span data-toggle="counter-up">440</span>
                    </h2>

                    <p>
                        Individuals have benefited from mentorship, counselling,
                        guidance and psychosocial support.
                    </p>

                </div>
            </div>

        </div>

        <div class="text-center mt-5">
            <a href="{{ route('getinvolved') }}" class="btn btn-primary btn-lg rounded-pill px-5 py-3">
                Get Involved
            </a>
        </div>

    </div>
</section>