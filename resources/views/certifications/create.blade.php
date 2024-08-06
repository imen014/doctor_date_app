@extends('base')

@section('content')

<div class="container">
<form action="{{route('save_Certifications_and_diplomas',['id'=>$doctor->id])}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="row">
    <div class="col-lg-8 col-md-6 col-sm-4">
  <h2>Certifications and diplomas</h2>
  <div class="mb-3">
    <label for="title" class="form-label">Certification title</label>
    <span class="badge text-bg-danger"><i class="bi bi-asterisk text-light"></i></span>
    <input type="text" class="form-control" id="title" name="title">
    <div class="text-danger">
      @error('title')
     <small> {{$message}}</small>
          @enderror
    </div>

  </div>
  <div class="mb-3">
    <label for="institution" class="form-label">Institution</label>
    <span class="badge text-bg-danger"><i class="bi bi-asterisk text-light"></i></span>
    <input type="text" class="form-control" id="institution" name="institution">
    <div class="text-danger">
      @error('institution')
     <small> {{$message}}</small>
          @enderror
    </div>

  </div>
  <div class="mb-3">
    <label for="date_awarded" class="form-label">Date awarded</label>
    <span class="badge text-bg-danger"><i class="bi bi-asterisk text-light"></i></span>
    <input type="date" class="form-control" id="date_awarded" name="date_awarded">
    <div class="text-danger">
      @error('date_awarded')
     <small> {{$message}}</small>
          @enderror
    </div>

  </div>
  <div class="form-floating">
    <textarea class="form-control" placeholder="Description" name="description" id="description"></textarea>
    <label for="description">Description</label>
  </div>
  
  


<div class="mb-3">
  <input value="Next" type="submit" class="btn btn-primary" />
</div>
</div>
  </form>
</div>

@endsection