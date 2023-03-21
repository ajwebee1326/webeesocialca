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
                        <!-- One -->
                        <div class="accordion-item">
                        @foreach($ourwork->accordian_title as $acordian_title)
                            <h4 class="accordion-header" id="acc_1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_1" aria-expanded="true" aria-controls="collapse_1">
                                {{ $acordian_title}}
                                </button>
                            </h4>
                            @endforeach

                            @foreach($ourwork->accordian_description as $acordian_description)
                            <div id="collapse_1" class="accordion-collapse collapse show" aria-labelledby="acc_1" data-bs-parent="#accordion">
                                <div class="accordion-body">
                                    <p> {{$acordian_description}}</p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- 
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
      @foreach($ourwork->accordian_title as $acordian_title)
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        {{ $acordian_title}}
        </button>
        @endforeach
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
    @foreach($ourwork->accordian_description as $acordian_description)
      <div class="card-body">
      {{$acordian_description}}
      </div>
      @endforeach
    </div>
  </div>
</div> -->