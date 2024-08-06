@extends('base')

@section('content')
<div class="container">
    <ul class="list-group">

    @foreach ($visites as $visite)
      <li class="list-group-item">{{$visite->visite_state}}
        - asked date: {{$visite->asked_date}}
        <a class="btn btn-success" href="{{route('edit_ask_visite',$visite->id)}}">Edit</a>
        <a class="btn btn-danger" href="{{route('delete_ask_visite',$visite->id)}}">Delete</a>

        </li>  
    @endforeach
   

    
</div>

@endsection