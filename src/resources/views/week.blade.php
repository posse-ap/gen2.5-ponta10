<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="{{ asset('/style/style.css') }}">
  <link rel="stylesheet" href="{{ asset('/style/reset.css') }}">
  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css" />
  <link rel="stylesheet" type="text/css" href="https://npmcdn.com/flatpickr/dist/themes/material_blue.css" />
  <title>Document</title>
</head>

<body>
  <div class="black"></div>
  <a href="{{ route('week', [ 'id' => $id + 1 ]) }}" class="before"><img src="{{ asset('img/iconmonstr-angel-left-circle-thin-240.png') }}" alt=""></a>
  @if($id > 0)
  <a href="{{ route('week', [ 'id' => $id - 1 ]) }}" class="after"><img src="{{ asset('img/iconmonstr-angel-right-circle-thin-240.png') }}" alt=""></a>
  @endif
  <header>
    <div class="logo">
      <img src="{{ asset('/img/ponta.png') }}" class="img" />
      <img src="{{ asset('/img/pengin.png') }}" alt="" class="pengin">
      <div>
        <a href="{{ route('home',['id' => 0]) }}" class="link">月</a>
        <a href="#" class="now link">週</a>
      </div>
    </div>
    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
      {{ __('Logout') }}
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
    </form>
    <img src="{{asset('/img/iconmonstr-gear-8-240.png')}}" alt="" class="setting" onclick="setting()">
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
            <h3>Week</h3>
            <h2>{{$weekSum}}</h2>
            <h3>hour</h3>
          </div>
          <div class="hour-total hourBox">
            <h3>Average</h3>
            <h2>{{$average}}</h2>
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
          <div class="circle-language circleBox">
            <p>学習言語</p>
            @foreach($languages as $language)
            <div class="language-container">
              <a href="{{ route('language',['language_id' => $language->id] )}}" class="languageSubmit">{{$language->name}}</a>
              <form action="{{ route('language_delete',['language_id' => $language->id ]) }}" method="post" enctype="multipart/form">
                @csrf
                <input type="image" src="{{ asset('\img\iconmonstr-trash-can-9-240.png') }}" class="image">
              </form>
            </div>
            <div class="border {{$language->name}}"></div><span id="{{$language->name}}"></span>
            @endforeach
          </div>
          <div class="circle-contents circleBox">
            <p>今週のtodo</p><a href="https://docs.google.com/spreadsheets/d/1dyAbtikJKsCy0qiQiw4nhMWUt5jZufgl4tTHbErFHSE/edit#gid=0">今週の課題はこちら</a>
            <form action="{{ route('todo_store')}}" method="post" enctype="multipart/form-data">
              @csrf
              <input type="text" name="todo">
              <div class="add">
                <select name="deadline" id="">
                  @foreach($weekAfterArray as $key => $value)
                  <option value="{{ $value }}">{{ $value }} ({{$key}})</option>
                  @endforeach
                </select>
                <button type="submit">新規追加</button>
              </div>
            </form>
            <div class="scrollTodo">
              @foreach($todoArray as $key => $todo)
              @if($todo !== '')
              <div class="todo">
                <form action="{{route('todo_delete',['todo_id' => $todo['id'] ])}}" method="post" enctype="multipart/form">
                  @csrf
                  <p>{{$todo->deadline}}〆<input type="image" src="{{ asset('\img\iconmonstr-trash-can-9-240.png') }}" class="image"></p>
                </form>
                <div class="edit">
                  <h3>{{$todo->text}}</h3>
                  <form action="{{ route('todo_update',[ 'todo_id' => $todo['id'] ]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <button class="btnEdit">完了</button>
                  </form>
                </div>
              </div>
              @endif
              @endforeach
              @foreach($done_todoArray as $key => $todo)
              @if($todo !== '')
              <div class="todo">
                <div>
                  @csrf
                  <p class="done">{{$todo->deadline}}〆
                </div>
                <div class="edit">
                  <h3 class="done">{{$todo->text}}</h3>
                </div>
              </div>
              @endif
              @endforeach
            </div>
          </div>
        </section>
      </aside>
    </div>
    <div class="time">
    <div class="closeBtn4"><img src="{{ asset('/img/iconmonstr-x-mark-6-240.png') }}"></div>
      <form name="e" action="" class="form">
        <div class="setTimer">
          <select id="study"></select>
          <span class="koron">:</span>
          <select id="rest"></select>
        </div>
        <div class="setSelect">
          <select id="language">
            @foreach($languages as $language)
            <option value="{{$language->name}}">{{$language->name}}</option>
            @endforeach
          </select>
          <select id="content">
            <option value="N予備校">N予備校</option>
            <option value="ドットインストール">ドットインストール</option>
            <option value="POSSE課題">POSSE課題</option>
            <option value="Udemy">Udemy</option>
            <option value="自主制作">自主制作</option>
            <option value="その他">その他</option>
          </select>
        </div>
        <button type="button" onclick="display()" onunload="clearTimeout(tid)" class="startBtn">
          スタート
        </button>
      </form>
      <form name="f" action="{{ route('store')}}" method="post" enctype="multipart/form-data" class="form2">
        @csrf
        <input type="text" name="days" size="25" class="timer" />
        <div class="setInput">
          <input type="text" name="language" class="language">
          <input type="text" name="contents" class="content">
          <input type="hidden" name="times" class="timerHour">
          <input type="hidden" name="date" value="<?= date("Y-m-d") ?>" />
        </div>
        <button type="submit" class="timeRecord">
          記録する
        </button>
      </form>
    </div>
    <!-- <p class="timer"><span id="hour"></span></span>:<span id="min"></span>:<span id="sec"></span></p> -->
    <section class="date">
      <form method="post" action="{{ route('week_store')}}" enctype="multipart/form-data" class="weekForm">
        @csrf
        <select name="week" id="week" onchange="submit(this.form)"></select>
      </form>
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
                  <option value="Udemy">Udemy</option>
                  <option value="自主制作">自主制作</option>
                </select>
              </div>
              <div class="modal-language">
                <p>学習言語(複数選択不可)<span class="error language"> ※選択してください</span></p>
                <select name="language" class="select lan">
                  <option value="">選択してください</option>
                  @foreach($languages as $language)
                  <option value="{{$language->name}}">{{$language->name}}</option>
                  @endforeach
                </select>
              </div>
            </article>
            <aside>
              <div class="modal-hour">
                <p>学習時間<span class="error times"> ※数字を入力してください</span></p>
                <input type="text" name="times" />
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
    <section class="modal set">
      <div class="closeBtn3"><img src="{{ asset('/img/iconmonstr-x-mark-6-240.png') }}"></div>
      <h2>カスタマイズ</h2>
      <p>背景色変更</p>
      <input type="color" id="color" name="color">
      <input type="submit" class="colorBtn" value="色変更"></input>
      <form method="post" action="{{ route('language_store')}}" enctype="multipart/form-data">
        @csrf
        <p>学習言語追加</p>
        <dd>名前</dd><input type="text" name="languageName">
        <dd>説明</dd><input type="text" name="languageText">
        <input type="submit" value="新規追加">
      </form>

    </section>
  </div>
  <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.0.min.js"></script>
  <script src="https://www.gstatic.com/charts/loader.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/ja.js"></script>
  <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
  <script>
    function time(value) {
      @foreach($weeks as $key => $week)
      let selection{{$key}} = `<option value="{{$key}}">{{$week}}</option>`;
      if ({{$key}} == {{$id}}){
        selection{{$key}} = `<option value="{{$key}}" selected>{{$week}}</option>`;
      }
      document.getElementById(`${value}`).insertAdjacentHTML("beforeend", selection{{$key}});
      @endforeach
    }
    time("week");



    flatpickr.localize(flatpickr.l10ns.ja);
    flatpickr("#calendarTEST");
    var ctx = document.getElementById("myBarChart");
    var myBarChart = new Chart(ctx, {
      type: "bar",
      data: {
        labels: [
          "日",
          "月",
          "火",
          "水",
          "木",
          "金",
          "土"
        ],
        datasets: [{
          data: [
            @foreach($weekArray as $week => $dateSum)
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
              suggestedMax: 6,
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

    @foreach($languageWeekRatioArray as $language => $ratio)
    const language{{$language}} = document.querySelector(".{{$language}}");
    language{{$language}}.style.width = {{$ratio}} + "%";
    @endforeach

    @foreach($languageWeekArray as $language => $languageSum)
    const minute{{$language}} = document.querySelector("#{{$language}}");
    minute{{$language}}.innerHTML = {{$languageSum}}* 60 + "分";
    @endforeach
  </script>
  <script src="{{ asset('/js/main.js') }}"></script>
</body>

</html>