@extends('layout.crud')

@section('content')
<br>
<br>

<div class="container">
    <div class="row">
        <div class="col-8">
        <h1>Create</h1>
        <form method="POST" action="{{ route('teachers.store') }}" enctype="multipart/form-data">
     @if ($errors->any)
  @foreach ($errors->all() as $error )
       <li>{{ $error }}</li>
  @endforeach     
     @endif

            @csrf
        <div class="mb-3">
    <label class="form-label">Name</label>
    <input type="text" class="form-control" name="name" value="{{ old('name') }}">
     @error('name')  
     <div class="text text-danger" role="alert">
      {{ $message }}
  </div>
     @enderror
  </div>
  <div class="mb-3">
    <label class="form-label">SurName</label>
    <input type="text" class="form-control" name="surname" value="{{ old('surname') }}">
    @error('surname')  
     <div class="text text-danger" role="alert">
      {{ $message }}
  </div>
     @enderror
  </div>
  <div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
    @error('email')  
     <div class="text text-danger" role="alert">
      {{ $message }}
  </div>
     @enderror
  </div>
  <div class="mb-3">
    <label class="form-label">age</label>
    <input type="number" class="form-control" name="age" value="{{ old('age') }}">
    @error('age')  
     <div class="text text-danger" role="alert">
      {{ $message }}
  </div>
     @enderror
  </div>
  <div class="mb-3">
    <label class="form-label">image</label>
    <input type="file" class="form-control" name="image" value="{{ old('image') }}">
    @error('image')  
     <div class="text text-danger" role="alert">
      {{ $message }}
  </div>
     @enderror
  </div>

  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
        </div>
    </div>
</div>
@endsection