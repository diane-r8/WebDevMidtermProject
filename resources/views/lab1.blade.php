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
                    <h4 class="text-white ms-4 mb-0" style="margin-bottom: 0px !important;">Laboratory 1: Laravel Project Setup</h4>
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
                            In Lab 1: Laravel Project Setup, I began by familiarizing myself with the key directories and files that form the backbone of a Laravel project. I explored how each directory serves a crucial role in the application’s structure. For example, the <code>app/</code> directory contains the core logic, including models and controllers, while the <code>config/</code> directory stores configuration files like database settings. Understanding these folders helped me grasp how Laravel organizes its code and where to place specific components of the application.
                        </p>
                        <p>
                            Next, I moved on to creating the project. Using Composer, I installed Laravel, initializing the project from scratch. Once the project was set up, I created a Git repository to manage version control, which allowed me to track changes and collaborate more effectively.
                        </p>
                        <p>
                            I then configured the <code>.env</code> file, which is used to store environment-specific details like database credentials. I connected my Laravel application to the database by adjusting the configuration to ensure the application could interact with the database.
                        </p>
                        <p>
                            Following this, I worked on building the necessary views. I created several Blade templates such as <code>home.blade.php</code>, <code>about.blade.php</code>, <code>shop.blade.php</code>, and a layout file <code>layout.blade.php</code>. The layout file provided a consistent structure for all pages, which helped in keeping the design uniform. Each of these views rendered content dynamically, showcasing the power of Blade templating in Laravel.
                        </p>
                        <p>
                            After setting up the views, I defined routes in the <code>web.php</code> file to map URLs to their respective views. These routes allowed me to navigate between different pages in the browser. I successfully rendered the home, about, and shop pages by visiting specific URLs in the browser, confirming that everything was set up correctly.
                        </p>
                        <p>
                            By the end of Lab 1, I had a working Laravel project with multiple views, a connected database, and a structured directory system. This laid a strong foundation for building more advanced features in future labs.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Images of rendered pages with hover effect -->
            <div class="col-lg-12 col-md-12 col-12 mt-4">
                <h4 class="text-center">Rendered Home Page</h4>
                <img alt="Home Page" class="img-fluid mb-4 hover-effect" src="images/lab/lab1-home.png"/>
            </div>

            <div class="col-lg-12 col-md-12 col-12 mt-4 mb-5">
                <h4 class="text-center">Rendered About Page</h4>
                <img alt="About Page" class="img-fluid mb-4 hover-effect" src="images/lab/lab1-about.png"/>
            </div>

            <div class="col-lg-12 col-md-12 col-12 mt-4 mb-5">
                <h4 class="text-center">Rendered Shop Page</h4>
                <img alt="Shop Page" class="img-fluid mb-4 hover-effect" src="images/lab/lab1-shop.png"/>
            </div>

        </div>
    </div>
</section>


@endsection
