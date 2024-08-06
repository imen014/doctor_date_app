@extends('base')

@section('content')

<div class="container">
    doctor id: {{$doctor->id}}
<form action="{{route('save_professional_experience',['id'=>$doctor->id])}}" method="post">
  @csrf
  <div class="row">
    <div class="col-lg-8 col-md-6 col-sm-4">
  <h2>Professional experiences</h2>
  <div class="mb-3">
    <label for="diplome_certifications" class="form-label">Diplome-certifications</label>
<select name="diplome_certifications" id="diplome_certifications" class="form-control">
    <option selected>select a diplome-certification</option>
    @foreach ($certifications as $certification)
        <option value="{{$certification->id}}">{{$certification->institution}}</option>
    @endforeach
    </select>  
     <div class="text-danger">
    @error('diplome_certifications')
       <small>{{$message}}</small> 
    @enderror
</div>
<a href="{{route('Certifications_and_diplomas_add',['id'=>$doctor->id])}}"><small>Add a new one</small></a>
  </div>
  <div class="mb-3">
    <label for="experiences_professionels" class="form-label">Professionels experiences</label>
<select name="experiences_professionels" id="experiences_professionels" class="form-control">
    <option selected>select a professionels-experience</option>

    @foreach ($experiences as $experience)
       <option value="{{$experience->id}}">{{$experience->organization}}</option> 
    @endforeach
    </select>   
    <div class="text-danger">
    @error('experiences_professionels')
       <small>{{$message}}</small> 
    @enderror
</div>
<a href="{{route('add_professional_experience',['id'=>$doctor->id])}}"><small>Add a new one</small></a>

  </div>
  <div class="mb-3">
    <label for="memberships_associations" class="form-label">Memberships associations</label>
<select name="memberships_associations" id="memberships_associations" class="form-control">
    <option selected>select a membership_association</option>

@foreach ($associations as $association)
<option value="{{$association->id}}">{{$association->association_name}}</option>
    
@endforeach    </select>   
    <div class="text-danger">
    @error('memberships_associations')
       <small>{{$message}}</small> 
    @enderror
</div>
<a href="{{route('add_association',['id'=>$doctor->id])}}"><small>Add a new one</small></a>

  </div>
 
 



<div class="mb-3">
  <input value="Finish" type="submit" class="btn btn-primary" />
</div>
</div>
  </form>
</div>

@endsection