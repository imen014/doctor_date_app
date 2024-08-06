@extends('base')

@section('content')

<div class="container">
<form action="{{route('find_doctors_by__3_criteres')}}" method="post">
  @csrf
  <div class="row">
    <div class="col-lg-8 col-md-6 col-sm-4">
  <h2>Search by 3 criteres</h2>
 
  <div class="mb-3">
    <label for="hospital_affilier" class="form-label">Hospital affilier</label>
    <span class="badge text-bg-danger"><i class="bi bi-asterisk text-light"></i></span>
    <select class="form-select" name="hospital_affilier" id="hospital_affilier" aria-label="Default select example">
      <option selected>Open this select menu</option>
      <option value="general_hospital">General Hospital</option>
      <option value="city_clinic">City Clinic</option>
      <option value="regional_medical_center">Regional Medical Center</option>
      <option value="speciality_hospital">Speciality Hospital</option>
      <option value="university_hospital">University Hospital</option>
      <option value="Community_health_center">Community Health Center</option>
      <option value="childrens_hospital">Children’s Hospital</option>
      <option value="womens_hospital">Women’s Hospital</option>
      <option value="veterans_hospital">Veterans Hospital</option>
      <option value="private_clinic">Private Clinic</option>
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