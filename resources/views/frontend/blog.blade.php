@extends('frontend.layouts.app')

@section('meta_title',$meta->meta_title)
@section('meta_description',$meta->meta_description)

@section('content')

<section class="blog-banner d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-white">Blog</h2>
            </div>
        </div>
    </div>

</section>
<!-- Blog column Start -->
<section class="sec-space">
    <div class="container">
        <div class="row">
            {{-- Blog start --}}
            @foreach ($blogs as $blog)
                <div class="col-md-4 mb-5 mb-md-4">
                    <div class="blog-column h-100">
                        <img src="{{ $blog->thumbnail }}" class="img-fluid mb-3">
                        <div class="blog-text h-100">
                            <h2><a href="#">{{ $blog->title }}</a></h2>
                            <p class="mb-0">{{ $blog->short_description }}</p>
                            <div class="blog-button mt-3">
                                <a href="{{ route('blog-details',$blog->slug) }}" class="btn btn-secondary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            {{-- pagination --}}

            <div class="col-md-12">
                <div class="pagination">
                    {{ $blogs->links() }}
                </div>
            </div>
            

            {{-- Blog end --}}
        </div>
    </div>
</section>

@endsection