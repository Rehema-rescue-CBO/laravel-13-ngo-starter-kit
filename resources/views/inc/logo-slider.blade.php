<style>
    .logo-slider {
        overflow: hidden;
        white-space: nowrap;
        width: 100%;
        padding: 3rem 0;
        background: #fff;
        border-top: 1px solid #eee;
        border-bottom: 1px solid #eee;
    }

    .logo-track {
        display: inline-block;
        white-space: nowrap;
        animation: scroll 25s linear infinite;
    }

    .logo-track img {
        height: 85px;
        margin: 0 3rem;
        vertical-align: middle;
        transition: transform 0.3s ease;
    }

    .logo-track img:hover {
        transform: scale(1.2);
    }

    @keyframes scroll {
        0% {
            transform: translateX(0);
        }

        100% {
            transform: translateX(-50%);
        }
    }
</style>



<!-- Partners Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">Our Friends</h6>
            <h1 class="mb-5">Our Valued Friends</h1>
        </div>
        <div class="logo-slider">
            <div class="logo-track">
                <img src="{{ asset('partners/p1.png') }}" alt="JavaScript" />
                <img src="{{ asset('partners/p2.jpg') }}" alt="React" />
                <img src="{{ asset('partners/p3.jpg') }}" alt="Node.js" />
                <img src="{{ asset('partners/p4.jpg') }}" alt="HTML5" />
                <img src="{{ asset('partners/p5.png') }}" alt="CSS3" />
                <img src="{{ asset('partners/p6.png') }}" alt="Vue.js" />
                <img src="{{ asset('partners/p7.png') }}" alt="Node.js" />

                <img src="{{ asset('partners/p9.png') }}" alt="CSS3" />
                <img src="{{ asset('partners/p10.png') }}" alt="Vue.js" />
                <img src="{{ asset('partners/p11.png') }}" alt="Node.js" />
                <img src="{{ asset('partners/p12.png') }}" alt="HTML5" />
                <img src="{{ asset('partners/p13.png') }}" alt="React" />
                <img src="{{ asset('partners/p14.png') }}" alt="JavaScript" />
                <img src="{{ asset('partners/p15.png') }}" alt="React" />

                <!-- add more logos here -->

            </div>
        </div>
    </div>
</div>
<!-- Partners End -->



<script>
    // Get the slider container
    const slider = document.querySelector(".logo-slider");

    // Get the logo track and all logo images inside
    const track = document.querySelector(".logo-track");
    const logos = Array.from(track.children);

    // Clone all logos and append them to the end to create an infinite loop
    logos.forEach((logo) => {
        const clone = logo.cloneNode(true);
        track.appendChild(clone);
    });

    // Pause animation on hover
    slider.addEventListener("mouseover", function() {
        document.querySelector(".logo-track").style.animationPlayState =
            "paused";
    });

    // Resume animation when hover ends
    slider.addEventListener("mouseout", function() {
        document.querySelector(".logo-track").style.animationPlayState =
            "running";
    });
</script>
