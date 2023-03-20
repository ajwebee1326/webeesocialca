@extends('frontend.layouts.app')

@section('meta_title',$meta->meta_title)
@section('meta_description',$meta->meta_description)

@section('content')

 <!-- Services Section-one start -->
 <section class="services-sec sec-space">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <h2 class="text-primary">Search Engine Optimization Agency</h2>
                    <p>Creating your online presence is one part of the game but another most important move is making it reach the right audience at the right time. WeBeeSocial as one of the most trusted search engine optimization agencies in Toronto, offers the best solutions along with great campaigns, allowing you to form the best digital presence for your brand.</p>
                    <p>We are an award-winning digital marketing company with years of experience in media, technology and creativity. We believe in the power of digital and help carve out strategies and campaigns that take you one step closer to data-driven analytics. Our approach to your SEO needs is simple- transparent and result-oriented.</p>
                    <p>Let’s look at how we will take your search engine optimization game to the next level. We're a Google partner agency and can help you ace your search engine rankings.</p>
                    <ul class="list-unstyled service-partner badge-partner">
                        <li><img width="160" src="{{ asset('frontend') }}/images/Google-partners-1.png" alt="Google" class="img-fluid"></li>
                    </ul>

                </div>
                <div class="col-md-6">
                    <img src="{{ asset('frontend') }}/images/service4.png" class="img-fluid">
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
                    <h3 class="text-primary">Why does your business need a Search engine optimization (SEO) Agency?</h3>
                    <p>Are you on the first page of the search engine results pages for keywords that match your business or brand? If not, you’re missing out on valuable leads.</p>
                    <p class="mb-0">Search engine optimization isn’t some fad and it’s no longer an option for your brand to grow- it is today a necessity. It is an indispensable tool of any plan to market products or services and bring in more qualified leads and sales. Search engine optimization practices are ample, but to find the best solution for your brand- leave the job on us!</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section-three End -->
    <!-- Services Section-card start -->
    <section class="sec-space pt-0 why-wbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12 services-text m-auto text-center">
                    <h3 class="text-primary">Our Search Engine Optimization strategy</h3>
                    <p>We believe that our job is to make technical, complicated and overwhelming search engine optimization processes as simple and as navigable for our clients. At WeBeeSocial, we take it as our responsibility to get to know your business well and then strike the right balance for your SEO needs.</p>
                </div>
            </div>
            <div class="row justify-content-center d-lg-flex">
                <div class="col-md-6 mb-4 mb-md-4 text-center">
                    <div class="card services-card h-100">
                       <div class="card-body">
                          <div class="card-icon services-card-icon">
                             <img src="{{ asset('frontend') }}/images/tracking.png" alt="Webeesocial UAE | Social media marketing">
     
                          </div>
                          <h5 class="mb-3 text-primary"><b>Keyword Research and Tracking</b></h5>
                          <p class="mb-0">One core SEO practice is selecting the search terms focussing on increased search visibility, qualified traffic and leads.</p>
                       </div>
                    </div>
                 </div>
                 <div class="col-md-6 mb-4 mb-md-4 text-center">
                    <div class="card services-card h-100">
                       <div class="card-body">
                          <div class="card-icon services-card-icon">
                             <img src="{{ asset('frontend') }}/images/seo.png" alt="Webeesocial UAE | Social media marketing">
     
                          </div>
                          <h5 class="mb-3 text-primary"><b>On-page and off-page Content Optimization</b></h5>
                          <p class="mb-0">To enhance your online visibility and brand credibility, we ensure our SEO services are aligned with search engine’s best practices to boost your website’s trustworthiness.</p>
                       </div>
                    </div>
                 </div>
                <div class="col-md-6 text-center mx-auto">
                    <div class="card services-card h-100">
                        <div class="card-body">
                            <div class="card-icon services-card-icon">
                                <img src="{{ asset('frontend') }}/images/seo-1.png" alt="Webeesocial UAE | Social media marketing">

                            </div>
                            <h5 class="mb-3 text-primary"><b>Technical SEO</b></h5>
                            <p class="mb-0">We thoroughly track rankings and improve optimizations on your website’s back-end such as improving page speed, checking hygiene and content structure, etc.</p>
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
                    <h5 class="text-primary">Grow your audience and increase your online engagement with our best search engine optimization practices tailored for you! Want to sneak a peek into our work? Check out here.</h5>
                </div>
                <div> <a href="our-work.html" class="btn btn-primary">Our Work</a></div>
            </div>
        </div>
    </section>
<!----Form & Review ---->
    
<x-frontend.form-review/>
<!----Form & Review ---->


@endsection