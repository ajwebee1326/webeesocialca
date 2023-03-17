@extends('frontend.layouts.app')

@section('meta_title',$meta->meta_title)
@section('meta_description',$meta->meta_description)

@section('content')


<!-- Services Section-one start -->
<section class="services-sec sec-space">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
               <h2 class="text-primary">Metaverse Development</h2>
               <p>As a digital marketing agency, we believe it is important to keep evolving one’s marketing strategies and practices to stay relevant with time.</p>
               <p>Metaverse development and marketing is the newest technology in the hood and we are fully well-versed with the latest developments in the metaverse industry. Our metaverse consultancy is highly skilled and experienced and has an extensive research process to provide you with experience-rich and rewarding results.</p>
               <p class="mb-0">Let’s take a look at how you can up your metaverse game for your brand!</p>
            </div>
            <div class="col-md-6">
               <img src="{{ asset('frontend') }}/images/Metaverse-1.png" class="img-fluid">
            </div>
         </div>
      </div>
   </section>
   
   <!-- Services Section-three start -->
   <section class="text-center sec-space pt-0 services-text m-auto">
      <div class="container">
         <div class="row align-items-center">
            <div class="col-md-12">
               <h3 class="text-primary">Why is Metaverse marketing needed for your brand?</h3>
               <p>Metaverse is bringing new dimensions to the way businesses are perceived and interacted by consumers today. Utilizing the most up-to-date virtual reality (VR) and augmented reality (AR) technology, this marketing technique allows you to take your brand to new heights like before. It has a two-pronged approach that benefits both brand owners and consumers- consumers find metaverse appealing because of the visual interaction whereas for brand owners it is a data and capacity-rich affair.</p>
               <p class="mb-0">We are here to help and in the best way possible! Afterall why should digital marketing be left out from the wonders of the metaverse, isn’t it?</p>
            </div>
         </div>
      </div>
   </section>
   <!-- Services Section-three End -->
   <!-- Services Section-card start -->
   <section class="sec-space pt-0 why-wbs">
      <div class="container">
         <div class="row align-items-center" >
            <div class="col-md-12 services-text m-auto text-center">
               <h3 class="text-primary">How do we make your metaverse game strong?</h3>
               <p>As a metaverse development agency in Toronto, our first order of business is running a deep research and strategizing how your brand must leverage metaverse.</p>
               <p><b>Here are a few ways:</b></p>
            </div>
         </div>
         <div class="row justify-content-center d-lg-flex">
            <div class="col-md-6 mb-4 mb-md-4 text-center">
               <div class="card services-card h-100">
                  <div class="card-body">
                     <div class="card-icon services-card-icon">
                        <img src="{{ asset('frontend') }}/images/virtual-reality.png" alt="Webeesocial UAE | Social media marketing">

                     </div>
                     <h5 class="mb-3 text-primary"><b>Metaverse for Social Media</b></h5>
                     <p class="mb-0">Building a metaverse with social media capabilities is the most common among brands. We’re always experimenting with new technologies that can help us achieve better connectivity, social engagement, and a more realistic approach to consumers. Inculcating metaverse into your social media strategy will provide a more engaging virtual experience to the consumers.
                     </p>
                  </div>
               </div>
            </div>
            <div class="col-md-6 mb-4 mb-md-4 text-center">
               <div class="card services-card h-100">
                  <div class="card-body">
                     <div class="card-icon services-card-icon">
                        <img src="{{ asset('frontend') }}/images/3d-modeling.png" alt="Webeesocial UAE | Social media marketing">

                     </div>
                     <h5 class="mb-3 text-primary"><b>3D World design</b></h5>
                     <p class="mb-0">Our team of highly experienced developers try to make the metaverse compatible with the majority of 3D hardware and to make the metaverse more accessible to the general population. With the help of the latest VR, AR, and web development technologies available on the internet, we are all equipped to give the best metaverse experience to your consumers.</p>
                  </div>
               </div>
            </div>
            <div class="col-md-6 mb-4 mb-md-4 text-center">
               <div class="card services-card h-100">
                  <div class="card-body">
                     <div class="card-icon services-card-icon">
                        <img src="{{ asset('frontend') }}/images/app-development.png" alt="Webeesocial UAE | Social media marketing">

                     </div>
                     <h5 class="mb-3 text-primary"><b>Metaverse App Development</b></h5>
                     <p class="mb-0">We work on providing apps for the metaverse that can run on a variety of operating systems according to the requirements of your brand. Our apps will have excellent UI design, as we employ our in-house UI design team to develop them to give you an outstanding experience.</p>
                  </div>
               </div>
            </div>
            <div class="col-md-6 mb-0 mb-md-4  text-center">
               <div class="card services-card h-100">
                  <div class="card-body">
                     <div class="card-icon services-card-icon">
                        <img src="{{ asset('frontend') }}/images/metaverse.png" alt="Webeesocial UAE | Social media marketing">

                     </div>
                     <h5 class="mb-3 text-primary"><b>Metaverse Marketplaces</b></h5>
                     <p class="mb-0">We can design and deploy metaverse marketplaces to provide a multi featured metaverse marketplace such as price bidding, product galleries, and product resales. We also provide a secure multi-user access where admins can effectively control the marketplace.</p>
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
               <h5 class="text-primary">Convinced to use metaverse for the next big campaign of your brand? Grow your audience and increase your online engagement with the best solutions by WeBeeSocial.</h5>
            </div>
            <div> <a href="our-work.html" class="btn btn-primary">Our Work</a></div>
         </div>
      </div>
   </section>
<!----Form & Review ---->
    
<x-frontend.form-review/>
<!----Form & Review ---->


@endsection