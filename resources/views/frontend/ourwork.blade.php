@extends('frontend.layouts.app')

@section('meta_title',$meta->meta_title)
@section('meta_description',$meta->meta_description)

@section('content')

<section class="our-work sec-space">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <h2 class="text-primary">Our Work</h2>
                </div>
            </div>
            <div class="row">
                <div class="main">
                    <div id="myBtnContainer">
                        <button class="btn active" onclick="filterSelection('ALL')">ALL</button>
                        @foreach($categories as $category)
                        <button class="btn" onclick="filterSelection('{{ $category->name }}')">{{ $category->name }}</button>
                        @endforeach
                    </div>

                    <!-- Portfolio Gallery Grid -->
                    <div class="row">
                    {{-- Our work start --}}
                    @foreach($ourworks as $ourwork)
                        <div class="column  
                        @foreach($ourwork->categories as $category)
                        {{ $category->name }}
                        @endforeach
                        ">
                            <div class="content">
                                <a href=""><img
                                        src="{{ $ourwork->thumbnail }}" alt="jlf"  class="img-fluid"></a>
                               
                                <h2><a href="{{route('ourwork-details',$ourwork->slug)}}">{{ $ourwork->title}}</a></h2>
                                <p>
                                    @foreach($ourwork->categories as $category)

                                        @if(!$loop->last)

                                            {{ $category->name }} ,
                                        
                                        @else

                                            {{ $category->name }}
                                        
                                        @endif

                                    @endforeach
                            </div>
                        </div>
                    @endforeach
                        <!-- <div class="column SOCIAL MEDIA GRAPHICS DESIGN DIGITAL CAMPAIGNS SEO ">
                            <div class="content">
                                <a href=""><img
                                        src="images/Best-Oasis.jpg"
                                        alt="Best-Oasis" class="img-fluid"></a>
                                <h2><a href="">Best Oasis</a></h2>
                                <p>Social Media, SEO</p>
                            </div>
                        </div>
                        <div class="column SOCIAL MEDIA WEBSITE GRAPHICS DIGITAL CAMPAIGNS DESIGN">
                            <div class="content">
                                <a href=""><img
                                        src="images/usaid.jpg" alt="usaid"
                                        class="img-fluid"></a>
                                <h2><a href="">USAID</a></h2>
                                <p>Social Media, Content, Website</p>
                            </div>
                        </div>
                        <div class="column SOCIAL MEDIA WEBSITE DIGITAL CAMPAIGNS SEO">
                            <div class="content">
                                <a href="tanjiff-llc.html"><img
                                        src="images/Tanziff1.jpg"
                                        alt="tanziff" class="img-fluid"></a>
                                <h2><a href="">Tanziif LLC</a></h2>
                                <p>Website, Social Media, SEO, Lead gen</p>
                            </div>
                        </div>
                        <div class="column SOCIAL MEDIA">
                            <div class="content">
                                <a href=""> <img
                                        src="images/oriflame-thumb.png"
                                        alt="oriflame" class="img-fluid"></a>
                                <h2><a href="">Oriflame</a></h2>
                                <p>Social Media Management
                                </p>
                            </div>
                        </div>
                        <div class="column SOCIAL MEDIA">
                            <div class="content">
                                <a href=""><img
                                        src="images/cbre-thumb.png"
                                        alt="cbre" class="img-fluid"></a>
                                <h2><a href="">CBRE</a></h2>
                                <p>Social Media, Content, Lead generation</p>
                            </div>
                        </div>
                        <div class="column SOCIAL MEDIA">
                            <div class="content">
                                <a href=""><img
                                        src="images/pearson-thumb.png"
                                        alt="Pearson" class="img-fluid"></a>
                                <h2><a href="">Pearson
                                        Professional Programs</a></h2>
                                <p>Social Media, Content, Lead generation
                                </p>
                            </div>
                        </div>
                        <div class="column WEBSITE">
                            <div class="content">
                                <a href=""><img
                                        src="images/DAS.jpg" alt="das"
                                        class="img-fluid"></a>
                                <h2><a href="https://webeesocial.ca/our-work/dehumidified-air-services/">Dehumidified
                                        Air Services</a></h2>
                                <p>Website design and development</p>
                            </div>
                        </div>
                        <div class="column WEBSITE">
                            <div class="content">
                                <a href=""><img
                                        src="images/dial-a-physio.jpg"
                                        alt="Dial-a-Physio" class="img-fluid"></a>
                                <h2><a href="">Dial-a-Physio</a></h2>
                                <p>Website design and development</p>
                            </div>
                        </div> -->

                        <!-- END GRID -->
                    </div>

                    <!-- END MAIN -->
                </div>
            </div>
        </div>
    </section>
    <!----Form & Review ---->
    
 <x-frontend.form-review/>

    <!-- footer-start-->
   
    <script>
        filterSelection("ALL")

        function filterSelection(c) {
            var x, i;
            x = document.getElementsByClassName("column");
            if (c == "ALL") c = "";
            for (i = 0; i < x.length; i++) {
                w3RemoveClass(x[i], "show");
                if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
            }
        }

        function w3AddClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                if (arr1.indexOf(arr2[i]) == -1) {
                    element.className += " " + arr2[i];
                }
            }
        }

        function w3RemoveClass(element, name) {
            var i, arr1, arr2;
            arr1 = element.className.split(" ");
            arr2 = name.split(" ");
            for (i = 0; i < arr2.length; i++) {
                while (arr1.indexOf(arr2[i]) > -1) {
                    arr1.splice(arr1.indexOf(arr2[i]), 1);
                }
            }
            element.className = arr1.join(" ");
        }
        var btnContainer = document.getElementById("myBtnContainer");
        var btns = btnContainer.getElementsByClassName("btn");
        for (var i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", function (e) {
                var current = document.getElementsByClassName("active");
                this.classList.add("active");
                let buttons = document.getElementsByClassName("btn");
                for (x of buttons) {
                    if (x != this) {
                        x.classList.remove("active");
                    }

                }
            });
        }
    </script>

@endsection