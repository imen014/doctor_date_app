@extends('base')

@section('content')

<div class="container">
    doctor id: {{$doctor->id}}
<form action="{{route('save_work_information', ['id'=>$doctor->id])}}" method="post">
  @csrf
  <div class="row">
    <div class="col-lg-8 col-md-6 col-sm-4">
  <h2>Work informations</h2>
  <div class="mb-3">
    <label for="speciality" class="form-label">Speciality</label>
    <span class="badge text-bg-danger"><i class="bi bi-asterisk text-light"></i></span>
    <select class="form-select" name="speciality" id="speciality" aria-label="Default select example">
      <option>Speciality</option>
      <option value="cardiology">Cardiology</option>
      <option value="dermatology">Dermatology</option>
      <option value="general surgery">General Surgery</option>
      <option value="neurology">Neurology</option>
      <option value="pediatrics">Pediatrics</option>
      <option value="oncology">Oncology</option>
      <option value="orthopedics">Orthopedics</option>
      <option value="psychiatry">Psychiatry</option>
      <option value="radiology">Radiology</option>
      <option value="urology">Urology</option>
    </select>    <div class="text-danger">
    @error('speciality')
   <small> {{$message}}</small>
        @enderror
  </div>
  </div>
  <div class="mb-3">
    <label for="licence_number" class="form-label">Licence number</label>
    <span class="badge text-bg-danger"><i class="bi bi-asterisk text-light"></i></span>
    <input type="number" class="form-control" id="licence_number" name="licence_number">
    <div class="text-danger">
      @error('licence_number')
     <small> {{$message}}</small>
          @enderror
    </div>
  </div>
  <div class="mb-3">
    <label for="hospital_affilier" class="form-label">Hospital affilier</label>
    <span class="badge text-bg-danger"><i class="bi bi-asterisk text-light"></i></span>
    <select class="form-select" name="hospital_affilier" id="hospital_affilier" aria-label="Default select example">
      <option selected>Open this select menu</option>
      <option value="general hospital">General Hospital</option>
      <option value="city clinic">City Clinic</option>
      <option value="regional medical_center">Regional Medical Center</option>
      <option value="speciality hospital">Speciality Hospital</option>
      <option value="university hospital">University Hospital</option>
      <option value="Community health_center">Community Health Center</option>
      <option value="childrens hospital">Children’s Hospital</option>
      <option value="womens hospital">Women’s Hospital</option>
      <option value="veterans hospital">Veterans Hospital</option>
      <option value="private clinic">Private Clinic</option>
    </select>          
    <div class="text-danger">
        @error('hospital_affilier')
       <small> {{$message}}</small>
            @enderror
      </div>

  <div class="mb-3">
    <label for="tarif_consulation" class="form-label">Tarif consulation</label>
    <span class="badge text-bg-danger"><i class="bi bi-asterisk text-light"></i></span>
    <input type="number" class="form-control" id="tarif_consulation" name="tarif_consulation">
    <div class="text-danger">
      @error('tarif_consulation')
     <small> {{$message}}</small>
          @enderror
    </div>
  </div>

  <div class="mb-3">
  <label for="tele_consultation" class="form-label">Télé consultation</label>
  <div class="form-check">
      <input class="form-check-input" type="checkbox" name="tele_consultation" id="tele_consultation" value="true">
      <label class="form-check-label" for="tele_consultation">
          Accept
      </label>
  </div>
</div>

<div class="mb-3">
  <input value="Next" type="submit" class="btn btn-primary" />
</div>
</div>
  </form>
</div>

@endsection