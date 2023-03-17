@extends('frontend.layouts.app')

@section('meta_title',$meta->meta_title)
@section('meta_description',$meta->meta_description)

@section('content')

    <!-- Services Section-one start -->
    <section class="services-sec sec-space">
        <div class="container ">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <h2 class="text-primary">Website Development Agency</h2>
                    <p>We make good websites great! WeBeeSocial is a full-service digital marketing agency that provides
                        nothing but the best website design and development services in Toronto. Looking for a landing
                        page design or full-fledged website, we understand what your brand needs and bring out the best
                        attractive, interactive and user-friendly e-commerce website.</p>
                    <p>From website design and development to search engine optimization to site maintenance, we’ve got
                        you all covered. We ensure that your audience is hooked from the moment they land on your
                        website!</p>
                    <p>Our team of highly talented and experienced content, web development and design bees, equipped
                        with the latest tools and technologies, take onto their shoulders the task of presenting your
                        audience an experience in itself through the website.</p>
                    <ul class="list-unstyled service-partner badge-partner">
                        <li><img width="160" src="{{asset('frontend')}}/images/shopify-partner.jpg" alt="Google" class="img-fluid"></li>
                        <li><img width="160" src="{{asset('frontend')}}/images/MC-Partner.png" alt="Google" class="img-fluid"></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img src="{{asset('frontend')}}/images/Web-Application.png" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section-one End -->
    <!-- Services Section-three start -->
    <section class="text-center sec-space pt-0 services-text m-auto">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <h3 class="text-primary">Why does your business need a Website Development Agency?</h3>
                    <p>Creating a digital presence for your brand is crucial in today’s day and age. What is more
                        important is staying connected with your audience to determine consumer behavior and
                        perceptions. A good website stands as a window to your brand and serves as a primary customer
                        touchpoint or basecamp to all information about your brand.</p>
                    <p>An easily navigable, visually appealing, and one which ranks high in search engines website is
                        required for your brand to stand out from the crowd, fulfill your visitor’s search intentions
                        and showcase your brand’s presence.</p>
                    <p>Your brand without a strong and appealing web page is like having a show without a name, which
                        would automatically lose customer trust and an opportunity to reach wider audiences.</p>
                    <p class="mb-0">Worry not, we are here to help and in the best way possible! Afterall you found us
                        through this webpage, didn’t you?</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section-three End -->
    <!-- Services Section-card start -->
    <section class="sec-space pt-0 why-wbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 services-text m-auto text-center">
                    <h3 class="text-primary">Bringing our expertise into the picture</h3>
                    <p>As a web development agency in Toronto, our first order of business is understanding your brand
                        inside out and then designing and optimizing websites tailored specifically to your needs. Be it
                        content, design or maintenance, our team consistently tracks the latest developments to provide
                        you with the best interface and not to forget- experience!</p>
                    <p>Another important factor for your website is maintaining its search appearances- our team
                        regularly audits the website to ensure that it reaches the right audience who can turn out to be
                        potential customers.</p>
                    <p><b>Wanna know more why our web development services are worth your investment-</b></p>
                </div>
            </div>
            <div class="row justify-content-center d-lg-flex">
                <div class="col-md-6 mb-4 mb-md-4 text-center">
                    <div class="card services-card h-100">
                        <div class="card-body">
                            <div class="card-icon services-card-icon">
                                <img src="{{asset('frontend')}}/images/optimization.png" alt="Webeesocial UAE | Social media marketing">

                            </div>
                            <h5 class="mb-3 text-primary"><b>Optimizing page experience</b></h5>
                            <p class="mb-0">We believe in providing an experience customized to your brand’s
                                requirements. Optimizing web pages according to devices and maintaining it to achieve
                                highest target audience footfall is our agenda.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 mb-md-4 text-center">
                    <div class="card services-card h-100">
                        <div class="card-body">
                            <div class="card-icon services-card-icon">
                                <img src="{{asset('frontend')}}/images/brand-image.png" alt="Webeesocial UAE | Social media marketing">

                            </div>
                            <h5 class="mb-3 text-primary"><b>Improving brand reputation</b></h5>
                            <p class="mb-0">Your website is the first point of contact for your brand where you showcase
                                its presence and growth. Our web development and design services ensure that your
                                website mirrors your brand’s identity in the most user-friendly manner.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 mb-md-4 text-center">
                    <div class="card services-card h-100">
                        <div class="card-body">
                            <div class="card-icon services-card-icon">
                                <img src="{{asset('frontend')}}/images/conversion.png" alt="Webeesocial UAE | Social media marketing">

                            </div>
                            <h5 class="mb-3 text-primary"><b>Driving more conversions</b></h5>
                            <p class="mb-0">We create websites that don’t just speak about your brand but also convert
                                visitors into potential customers. When you place your trust upon us, it is our
                                responsibility to draw targeted results.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-0 mb-md-4 text-center">
                    <div class="card services-card h-100">
                        <div class="card-body">
                            <div class="card-icon services-card-icon">
                                <img src="{{asset('frontend')}}/images/maintenance.png" alt="Webeesocial UAE | Social media marketing">

                            </div>
                            <h5 class="mb-3 text-primary"><b>Maintaining it the right way</b></h5>
                            <p class="mb-0">We provide you a website that is quick, responsive, attractive and
                                smooth-running. To ensure this, our team runs daily maintenance processes and eliminates
                                any bug that might come in the way of your website and its smooth functioning.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section-card End -->
    <!--- CTA --->
    <section class="services-text m-auto text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-4 mb-md-0">
                    <h5 class="text-primary">WeBeeSocial ensures that you get nothing but the best website services for
                        your brand. Want to sneak a peek into work? Check out our website development and maintenance
                        projects here..</h5>
                </div>
                <div> <a href="our-work.html" class="btn btn-primary">Our Work</a></div>
            </div>
        </div>
    </section>


    
<!----Form & Review ---->
    
<x-frontend.form-review/>


<!----Form & Review ---->

@endsection