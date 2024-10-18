@extends('components.layout')

@section('content')
<section class="contact section-padding" id="section_5">
<div class="container">
<div class="row">
<div class="col-lg-6 col-md-8 col-12">
<div class="section-title-wrap d-flex justify-content-center align-items-center mb-5">
<img alt="" class="avatar-image img-fluid" src="images/aerial-view-man-using-computer-laptop-wooden-table.jpg"/>
<h2 class="text-white ms-4 mb-0">Say Hi</h2>
</div>
</div>
<div class="clearfix"></div>
<div class="col-lg-3 col-md-6 col-12 pe-lg-0">
<div class="contact-info contact-info-border-start d-flex flex-column">
<strong class="site-footer-title d-block mb-3">Services</strong>
<ul class="footer-menu">
<li class="footer-menu-item"><a class="footer-menu-link" href="#">Websites</a></li>
<li class="footer-menu-item"><a class="footer-menu-link" href="#">Branding</a></li>
<li class="footer-menu-item"><a class="footer-menu-link" href="#">Ecommerce</a></li>
<li class="footer-menu-item"><a class="footer-menu-link" href="#">SEO</a></li>
</ul>
<strong class="site-footer-title d-block mt-4 mb-3">Stay connected</strong>
<ul class="social-icon">
<li class="social-icon-item"><a class="social-icon-link bi-facebook" href="https://www.facebook.com/princessdiane.rosana"></a></li>
<li class="social-icon-item"><a class="social-icon-link bi-instagram" href="https://www.instagram.com/princessenaid__/"></a></li>
<li class="social-icon-item"><a class="social-icon-link bi-github" href="https://github.com/diane-r8"></a></li>
<li class="social-icon-item"><a class="social-icon-link bi-youtube" href="https://www.youtube.com/@princessdianerosana1968"></a></li>
</ul>
<strong class="site-footer-title d-block mt-4 mb-3">Start a project</strong>
<p class="mb-0">Let's work together!</p>
</div>
</div>
<div class="col-lg-3 col-md-6 col-12 ps-lg-0">
<div class="contact-info d-flex flex-column">
<strong class="site-footer-title d-block mb-3">About</strong>
<p class="mb-2">
                                        Feel free to get in touch with me.
                              </p>
<strong class="site-footer-title d-block mt-4 mb-3">Email</strong>
<p>
<a href="mailto:hello@josh.design">
                                            yandydiane08@gmail.com
                                        </a>
</p>
<strong class="site-footer-title d-block mt-4 mb-3">Call</strong>
<p class="mb-0">
<a href="tel: 09706104541">
                                            +63 970 610 4541
                                        </a>
</p>
</div>
</div>
<div class="col-lg-6 col-12 mt-5 mt-lg-0">
<form action="#" class="custom-form contact-form" method="get" role="form">
<div class="row">
<div class="col-lg-6 col-md-6 col-12">
<div class="form-floating">
<input class="form-control" id="name" name="name" placeholder="Name" required="" type="text"/>
<label for="floatingInput">Name</label>
</div>
</div>
<div class="col-lg-6 col-md-6 col-12">
<div class="form-floating">
<input class="form-control" id="email" name="email" pattern="[^ @]*@[^ @]*" placeholder="Email address" required="" type="email"/>
<label for="floatingInput">Email address</label>
</div>
</div>
<div class="col-lg-3 col-md-6 col-6">
<div class="form-check form-check-inline">
<input class="form-check-input" id="inlineCheckbox1" name="website" type="checkbox" value="1"/>
<label class="form-check-label" for="inlineCheckbox1">
<i class="bi-globe form-check-icon"></i>
<span class="form-check-label-text">Websites</span>
</label>
</div>
</div>
<div class="col-lg-3 col-md-6 col-6">
<div class="form-check form-check-inline">
<input class="form-check-input" id="inlineCheckbox2" name="branding" type="checkbox" value="1"/>
<label class="form-check-label" for="inlineCheckbox2">
<i class="bi-lightbulb form-check-icon"></i>
<span class="form-check-label-text">Branding</span>
</label>
</div>
</div>
<div class="col-lg-3 col-md-6 col-6">
<div class="form-check form-check-inline">
<input class="form-check-input" id="inlineCheckbox3" name="ecommerce" type="checkbox" value="1"/>
<label class="form-check-label" for="inlineCheckbox3">
<i class="bi-phone form-check-icon"></i>
<span class="form-check-label-text">Ecommerce</span>
</label>
</div>
</div>
<div class="col-lg-3 col-md-6 col-6">
<div class="form-check form-check-inline me-0">
<input class="form-check-input" id="inlineCheckbox4" name="seo" type="checkbox" value="1"/>
<label class="form-check-label" for="inlineCheckbox4">
<i class="bi-google form-check-icon"></i>
<span class="form-check-label-text">SEO</span>
</label>
</div>
</div>
<div class="col-lg-12 col-12">
<div class="form-floating">
<textarea class="form-control" id="message" name="message" placeholder="Tell me about the project"></textarea>
<label for="floatingTextarea">Tell me about the project</label>
</div>
</div>
<div class="col-lg-3 col-12 ms-auto">
<button class="form-control" type="submit">Send</button>
</div>
</div>
</form>
</div>
</div>
</div>

</section>
@endsection