<header class="top-header">
    <nav class="navbar navbar-expand-lg bg-white">
        <div class="container">
            <a class="navbar-brand" href="{{ env('APP_URL') }}"><img src="{{ asset('frontend') }}/images/wbs-logo1.png" class="img-fluid" alt="Webeesocial Logo"></a>
            <div class="d-flex justify-content-between gap-1 gap-md-3">
            <a class="nav-link btn btn-primary contact-us" href="#">Contact Us <span class="fa fa-arrow-circle-o-down ms-2"></span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i></span>
            </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item active">
                        <a class="nav-link current" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" aria-expanded="false">
                            Our service</a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{route ('social-media-marketing')}}">Social media
                                    marketing</a></li>
                            <li><a class="dropdown-item" href="{{route ('website-development')}}">Website
                                    development</a></li>
                            <li><a class="dropdown-item n-link" href="{{route ('e-mail-marketing')}}">E-mail marketing
                                    and CRM </a></li>
                            <li><a class="dropdown-item" href="{{route ('design-and-copywriting')}}">Design and
                                    copywriting</a></li>
                            <li><a class="dropdown-item" href="{{route ('performance-marketing')}}">Performance
                                    marketing</a></li>
                            <li><a class="dropdown-item n-link" href="{{route ('seo-agency')}}">Search
                                    engine optimization</a></li>
                            <li><a class="dropdown-item" href="{{route ('mobile-application')}}">Mobile App
                                    development</a></li>
                            <li><a class="dropdown-item" href="{{route ('metaverse-development')}}">Metaverse
                                    development</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('our-work')}}">Our work</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('work-with-us') }}">Work with us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary" href="#">Contact Us <span class="fa fa-arrow-circle-o-down ms-2"></span></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>