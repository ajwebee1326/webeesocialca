@extends('frontend.layouts.app')

@section('meta_title',$meta->meta_title)
@section('meta_description',$meta->meta_description)

@section('content')

 <!-- Services Section-one start -->
 <section class="services-sec sec-space">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <h2 class="text-primary">Mobile App Development</h2>
                    <p>WeBeeSocial provides nothing but the best mobile app design and development services in Toronto.</p>
                    <p>Personalize your business with the power of smart and advanced mobile apps and discover your businesses’ extensive transformation. From ideation to delivering the digital product, our mobile app development company in Toronto is versed in implementing only the best of the latest tools and methods to ensure that all our clients leverage this service in their niche.</p>
                    <p>Our team of highly experienced app developers in Toronto make sure of imparting both your business needs and market trends in an equal balance.</p>
                    <p class="mb-0">Here’s how we help you make the most out of this service:</p>
                    
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('frontend') }}/images/Web-Application.png" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section-one End -->
    <!-- Services Section-two start -->
    <section class="text-center sec-space pt-0 services-text m-auto">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-primary">Why Mobile App Development is required for your business?</h3>
                    <p class="mb-0">Mobile application development is the key to personalizing your business and taking a step towards providing a go-to means for any business. There are millions of applications in the app store on Android and iOS platforms which shows the competition to handle is not that easy. Worry not, with our expert team of developers we work on understanding the current scenario that has to be tackled and implement industry-best strategies to build for you feature-rich, innovative, highly user-friendly and easily navigable mobile applications.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section-two End -->
    <!-- Services Section-three start -->
    <section class="text-center sec-space pt-0 services-text m-auto">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-primary">How can our services help you ace your Mobile Applications?</h3>
                    <p>We ensure that the applications developed by us meet the industry requirements and also stand out to give our business a competitive edge.</p>
                </div>
            </div>
            <div class="row justify-content-center d-lg-flex">
                <div class="col-md-6 mb-4 mb-md-4 text-center">
                    <div class="card services-card h-100">
                        <div class="card-body">
                            <div class="card-icon services-card-icon">
                                <img src="{{ asset('frontend') }}/images/android.png" alt="Webeesocial UAE | Social media marketing">

                            </div>
                            <h5 class="mb-3 text-primary"><b>Android Application Development</b></h5>
                            <p class="mb-0">We make sure to offer Android applications which have user-rich interfaces and highly engaging feature sets. With advanced frameworks and technical knacks, our Toronto app developers develop for you applications with no compromise in quality.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 mb-md-4 text-center">
                    <div class="card services-card h-100">
                        <div class="card-body">
                            <div class="card-icon services-card-icon">
                                <img src="{{ asset('frontend') }}/images/apple.png" alt="Webeesocial UAE | Social media marketing">

                            </div>
                            <h5 class="mb-3 text-primary"><b>iOS Application Development</b></h5>
                            <p class="mb-0">We ensure to build iOS applications with rigid backend support and innovation frontend service. Our app developers have worked to deliver the best iOS app development services for various industries as various products.</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!-- Services Section-three End -->

    <!--- CTA --->
    <section class="services-text m-auto text-center">
        <div class="container">
            <div class="row">
                <div class="col-md- m-4 mb-md-0">
                    <h5 class="text-primary">Convinced to develop the best mobile applications for your business? Grow your audience and increase your online engagement with the best solutions by WeBeeSocial.</h5>
                </div>
                <div> <a href="our-work.html" class="btn btn-primary">Our Work</a></div>
            </div>
        </div>
    </section>

<!----Form & Review ---->
    
<x-frontend.form-review/>
<!----Form & Review ---->


@endsection