<div class="row">
  <h2>Reminder Type(s)</h2>

  <div class = "row">
  {{--  <div class="alert alert-success" role="alert">{{{ isset($status) ? $status : '{{$status}}' }}}</div>--}}
    @foreach ($types as $reminderType)
        {{--<a class="btn btn-success pull-right">Finish</a>--}}
        <form method="post" action="/reminder/delete">
          <div class="well" >
            <span><b>({{$reminderType->typename}})</b></span>
          </div>
        </form>
    @endforeach
  </div>
</div>
