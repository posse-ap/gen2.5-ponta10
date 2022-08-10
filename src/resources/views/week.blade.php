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
  <header>
    <div class="logo">
      <img src="{{ asset('/img/ponta.png') }}" class="img"/>
      <img src="{{ asset('/img/pengin.png') }}" alt="" class="pengin">
      <div>
      <a href="{{ route('home') }}" class="link">月</a>
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
               @foreach($todos as $todo)
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
               @endforeach
               @foreach($done_todos as $todo)
               <div class="todo">
                <div>
                  @csrf
                  <p class="done">{{$todo->deadline}}〆
                </div>
                    <div class="edit">
                         <h3 class="done">{{$todo->text}}</h3>
                    </div>
               </div>
               @endforeach
               </div>
             </div>
          <div class="circle-language circleBox">
            <p>学習言語</p>
            <form action="{{ route('store')}}" method="post" enctype="multipart/form-data">
               <input type="submit" class="languageSubmit" value="HTML">
               <div class="border HTML"></div><span id="HTML"></span>
               <input type="submit" class="languageSubmit" value="CSS">
               <div class="border CSS"></div><span id="CSS"></span>
               <input type="submit" class="languageSubmit" value="JavaScript">
               <div class="border JavaScript"></div><span id="JavaScript"></span>
               <input type="submit" class="languageSubmit" value="PHP">
               <div class="border PHP"></div><span id="PHP"></span>
               <input type="submit" class="languageSubmit" value="Laravel">
               <div class="border Laravel"></div><span id="Laravel"></span>
               <input type="submit" class="languageSubmit" value="SQL">
               <div class="border SQL"></div><span id="SQL"></span>
               <input type="submit" class="languageSubmit" value="React">
               <div class="border React"></div><span id="React"></span>
               <input type="submit" class="languageSubmit" value="WordPress">
               <div class="border WordPress"></div><span id="WordPress"></span>
               <input type="submit" class="languageSubmit" value="GitHub">
               <div class="border GitHub"></div><span id="GitHub"></span>
            </form>
          </div>
        </section>
      </aside>
    </div>
    <div class="time">
    <form name="e" action="" class="form">
     <div class="setTimer">
          <select id="study"></select>
          <span class="koron">:</span>
          <select id="rest"></select>
     </div>
     <div class="setSelect">
     <select id="language">
          <option value="HTML">HTML</option>
          <option value="CSS">CSS</option>
          <option value="JavaScript">JavaScript</option>
          <option value="PHP">PHP</option>
          <option value="Laravel">Laravel</option>
          <option value="SQL">SQL</option>
          <option value="React">React</option>
          <option value="WordPress">WordPress</option>
          <option value="GitHub">GitHub</option>
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
          <input type="text" name="days" size="25" class="timer"/>
          <div class="setInput">
          <input type="text" name="language" class="language">
          <input type="text" name="contents" class="content">
          <input type="hidden" name="time" class="timerHour" >
          <input type="hidden" name="date" value="<?= date("Y-m-d")?>" />
          </div>
          <button type="submit" class="timeRecord">
               記録する
            </button>
    </form>
</div>
    <p class="timer"><span id="hour"></span></span>:<span id="min"></span>:<span id="sec"></span></p>
    <section class="date">
      <p><span><</span>2022年12月<span>></span></p>
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
                <option value="HTML">HTML</option>
                <option value="CSS">CSS</option>
                <option value="JavaScript">JavaScript</option>
                <option value="PHP">PHP</option>
                <option value="Laravel">Laravel</option>
                <option value="SQL">SQL</option>
                <option value="React">React</option>
                <option value="WordPress">WordPress</option>
                <option value="GitHub">GitHub</option>
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
  </div>
  <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.11.0.min.js"></script>
  <script src="https://www.gstatic.com/charts/loader.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
  <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/l10n/ja.js"></script>
  <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
  <script >
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
        language{{$language}}.style.width = {{$ratio}}  + "%";
    @endforeach

    @foreach($languageWeekArray as $language => $languageSum)
        const minute{{$language}} = document.querySelector("#{{$language}}");
        minute{{$language}}.innerHTML = {{$languageSum}} * 60  + "分";
    @endforeach

  </script>
  <script src="{{ asset('/js/main.js') }}"></script>
</body>

</html>