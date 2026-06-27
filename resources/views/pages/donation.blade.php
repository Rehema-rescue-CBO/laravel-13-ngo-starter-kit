@extends('layouts.base')
@section('content')
    @include('layouts.pageheader')

    {{-- three section for mpesa, paypal, and bank transfer --}}
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4 justify-content-center">
                <!-- M-Pesa Card -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item h-100 p-5">
                        <div class="btn-square bg-light mb-4" style="width: 64px; height: 64px;">
                            <i class="fa fa-mobile-alt fa-2x text-secondary"></i>
                        </div>
                        <h4 class="mb-3 text-primary">M-Pesa</h4>
                        <p class="mb-4">To donate via M-Pesa, please use : <br>  <strong class="text-secondary">Paybill number:</strong>   <br> 
                            <strong class="text-primary">522522.</strong>    <br>  <strong class="text-secondary">Account number:</strong>  <br> <strong class="text-primary">1312861924</strong> </p>
                    </div>
                </div>
                <!-- PayPal Card -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item h-100 p-5">
                        <div class="btn-square bg-light mb-4" style="width: 64px; height: 64px;">
                           <i class="fa-brands fa-cc-paypal fa-2x text-secondary"></i>
                        </div>
                        <h4 class="mb-3  text-primary">PayPal</h4>
                        <p class="mb-4">To donate via PayPal, please use the following link: <a href="#" class="text-secondary">Donate with PayPal</a></p>
                    </div>
                </div>
                <!-- Bank Transfer Card -->
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item h-100 p-5">
                        <div class="btn-square bg-light mb-4" style="width: 64px; height: 64px;">
                            <i class="fa fa-university fa-2x text-secondary"></i>
                        </div>
                        <h4 class="mb-3 text-primary">Bank Transfer</h4>
                        <p class="mb-4">
                            To donate via Bank Transfer, please use the following details: <br> 
                             <strong class="text-primary">Account Name:</strong><br> <strong class="text-secondary">Rehema Rescue CBO.</strong> <br> <strong class="text-primary">Account Number:</strong>  <br> <strong class="text-secondary">1312861924</strong> <br> <strong class="text-primary">Bank:</strong> <br> <strong class="text-secondary"> KCB Bank</strong>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- end of three section for mpesa, paypal, and bank transfer --}} 
@endsection