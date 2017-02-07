@extends('template')

@section('content')
   <form method="post" action="/reminder/new">
     <h2>New Reminder</h2>
      <div class="form-group">
          <label>Reminder : </label>
          <textarea class="form-control" name="reminder" rows="8" cols="80"></textarea>
      </div>

      <div class="form-group">
          {{csrf_field()}}
          <input class="btn btn-success" type="submit" value="Create New Reminder">
      </div>
   </form>
@endsection
