@extends('template')

@section('content')
      <p>Name : {{$name}}</p>
      <p>Address : {{$address}}</p>
      <p>ชอบ : </p>
      @foreach ($fav as $favor)
        <p> {{$favor}}</p>
      @endforeach
@endsection
