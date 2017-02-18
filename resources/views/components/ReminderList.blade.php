<div class="row">
  <h2>Your Reminder(s)</h2>

  <div class = "row">

  {{--  <div class="alert alert-success" role="alert">{{{ isset($status) ? $status : '{{$status}}' }}}</div>--}}


    @foreach ($reminders as $reminder)

        {{--<a class="btn btn-success pull-right">Finish</a>--}}
        <form method="post" action="/reminder/delete">
          <div class="well" >
            <span>{{$reminder->body}} <b>({{$reminder->type->typename}})</b></span>
          {{csrf_field()}}
          <input type="hidden" name="_method" value="delete">
          <input type="hidden" name="id" value={{$reminder->id}}>
          <input type="submit" class="btn btn-success pull-right" value="Finish">
  </div>
        </form>


    @endforeach
  </div>
</div>
