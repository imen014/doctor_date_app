@extends('base')

@section('content')
<div class="container">
<form action="{{route('update_ask_visite',['id'=>$visite->id])}}" method="post">
  @csrf
  @method('PUT')
  <div class="row">
    <div class="col-lg-8 col-md-6 col-sm-4">
  <h2>Edit ask visite</h2>
  <div class="mb-3">
    <label for="visite_state">Visite state</label>
   <select name="visite_state" id="visite_state" class="form-control">
    <option value="in waiting" {{ $visite->visite_state == 'in waiting' ? 'selected' : '' }}>In waiting</option>
    <option value="confirmed" {{ $visite->visite_state == 'confirmed' ? 'selected' : '' }}>Confirmed</option>
    <option value="cancelled" {{ $visite->visite_state == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
    <option value="refused" {{ $visite->visite_state == 'refused' ? 'selected' : '' }}>Refused</option>
   </select>
</div>
@if(Auth::user()->role == 'patient' && Auth::user()->id == $visite->user_id)
<div class="mb3">
    <label for="asked_date">Choose a date</label>
    <input  value="{{ old('asked_date', $visite->asked_date) }}" type="date" name="asked_date" id="asked_date" />
</div>
@endif

<div class="mb3">
  <input type="hidden" value="{{$visite->doctor_id}}" name="doctor_id" id="doctor_id" />
</div>
<div class="mb3">
</div>


<div class="mb-3">
  <input value="Confirm" type="submit" class="btn btn-primary" />
</div>
</div>
  </form>
</div>

@endsection