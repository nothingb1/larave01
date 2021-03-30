@extends('layouts.master')

<?php $n = 1; ?>
@section('content')
<h1>{{ @trans('tpl.theloai.index.title') }}</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">{{ @trans('tpl.theloai.index.name') }}</th>
      <th scope="col">{{ @trans('tpl.theloai.index.slug') }}</th>
      <th scope="col">{{ @trans('tpl.theloai.index.order') }}</th>
      <th scope="col">{{ @trans('tpl.theloai.index.status') }}</th>
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
      <td><a href="{{ route('theloais.edit',['id' => $theloai->id]) }}">{{ @trans('tpl.theloai.index.edit') }}</a></td>
      <td>
      <form action="{{ route('theloais.destroy', ['id' => $theloai->id ])}}" method="POST">
        {{method_field('DELETE')}}
        {{csrf_field()}}
        <input type="submit" class="btn btn-danger" value="{{ @trans('tpl.theloai.index.delete') }}"/>
      </form>
      </td>
      
    </tr>
    @endforeach
  </tbody>
</table>
@endsection