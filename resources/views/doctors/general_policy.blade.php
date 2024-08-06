@extends('base')

@section('content')

<div class="container">
    doctor id: {{$doctor->id}}
<form action="{{route('save_general_policy',['id'=>$doctor->id])}}" method="post">
  @csrf
  <div class="row">
    <div class="col-lg-8 col-md-6 col-sm-4">
  <h2>General policy</h2>
  <div class="mb-3">
    <label for="paiement_mode" class="form-label">Paiement mode</label>
    <span class="badge text-bg-danger"><i class="bi bi-asterisk text-light"></i></span>
    <select class="form-select" name="paiement_mode" id="paiement_mode" aria-label="Default select example">
      <option value="cash">Cash</option>
      <option value="credit card">Credit Card</option>
      <option value="debit card">Debit Card</option>
      <option value="bank transfer">Bank Transfer</option>
      <option value="online payment">Online Payment</option>
    </select>   
     <div class="text-danger">
    @error('paiement_mode')
   <small> {{$message}}</small>
        @enderror
  </div>
  </div>
  <div class="mb-3">
    <label for="langue" class="form-label">Language</label>
    <span class="badge text-bg-danger"><i class="bi bi-asterisk text-light"></i></span>
    <select class="form-select" id="langue" name="langue" aria-label="Default select example">
      <option value="english">English</option>
      <option value="french">French</option>
      <option value="spanish">Spanish</option>
      <option value="german">German</option>
      <option value="italian">Italian</option>
    </select>    
    <div class="text-danger">
    @error('langue')
   <small> {{$message}}</small>
        @enderror
  </div>
  </div>
  <div class="mb-3">
    <label for="assurance_acceptees" class="form-label">Accepted assurance</label>
    <span class="badge text-bg-danger"><i class="bi bi-asterisk text-light"></i></span>
    <select class="form-select" name="assurance_acceptees" id="assurance_acceptees" aria-label="Default select example">
      <option value="Health insurance a">Health Insurance A</option>
      <option value="Health insurance b">Health Insurance B</option>
      <option value="Health insurance c">Health Insurance C</option>
      <option value="Health insurance d">Health Insurance D</option>
    </select>   
     <div class="text-danger">
    @error('assurance_acceptees')
   <small> {{$message}}</small>
        @enderror
  </div>
  </div>
  <div class="mb-3">
    <label for="option_de_teleconsultation" class="form-label">Teleconsultation option</label>
    <span class="badge text-bg-danger"><i class="bi bi-asterisk text-light"></i></span>
    <select class="form-select" name="option_de_teleconsultation" id="option_de_teleconsultation"  aria-label="Default select example">
      <option value="available">Available</option>
      <option value="not available">Not Available</option>
      <option value="by appointment">By Appointment</option>
    </select>    
    <div class="text-danger">
    @error('option_de_teleconsultation')
   <small> {{$message}}</small>
        @enderror
  </div>
  </div>
  <div class="mb-3">
    <label for="politique_reservation_annulation" class="form-label">Reservation-annulation policy</label>
    <div class="form-floating">
      <textarea class="form-control" placeholder="Politique of reservation-annulation" name="politique_reservation_annulation" id="politique_reservation_annulation"></textarea>
      <label for="politique_reservation_annulation">Politique : reservation-annulation</label>
    </div>    <div class="text-danger">
    @error('politique_reservation_annulation')
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