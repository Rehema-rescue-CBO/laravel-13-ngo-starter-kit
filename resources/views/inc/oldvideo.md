{{--   {{-- background video --}}
  
  
  <!-- Video Hero Section Start -->
  <div class="container-fluid p-0 video-hero-section wow fadeIn" data-wow-delay="0.1s">
      <video autoplay loop muted playsinline class="background-video">
          <source src="{{ asset('videos/home2.mp4') }}" type="video/mp4">
          Your browser does not support the video tag.
      </video>
      <div class="video-overlay">
          <div class="container text-center text-white py-5">
              <h3 class="display-7 text-uppercase mb-3 wow fadeIn text-primary" data-wow-delay="0.3s">Our Vision</h3>
              <p class="fs-5 mb-4 wow fadeIn" data-wow-delay="0.5s">Inspire and Provide Lasting Solutions.</p>
              <h3 class="display-7 text-uppercase mb-3 wow fadeIn text-primary" data-wow-delay="0.7s">Our Mission</h3>
              <p class="fs-5 mb-4 wow fadeIn" data-wow-delay="0.9s">Intervening for Transformative Behavior Change.</p>
              <h3 class="display-7 text-uppercase mb-3 wow fadeIn text-primary" data-wow-delay="1.1s">Our Core Values</h3>
              <p class="fs-5 mb-5 wow fadeIn" data-wow-delay="1.3s"> <b class="text-secondary">R</b>espect, <b class="text-secondary">E</b>mpowerment, <b class="text-secondary">H</b>ope, <b class="text-secondary">E</b>quity, <b class="text-secondary">M</b>entorship and <b class="text-secondary">A</b>dvocacy for the vulnerable in communities, translating  to <b class="text-secondary">“REHEMA”</b>.</p>
              <div class="d-flex justify-content-center wow fadeIn" data-wow-delay="1.5s">
                  <a class="btn btn-primary py-3 px-4 me-3 flex-nowrap" href="{{ route('about') }}">About Us</a>
                  <a class="btn btn-secondary py-3 px-4 flex-nowrap text-white" style="color: #fff !important" href="{{ route('donation') }}">Donate Now</a>
              </div>
          </div>
      </div>
  </div>
  <!-- Video Hero Section End -->

                          </div>
                      </div>
                  </div>
                  <!-- end Carousel Text-->
  <style>
      .video-hero-section {
          position: relative;
          width: 100%;
          height: 100vh; /* Full viewport height */
          overflow: hidden;
          display: flex;
          align-items: center;
          justify-content: center;
          background-color: #000; /* Fallback background color */
      }

      .background-video {
          position: absolute;
          top: 50%;
          left: 50%;
          min-width: 100%;
          min-height: 100%;
          width: auto;
          height: auto;
          z-index: 0;
          -ms-transform: translateX(-50%) translateY(-50%);
          -moz-transform: translateX(-50%) translateY(-50%);
          -webkit-transform: translateX(-50%) translateY(-50%);
          transform: translateX(-50%) translateY(-50%);
          background-size: cover;
      }

      .video-overlay {
          position: absolute;
          top: 0;
          left: 0;
          width: 100%;
          height: 100%;
          z-index: 1;
          display: flex;
          flex-direction: column;
          justify-content: center;
          align-items: center;
          text-align: center;
          padding: 20px;
          background-color: rgba(80, 122, 240, 0.5); /* Semi-transparent orange overlay */
      }

      @media (max-width: 768px) {
          .video-overlay {
              padding: 15px;
          }
      }

      .video-overlay h1, .video-overlay p {
          color: #fff; /* Ensure text is white for contrast */
          text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7); /* Add text shadow for better readability */
      }

      .video-overlay .btn-secondary {
          background-color: #001ac3 !important;
          border-color: #001ac3 !important;
          color: #212529 !important; /* Dark text for secondary button */
      }
  </style> --}}
