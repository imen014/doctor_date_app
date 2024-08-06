@extends('base')

@section('content')

<div class="container">
<form action="{{route('find_doctors_by__cabinet_address')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="row">
    <div class="col-lg-8 col-md-6 col-sm-4">
  <h2>General informations</h2>
  <div class="mb-3">
    <label for="adresse_cabinet" class="form-label">Adresse cabinet</label>
    <input type="text" class="form-control" id="adresse_cabinet" name="adresse_cabinet">
  </div>
 

<div class="mb-3">
  <input value="Next" type="submit" class="btn btn-primary" />
</div>
</div>
  </form>
</div>

@endsection