@extends('frontend.layouts.app')

@section('meta_title',$meta->meta_title)
@section('meta_description',$meta->meta_description)

@section('content')

  <!-- Services Section-one start -->
  <section class="services-sec sec-space">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <h2 class="text-primary">Performance Marketing Agency</h2>
                    <p>Looking for the best performance marketing agency in Toronto? You have come to the right place with the right expertise on the field! Combining advertising and brand marketing activities, focusing on measurable results and finding the conversion routes for your campaign is in our creative genes. Our work begins when the campaign ends and we let ROI take the centrestage in all our performance marketing campaigns.</p>
                    <p>As a leading digital media company in Toronto, we believe in the power of digital and help carve out the best performance marketing strategies and campaigns that take you one step closer to data-driven analytics and growing your brand.</p>
                    <p>Ready to find out how we can help you with your Performance marketing needs.</p>
                    <ul class="list-unstyled service-partner badge-partner">
                        <li><img width="160" src="{{ asset('frontend') }}/images/Google-partners-1.png" alt="Google" class="img-fluid"></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('frontend') }}/images/Performance-Marketing.png" class="img-fluid">
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
                    <h3 class="text-primary">Why choose a performance marketing agency for your brand?</h3>
                    <p>he world of marketing is evolving and gone are the days of traditional marketing. Brands today are looking for fast, effective ways to position their brands in front of high-converting customers, increase your search engine visibility and get immediate results.</p>
                    <p>We understand this evolving tide of digital marketing practices and help elevate your brand’s needs by making smart moves. Performance Marketing is one such move under our sleeve! A strategy that allows you to pay and utilize performance marketing tools based on agreed-upon performance. Also called performance media marketing, it combines advertising and brand marketing activities that will focus on measurable results to determine the payout.</p>
                    <p class="mb-0">We ensure to maximize all possible conversion paths and make sure you receive the desired results for your brand. Wanna know how we do it?</p>
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
                    <h3 class="text-primary">We take your Performance Marketing campaign one goal at a time</h3>
                </div>
            </div>
            <div class="row justify-content-center d-lg-flex">
                <div class="col-md-6 mb-4 mb-md-4 text-center">
                    <div class="card services-card h-100">
                        <div class="card-body">
                            <div class="card-icon services-card-icon">
                                <img src="{{ asset('frontend') }}/images/target.png" alt="Webeesocial UAE | Social media marketing">

                            </div>
                            <h5 class="mb-3 text-primary"><b>Establish your campaign goal</b></h5>
                            <p class="mb-0">This indicates what you are looking to generate at the end of the campaign. Whether generating brand awareness or driving website traffic, setting your goals before launching any campaign is the basis of performance marketing. The popular and common digital marketing goals are: Brand awareness, Website Traffic, Lead generation, Sales, Engagement,etc.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 mb-md-4 text-center">
                    <div class="card services-card h-100">
                        <div class="card-body">
                            <div class="card-icon services-card-icon">
                                <img src="{{ asset('frontend') }}/images/channel.png" alt="Webeesocial UAE | Social media marketing">

                            </div>
                            <h5 class="mb-3 text-primary"><b>Choose your digital channels</b></h5>
                            <p class="mb-0">To expand campaign exposure and reach, and ultimately broaden the chances of success of your campaign, it is advised to diversify the channels you use rather than sticking to just one. Whether it’s lead generation, social media or native advertising, look out for all the channels that would help in conversion and where you are most likely to find your target audience.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4 mb-md-4 text-center">
                    <div class="card services-card h-100">
                        <div class="card-body">
                            <div class="card-icon services-card-icon">
                                <img src="{{ asset('frontend') }}/images/campaign.png" alt="Webeesocial UAE | Social media marketing">

                            </div>
                            <h5 class="mb-3 text-primary"><b>Create and launch the campaign</b></h5>
                            <p class="mb-0">It is commonly seen that a lot of work of performance marketing goes into creating campaigns- identifying the target audience, understanding the pain points, crafting the right messaging for your ads and making them attention-grabbing. The more you dive into understanding your target audience, the better you will be able to check off this list.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-0 mb-md-4 text-center">
                    <div class="card services-card h-100">
                        <div class="card-body">
                            <div class="card-icon services-card-icon">
                                <img src="{{ asset('frontend') }}/images/response.png" alt="Webeesocial UAE | Social media marketing">

                            </div>
                            <h5 class="mb-3 text-primary"><b>Measure and optimize your campaign</b></h5>
                            <p class="mb-0">As a digital marketing agency, we believe our real work kicks in post-launch. Performance campaign begins generating data the moment they are up and running. The ultimate hit is to keep track of analytics and metrics to determine which platforms are generating more traffic and then allocate ad funds accordingly. One of the most important attributes of performance marketing is to identify your best platforms, audiences, campaign goals to increase ROI even for future campaigns.</p>
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
                    <h5 class="text-primary">With our expert team of media and technology, be assured to churn out the best performance marketing advantages for your brand and leave the rest to us! Want to have a look at our work? Check out our performance marketing projects here.</h5>
                </div>
                <div> <a href="our-work.html" class="btn btn-primary">Our Work</a></div>
            </div>
        </div>
    </section>

<!----Form & Review ---->
    
<x-frontend.form-review/>
<!----Form & Review ---->


@endsection