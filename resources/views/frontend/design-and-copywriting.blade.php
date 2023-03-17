@extends('frontend.layouts.app')

@section('meta_title',$meta->meta_title)
@section('meta_description',$meta->meta_description)

@section('content')

   <!-- Services Section-one start -->
   <section class="services-sec sec-space">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <h2 class="text-primary">Design and Copywriting</h2>
                    <p>From innovative designs to the best copywriting, creativity runs in our veins!</p>
                    <p>We ensure to provide you with the best creative solutions for your brand that you will definitely
                        fall for! Our motive is to make your business shine, and we do that with the wittiest,
                        innovative and top-rated copywriting and design services in Toronto.</p>
                    <p class="mb-0">Wanna see how we help you ace the copywriting and design game for your brand?</p>

                </div>
                <div class="col-md-6">
                    <img src="{{ asset('frontend') }}/images/Design-Copy.png" class="img-fluid">
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
                    <h3 class="text-primary">Stand out from the crowd with the best copy and design</h3>
                    <p>Creating a digital presence for your brand is crucial in today’s day and age, but what is even more important is to connect with your audience. We take the liberty to say we have been sliding our way with the consumers through the use of our innovative and relatable copy and design for our clients.</p>
                    <p>We leverage the power of a strong copy and design in the right way to utilize the optimal platforms, reach the appropriate audience, and initiate and encourage fruitful conversations with them. We also ensure that your customers can share, engage, add content, converse and give ratings and recommendations of your content, services, and products.</p>
                    <p class="mb-0">We believe that it’s a two-way street, and we believe in keeping an open and inviting dialogue to innovate strategic and technical solutions and guarantee maximum social impact and engagement.</p>
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
                    <h3 class="text-primary">How do we ace our Copy and Design game?</h3>
                    <p>As a web development agency in Toronto, our first order of business is understanding your brand inside out and then designing and optimizing websites tailored specifically to your needs. Be it content, design or maintenance, our team consistently tracks the latest developments to provide you with the best interface and not to forget- experience!</p>
                    <p>Another important factor for your website is maintaining its search appearances- our team regularly audits the website to ensure that it reaches the right audience who can turn out to be potential customers.</p>
                    <p><b>Wanna know more why our web development services are worth your investment-</b></p>
                </div>
            </div>
            <div class="row  justify-content-center d-lg-flex">
                <div class="col-md-6 mb-4 mb-md-4 text-center">
                    <div class="card services-card h-100">
                       <div class="card-body">
                          <div class="card-icon services-card-icon">
                             <img src="{{ asset('frontend') }}/images/brand-image.png" alt="Webeesocial UAE | Social media marketing">
     
                          </div>
                          <h5 class="mb-3 text-primary"><b>We Understand Your Brand</b></h5>
                          <p class="mb-0">We start by understanding your brand and its needs inside out. How you showcase yourself digitally is associated with the personality of your brand and hence we take it upon ourselves to use our best creative, digital and marketing senses and bring out the version of your brand online through the copies and design.</p>
                       </div>
                    </div>
                 </div>
                 <div class="col-md-6 mb-4 mb-md-4 text-center">
                    <div class="card services-card h-100">
                       <div class="card-body">
                          <div class="card-icon services-card-icon">
                             <img src="{{ asset('frontend') }}/images/conversion.png" alt="Webeesocial UAE | Social media marketing">
     
                          </div>
                          <h5 class="mb-3 text-primary"><b>We Understand the Right Audience</b></h5>
                          <p class="mb-0">Knowing your audience is the key to providing the best experience through your brand. With our expert social media strategists we help you get into the minds of your audience, understand their needs and help mirror the same intention in your social media channels as well.</p>
                       </div>
                    </div>
                 </div>
                <div class="col-md-6 text-center mx-auto">
                    <div class="card services-card h-100">
                        <div class="card-body">
                            <div class="card-icon services-card-icon">
                                <img src="{{ asset('frontend') }}/images/design-thinking.png" alt="Webeesocial UAE | Social media marketing">

                            </div>
                            <h5 class="mb-3 text-primary"><b>We make Custom-made Copy and Design Moodboards</b></h5>
                            <p class="mb-0">Post understanding the essence of your brand, our experts in the field brainstorm ways in which we can optimize your copy and design game and reach out to your targeted audience.</p>
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
            <div class="row align-items-center">
                <div class="col-md-12 mb-4 mb-md-0">
                    <h5 class="text-primary">When you work with our agency, WeBeeSocial Canada, you get the exciting opportunity to explore all facets of digital marketing. Want to execute some awesome campaigns? Our copy and design team will make sure that your audience hangs on to your every word and visual. Literally! Check out our work here.</h5>
                </div>
                <div> <a href="our-work.php" class="btn btn-primary">Our Work</a></div>
            </div>
        </div>
    </section>

<!----Form & Review ---->
    
<x-frontend.form-review/>
<!----Form & Review ---->


@endsection