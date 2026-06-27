@extends('layouts.base')
@section('content')
    @include('layouts.pageheader')
    {{-- Volunteer Start --}} <div class="container-fluid py-5">
        <div class="container-fluid donate py-5">
            <div class="container">
                <div class="row g-0">
                    <div class="col-lg-7 donate-text bg-light py-5 wow fadeIn" data-wow-delay="0.1s">
                        <div class="d-flex flex-column justify-content-center h-100 p-5 wow fadeIn" data-wow-delay="0.3s">
                            <h1 class="display-6 mb-4">Partner with Us</h1>
                            <p class="fs-5 mb-0">Through your partnership, we spread kindness and support to children,
                                families, and communities struggling to find stability.</p>
                        </div>
                    </div>
                    <div class="col-lg-5 donate-form bg-primary py-5 text-center wow fadeIn" data-wow-delay="0.5s">
                        <div class="h-100 p-5">
                            <form action="{{ route('contact.email') }}" method="POST">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                            @error('name')
                                                <span class="text-danger">{{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                            @error('email')
                                                <span class="text-danger">{{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="email" name="subject"
                                                placeholder="Your subject">
                                            <label for="email">Subject</label>
                                            @error('subject')
                                                <span class="text-danger">{{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" placeholder="Leave a message here" name="message" id="message" style="height: 250px"></textarea>
                                            <label for="message">Message</label>
                                            @error('message')
                                                <span class="text-danger">{{ $message }} </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-secondary py-3 w-100" type="submit">Volunteer</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- Volunteer End --}}
    @endsection
