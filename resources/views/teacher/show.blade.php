@extends('layout.crud')

@section('content')


 <div class="container py-5">
    <div class="row">
        <div class="col-8">
        <h1>Show</h1>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">Surname</th>
      <th scope="col">age</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">{{ $teacher->id }}</th>
      <td>{{ $teacher->name }}</td>
      <td>{{ $teacher->surname }}</td>
      <td>{{ $teacher->age }}</td>
    </tr>

  </tbody>
</table>
        </div>
    </div>
 </div>
@endsection