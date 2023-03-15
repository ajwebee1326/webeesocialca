@extends('frontend.layouts.app')

@section('meta_title',$meta->meta_title)
@section('meta_description',$meta->meta_description)

@section('content')

   <!-- Home Banner Section -->
   <section class="home-sec sec-space">
    <div class="container">
       <div class="row align-items-center">
          <div class="col-md-6 mb-4 mb-md-0">
            <h2 class="text-primary"><span class="typed-text"></span><span class="cursor">&nbsp;</span></h2>
             <div class="header-title">
                <div>
                  <h5 class="text-dark">We create super-rich experiences online!</h5>
                </div>
                <div>
                   <img src="{{ asset('frontend') }}/images/bees_image.jpg" class="img-fluid">
                 </div>
             </div>
             <p>We are WeBeeSocial, a creative digital marketing agency based out of Toronto that thrives on creating marketing campaigns that are not only digitally rich, but also creatively appealing. We mix our years of experience and knowledge to bring the best marketing moves to the table! </p>
             <ul class="list-unstyled service-partner badge-partner">
                <li><img width="160" src="{{ asset('frontend') }}/images/Google-partners-1.png" alt="Google" class="img-fluid"></li>
                <li><img width="160" src="{{ asset('frontend') }}/images/shopify-partner.jpg" alt="Google" class="img-fluid"></li>
                <li><img width="160" src="{{ asset('frontend') }}/images/MC-Partner.png" alt="Google" class="img-fluid"></li>
             </ul>
          </div>
          <div class="col-md-6">
             <img src="{{ asset('frontend') }}/images/ca_home_banner-1.jpg" class="img-fluid">
          </div>
         
       </div>
    </div>
 </section>
 <!-- Home Section End -->
 <!-- How We Do It -->
 <section class="how-we-do text-center sec-md-space">
    <div class="container">
       <div class="row">
          <div class="col-12">
             <div class="divider-seprator"></div>
             <div class="head-wrap mb-2 mt-2">
                <h4 class="text-primary">As a leading creative digital agency in Canada</h4>
                <h2>Here’s how we do it</h2>
             </div>
             <div class="divider-seprator"></div>
          </div>
       </div>
    </div>
 </section>
   <!-- How We Do It section End -->
   <!-- Step Section -->
 <section class="step-sec sec-space">
    <div class="container">
       <div class="row align-items-center sec-md-space">
          <div class="col-md-6">
             <img src="{{ asset('frontend') }}/images/step1.png" class="img-fluid">
          </div>
          <div class="col-md-6">
             <div class="title-wrap">
                <h4 class="sec-subtitle">STEP 1</h4>
                <h3 class="sec-title text-primary">Building a strong digital presence</h3>
             </div>
             <p>Your digital presence matters the most to us! How you showcase yourself digitally is associated with the personality of your brand and hence we take it upon ourselves to use our best creative, digital and marketing senses and bring out the version of your brand online.</p>
             <p class="mb-0">With our team of highly skilled professionals, we have helped brands in Toronto and all over the world work out the minutest details in order to make sure that the brand’s digital personality shines the brightest. Rest assured, you can take a back seat and let our bees take charge of the rest</p>
          </div>
       </div>
       <div class="row align-items-center sec-md-space pt-0">
          <div class="col-md-6 mb-4 mb-md-0">
             <div class="title-wrap">
                <h4 class="sec-subtitle">STEP 2</h4>
                <h3 class="sec-title text-primary">Integrating creativity with technology</h3>
             </div>
             <p class="mb-0">In a digital era, where technology is the go-to move everywhere, why should digital campaigns not leverage the same? As a digital marketing agency, we understand the secret spice to staying relevant in the digital game is to continuously integrate with the latest trends. Be it designing websites, mobile apps, targeted ad campaigns, or social media campaigns, we make sure you market yourself well by blending our state-of-the-art tools with futuristic ideas. We help portray your brand as a trendsetter as we believe that digital marketing is not just about quantity but quality at its best</p>
          </div>
          <div class="col-md-6">
             <img src="{{ asset('frontend') }}/images/step2.png" class="img-fluid">
          </div>
       </div>
       <div class="row align-items-center align-items-center pt-0">
          <div class="col-md-6">
             <img src="{{ asset('frontend') }}/images/canada-07.png" class="img-fluid">
          </div>
          <div class="col-md-6">
             <div class="title-wrap">
                <h4 class="sec-subtitle">STEP 3</h4>
                <h3 class="sec-title text-primary">Knowing that numbers don’t lie</h3>
             </div>
             <p class="mb-0">As a digital marketing agency in Toronto, WeBeeSocial swears by the notion that- our main job starts when the campaign ends. Like any digital marketing company worth its skills, research and marketing tactics, we also believe that the larger impact of the campaign decides if the campaign actually did work. Hence as soon as the campaign ends – we gather numbers, data, and analytics, and give you a complete rundown of what worked and what didn’t. This helps us understand our touchpoints better and ensures that our results are even better the next time we work together!</p>
          </div>
       </div>
    </div>
 </section>

 <!-- What We Do Section-->
 <section class="what-sec sec-space text-center pt-0">
    <div class="container">
       <div class="row">
          <div class="col-12">
             <div class="head-wrap mb-2 mb-md-5">
                <h2 class="text-primary">What we do</h2>
                <p>We’re committed to help grow your business through digital marketing services that best suit your
                   requirements.</p>
             </div>
          </div>
       </div>

       <div class="row justify-content-center d-none d-lg-flex">
          <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
             <div class="card h-100">
                <div class="card-body">
                   <div class="card-icon bg-light">
                      <img src="{{ asset('frontend') }}/images/icon-5.png" alt="Webeesocial UAE | Social media marketing">
                    
                   </div>
                   <h5 class="mb-3 text-primary"><b>Social media marketing</b></h5>
                   <p class="mb-0">Ranked as one of the growing <a
                         href="https://webeesocial.ca/social-media-management-agency-in-toronto"
                         class="text-primary">social media marketing companies in Toronto</a>, we create dedicated
                      social media strategies across various platforms to give your brand a new social outlook,
                      provide creatively-rich design and content, and help engage effectively with your audience.</p>
                </div>
             </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
             <div class="card h-100">
                <div class="card-body">
                   <div class="card-icon bg-light">
                      <img src="{{ asset('frontend') }}/images/icon-2.png" alt="Webeesocial UAE | Web development services">
                     
                   </div>
                   <h5 class="mb-3 text-primary"><b>Website development services</b></h5>
                   <p class="mb-0">As a <a href="https://webeesocial.ca/website-development-agency-in-toronto/"
                         class="text-primary">web development company in Toronto</a>, our motive is to make your
                      website stand out and represent the persona of your business. We do this by always staying ahead
                      of the curve and up to date with the latest trends and technologies.</p>
                </div>
             </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
             <div class="card h-100">
                <div class="card-body">
                   <div class="card-icon bg-light">
                      <img src="{{ asset('frontend') }}/images/icon-1.png" alt="Webeesocial UAE | Mobile App Development services">
                     
                   </div>
                   <h5 class="mb-3 text-primary"><b>Mobile App development services</b></h5>
                   <p class="mb-0">From working on custom <a
                         href="https://webeesocial.ca/mobile-application-development-agency-in-toronto/"
                         class="text-primary">iOS app development</a> to structuring easily navigable applications, we
                      use state-of-the-art app development tools to help your brand reach larger masses, which sets us
                      apart as one of the growing mobile app development company in Toronto.</p>
                </div>
             </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
             <div class="card h-100">
                <div class="card-body">
                   <div class="card-icon bg-light">
                      <img src="{{ asset('frontend') }}/images/icon-8.png" alt="Webeesocial UAE | Design and copywriting">
                     
                   </div>
                   <h5 class="mb-3 text-primary"><b>Design and copywriting</a></b></h5>
                   <p class="mb-0">Communicating your brand vision with impeccable design and copywriting is our
                      forte. With our in-house team of <a
                         href="https://webeesocial.ca/design-and-copywriting-agency-in-toronto/"
                         class="text-primary">expert designers and copywriters</a>, we take care of all your creative
                      needs in one place.</p>
                </div>
             </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
             <div class="card h-100">
                <div class="card-body">
                   <div class="card-icon bg-light">
                      <img src="{{ asset('frontend') }}/images/icon-4.png" alt="Webeesocial UAE | PPC Marketing">
                   </div>
                   <h5 class="mb-3 text-primary"><b>PPC marketing</b></h5>
                   <p class="mb-0">As a digital media company providing <a
                         href="https://webeesocial.ca/performance-marketing-agency-in-toronto/"
                         class="text-primary">paid social media advertising services</a>, we understand the need to
                      thrive your PPC campaigns in order to achieve the best analytics for your brand.</p>
                </div>
             </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
             <div class="card h-100">
                <div class="card-body">
                   <div class="card-icon bg-light">
                      <img src="{{ asset('frontend') }}/images/icon-3.png" alt="Webeesocial UAE | Digital Strategy">
                   </div>
                   <h5 class="mb-3 text-primary"><b>Email marketing and CRM</b></h5>
                   <p class="mb-0">We create constructive and engageable <a
                         href="https://webeesocial.ca/e-mail-marketing-and-crm-agency-in-toronto/"
                         class="text-primary">e-mail marketing and CRM campaigns</a> that are aimed towards impacting
                      the audience in a personalized yet distinctive manner.</p>
                </div>
             </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
             <div class="card h-100">
                <div class="card-body">
                   <div class="card-icon bg-light">
                      <img src="{{ asset('frontend') }}/images/icon-5.png" alt="Webeesocial UAE | Search engine optimization">
                      <div class="circle-box">
                         <div class="circle-one"></div>
                         <div class="circle-two"></div>
                      </div>
                   </div>
                   <h5 class="mb-3 text-primary"><b>Search engine optimization</b></h5>
                   <p class="mb-0">With our in-house <a href="https://webeesocial.ca/seo-agency-in-toronto/"
                         class="text-primary">SEO services experts</a>, we help achieve the highest rankings in major
                      search engines through careful keyword research and focused website audit practices, in order to
                      deliver the best <a href="https://webeesocial.ca/seo-agency-in-toronto/"
                         class="text-primary">SEO services in Toronto</a>.</p>
                </div>
             </div>
          </div>
         
          <!-- /*/*/*/*/*/*/*/ -->
          <div class="col-md-6 col-lg-4 mb-3 mb-md-4">
             <div class="card h-100">
                <div class="card-body">
                   <div class="card-icon bg-light">
                      <img src="{{ asset('frontend') }}/images/icon-7-2.png" alt="Webeesocial UAE | Metaverse development company">
                   </div>
                   <h5 class="mb-3 text-primary"><b>Metaverse development company</b></h5>
                   <p class="mb-0">
                      Bringing the best of futuristic marketing solutions and <a
                         href="https://webeesocial.ca/metaverse-development-agency-in-toronto/"
                         class="text-primary">virtual reality development</a> to our clientele with the expertise of
                      our in-house<a href="https://webeesocial.ca/metaverse-development-agency-in-toronto/"
                         class="text-primary"> metaverse developer.</a>
                   </p>
                </div>
             </div>
          </div>
       </div>
       <div class="d-md-none"></div>
       <div class="services-slider d-lg-none">
          <div class="card h-100">
             <div class="card-body">
                <div class="card-icon bg-light">
                   <img src="{{ asset('frontend') }}/images/icon-5.png" alt="Webeesocial UAE | Social media marketing">
                 
                </div>
                <h5 class="mb-3 text-primary"><b>Social media marketing</b></h5>
                <p class="mb-0">Ranked as one of the growing <a
                      href="https://webeesocial.ca/social-media-management-agency-in-toronto"
                      class="text-primary">social media marketing companies in Toronto</a>, we create dedicated
                   social media strategies across various platforms to give your brand a new social outlook,
                   provide creatively-rich design and content, and help engage effectively with your audience.</p>
             </div>
          </div>
          <div class="card h-100">
             <div class="card-body">
                <div class="card-icon bg-light">
                   <img src="{{ asset('frontend') }}/images/icon-2.png" alt="Webeesocial UAE | Web development services">
                  
                </div>
                <h5 class="mb-3 text-primary"><b>Website development services</b></h5>
                <p class="mb-0">As a <a href="https://webeesocial.ca/website-development-agency-in-toronto/"
                      class="text-primary">web development company in Toronto</a>, our motive is to make your
                   website stand out and represent the persona of your business. We do this by always staying ahead
                   of the curve and up to date with the latest trends and technologies.</p>
             </div>
          </div>
          <div class="card h-100">
             <div class="card-body">
                <div class="card-icon bg-light">
                   <img src="{{ asset('frontend') }}/images/icon-1.png" alt="Webeesocial UAE | Mobile App Development services">
                  
                </div>
                <h5 class="mb-3 text-primary"><b>Mobile App development services</b></h5>
                <p class="mb-0">From working on custom <a
                      href="https://webeesocial.ca/mobile-application-development-agency-in-toronto/"
                      class="text-primary">iOS app development</a> to structuring easily navigable applications, we
                   use state-of-the-art app development tools to help your brand reach larger masses, which sets us
                   apart as one of the growing mobile app development company in Toronto.</p>
             </div>
          </div>
          <div class="card h-100">
             <div class="card-body">
                <div class="card-icon bg-light">
                   <img src="{{ asset('frontend') }}/images/icon-8.png" alt="Webeesocial UAE | Design and copywriting">
                  
                </div>
                <h5 class="mb-3 text-primary"><b>Design and copywriting</a></b></h5>
                <p class="mb-0">Communicating your brand vision with impeccable design and copywriting is our
                   forte. With our in-house team of <a
                      href="https://webeesocial.ca/design-and-copywriting-agency-in-toronto/"
                      class="text-primary">expert designers and copywriters</a>, we take care of all your creative
                   needs in one place.</p>
             </div>
          </div>
          <div class="card h-100">
             <div class="card-body">
                <div class="card-icon bg-light">
                   <img src="{{ asset('frontend') }}/images/icon-4.png" alt="Webeesocial UAE | PPC Marketing">
                </div>
                <h5 class="mb-3 text-primary"><b>PPC marketing</b></h5>
                <p class="mb-0">As a digital media company providing <a
                      href="https://webeesocial.ca/performance-marketing-agency-in-toronto/"
                      class="text-primary">paid social media advertising services</a>, we understand the need to
                   thrive your PPC campaigns in order to achieve the best analytics for your brand.</p>
             </div>
          </div>
          <div class="card h-100">
             <div class="card-body">
                <div class="card-icon bg-light">
                   <img src="{{ asset('frontend') }}/images/icon-3.png" alt="Webeesocial UAE | Digital Strategy">
                </div>
                <h5 class="mb-3 text-primary"><b>Email marketing and CRM</b></h5>
                <p class="mb-0">We create constructive and engageable <a
                      href="https://webeesocial.ca/e-mail-marketing-and-crm-agency-in-toronto/"
                      class="text-primary">e-mail marketing and CRM campaigns</a> that are aimed towards impacting
                   the audience in a personalized yet distinctive manner.</p>
             </div>
          </div>
          <div class="card h-100">
             <div class="card-body">
                <div class="card-icon bg-light">
                   <img src="{{ asset('frontend') }}/images/icon-5.png" alt="Webeesocial UAE | Search engine optimization">
                   <div class="circle-box">
                      <div class="circle-one"></div>
                      <div class="circle-two"></div>
                   </div>
                </div>
                <h5 class="mb-3 text-primary"><b>Search engine optimization</b></h5>
                <p class="mb-0">With our in-house <a href="https://webeesocial.ca/seo-agency-in-toronto/"
                      class="text-primary">SEO services experts</a>, we help achieve the highest rankings in major
                   search engines through careful keyword research and focused website audit practices, in order to
                   deliver the best <a href="https://webeesocial.ca/seo-agency-in-toronto/"
                      class="text-primary">SEO services in Toronto</a>.</p>
             </div>
          </div>
          <div class="card h-100">
             <div class="card-body">
                <div class="card-icon bg-light">
                   <img src="{{ asset('frontend') }}/images/icon-7-2.png" alt="Webeesocial UAE | Metaverse development company">
                </div>
                <h5 class="mb-3 text-primary"><b>Metaverse development company</b></h5>
                <p class="mb-0">
                   Bringing the best of futuristic marketing solutions and <a
                      href="https://webeesocial.ca/metaverse-development-agency-in-toronto/"
                      class="text-primary">virtual reality development</a> to our clientele with the expertise of
                   our in-house<a href="https://webeesocial.ca/metaverse-development-agency-in-toronto/"
                      class="text-primary"> metaverse developer.</a>
                </p>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- What We Do Section end-->
 <!----Award Section ---->
 <!-- Section Position 3 -->
 <section class="position-3" id="section-slides">
    <div id="pinContainer">
          <div id="slideContainer">
             <section class="slide slide1">
                <div class="slide-inner">
                      <div class="slide-inner-left">
                         <div class="number_text" style="color: var(--yellow);">We have Ideated and Implemented</div>
                         <h2>Award Winning Social Media Campaigns</h2>
                         <p class="par">These are pretty amazing, we kid you not! Take a sneak peek into our portfolio.</p>
                         <a href="social-media-marketing-agency-in-toronto" class="btn text-primary">Read More</a>
                      </div>
                      <div class="slide-inner-right text-center text-md-right">
                         <img src="{{ asset('frontend') }}/images/service3.png" alt="500+ Social Media Campaigns">
                      </div>
                </div>
             </section>
             <section class="slide slide2">
                <div class="slide-inner">
                      <div class="slide-inner-left">
                         <div class="number_text" style="color: var(--yellow);">We have developed </div>
                         <h2>50+ websites</h2>
                         <p class="par">Still stuck on a basic landing page? We like making your website shine out! Give it a look.</p>
                         <a href="website-development-agency-in-toronto" class="btn text-primary">Read More</a>
                      </div>
                      <div class="slide-inner-right text-center text-md-right">
                         <img src="{{ asset('frontend') }}/images/service4.png" alt="50+ websites">
                      </div>
                </div>
             </section>
             <section class="slide slide3">
                <div class="slide-inner">
                      <div class="slide-inner-left">
                         <div class="number_text" style="color: var(--yellow);">We have run and executed</div>
                         <h2>Integrated Paid Media Campaigns</h2>
                         <p class="par">Be it Facebook, Google, LinkedIn or even Kijiji, we have got you covered! We are a Google Partner agency and work directly with the above platforms to give you the best bang for your buck.</p>
                         <a href="performance-marketing-agency-in-toronto" class="btn text-primary">Read More</a>
                      </div>
                      <div class="slide-inner-right text-center text-md-right">
                         <img src="{{ asset('frontend') }}/images/service5.png" alt="1000+ Media Campaigns">
                      </div>
                </div>
             </section>
             <section class="slide slide4">
                <div class="slide-inner">
                      <div class="slide-inner-left">
                         <div class="number_text" style="color: var(--yellow);">We believe in</div>
                         <h2>Daily Performance Monitoring & Reporting</h2>
                         <p class="par">Views, impressions, and CTRs often go hand-in-hand with our morning cup of coffee boost!</p>
                      </div>
                      <div class="slide-inner-right text-center text-md-right">
                         <img src="{{ asset('frontend') }}/images/service6.png" alt="Daily Performance Monitoring & Reporting">
                      </div>
                </div>
             </section>
          </div>
    </div>
 </section>
 <!-- Our Clients -->
 <section class="our-clients sec-space text-center">
    <div class="container">
       <div class="row">
          <div class="col-md-6 mb-4 pb-4 mb-md-0 pb-md-0 divider-h">
             <div class="clients-box">
                <div class="head-wrap">
                   <h3>Some of our clients in <span class="text-primary">North America</span></h3>
                </div>
                <ul class="client-list">
                   <li>
                      <img src="{{ asset('frontend') }}/images/logos/DAS-Logo.png" alt="DAS">
                   </li>
                   <li>
                      <img src="{{ asset('frontend') }}/images/logos/Prospur-logo.png" alt="Prospur">
                   </li>
                   <li>
                      <img src="{{ asset('frontend') }}/images/logos/Physiorehab-Logo.png" alt="Physiorehab">
                   </li>
                   <li>
                      <img src="{{ asset('frontend') }}/images/logos/Taj-Rugs-Logo.png" alt="Taj-Rug">
                   </li>
                   <li>
                      <img src="{{ asset('frontend') }}/images/logos/CISCO-Logo.png" alt="CISCO">
                   </li>
                   <li>
                      <img src="{{ asset('frontend') }}/images/logos/Addy-logo.jpg" alt="Addy-logo">
                   </li>
                   <li>
                      <img src="{{ asset('frontend') }}/images/logos/JLF-Toronto-logo.png" alt="JLF-Toronto">
                   </li>
                   <li>
                      <img src="{{ asset('frontend') }}/images/logos/Dial.png" alt="Dial">
                   </li>
                   <li>
                      <img src="{{ asset('frontend') }}/images/logos/transform-lives.png" alt="transform-lives">
                   </li>
                   <li>
                      <img src="{{ asset('frontend') }}/images/logos/remax-logo.png" alt="remax">
                   </li>
                </ul>
             </div>
          </div>
          <div class="col-md-6 divider-h">
             <div class="clients-box">
                <div class="head-wrap">
                   <h3>Some of our clients in <span class="text-primary">Other Regions</span></h3>
                </div>
                <ul class="client-list">
                   <li>
                      <img src="{{ asset('frontend') }}/images/logos/india/UNDP-Logo.png" alt="UNDP-Logo">
                   </li>
                   <li>
                      <img src="{{ asset('frontend') }}/images/logos/india/Pearson-logo.png" alt="Pearson">
                   </li>
                   <li>
                      <img src="{{ asset('frontend') }}/images/teamwork-logo.png" alt="Teamwork">
                   </li>
                   <li>
                      <img src="{{ asset('frontend') }}/images/logos/india/mahindra.png" alt="mahindra">
                   </li>
                   <li>
                      <img src="{{ asset('frontend') }}/images/logos/india/Max-Healthcare-Logo.png" alt="Max-Healthcare">
                   </li>
                   <li>
                      <img src="{{ asset('frontend') }}/images/logos/india/acma-black.png" alt="Acma">
                   </li>
                   <li>
                      <img src="{{ asset('frontend') }}/images/logos/india/govt-black.png" alt="Govt Of India">
                   </li>
                   <li>
                      <img src="{{ asset('frontend') }}/images/logos/india/bbc-black.png" alt="BBC Media Action">
                   </li>
                   <li>
                      <img src="{{ asset('frontend') }}/images/logos/india/resmed-logo.png" alt="resmed">
                   </li>
                   <li>
                      <img src="{{ asset('frontend') }}/images/logos/india/mtv-black.png" alt="MTV">
                   </li>
                   <li>
                      <img src="{{ asset('frontend') }}/images/logos/india/oriflame-black.png" alt="Oriflame">
                   </li>
                   <li>
                      <img src="{{ asset('frontend') }}/images/logos/india/messe-frankfurt-black.png" alt="Messe">
                   </li>
                   <li>
                      <img src="{{ asset('frontend') }}/images/logos/india/cbre-black.png" alt="CBRE">
                   </li>
                   <li>
                      <img src="{{ asset('frontend') }}/images/logos/india/aston-university-LOGO.jpg" alt="aston-university">
                   </li>
                   <!-- <li>
                         <img src="{{ asset('frontend') }}/images/logos/india/usaid-black.png" alt="USAID">
                      </li> -->
                   <!-- <li>
                         <img src="{{ asset('frontend') }}/images/logos/india/lotus-black.png" alt="Lotus">
                      </li> -->
                   <li>
                      <img src="{{ asset('frontend') }}/images/logos/india/nasscom-black.png" alt="NASSCOM">
                   </li>
                   <li>
                      <img src="{{ asset('frontend') }}/images/logos/india/Vital-Strategies-Logo.png" alt="Vital-Strategies">
                   </li>


                </ul>
             </div>
          </div>
       </div>
    </div>
 </section>
 
 <!-- CTA End -->
 <!-- Form and Review -->
<!----Form ---->
<section class="contact-form sec-space text-center">
  <div class="container">
     <div class="row">
        <div class="col-12">
           <h3 class="text-primary">Think we’d be a good match for you and your business? Send us a message!</h3>
        </div>
     </div>
     <div class="row pt-2">
        <div class="col-12">
           <div class="glb_form_main">
              <div class="form-illus">
                  <img class="cont-img1" src="{{ asset('frontend') }}/images/form-emo3.png">
                  <img class="cont-img2" src="{{ asset('frontend') }}/images/form-emo2.png">
                  <img class="cont-img3" src="{{ asset('frontend') }}/images/form-emo1.png">
              </div>
              <div class="glb_form">
                  <div class="glb_form_inner">
                      <div class="bgn-wf-wrapper" id="BiginWebToEntityFormDiv4656515000003025149">
                          <META HTTP-EQUIV ='content-type' CONTENT='text/html;charset=UTF-8'>
                          <form id='BiginWebToContactForm4656515000003025149' name='BiginWebToContactForm4656515000003025149' method='POST' enctype='multipart/form-data' onSubmit='javascript:document.charset="UTF-8"; return validateForm4656515000003025149()' accept-charset='UTF-8' style='margin: 0;'>
                              <!-- Do not remove this code. -->
                              <input type='text' style='display:none;' name='xnQsjsdp'
                              value='6c9bfa7e8365d92f04b28f483f3c29bb32af25cffc16d86fc4c8172a8ed6d534' />
                              <input type='hidden' name='zc_gad' id='zc_gad' value='' />
                              <input type='text' style='display:none;' name='xmIwtLD'
                              value='2a6d43142652ff05c15a66c6f21272db345fdf1f97de396651c0eea0126848fb' />
                              <input type='text' style='display:none;' name='actionType' value='Q29udGFjdHM=' />
                              <input type='text' style='display:none;' name='returnURL' value= 'https://webeesocial.ca/thank-you' />
                              <div id="elementDiv4656515000003025149">
                                  <div class="bgn-wf-row bgn-wf-col-2">
                                      <div class="bgn-wf-field bgn-wf-item-mb">
                                          <input name="First Name" type="text" maxlength="40" value="" placeholder="First Name">
                                      </div>
                                      <div class="bgn-wf-field bgn-wf-item-mb">
                                          <input name="Last Name" type="text" maxlength="80" value="" placeholder="Last Name">
                                      </div>
                                  </div>
                                  <div class="bgn-wf-row bgn-wf-col-2">
                                      <div class="bgn-wf-field bgn-wf-item-mb">
                                          <input name="Email" type="text" maxlength="100" value="" placeholder="Email">
                                      </div>
                                      <div class="bgn-wf-field bgn-wf-item-mb">
                                          <div class="phone-field">
                                              <span>+1</span>
                                              <input name="Phone" type="text" maxlength="10" value="" placeholder="Phone Number">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="bgn-wf-row">
                                      <div class="bgn-wf-field bgn-wf-item-mb">
                                          <input name="Account Name" type="text" maxlength="120" value="" placeholder="Company Name">
                                      </div>
                                  </div>
                                  <div class="bgn-wf-row">
                                      <div class="bgn-wf-field bgn-wf-item-mb">
                                          <textarea name="Description" maxlength="32000" placeholder="Requirement"></textarea>
                                      </div>
                                  </div>
                                  <div class="bgn-wf-row bgn-wf-item-mb">
                                      <div class="captcha_form">
                                          <div class="bgn-wf-field">
                                              <input type="text" name="enterdigest" placeholder="Enter Captcha Here...">
                                          </div>
                                          <div class="bgn-wf-field">
                                              <img id="imgid4656515000003025149" src="https://bigin.zoho.com/crm/CaptchaServlet?formId=2a6d43142652ff05c15a66c6f21272db345fdf1f97de396651c0eea0126848fb&grpid=6c9bfa7e8365d92f04b28f483f3c29bb32af25cffc16d86fc4c8172a8ed6d534">
                                          </div>
                                      </div>
                                      <a href="javascript:;" onclick="reloadImg4656515000003025149()">Reload</a>
                                  </div>
                                  <div class="bgn-wf-row">
                                      <div class="bgn-wf-field">
                                          <input class="btn btn-primary w-100" id='formsubmit4656515000003025149' type='submit' value='Submit' />
                                      </div>
                                  </div>
                              </div>
                              <script>
                                  function reloadImg4656515000003025149() {
                                      var captcha = document.getElementById('imgid4656515000003025149');
                                      if (captcha.src.indexOf('&d') !== -1) {
                                          captcha.src = captcha.src.substring(0, captcha.src.indexOf('&d')) + '&d' + new Date().getTime();
                                      } else {
                                          captcha.src = captcha.src + '&d' + new Date().getTime();
                                      }
                                  }
                      
                                  function disableSubmitwhileReset4656515000003025149() {
                                      var submitbutton = document.getElementById('formsubmit4656515000003025149');
                                      if (document.getElementById('privacyTool4656515000003025149') !== null || document.getElementById(
                                              'consentTool') !== null) {
                                          submitbutton.disabled = true;
                                          submitbutton.style.opacity = '0.5;';
                                      } else {
                                          submitbutton.removeAttribute('disabled');
                                      }
                                  }
                      
                                  function checkMandatory4656515000003025149() {
                                      var mndFields = new Array('First Name', 'Last Name', 'Account Name', 'Email', 'Phone', 'Description');
                                      var fldLangVal = new Array('First Name', 'Last Name', 'Company Name', 'Email', 'Phone', 'Requirement');
                                      var i;
                                      var mndFieldslength = mndFields.length;
                                      var fieldObj;
                                      for (i = 0; i < mndFieldslength; i++) {
                                          fieldObj = document.forms.BiginWebToContactForm4656515000003025149[mndFields[i]];
                                          if (fieldObj) {
                                              if (fieldObj.value.replace(/^s+|s+$/g, '').length === 0) {
                                                  if (fieldObj.type === 'file') {
                                                      alert('Please select a file to upload.');
                                                      fieldObj.focus();
                                                      return false;
                                                  }
                                                  alert(fldLangVal[i] + ' cannot be empty.');
                                                  fieldObj.focus();
                                                  return false;
                                              } else if (fieldObj.nodeName === 'SELECT') {
                                                  if (fieldObj.options[fieldObj.selectedIndex].value === '-None-') {
                                                      alert(fldLangVal[i] + ' cannot be none.');
                                                      fieldObj.focus();
                                                      return false;
                                                  }
                                              } else if (fieldObj.type === 'checkbox') {
                                                  if (fieldObj.checked === false) {
                                                      alert('Please accept  ' + fldLangVal[i]);
                                                      fieldObj.focus();
                                                      return false;
                                                  }
                                              }
                                              if (fieldObj.name === 'Last Name' && fieldObj.value) {
                                                  name = fieldObj.value;
                                              }
                                          }
                                      }
                                      return true;
                                  }
                      
                                  function validateFileUpload() {
                                      var e = document.getElementById("theFile"),
                                          t = 0;
                                      if (e) {
                                          if (e.files.length > 3) return alert("You can upload a maximum of three files at a time."), !1;
                                          if ("files" in e) {
                                              var i = e.files.length;
                                              if (0 !== i) {
                                                  for (var o = 0; o < i; o++) {
                                                      var a = e.files[o];
                                                      "size" in a && (t += a.size)
                                                  }
                                                  if (t > 20971520) return alert("Total file(s) size should not exceed 20MB."), !1
                                              }
                                          }
                                      }
                                      return !0
                                  }
                              </script>
                              <script id='wf_script' src='https://bigin.zoho.com/crm/WebformScriptServlet?rid=2a6d43142652ff05c15a66c6f21272db345fdf1f97de396651c0eea0126848fbgid6c9bfa7e8365d92f04b28f483f3c29bb32af25cffc16d86fc4c8172a8ed6d534'></script>
                         </form>
                      </div>  
                  </div>
              </div>
          </div>
        </div>
     </div>
  </div>

</section>
<!---- google-review---->
<section class="google-review sec-space overflow-hidden">
  <div class="container">
     <div class="row">
        <div class="col-md-12">
           <div class=" head-wrap text-center">
              <h3 class="text-primary">
                 Here's what our clients have to say!
              </h3>
           </div>
        </div>
     </div>
     <div class="row align-items-center">
        <div class="col-md-3">
           <div class="source-google">
              <div class="large-logo">
                 <div class="vertical-center">
                    <img src="https://cdn.trustindex.io/assets/platform/Google/logo.svg" width="110" height="35"
                       alt="Google" />
                 </div>
              </div>
              <div class="star-rating large-star">
                 <span class="fa fa-star"></span>
                 <span class="fa fa-star"></span>
                 <span class="fa fa-star"></span>
                 <span class="fa fa-star"></span>
                 <span class="fa fa-star"></span>
              </div>
              <div class="rating-text"> <strong class="rating"> EXCELLENT </strong> <span class="nowrap">Based on
                    <strong>28 reviews</strong>.</span> </div>

           </div>
        </div>
        <div class="col-md-9">
           <div class="review-slider">
              <div class="review-item">
                 <div class="review-inner">
                    <div class="review-header">
                       <div class="profile-img">
                          <img src="{{ asset('frontend') }}/images/user-one.png" alt="google-user">
                       </div>
                       <div class="profile-details">
                          <div class="profile-name">A Google User</div>
                          <div class="profile-date">2022-08-09</div>
                       </div>
                    </div>
                    <div class="star-rating">
                       <span class="fa fa-star"></span>
                       <span class="fa fa-star"></span>
                       <span class="fa fa-star"></span>
                       <span class="fa fa-star"></span>
                       <span class="fa fa-star"></span>
                       <span class="verified-review"><span class="verified-tooltip">Verified</span></span>
                    </div>
                    <div class="review-content">
                       Working with shubhendu, soumya and the rest of the team webeesocial is always a good &amp;
                       rewarding experience. They instinctively know our customers and give us good insights. They
                       do share fresh ideas as to how we can attract new business, while rewarding our existing
                       customer base. I would highly recommend as they always deliver results.
                    </div>
                 </div>
              </div>
              <div class="review-item">
                 <div class="review-inner">
                    <div class="review-header">
                       <div class="profile-img">
                          <img src="{{ asset('frontend') }}/images/user-one.png" alt="google-user">
                       </div>
                       <div class="profile-details">
                          <div class="profile-name">A Google User</div>
                          <div class="profile-date">2022-08-10</div>
                       </div>
                    </div>
                    <div class="star-rating">
                       <span class="fa fa-star"></span>
                       <span class="fa fa-star"></span>
                       <span class="fa fa-star"></span>
                       <span class="fa fa-star"></span>
                       <span class="fa fa-star"></span>
                       <span class="verified-review"><span class="verified-tooltip">Verified</span></span>
                    </div>
                    <div class="review-content">
                       I would like to say that working with them is a pleasure. Their team always understands our
                       business needs, and proactively comes up with creative ideas that bring results. Would
                       definitely recommend working with the bees.
                    </div>
                 </div>
              </div>
              <div class="review-item">
                 <div class="review-inner">
                    <div class="review-header">
                       <div class="profile-img">
                          <img src="{{ asset('frontend') }}/images/user-4.png" alt="google-user">
                       </div>
                       <div class="profile-details">
                          <div class="profile-name">ramey mclaughlin</div>
                          <div class="profile-date">2022-08-09</div>
                       </div>
                    </div>
                    <div class="star-rating">
                       <span class="fa fa-star"></span>
                       <span class="fa fa-star"></span>
                       <span class="fa fa-star"></span>
                       <span class="fa fa-star"></span>
                       <span class="fa fa-star"></span>
                       <span class="verified-review"><span class="verified-tooltip">Verified</span></span>
                    </div>
                    <div class="review-content">
                       Working with Webeesocial is always a pleasure. My account manager is Vikram who always
                       explains everything meticulously and is always polite and professional. Their team is quite
                       knowledgeable and proficient in the services they offer
                    </div>
                 </div>
              </div>
              <div class="review-item">
                 <div class="review-inner">
                    <div class="review-header">
                       <div class="profile-img">
                          <img src="{{ asset('frontend') }}/images/user-three.png" alt="google-user">
                       </div>
                       <div class="profile-details">
                          <div class="profile-name">Larraine Celia</div>
                          <div class="profile-date">2022-08-08</div>
                       </div>
                    </div>
                    <div class="star-rating">
                       <span class="fa fa-star"></span>
                       <span class="fa fa-star"></span>
                       <span class="fa fa-star"></span>
                       <span class="fa fa-star"></span>
                       <span class="fa fa-star"></span>
                       <span class="verified-review"><span class="verified-tooltip">Verified</span></span>
                    </div>
                    <div class="review-content">
                       I run a Holiday Company and we do day trips, holidays and cruises. All my leads are generated
                       by the wbs team. The team really tries to offer new ideas and new campaigns to me to enable
                       me to promote my business in a professional and creative way. The young lady who designs my
                       adverts is imaginative and very creative and the reaction to her ads are really excellent.
                    </div>
                 </div>
              </div>
              <div class="review-item">
                 <div class="review-inner">
                    <div class="review-header">
                       <div class="profile-img">
                          <img src="{{ asset('frontend') }}/images/user-4.png" alt="google-user">
                       </div>
                       <div class="profile-details">
                          <div class="profile-name"> robin Jazmin</div>
                          <div class="profile-date">2022-08-08</div>
                       </div>
                    </div>
                    <div class="star-rating">
                       <span class="fa fa-star"></span>
                       <span class="fa fa-star"></span>
                       <span class="fa fa-star"></span>
                       <span class="fa fa-star"></span>
                       <span class="fa fa-star"></span>
                       <span class="verified-review"><span class="verified-tooltip">Verified</span></span>
                    </div>
                    <div class="review-content">
                       We stated working with them about a year ago. The results have been good with many sales
                       coming from our social media campaigns. I would highly recommend them for digital marketing
                       services
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </div>
</section>

@endsection