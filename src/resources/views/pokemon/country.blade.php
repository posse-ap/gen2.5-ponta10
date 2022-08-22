<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="{{ asset('/style/style.css') }}">
     <link rel="stylesheet" href="{{ asset('/style/reset.css') }}">
     <title>Document</title>
</head>
<body>
     <style> 
   .kanto{
       background-image: url("{{asset('./img/カントウ地方.jpg')}}");
       background-size: cover;
  }
  .joto{
       background-image: url("{{asset('img/ジョウト地方.png')}}");
       background-size: cover;
  }
  .sino{
       background-image: url("{{asset('./img/シンオウ地方.jpg')}}");
       background-size: cover;
  }
   .hoen{
       background-image: url("{{asset('./img/ホウエン地方.jpg')}}");
       background-size: cover;
  }
  .issyu{
       background-image: url("{{asset('./img/イッシュ地方.jpg')}}");
       background-size: cover;
  }
  .karosu{
       background-image: url("{{asset('./img/カロス地方.jpg')}}");
       background-size: cover;
  }
  .arora{
       background-image: url("{{asset('./img/アローラ.png')}}");
       background-size: cover;
  }
  .gararu{
       background-image: url("{{asset('./img/ガラル.jpeg')}}");
       background-size: cover;
  }
     </style>
     <div class="mainCountry">
          @foreach($countries as $country)
               <a href="{{ route('pokemon.select', [ 'id' => $country->id ]) }}" class="country {{$country->en}}">
                    {{$country->name}}
               </a>
          @endforeach
     </div>
</body>
</html>