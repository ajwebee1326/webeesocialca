@extends('frontend.layouts.app')

@section('meta_title',$ourwork->meta_title)
@section('meta_description',$ourwork->meta_description)

@section('content')

<style>
    .container {
        width: 1180px;
        margin-top: 3em;
    }

    #accordion .panel {
        border-radius: 0;
        border: 0;
        margin-top: 0px;
    }

    #accordion a {
        display: block;
        padding: 10px 15px;
        border-bottom: 1px solid #b42b2b;
        text-decoration: none;
    }

    #accordion .panel-heading a.collapsed:hover,
    #accordion .panel-heading a.collapsed:focus {
        background-color: #b42b2b;
        color: white;
        transition: all 0.2s ease-in;
    }

    #accordion .panel-heading a.collapsed:hover::before,
    #accordion .panel-heading a.collapsed:focus::before {
        color: white;
    }

    #accordion .panel-heading {
        padding: 0;
        border-radius: 0px;
        text-align: center;
    }

    #accordion .panel-heading a:not(.collapsed) {
        color: white;
        background-color: #b42b2b;
        transition: all 0.2s ease-in;
    }

    /* Add Indicator fontawesome icon to the left */
    #accordion .panel-heading .accordion-toggle::before {
        font-family: 'FontAwesome';
        content: '\f00d';
        float: left;
        color: white;
        font-weight: lighter;
        transform: rotate(0deg);
        transition: all 0.2s ease-in;
    }

    #accordion .panel-heading .accordion-toggle.collapsed::before {
        color: #444;
        transform: rotate(-135deg);
        transition: all 0.2s ease-in;
    }
</style>


<section class="blog-banner d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="text-white">{{$ourwork->title}}</h2>
            </div>
        </div>
    </div>

</section>

<div class="row">

    <div class="column">
        <div class="content">
            <a><img src="{{ $ourwork->thumbnail }}" alt="jlf" class="img-fluid"></a>
            <h2><a href="">{{ $ourwork->title}}</a></h2>
            <p> {!! $ourwork->description !!}</p>
            <p>
        </div>
    </div>
</div>

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
</div>