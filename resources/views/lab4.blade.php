@extends('components.layout')

@section('content')
<section class="projects section-padding" id="section_4">
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
                    <h4 class="text-white ms-4 mb-0" style="margin-bottom: 0px !important;">Laboratory 4: Middleware</h4>
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
                            In Lab 4, I focused on the crucial aspect of middleware in Laravel applications, specifically creating and registering two custom middleware: <code>CheckAge</code> and <code>LogRequests</code>. 
                        </p>
                        <p>
                            The <code>CheckAge</code> middleware was designed to ensure that users accessing certain routes must be at least 18 years old. This middleware intercepts requests, checks the user's age, and, if the age condition is not met, redirects the user to an “Access Denied” page. This feature is vital for controlling access to age-restricted content within the application, enhancing security and compliance with regulations regarding age-restricted materials.
                        </p>
                        <p>
                            On the other hand, the <code>LogRequests</code> middleware is responsible for logging all incoming HTTP requests. It captures essential details such as the request method, URL, and a timestamp, which are then written to a log file named <code>log.txt</code>. This middleware is particularly useful for monitoring user activity and diagnosing potential issues within the application. By analyzing the log data, developers can identify patterns in user behavior, troubleshoot problems, and enhance the overall user experience.
                        </p>
                        <p>
                            I registered both middleware in the <code>app/Http/Kernel.php</code> file, allowing for global application or specific route assignment as required. The global registration of the <code>LogRequests</code> middleware ensures that all requests are logged, while the <code>CheckAge</code> middleware is assigned to specific routes, such as the welcome page and dashboard, to enforce age restrictions effectively.
                        </p>
                        <p>
                            Testing these middleware was crucial. I simulated various scenarios by altering age values in the request to verify that the <code>CheckAge</code> middleware functioned correctly, redirecting users under 18 to the access denied page while allowing older users to proceed to the dashboard and other age-restricted content. This rigorous testing ensured the reliability and functionality of the middleware in real-world usage.
                        </p>
                        <p>
                            Throughout the lab, I documented the implementation process with screenshots of the Blade template files, routing configuration, and rendered web pages to provide a clear understanding of the middleware in action. This comprehensive documentation highlights the middleware's role and effectiveness in enhancing application security and logging user interactions.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Rendered Pages Images -->
            <div class="col-lg-12 col-md-12 col-12 mt-4">
                <h4 class="text-center">Rendered Homepage</h4>
                <img alt="Homepage" class="img-fluid mb-4 hover-effect" src="images/lab/lab4-home.png"/>
            </div>

            <div class="col-lg-12 col-md-12 col-12 mt-4">
                <h4 class="text-center">Rendered Age Verification Page</h4>
                <img alt="Age Verification Page" class="img-fluid mb-4 hover-effect" src="images/lab/lab4-age.png"/>
            </div>

            <div class="col-lg-12 col-md-12 col-12 mt-4">
                <h4 class="text-center">Rendered Access Denied Page</h4>
                <img alt="Access Denied Page" class="img-fluid mb-4 hover-effect" src="images/lab/lab4-denied.png"/>
            </div>

            <div class="col-lg-12 col-md-12 col-12 mt-4">
                <h4 class="text-center">Rendered Dashboard Page</h4>
                <img alt="Dashboard Page" class="img-fluid mb-4 hover-effect" src="images/lab/lab4-dashboard.png"/>
            </div>

            <div class="col-lg-12 col-md-12 col-12 mt-4">
                <h4 class="text-center">Rendered Source Code Page</h4>
                <img alt="Source Code Page" class="img-fluid mb-4 hover-effect" src="images/lab/lab4-source.png"/>
            </div>

            <div class="col-lg-12 col-md-12 col-12 mt-4">
                <h4 class="text-center">Rendered Code Tutorials Page</h4>
                <img alt="Code Tutorials Page" class="img-fluid mb-4 hover-effect" src="images/lab/lab4-tuts.png"/>
            </div>
        </div>
    </div>
</section>
@endsection
