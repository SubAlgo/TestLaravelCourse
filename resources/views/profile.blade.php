<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="/css/app.css">


    <!--  <link href="http://www.getbootstrap.com/examples/starter-template/starter-template.css" rel="stylesheet">-->

    <!--  <link href="http://www.getbootstrap.com/examples/jumbotron-narrow/jumbotron-narrow.css" rel="stylesheet">-->

    <!--  <script src="http://www.getbootstrap.com/assets/js/ie-emulation-modes-warning.js"></script>-->
    <title>My Profile</title>
  </head>
  <body>
    <div class="container">
      <br>
<!--_________________row1____________________-->
      <div class="row">
        <div class="starter-template">
          <img class="img-responsive center-block" style="max-height:250px; width:auto;" src="/images/pic.jpg" alt"My pic">
        </div>
      </div>
<!--_________________Endrow1____________________-->

<!--*****************row2*****************-->
     <div class="row">
        <div class="col-md-6">
          @foreach ($tprofile as $tpro)
            <p style="text-align: center;">ชื่อ : {{$tpro['name']}} </p>
            <p style="text-align: center;">นามสกุล : {{$tpro['surname']}}</p>
            <p style="text-align: center;">วันเกิด : {{$tpro['brithday']}}</p>
          @endforeach
            <p style="text-align: center;">อายุ : {{$age}}</p>
        </div>

        <div class="col-md-6">
            @foreach ($eprofile as $epro)
              <p style="text-align: center;">Name : {{$epro['name']}} </p>
              <p style="text-align: center;">Surname : {{$epro['surname']}}</p>
              <p style="text-align: center;">Birthday : {{$epro['brithday']}}</p>
            @endforeach
              <p style="text-align: center;">Age : {{$age}}</p>
        </div>
     </div>
<!--*****************Endrow2*****************-->

<!--*****************row3*****************-->
    <div class="row">
      <div class="jumbotron">
        <h1>ประวัติ</h1>
        <p class="lead">
          <ul>
            @foreach ($bigo as $biography)
              <li>{{$biography}}</li>
            @endforeach
          </ul>
        </p>
        <p></p>
      </div>
    </div>
<!--*****************Endrow3*****************-->

<!--*****************row4*****************-->
    <h3 style="text-align: center; color: #0000ff;">ความสนใจ&งานอดิเรก</h3>
    @foreach ($fav as list($comment, $pic))
    <div class="row">
      <div class="col-md-8">
          <p style="color: #008000;"><strong>{{$comment}}</strong></p>
        </div>
        <div class="col-md-4">
          <img class="img-responsive center-block" style="max-height:250px; width:auto;" src="/images/{{$pic}}.jpg" alt"">
        </div>

    </div>
    <br>
    @endforeach
<!--*****************Endrow4*****************-->
    </div>
    <div class="container">
      <footer class="footer">
        <p>Kornchaval Prathipasen</p>
      </footer>
    </div>

  </body>
</html>
