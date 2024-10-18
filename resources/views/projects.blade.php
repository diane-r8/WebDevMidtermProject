@extends('components.layout')

@section('content')
<section class="projects section-padding" id="section_4">
<div class="container">
<div class="row">
<div class="col-lg-8 col-md-8 col-12 ms-auto">
<div class="section-title-wrap d-flex justify-content-center align-items-center mb-4">
<img alt="" class="avatar-image img-fluid" src="images/white-desk-work-study-aesthetics.jpg"/>
<h2 class="text-white ms-4 mb-0">Projects</h2>
</div>
</div>

<div class="col-lg-6 col-md-8 col-12">
    <div class="projects-thumb">
        <div class="projects-info">
            <small class="projects-tag">IT Elec 1 Web Development</small>
            <h3 class="projects-title">Laboratory 1: Setup</h3>
        </div>
        <a href="{{ url('/lab1') }}" class="text-decoration-none">
            <img alt="" class="projects-image img-fluid" src="images/projects/Lab1.png"/>
        </a>
    </div>
</div>

<div class="col-lg-6 col-md-8 col-12">
    <div class="projects-thumb">
        <div class="projects-info">
            <small class="projects-tag">IT Elec 1 Web Development</small>
            <h3 class="projects-title">Laboratory 2: Routes</h3>
        </div>
        <a href="{{ url('/lab2') }}" class="text-decoration-none">
            <img alt="" class="projects-image img-fluid" src="images/projects/Lab2.png"/>
        </a>
    </div>
</div>

<div class="col-lg-6 col-md-8 col-12">
    <div class="projects-thumb">
        <div class="projects-info">
            <small class="projects-tag">IT Elec 1 Web Development</small>
            <h3 class="projects-title">Laboratory 3: Layout</h3>
        </div>
        <a href="{{ url('/lab3') }}" class="text-decoration-none">
            <img alt="" class="projects-image img-fluid" src="images/projects/Lab3.png"/>
        </a>
    </div>
</div>

<div class="col-lg-6 col-md-8 col-12">
    <div class="projects-thumb">
        <div class="projects-info">
            <small class="projects-tag">IT Elec 1 Web Development</small>
            <h3 class="projects-title">Laboratory 4: Middleware</h3>
        </div>
        <a href="{{ url('/lab4') }}" class="text-decoration-none">
            <img alt="" class="projects-image img-fluid" src="images/projects/Lab4.png"/>
        </a>
    </div>
</div>

</div>
</div>
</section>
@endsection
