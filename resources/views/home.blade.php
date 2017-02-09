@extends('template')

@section('content')
  <div class="container">
    <div class ="row">
      <h2>Your Reminder(s)</h2>
    </div>

    <div class ="row">
      <div class="well">
        <span>Buy Milk</span>
        <a class = "btn btn-success pull-right">Finish</a>
      </div>
    </div>



  @include('components.NewReminder')

</div>
@endsection
