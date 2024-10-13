@extends('layout.crud');


@section('content')
<br>
<br>
<div class="container">
    <h1>Table</h1>
    <a href="{{ route('rdrtwo.create') }}" class="btn btn-primary">Create</a>
    <div class="row">
        <div class="col-8">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">name</th>
      <th scope="col">surname</th>
      <th scope="col">age</th>
      <th scope="col">holati</th>
    </tr>
  </thead>
  <tbody>
@foreach ($rdrtwo as $two )
<tr>
      <th scope="row">{{ $two->id }}</th>
      <td>{{ $two->name }}</td>
      <td>{{ $two->surname }}</td>
      <td>{{ $two->age }}</td>
      <td class="d-flex" style="gap: 5px;">
        <a href="#" class="btn btn-primary">Show</a>
        <a href="{{ route('rdrtwo.edit', $two->id) }}" class="btn btn-primary">update</a>
       <form method="POST" action="{{ route('rdrtwo.destroy', $two->id) }}">
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