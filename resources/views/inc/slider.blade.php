  <!-- Carousel Start -->
  <div class="container-fluid p-0 wow fadeIn" id="our-mission" data-wow-delay="0.1s">
      <div class="owl-carousel header-carousel py-5">
        {{-- slider 1 --}}
          <div class="container py-5">
              <div class="row g-5 align-items-center">
                  <!-- Carousel Image -->
                  <div class="col-lg-6">
                      <div class="carousel-img">
                          <img class="w-100" src="{{ asset('slider/g1.jpg') }}" alt="Image">
                      </div>
                  </div>
                  <!-- end Carousel Image -->
                  <!-- Carousel Text -->
                  <div class="col-lg-6">
                      <div class="carousel-text">
                          <h6 class="display-6 text-uppercase mb-3 text-secondary">Our Vision.</h6>
                          <p class="fs-5 mb-5">Inspire and Provide Lasting Solutions.</p>
                          <div class="d-flex" id="about">
                              <a class="btn btn-primary py-3 px-4 me-3" href="#about-us">About Us</a>
                          </div>
                      </div>
                  </div>
                  <!-- end Carousel Text -->

              </div>
          </div>
          {{-- slider 2 --}}
          <div class="container py-5">
              <div class="row g-5 align-items-center">
                  <!-- Carousel Image -->
                  <div class="col-lg-6">
                      <div class="carousel-img">
                          <img class="w-100" src="{{ asset('slider/g4.jpg') }}" alt="Image">
                      </div>
                  </div>
                  <!-- end Carousel Image -->
                  <!-- Carousel Text-->
                  <div class="col-lg-6">
                      <div class="carousel-text">
                          <h6 class="display-6 text-uppercase mb-3 text-secondary">Our Mission.</h6>
                          <p class="fs-5 mb-5">
                              Intervening for Transformative Behavior Change.
                          <div class="d-flex mt-4">
                              <a class="btn btn-primary py-3 px-4 me-3" href="#what-we-do">What We Do</a>

                          </div>
                      </div>
                  </div>
                  <!-- end Carousel Text-->

              </div>
          </div>
          {{-- slider 3 --}}
          <div class="container py-5">
              <div class="row g-5 align-items-center">
                  <!-- Carousel Image -->
                  <div class="col-lg-6">
                      <div class="carousel-img">
                          <img class="w-100" src="{{ asset('slider/g4.jpg') }}" alt="Image">
                      </div>
                  </div>
                  <!-- end Carousel Image -->
                  <!-- Carousel Text-->
                  <div class="col-lg-6">
                      <div class="carousel-text">
                          <h6 class="display-6 text-uppercase mb-3 text-secondary">Our Programs.</h6>
                          <p class="fs-5 mb-5">
                             Our program’s delivery and effectiveness are qualitatively and quantitatively assessed through structured beneficiary surveys,...
                          <div class="d-flex mt-4">
                              <a class="btn btn-primary py-3 px-4 me-3" href="{{ route('programs') }}">Learn More</a>

                          </div>
                      </div>
                  </div>
                  <!-- end Carousel Text-->

              </div>
          </div>
      </div>
  </div>
  <!-- Carousel End -->
  <style>
      .header-carousel .owl-nav .owl-prev,
      .header-carousel .owl-nav .owl-next {
          width: 40px;
          height: 40px;
          font-size: 20px;
      }

      .header-carousel .owl-nav {
          top: 50%;
          transform: translateY(-50%);
      }
  </style>