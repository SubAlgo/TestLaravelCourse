@extends('template')

@section('content')
  <div class="container">
    @include('components.ReminderList')
    @include('components.NewReminder')
  </div>

@endsection
