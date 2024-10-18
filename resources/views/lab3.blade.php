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
                    <h4 class="text-white ms-4 mb-0" style="margin-bottom: 0px !important;">Laboratory 3: Layouts</h4>
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
                            In Lab 3, I focused on creating a layout file that serves as a foundation for the various views in my Laravel application. This layout file, located in the <code>resources/views/components</code> directory, defines the basic HTML structure shared across different pages.
                        </p>
                        <p>
                            Each view file extends the layout, allowing for a consistent design throughout the application. This method promotes code reusability and simplifies maintenance, as any changes made to the layout automatically reflect in all views that extend it.
                        </p>
                        <p>
                            I created three new blade files within the <code>resources/views</code> directory: <code>home.blade.php</code>, <code>about.blade.php</code>, and <code>contact.blade.php</code>. Each of these views contains page-specific content while inheriting the layout structure.
                        </p>
                        <p>
                            Additionally, I updated the <code>routes/web.php</code> file to define routes that return the corresponding views, ensuring smooth navigation within the application.
                        </p>
                        <p>
                            This lab helped reinforce the importance of layout files in web development, providing a clear separation between structure and content, and facilitating a more organized approach to building applications.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Rendered Pages Images -->
            <div class="col-lg-12 col-md-12 col-12 mt-4">
                <h4 class="text-center">Rendered Home Page</h4>
                <img alt="Home Page" class="img-fluid mb-4 hover-effect" src="images/lab/lab3-home.png"/>
            </div>

            <div class="col-lg-12 col-md-12 col-12 mt-4">
                <h4 class="text-center">Rendered About Page</h4>
                <img alt="About Page" class="img-fluid mb-4 hover-effect" src="images/lab/lab3-about.png"/>
            </div>

            <div class="col-lg-12 col-md-12 col-12 mt-4">
                <h4 class="text-center">Rendered Shop Page</h4>
                <img alt="Shop Page" class="img-fluid mb-4 hover-effect" src="images/lab/lab3-shop.png"/>
            </div>
        </div>
    </div>
</section>
@endsection
