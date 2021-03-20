@extends('layouts.master')

<?php $n = 1; ?>
@section('content')
<h1>Index theloai</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Slug</th>
      <th scope="col">Order</th>
      <th scope="col">Status</th>
      <th scope="col">#</th>
      <th scope="col">#</th>
    </tr>
  </thead>
  <tbody>
  @foreach($listTheLoai as $theloai)
    <tr>
      <th scope="row">{{ $n++ }}</th>
      <td><a href="{{ route('theloais.show',['id' => $theloai->id]) }}">{{ $theloai->name }}</a></td>
      <td>{{ $theloai->slug }}</td>
      <td>{{ $theloai->order }}</td>
      <td>{{ $theloai->status }}</td>
      <td><a href="{{ route('theloais.edit',['id' => $theloai->id]) }}">Edit</a></td>
      <td>
      <form action="{{ route('theloais.destroy', ['id' => $theloai->id ])}}" method="POST">
        {{method_field('DELETE')}}
        {{csrf_field()}}
        <input type="submit" class="btn btn-danger" value="Delete"/>
      </form>
      </td>
      
    </tr>
    @endforeach
  </tbody>
</table>
@endsection