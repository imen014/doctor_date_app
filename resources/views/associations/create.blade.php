@extends('base')

@section('content')

<div class="container">
<form action="{{route('save_association',['id'=>$doctor->id])}}" method="post">
  @csrf
  <div class="row">
    <div class="col-lg-8 col-md-6 col-sm-4">
  <h2>Association</h2>
  <div class="mb-3">
    <label for="association_name" class="form-label">Association name</label>
    <span class="badge text-bg-danger"><i class="bi bi-asterisk text-light"></i></span>
    <input type="text" class="form-control" id="association_name" name="association_name">
    <div class="text-danger">
      @error('association_name')
     <small> {{$message}}</small>
          @enderror
    </div>
    <div class="mb-3">
        <label for="doctor_functionnality" class="form-label">Doctor functionnality</label>
        <span class="badge text-bg-danger"><i class="bi bi-asterisk text-light"></i></span>
        <input type="text" class="form-control" id="doctor_functionnality" name="doctor_functionnality">
        <div class="text-danger">
          @error('doctor_functionnality')
         <small> {{$message}}</small>
              @enderror
        </div>

<div class="mb-3">
  <input value="Next" type="submit" class="btn btn-primary" />
</div>
</div>
  </form>
</div>

@endsection