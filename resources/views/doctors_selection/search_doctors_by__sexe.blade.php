@extends('base')

@section('content')

<div class="container">
<form action="{{route('find_doctors_by__sexe')}}" method="post">
  @csrf
  <div class="row">
    <div class="col-lg-8 col-md-6 col-sm-4">
 


  <div class="mb-3">
  <label for="sexe" class="form-label">Sexe</label>
  <span class="badge text-bg-danger"><i class="bi bi-asterisk text-light"></i></span>
  <select class="form-control" name="sexe" id="sexe">
<option selected readonly>Sexe</option>  
<option value="men">Men</option>
<option value="women">Women</option>
</select> 
<div class="text-danger">
  @error('sexe')
 <small> {{$message}}</small>
      @enderror
</div>
 </div>

<div class="mb-3">
  <input value="Confirm" type="submit" class="btn btn-primary" />
</div>
</div>
  </form>
</div>

@endsection