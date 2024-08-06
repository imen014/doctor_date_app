@extends('base')

@section('content')

<div class="container">
<form action="{{route('save_professional_experience',['id'=>$doctor->id])}}" method="post">
  @csrf
  <div class="row">
    <div class="col-lg-8 col-md-6 col-sm-4">
  <h2>Professionals experiences</h2>
  <div class="mb-3">
    <label for="organization" class="form-label">Organization</label>
    <span class="badge text-bg-danger"><i class="bi bi-asterisk text-light"></i></span>
    <input type="text" class="form-control" id="organization" name="organization">
    <div class="text-danger">
      @error('organization')
     <small> {{$message}}</small>
          @enderror
    </div>

  </div>
<div class="mb-3">
<h2>Tasks</h2>   
 <span class="badge text-bg-danger"><i class="bi bi-asterisk text-light"></i></span>
    <input type="text" placeholder="task 1." class="form-control" id="task1" name="task1">
    <div class="text-danger">
      @error('task1')
     <small> {{$message}}</small>
          @enderror
    </div>

  </div>
  <div class="mb-3">
        <input type="text" placeholder="task 2." class="form-control" id="task2" name="task2">
        <div class="text-danger">
          @error('task2')
         <small> {{$message}}</small>
              @enderror
        </div>
    
      </div>
      <div class="mb-3">

                <input type="text" placeholder="task 3." class="form-control" id="task3" name="task3">
            <div class="text-danger">
              @error('task3')
             <small> {{$message}}</small>
                  @enderror
            </div>
        
          </div>




  <div class="mb-3">
    <label for="begin_date" class="form-label">Begin date</label>
    <span class="badge text-bg-danger"><i class="bi bi-asterisk text-light"></i></span>
    <input type="date" class="form-control" id="begin_date" name="begin_date">
    <div class="text-danger">
      @error('begin_date')
     <small> {{$message}}</small>
          @enderror
    </div>
    <div class="mb-3">
        <label for="end_date" class="form-label">End date</label>
        <span class="badge text-bg-danger"><i class="bi bi-asterisk text-light"></i></span>
        <input type="date" class="form-control" id="end_date" name="end_date">
        <div class="text-danger">
          @error('end_date')
         <small> {{$message}}</small>
              @enderror
        </div>

  </div>
  <div class="form-floating">
    <textarea class="form-control" placeholder="Description" name="description" id="description"></textarea>
    <label for="description">Description</label>
  </div>
  
  


<div class="mb-3">
  <input value="Next" type="submit" class="btn btn-primary" />
</div>
</div>
  </form>
</div>

@endsection