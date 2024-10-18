@extends('components.layout')

@section('content')
<section class="services section-padding" id="section_3">
    <style>
        .hover-effect {
            transition: transform 0.3s;
        }

        .hover-effect:hover {
            transform: scale(1.05);
        }

        .section-title-wrap {
            text-align: center;
        }
    </style>

    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-12 mx-auto">
                <div class="section-title-wrap d-flex justify-content-center align-items-center mb-2" style="margin-bottom: 10px !important;">
                    <img alt="" class="avatar-image img-fluid" src="images/white-desk-work-study-aesthetics.jpg"/>
                    <h4 class="text-white ms-4 mb-0" style="margin-bottom: 0px !important;">Laboratory 2: Routes</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="projects section-padding" id="section_4">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12" style="margin-top: -20px;">
                <div class="projects-thumb">
                    <div class="projects-info">
                        <p>
                            In Lab 2, I focused on defining basic routes for the Laravel application. I created routes that allowed for easy navigation within the site, including a homepage with a welcome message, an "About Us" page, and a "Contact Us" form.
                        </p>
                        <p>
                            The routes were set up in the <code>web.php</code> file. I implemented a redirect from <code>/home</code> to <code>/</code> to ensure a seamless user experience. Additionally, I created a route with a required parameter to display personalized messages and made this parameter optional to handle users without a specified username.
                        </p>
                        <p>
                            Regular expression constraints were also applied to the username route to ensure it only accepted alphabetic characters. This added an extra layer of validation and helped maintain the integrity of the application's routing system.
                        </p>
                        <p>
                            Throughout this lab, I also documented my process with screenshots of the application running alongside the relevant code snippets, illustrating the functionality of each route I created.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Rendered Pages Images -->
            <div class="col-lg-12 col-md-12 col-12 mt-4">
                <h4 class="text-center">Rendered Home Page</h4>
                <img alt="Home Page" class="img-fluid mb-4 hover-effect" src="images/lab/lab2-home.png"/>
            </div>

            <div class="col-lg-12 col-md-12 col-12 mt-4">
                <h4 class="text-center">Rendered About Page</h4>
                <img alt="About Page" class="img-fluid mb-4 hover-effect" src="images/lab/lab2-about.png"/>
            </div>

            <div class="col-lg-12 col-md-12 col-12 mt-4">
                <h4 class="text-center">Rendered Contact Us Page</h4>
                <img alt="Contact Us Page" class="img-fluid mb-4 hover-effect" src="images/lab/lab2-contact.png"/>
            </div>
        </div>
    </div>

    <!-- Go Back Button -->
    <div class="col-lg-12 text-center mb-5">
                <a href="{{ route('projects') }}" class="btn btn-success">Go Back to Projects</a>
            </div>

</section>
@endsection
