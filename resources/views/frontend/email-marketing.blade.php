@extends('frontend.layouts.app')

@section('meta_title',$meta->meta_title)
@section('meta_description',$meta->meta_description)

@section('content')

 <!-- Services Section-one start -->
 <section class="services-sec sec-space">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 mb-4 mb-md-0">
                    <h2 class="text-primary">E-mail Marketing and CRM</h2>
                    <p>WeBeeSocial ensures to build the best email marketing and CRM services so that your business
                        doesn’t miss out on the opportunity to connect with the right customers at the right moment and
                        increase your sales.</p>
                    <ul class="list-unstyled service-partner badge-partner">
                        <li><img width="160" src="{{ asset('frontend') }}/images/shopify-partner.jpg" alt="Google" class="img-fluid"></li>
                        <li><img width="160" src="{{ asset('frontend') }}/images/MC-Partner.png" alt="Google" class="img-fluid"></li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('frontend') }}/images/Email-Marketing.png" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section-one End -->
    <!-- Services Section-two start -->
    <section class="text-center sec-space pt-0 services-text m-auto">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12">
                    <h3 class="text-primary">Why is Email Marketing and CRM really important for your business?</h3>
                    <p>Email marketing and CRM is the key to building strong relationships with your existing customers,
                        reaching out to prospective customers and leads, and maintaining this relationship with
                        effective communication. Since it is one of the most effective and personalized forms of
                        marketing out there, if done right, it can work wonders!</p>
                    <p class="mb-0">WeBeeSocial, an Email marketing and CRM service provider in Toronto, can help you
                        build effective email marketing and CRM campaigns that make users click, read, and want more.
                    </p>
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
                    <h3 class="text-primary">How do we help you ace your Email marketing and CRM game?</h3>
                    <p>A smart subject line can lead to clicks, and a strong and visually-appealing emailer can lead to
                        more customers. Similarly, a witty and interactive communication with the consumers help to
                        establish a strong relatability factor with your brand.</p>
                    <p>Our specialised team of highly experienced marketers ensure that the communication aligns with
                        your brand and goals completely while still being personalized. Along with this, our planning
                        team helps you target the right audience for maximum conversions and ROI through effective CRM
                        management.</p>
                    <p class="mb-0">If you already have the big idea that you want to communicate to your audience, our
                        social media and content teams can help you tweak it to ensure that your readers are engaged
                        throughout. Moreover, we can also help craft the absolute best conversations to ensure that your
                        audience stays completely hooked.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section-three End -->

    <!--- CTA --->
    <section class="services-text m-auto text-center">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 mb-4 mb-md-0">
                    <h5 class="text-primary">Wanna leverage the wonders of Email marketing and CRM services for your
                        business? Grow your audience and increase your online engagement with the best solutions by
                        WeBeeSocial.</h5>
                </div>
                <div> <a href="our-work.php" class="btn btn-primary">Our Work</a></div>
            </div>
        </div>
    </section>

<!----Form & Review ---->
    
<x-frontend.form-review/>
<!----Form & Review ---->


@endsection