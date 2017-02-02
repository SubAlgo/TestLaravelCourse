<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/app.css">
    <title>My Profile</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class = "col-md-4">
          <img class ="img-responsive" style="max-height:250px; width:auto;" src="/images/pic.jpg" alt"My pic">
        </div>

        <div class="col-md-4">
            <p>Name : Kornchaval</p>
            <p>Surname : Prathipasen</p>
            <p>Website : <a href="http://www.carbikeprice.com"> www.CarBikePrice.com</a></p>
            <p>Business Computer MUS</p>
        </div>

        <div class="col-md-4">
            <p>SubAlgo</p>
            <p>SubAl-Share
            <p>SubHomeLand</p>
            <p>SubMartOnline</p>
        </div>

      </div>

      <div class="row">
        <div class="col-md-4">

          @foreach ($dbProfile as $dbPro)

            @if ($loop->iteration ==2)
              <p>This Second Iteration</p>
            @else
              <p>This is frist iteration</p>
            @endif

            <p>{{$loop->iteration}}. Name : {{$dbPro['Name']}}</p>
            <p>SurName : {{$dbPro['SurName']}}</p>
            <p>Clan : {{$dbPro['Clan']}}</p>
            <hr>

          @endforeach


        </div>
        <div class="col-md-4">
          <ul>
            @for ($i=1; $i <=12 ; $i++)
              <li>{{$i}}*2={{2*$i}} </li>
            @endfor
          </ul>
        </div>
        <div class="col-md-4"></div>

      </div>

    </div>
  </body>
</html>
