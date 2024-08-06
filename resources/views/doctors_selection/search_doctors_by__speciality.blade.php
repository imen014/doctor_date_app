@extends('base')

@section('content')

<div class="container">
    <div class="container">
        <form action="{{route('find_doctors_by__speciality')}}" method="post">
          @csrf
          <div class="row">
            <div class="col-lg-8 col-md-6 col-sm-4">
          <h2>Search doctors by speciality</h2>
          <div class="mb-3">
            <label for="speciality_doctor" class="form-label">Enter speciality</label>
            <div class="mb-3">
                <label for="speciality_doctor" class="form-label">Speciality</label>
                <span class="badge text-bg-danger"><i class="bi bi-asterisk text-light"></i></span>
                <select class="form-select" name="speciality_doctor" id="speciality_doctor" aria-label="Default select example">
                  <option>  Choose a speciality</option>
                  <option value="cardiology">Cardiology</option>
                  <option value="dermatology">Dermatology</option>
                  <option value="general_surgery">General Surgery</option>
                  <option value="neurology">Neurology</option>
                  <option value="pediatrics">Pediatrics</option>
                  <option value="oncology">Oncology</option>
                  <option value="orthopedics">Orthopedics</option>
                  <option value="psychiatry">Psychiatry</option>
                  <option value="radiology">Radiology</option>
                  <option value="urology">Urology</option>
                </select>    <div class="text-danger">
                @error('speciality_doctor')
               <small> {{$message}}</small>
                    @enderror
              </div>
              </div>          
        
          </div>
          <div class="mb-3">
            <input value="Next" type="submit" class="btn btn-primary" />
          </div>
        </form>
    </div>
@endsection