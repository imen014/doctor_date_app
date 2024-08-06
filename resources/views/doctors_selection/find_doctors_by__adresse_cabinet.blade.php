@extends('base')

@section('content')

<div class="container">
<ul>
@foreach ($doctors as $doctor)
<li>{{$doctor->fullname}} &nbsp; &nbsp; &nbsp;
    {{$doctor->phone_number}}
<a href="{{route('show_profil',['id'=>$doctor->id])}}"><i class="bi bi-cursor-fill text-dark"></i></a>
    
</li>
    
@endforeach
</ul>
@endsection