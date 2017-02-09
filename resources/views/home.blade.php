@extends('template')

@section('content')
  <div class="container">
    <div class ="row">
    <h2>Your Reminder(s)</h2>
    </div>

    <div class ="row">
      @foreach ($reminders as $reminder)
        <div class="well">
          <span>{{$reminder}}</span>
          <a class = "btn btn-success pull-right">Finish</a>
        </div>
      @endforeach


    </div>



  @include('components.NewReminder')

</div>
@endsection
