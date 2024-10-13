@extends('layout.crud')

@section('content')
<div class="container">
        <div class="row">
            <div class="col-8">
                <h1>update</h1>
                <form method="POST" action="{{ route('rdrtwo.update', $rdrtwo->id) }}">
                    @csrf
                    @method('PUT')
  <div class="mb-3">
    <label  class="form-label">Name</label>
    <input type="text" name="name" value="{{ $rdrtwo->name }}"  class="form-control"  >
    <div  class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label  class="form-label">surname</label>
    <input type="text" name="surname" value="{{ $rdrtwo->surname }}" class="form-control"  >
    <div  class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label  class="form-label">age</label>
    <input type="text" name="age" value="{{ $rdrtwo->age }}" class="form-control"  >
    <div  class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
            </div>
        </div>
    </div>
@endsection