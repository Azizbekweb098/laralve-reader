@extends('layout.crud')

@section('content')

    
<br>
<br>
<br>
<div class="container-fluid">
<table class="table">
    <h1>Table</h1>
    <h2><a href="{{ route('teachers.create') }}" class="btn btn-primary">Create</a></h2>
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">surname</th>
      <th scope="col">email</th>
      <th scope="col">age</th>
      <th scope="col">image</th>
      <th scope="col">holati</th>
    </tr>
  </thead>
  <tbody>
@foreach ($teacher as $post )
<tr>
      <th scope="row">{{ $post->id }}</th>
      <td>{{ $post->name }}</td>
      <td>{{ $post->surname}}</td>
      <td>{{ $post->email}}</td>
      <td>{{ $post->age }}</td>
      <td>
        <img src="/images/{{ $post->image }}" width="200px" alt="">
      </td>
      <td class="d-flex" style="gap: 5px;">
        <a href="{{ route('teachers.show', $post->id) }}" class="btn btn-primary">Show</a>
        <a href="{{ route('teachers.edit', $post->id) }}" class="btn btn-primary">Update</a>
        <form action="{{ route('teachers.destroy', $post->id) }}" method="POST">
            @csrf
            @method('DELETE')
           <button class="btn btn-danger">DELETE</button>
        </form>
      </td>
    </tr>
@endforeach

  </tbody>
</table>
</div>





@endsection