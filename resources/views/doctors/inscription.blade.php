@extends('base')

@section('content')

{{$user->name}} welcome
<div class="container">
<form action="{{route('save_doctor_general_information')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="row">
    <div class="col-lg-8 col-md-6 col-sm-4">
  <h2>General informations</h2>
    <div class="mb-3">
      <input value={{$user->id}} type="hidden" class="form-control" id="user_id" name="user_id"></div>
  <div class="mb-3">
    <label for="birthdate" class="form-label">Birthdate</label>
    <span class="badge text-bg-danger"><i class="bi bi-asterisk text-light"></i></span>
    <input type="date" class="form-control" id="birthdate" name="birthdate">
    <div class="text-danger">
      @error('birthdate')
     <small> {{$message}}</small>
          @enderror
    </div>
  </div>
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
  <label for="profil_photo_path" class="form-label">Profil photo</label>
  <span class="badge text-bg-danger"><i class="bi bi-asterisk text-light"></i></span>
  <input type="file" class="form-control" id="profil_photo_path" name="profil_photo_path">
  <div class="text-danger">
    @error('profil_photo_path')
   <small> {{$message}}</small>
        @enderror
  </div>
</div>
<div class="mb-3">
  <label for="phone_number" class="form-label">Phone number</label>
  <span class="badge text-bg-danger"><i class="bi bi-asterisk text-light"></i></span>
  <input type="tel" class="form-control" id="phone_number" name="phone_number">
  <div class="text-danger">
    @error('phone_number')
   <small> {{$message}}</small>
        @enderror
  </div>
</div>
<div class="mb-3">
  <label for="adresse_cabinet" class="form-label">Adresse cabinet</label>
  <input type="text" class="form-control" id="adresse_cabinet" name="adresse_cabinet">
</div>
<div class="mb-3">
  <label for="website" class="form-label">Website</label>
  <input type="text" class="form-control" id="website" name="website">
</div>
<div class="mb-3">
  <input value="Next" type="submit" class="btn btn-primary" />
</div>
</div>
  </form>
</div>

@endsection