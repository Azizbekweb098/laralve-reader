@extends('layout.crud')

@section('content')
<br>
<br>

<div class="container">
    <div class="row">
        <div class="col-8">
        <h1>Create</h1>
        <form method="POST" action="{{ route('teachers.store') }}">
            @csrf
        <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" name="name">
    <div  class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label class="form-label">SurName</label>
    <input type="text" class="form-control" name="surname">
    <div  class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label class="form-label">age</label>
    <input type="number" class="form-control" name="age">
    <div  class="form-text">We'll never share your email with anyone else.</div>
  </div>

  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
    </div>
</div>
@endsection