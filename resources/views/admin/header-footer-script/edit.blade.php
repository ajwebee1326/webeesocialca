@extends('admin.layouts.app')
@section('title', 'Our Clients')
@section('content')
<div class="row">
    <div class="col-xl">
      <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0">Update Scripts</h5>
        </div> 
        <div class="card-body">
          <form method="POST" action="{{ route('header-footer-script.update') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label for="header" class="form-label">Header Script</label>
                <textarea name="header_script" id="" cols="130" rows="20">
                  @if($script)
                    {{ $script->header_script }}
                  @endif
                </textarea>
            </div>
            <div class="mb-3">
              <label for="header" class="form-label">Footer Script</label>
                <textarea name="footer_script" id="" cols="130" rows="20">
                  @if($script)
                    {{ $script->footer_script }}
                  @endif
                </textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('scripts')

@endsection