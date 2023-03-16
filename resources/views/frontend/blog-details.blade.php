@extends('frontend.layouts.app')

@section('meta_title',$blog->meta_title)
@section('meta_description',$blog->meta_description)

@section('content')

<section class="sec-space">
    <div class="container">
        <div class="row">
            <h2 class="text-primary text-center">{{ $blog->title }}</h2>
        </div>
    </div>
</section>
<!-- blog-inner-top-->

<section class="sec-space">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                {!! $blog->description !!}
            </div>
            <div class="col-md-3">
                <div class="recent-blog p-3">
                    <h4 class="text-dark mb-1">Recent-blog</h4>
                    @foreach($recent_blogs as $recent_blog)
                        <div class="blog-list">
                            <p><a href="" class="text-primary">{{ $recent_blog->title }}</a></p> 
                            <p class="blog-date mb-0">{{  \Carbon\Carbon::parse($recent_blog->publish_date)->format('d-M-Y'); }}</p>
                        </div>
                    @endforeach

                </div>
            </div>

        </div>
    </div>
</section>


@endsection