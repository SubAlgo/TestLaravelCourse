@extends('template')

@section('content')
  <div class="container">
    @include('components.ReminderList')
    @include('components.NewReminder')
    @include('components.ReminderTypeList')
    @include('components.NewReminderType')
    {{--   @include('components.ReminderTypeList', ['types' => $types]))--}}

    {{--   @include('components.NewReminderType'))--}}



  </div>

@endsection
