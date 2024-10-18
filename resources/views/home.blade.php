@extends('components.layout')

@section('content')
<section class="hero d-flex justify-content-center align-items-center" id="section_1">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-12">
                <div class="hero-text">

                    <!-- Display alert message -->
                    @if(session('alert'))
                        <style>
                            /* Animation styles */
                            .custom-alert {
                                background-color: #f9c2a8; /* Light orange background */
                                color: #333; /* Dark text color */
                                padding: 15px; /* Padding around the alert */
                                border-radius: 5px; /* Rounded corners */
                                margin-bottom: 20px; /* Space below the alert */
                                position: relative; /* Needed for animation */
                                animation: slideIn 0.5s forwards, slideOut 0.5s forwards 4.5s; /* Animation for in and out */
                                z-index: 999; /* Ensure alert is on top */
                                font-size: 18px; /* Adjust font size here */
                                font-family: 'Poppins', sans-serif; /* Modern font family */
                            }

                            /* Keyframes for sliding in */
                            @keyframes slideIn {
                                from {
                                    transform: translateX(100%); /* Start off-screen right */
                                    opacity: 0; /* Start invisible */
                                }
                                to {
                                    transform: translateX(0); /* Move to original position */
                                    opacity: 1; /* Fade in */
                                }
                            }

                            /* Keyframes for sliding out */
                            @keyframes slideOut {
                                from {
                                    transform: translateX(0); /* Start from original position */
                                    opacity: 1; /* Fully visible */
                                }
                                to {
                                    transform: translateX(100%); /* Move off-screen right */
                                    opacity: 0; /* Fade out */
                                }
                            }
                        </style>
                        <div class="custom-alert" role="alert">
                            {{ session('alert') }}
                        </div>
                    @endif

                    <h2 class="mb-4">Take a look at my portfolio.</h2>
                    <p class="mb-4"><a class="custom-btn btn custom-link" href="{{ route('about') }}">Click here to start exploring.</a></p>
                </div>
            </div>
            <div class="col-lg-5 col-12 position-relative">
                <div class="hero-image-wrap"></div>
                <img alt="" class="hero-image img-fluid" src="images/girl_coder.png"/>
            </div>
        </div>
    </div>
    <svg viewbox="0 0 1440 320" xmlns="http://www.w3.org/2000/svg">
        <path d="M0,160L24,160C48,160,96,160,144,138.7C192,117,240,75,288,64C336,53,384,75,432,106.7C480,139,528,181,576,208C624,235,672,245,720,240C768,235,816,213,864,186.7C912,160,960,128,1008,133.3C1056,139,1104,181,1152,202.7C1200,224,1248,224,1296,197.3C1344,171,1392,117,1416,90.7L1440,64L1440,0L1416,0C1392,0,1344,0,1296,0C1248,0,1200,0,1152,0C1104,0,1056,0,1008,0C960,0,912,0,864,0C816,0,768,0,720,0C672,0,624,0,576,0C528,0,480,0,432,0C384,0,336,0,288,0C240,0,192,0,144,0C96,0,48,0,24,0L0,0Z" fill="#535da1" fill-opacity="1"></path>
    </svg>
</section>
@endsection
