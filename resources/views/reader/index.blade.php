@extends('layout.crud')

@section('content')


 <div class="container py-5">
    <div class="row">
        <div class="col-8">
        <h1>Table</h1>
        <a href="{{ route('readers.create') }}" class="btn btn-primary">create</a>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">Surname</th>
      <th scope="col">age</th>
      <th scope="col">holati</th>
    </tr>
  </thead>
  <tbody>
  @foreach ($readers as $reader )
  <tr>
      <th scope="row">{{ $reader->id }}</th>
      <td>{{ $reader->name }}</td>
      <td>{{ $reader->surname }}</td>
      <td>{{ $reader->age }}</td>
      <td class="d-flex" style="gap: 5px;">
        <a href="{{ route('readers.show', $reader->id) }}" class="btn btn-primary">Show</a>
        <a href="{{ route('readers.edit', $reader->id) }}"  class="btn btn-primary">UPDATE</a>
        <form method="POST" action="{{ route('readers.destroy', $reader->id) }}">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">Delete</button>
        </form>
      </td>
    </tr>
  @endforeach

  </tbody>
</table>
        </div>
    </div>
 </div>
@endsection