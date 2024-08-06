@extends('base')

@section('content')

<div class="container">
<form action="#" method="post" enctype="multipart/form-data">
  @csrf
  <div class="row">
    <div class="col-lg-8 col-md-6 col-sm-4">
  <h2>General informations</h2>
  <div class="mb-3">
    <label for="fullname" class="form-label">Fullname</label>
    <span class="badge text-bg-danger"><i class="bi bi-asterisk text-light"></i></span>
    <input type="text" class="form-control" id="fullname" name="fullname">
    <div class="text-danger">
      @error('fullname')
     <small> {{$message}}</small>
          @enderror
    </div>

  </div>
 

<div class="mb-3">
  <input value="Next" type="submit" class="btn btn-primary" />
</div>
</div>
  </form>
</div>

@endsection