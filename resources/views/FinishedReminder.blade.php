@extends('template')

@section('content')
  <div class="container">
    <tabel clas="table">
      <tr>
        <td>ReminderNmae</td>
        <td>Finish At</td>
      </tr>

      @foreach ($reminders as $reminder)
        <tr>
            <td>{{$reminder->body}}</td>
            <td>{{$reminder->deleted_at}}</td>
        </tr>
      @endforeach
    </table>
  </div>

@endsection
