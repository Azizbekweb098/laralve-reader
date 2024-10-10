@extends('layout.crud')

@section('content')
<br>
<br>

<div class="container">
    <div class="row">
        <div class="col-8">
        <h1>Create</h1>
        <form method="POST" action="{{ route('readers.update', $reader->id) }}">
            @csrf
            @method('PUT')
        <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" value="{{ $reader->name }}" name="name">
    <div  class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label class="form-label">SurName</label>
    <input type="text" class="form-control" name="surname" value="{{ $reader->surname }}">
    <div  class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label class="form-label">age</label>
    <input type="number" class="form-control" name="age" value="{{ $reader->age }}">
    <div  class="form-text">We'll never share your email with anyone else.</div>
  </div>

  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
    </div>
</div>
@endsection