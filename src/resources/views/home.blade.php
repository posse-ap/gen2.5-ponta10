<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="{{ asset('/style/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('/style/style.css') }}">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
  <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css" />
  <title>Document</title>
</head>

<body>
  <div class="black"></div>
  <header>
    <div class="logo">
      <img src="img/ponta.png" class="img"/>
      <p>4th week</p>
    </div>
    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
          {{ __('Logout') }}
     </a>
     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
    <section class="btn" onclick="recording()">
      <button class="record">記録・投稿</button>
    </section>
  </header>
  <div class="main">
    <div class="data">
      <article>
        <section class="hour">
          <div class="hour-today hourBox">
            <h3>Today</h3>
            <h2>{{$todaySum}}</h2>
            <h3>hour</h3>
          </div>
          <div class="hour-month hourBox">
            <h3>Month</h3>
            <h2>{{$monthSum}}</h2>
            <h3>hour</h3>
          </div>
          <div class="hour-total hourBox">
            <h3>Total</h3>
            <h2>{{$sum}}</h2>
            <h3>hour</h3>
          </div>
        </section>
        <section class="bar">
          <canvas id="myBarChart"></canvas>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.js"></script>
        </section>
      </article>
      <aside>
        <section class="circle">
          <div class="circle-contents circleBox">
            <p>学習コンテンツ</p>
            <div id="donutchart2"></div>
            <div class="graphText2">
              <li class="legend2">N予備校</li>
              <br />
              <li class="legend2">ドットインストール</li>
              <br />
              <li class="legend2">POSSE課題</li>
            </div>
          </div>
          <div class="circle-language circleBox">
            <p>学習言語</p>
            <div id="donutchart"></div>
            <div class="graphText">
              <li class="legend">HTML</li>
              <li class="legend">CSS</li>
              <li class="legend">JavaScript</li>
              <br />
              <li class="legend">PHP</li>
              <li class="legend">SQL</li>
              <li class="legend">Laravel</li>
              <br />
              <li class="legend">SHELL</li>
              <br />
              <li class="legend">情報システム基礎(その他)</li>
            </div>
          </div>
        </section>
      </aside>
    </div>
    <section class="date">
      <p>2022年12月<span>></span></p>
    </section>
    <section class="btn" onclick="recording()">
      <button class="record">記録・投稿</button>
    </section>
    <section class="modal">
      <form action="{{ route('store')}}" method="post" enctype="multipart/form-data">
        @csrf
      <div id="loader"></div>
      <div class="closeBtn2" onclick="close()"><img src="{{ asset('/img/iconmonstr-x-mark-6-240.png') }}"></div>
      <div class="closeBtn"><input type="image" src="{{asset('./img/iconmonstr-x-mark-6-240.png') }}" value=""></div>
      <div class="modal-text">
        <div class="modal-flex">
          <article>
            <div class="modal-date">
              <p>学習日<span class="error day"> ※学習日を記入してください</span></p>
              <input type="text" id="calendarTEST" name="date" />
            </div>
            <div class="modal-contents">
              <p>学習コンテンツ(複数選択不可)<span class="error contents"> ※選択してください</span></p>
              <select name="contents" class="select con">
                <option value="">選択してください</option>
                <option value="N予備校">N予備校</option>
                <option value="ドットインストール">ドットインストール</option>
                <option value="POSSE課題">POSSE課題</option>
              </select>
            </div>
            <div class="modal-language">
              <p>学習言語(複数選択不可)<span class="error language"> ※選択してください</span></p>
              <select name="language" class="select lan">
                <option value="">選択してください</option>
                <option value="HTML">HTML</option>
                <option value="CSS">CSS</option>
                <option value="JavaScript">JavaScript</option>
                <option value="PHP">PHP</option>
                <option value="Laravel">Laravel</option>
                <option value="SQL">SQL</option>
                <option value="React">React</option>
                <option value="その他">その他</option>
              </select>
            </div>
          </article>
          <aside>
            <div class="modal-hour">
              <p>学習時間<span class="error times"> ※数字を入力してください</span></p>
              <input type="text" name="time" />
            </div>
            <div class="modal-twitter">
              <p>Twitter用コメント</p>
              <textarea class="comment"></textarea>
            </div>
            <div class="modal-share">
              <label>
                <input type="checkbox" class="checkbox tweet" />
                <span class="checkbox-fontas"></span>
                Twitterにシェアする
              </label>
            </div>
          </aside>
        </div>
        <button class="btnRecord" type="button">記録・投稿</button>
      </div>
      <div class="end">
        <p class="endText">AWESOME!</p>
        <i class="fas fa-check-circle"></i>
        <p>記録・投稿<br />完了でござる</p>
      </div>
      </form>
    </section>
  </div>
  <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.0.min.js"></script>
  <script src="https://www.gstatic.com/charts/loader.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/ja.js"></script>
  <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
  <script>
    flatpickr.localize(flatpickr.l10ns.ja);
    flatpickr("#calendarTEST");
    google.charts.load("current", {
      packages: ["corechart"]
    });
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Task", "Hours per Day"],
        @foreach($languageArray as $language => $languageSum)
        ['{{$language}}', {{$languageSum}}],
        @endforeach
      ]);

      var options = {
        pieHole: 0.5,
        backgroundColor: "transparent",
        colors: [
          "#FF2400",
          "#ff4500",
          "#ff6347",
          "#ff8c00",
          "#ffa500",
          "#f1a478",
          "#ffd27d",
          "#FFF380",
        ],
        legend: "none",
        fontSize: 15,
        pieSliceBorderColor: "none",
        // 'width': 300,
        // 'height': 300,
        chartArea: {
          left: 0,
          top: 0,
          width: "100%",
          height: "100%"
        },
      };

      var chart = new google.visualization.PieChart(
        document.getElementById("donutchart")
      );
      chart.draw(data, options);
    }

    google.charts.load("current", {
      packages: ["corechart"]
    });
    google.charts.setOnLoadCallback(drawChart2);

    function drawChart2() {
      var data2 = google.visualization.arrayToDataTable([
        ["Task", "Hours per Day"],
        @foreach($contentArray as $content => $contentSum)
        ['{{$content}}', {{$contentSum}}],
        @endforeach
      ]);

      var options = {
        pieHole: 0.5,
        backgroundColor: "transparent",
        legend: "none",
        fontSize: 15,
        colors: ["#ff4500", "#ff6347", "#ff8c00"],
        pieSliceBorderColor: "none",
        chartArea: {
          left: 0,
          top: 0,
          width: "100%",
          height: "100%"
        },
      };

      var chart = new google.visualization.PieChart(
        document.getElementById("donutchart2")
      );
      chart.draw(data2, options);
    }
    var ctx = document.getElementById("myBarChart");
    var myBarChart = new Chart(ctx, {
      type: "bar",
      data: {
        labels: [
          "",
          "2",
          "",
          "4",
          "",
          "6",
          "",
          "8",
          "",
          "10",
          "",
          "12",
          "",
          "14",
          "",
          "16",
          "",
          "18",
          "",
          "20",
          "",
          "22",
          "",
          "24",
          "",
          "26",
          "",
          "28",
          "",
          "30",
          "",
        ],
        datasets: [{
          data: [
            @foreach($dateArray as $date => $dateSum)
            '{{$dateSum}}',
            @endforeach
          ],
          backgroundColor: "rgba(255,123,0,0.7)",
        }, ],
      },
      options: {
        legend: {
          display: false,
        },
        title: {
          // display: true,
          text: "#3BB9FF",
        },
        scales: {
          xAxes: [{
            gridLines: {
              display: false,
            },
          }, ],
          yAxes: [{
            ticks: {
              suggestedMax: 8,
              suggestedMin: 0,
              stepSize: 2,
              callback: function(value, index, values) {
                return value + "h";
              },
            },
            gridLines: {
              display: false,
            },
          }, ],
        },
      },
    });
  </script>
  <script src="{{ asset('/js/main.js') }}"></script>
</body>

</html>