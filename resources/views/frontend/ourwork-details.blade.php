@extends('frontend.layouts.app')

@section('meta_title',$ourwork->meta_title)
@section('meta_description',$ourwork->meta_description)

@section('content')


 <!-- Header Banner -->
    <section class="header-banner align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="text-white mb-0">{{$ourwork->title}}</h3>
                </div>
            </div>
        </div>
    </section>
<!-- Header Banner End-->


<section class="sec-space our-work-inner">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-6 mb-4 mb-md-4">
                            <img src="{{ $ourwork->thumbnail }}" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="accordion" id="accordion">
                        @foreach($ourwork->accordian_title as $key => $value)
                            <div class="accordion-item">
                                <h4 class="accordion-header" id="acc_{{$value}}">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_{{$loop->index}}" aria-expanded="true" aria-controls="collapse_1">
                                    {{ $value}}
                                    </button>
                                </h4>
                                <div id="collapse_{{$loop->index}}" class="accordion-collapse collapse @if($loop->first) show @endif " aria-labelledby="acc_" data-bs-parent="#accordion">
                                    <div class="accordion-body">
                                        <p> {{$ourwork->accordian_description[$key]}}</p>
                                    </div>
                                </div>  
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection
