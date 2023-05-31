<!DOCTYPE html>
<html lang="ja">
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
    #ex_chart {max-width:800px;max-height:500px;margin: 40px auto;}
    </style>
     <div class="black"></div>
     <header>
    <div class="logo">
      <img src="{{ asset('/img/ponta.png') }}" class="img"/>
      <img src="{{ asset('/img/pengin.png') }}" alt="" class="pengin">
      <a href="{{route('pokemon')}}" class="pokemonLink"><img src="{{ asset('/img/ball_lb.png') }}" alt="" class="pengin"></a>
      <div>
      <a href="{{ route('home',['id' => 0]) }}" class="link">月</a>
      <a href="#" class="now link">週</a>
      </div>
    </div>
     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
      </form>
    <section class="btn" onclick="recording()">
      <button class="record">記録・投稿</button>
    </section>
  </header>
     <div class="main">
      <div class="language-detail">
        <div class="language-detail_text">
          <h3>言語</h3>
          <h1>{{$language->name}}</h1>
          <p>{{$language->text}}</p>
        </div>
        <div class="language-detail_rank">
          <div class="order">
            <img src="{{ asset('/img/first.png') }}" alt="">
            <span>田上黎</span>
          </div>
          <div class="order">
            <img src="{{ asset('/img/second.png') }}" alt="">
            <span>三浦広太</span>
          </div>
          <div class="order">
            <img src="{{ asset('/img/third.png') }}" alt="">
            <span>小野寛太</span>
          </div>
          <div class="your">あなたの順位は...2位</div>
        </div>
      </div>
      <canvas id="ex_chart"></canvas>
     </div>
     <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.0.min.js"></script>
     <script src="https://www.gstatic.com/charts/loader.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
     <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/ja.js"></script>
     <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
     <script src="main.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.min.js"></script>
     <script>
      var ctx = document.getElementById('ex_chart');
      
      var data = {
          labels: ["日","月", "火", "水", "木", "金","土"],
          datasets: [{
              label: 'Laravel学習時間',
              data: [@foreach($languageArray as $language)
                         {{$language}},
                     @endforeach],
              borderColor: 'rgba(255, 100, 100, 1)',
              lineTension: 0.25,
          }]
      };
      
      var options = {
        scales: {
        yAxes: [{
            ticks: {
                min: 0,
                max: 8
                //beginAtZero: true
            }
        }]
    }};
      
      var ex_chart = new Chart(ctx, {
          type: 'line',
          data: data,
          options: options
      });
      </script>
        <script src="{{ asset('/js/main.js') }}"></script>
   </body>
</html>