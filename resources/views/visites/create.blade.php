@extends('base')

@section('content')
{{$doctor->fullname}}
<div class="container">
<form action="{{route('save_visite')}}" method="post">
  @csrf
  <div class="row">
    <div class="col-lg-8 col-md-6 col-sm-4">
  <h2>Ask visite</h2>
  <div class="mb-3">
    <label for="visite_state">Visite state</label>
   <select name="visite_state" id="visite_state" class="form-control">
    <option value="in waiting">In waiting</option>
    <option value="confirmed"> Confirmed </option>
    <option value="cancelled"> Cancelled </option>
    <option value="refused">  Refused </option>
   </select>
</div>
<div class="mb3">
    <label for="asked_date">Choose a date</label>
    <input type="date" name="asked_date" id="asked_date" />
</div>
<div class="mb3">
  <input value="{{$doctor->id}}" type="hidden" name="doctor_id" id="doctor_id" />
</div>


<div class="mb-3">
  <input value="Confirm" type="submit" class="btn btn-primary" />
</div>
</div>
  </form>
</div>

@endsection