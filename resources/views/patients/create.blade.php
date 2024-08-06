@extends('base')

@section('content')

<div class="container">
<form action="{{route('save_patient')}}" method="post">
  @csrf
  <div class="row">
    <div class="col-lg-8 col-md-6 col-sm-4">
  <h2>Patient informations</h2>
  <div class="mb-3">
    <label for="patient_name" class="form-label">patient_name</label>
    <span class="badge text-bg-danger"><i class="bi bi-asterisk text-light"></i></span>
    <input type="text" class="form-control" id="patient_name" name="patient_name">
    <div class="text-danger">
      @error('patient_name')
     <small> {{$message}}</small>
          @enderror
    </div>
</div>
<div class="mb-3">
    <label for="email" class="form-label">email</label>
    <span class="badge text-bg-danger"><i class="bi bi-asterisk text-light"></i></span>
    <input type="email" class="form-control" id="email" name="email">
    <div class="text-danger">
      @error('email')
     <small> {{$message}}</small>
          @enderror
    </div>
</div>
<div class="mb-3">
    <label for="phone_number" class="form-label">phone_number</label>
    <span class="badge text-bg-danger"><i class="bi bi-asterisk text-light"></i></span>
    <input type="tel" class="form-control" id="phone_number" name="phone_number">
    <div class="text-danger">
      @error('phone_number')
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