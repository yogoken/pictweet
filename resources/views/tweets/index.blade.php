@extends('layout')

@section('content')
@foreach($tweets as $tweet)
  <p>{{ $tweet->text }}</p>
@endforeach
@endsection
