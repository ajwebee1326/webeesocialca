@extends('admin.layouts.app')
@section('title', 'Our Clients')
@section('content')
<div class="row">
    <div class="col-xl">
      <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0">New Client</h5>
          <small class="text-muted float-end">
            <a href="{{ route('our-clients.index') }}"><button class="btn btn-primary btn-sm">All Clients</button></a>
          </small>
        </div>
        <div class="card-body">
          <form method="POST" action="{{ route('our-clients.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
              <label class="form-label" for="basic-icon-default-company">Logo</label>
              <div class="input-group">
                <span class="input-group-btn">
                  <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                    <i class="menu-icon tf-icons bx bx-file"></i>Choose
                  </a>
                </span>
                <input id="thumbnail" class="form-control" type="text" name="image">
              </div>
              @error('image')    
                  <div class="text-danger mt-2">{{ $message }}</div>
              @enderror
            </div>

            <div class="mb-3">
              <label class="form-label" for="basic-icon-default-company">Logo Alt Text</label>
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
                <input type="text" class="form-control" id="image_alt" name="image_alt" placeholder="ACME Inc." >
              </div>
            </div>

            <div class="mb-3">
              <label class="form-label" for="basic-icon-default-company">Position</label>
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
                <select name="position" id="" class="form-control">
                    <option value="left">Left</option>
                    <option value="right">Right</option>
                </select>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('scripts')
<script>
    $(document).ready(function() {
        $('#thumbnail').change(function() {
            console.log(this.value);
            $("#image_alt").val(this.value);
        });
    });
    $('#lfm').filemanager('file');
</script>
@endsection