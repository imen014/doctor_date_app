@extends('base')

@section('content')

<div class="container">

<ul class="list-group">
<a class="img-fluid list-group-item" href="{{route('search_doctors_by__speciality')}}"> <img title="Search by speciality" src="{{ asset('search/images/speciality.png') }}" alt="Speciality Search" /></a>
<a  class="img-fluid list-group-item" href="{{route('search_doctors_by__fullname')}}"><img title="Search by fullname" src="{{ asset('search/images/fullname.png') }}" alt="Speciality Search"></a>
<a  class="img-fluid list-group-item" href="{{route('search_doctors_by__sexe')}}"> <img title="Search by sexe" src="{{ asset('search/images/sexe.png') }}" alt="Speciality Search"></a>
<a  class="img-fluid list-group-item" href="{{route('search_doctors_by__cabinet_address')}}"><img title="Search by cabinet address" src="{{ asset('search/images/addresse.png') }}" alt="Speciality Search">    </a>
<a  class="img-fluid list-group-item" href="{{route('search_doctors_by__3_criteres')}}"><img title="Search by  Hospital, fee, teleconsultation" src="{{ asset('search/images/3.png') }}" alt="Speciality Search"></a>
</ul>



</div>
@endsection