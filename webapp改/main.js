const modal = document.querySelector('.modal');
const black = document.querySelector('.black');
const btn = document.querySelector('.record');
const load = document.querySelector('#loader');
const text = document.querySelector('.modal-text');
const passed = document.querySelector('.end');
const closed = document.querySelector('.closeBtn')
const tweet = document.querySelector('.tweet');
const comment = document.querySelector('.comment');
const checkboxes = document.querySelectorAll('.checkbox');

checkboxes.forEach(element => {
  if(element.checked === true){
    console.log(element)
  }
});

//モーダルオープン
function recording(){
  modal.classList.add('trans');
  black.classList.add('blacky');
  btn.classList.add('start');
}

//モーダルクローズ
closed.addEventListener('click',function(){
  modal.classList.remove('trans');
  load.classList.remove('inview');
  black.classList.remove('blacky');
  passed.style.display='none';
  setTimeout(function(){
    text.style.display = "block"
  },500)
  window.location.reload();
})

//記録投稿
function recordDisplay(){
  load.classList.add('inview');
  text.style.display = "none"
  closed.style.display="none"
  checkboxes.forEach(element => {
    if(element.checked === true){
      console.log(element.value)
    }
  });
  if(tweet.checked === true){
    var s, url;
    s = comment.value;
    url = document.location.href;
    url = "http://twitter.com/share?url=" + s;
    window.open(url);
    load.classList.remove('inview');
  }
  setTimeout(function () {
    passed.style.display = "block";
    closed.style.display = "block"
  }, 3900);
}
const errorContents = document.querySelector('.contents');
const errorLanguage = document.querySelector('.language');
const errorDay = document.querySelector('.day');
const errorTimes = document.querySelector('.times');
let inputDay = document.querySelector('input[name="day"]');
let inputTime = document.querySelector('input[name="time"]')

//記録・投稿 エラー表示
$(function(){
  $('.btnRecord').click(function(){
    var check_language = $('.modal-language :checked').length;
    var check_contents = $('.modal-contents :checked').length;
    if (check_language === 0){
      errorLanguage.style.display="inline"
    }else{
      errorLanguage.style.display="none"
    }
    if(check_contents === 0){
      errorContents.style.display="inline"
    }else{
      errorContents.style.display="none"
    }
    if(inputDay.value === ''){
      errorDay.style.display ="inline"
    }else{
      errorDay.style.display ="none"
    }
    if(isNaN(inputTime.value) === true || inputTime.value === ''){
      errorTimes.style.display="inline"
    }else{
      errorTimes.style.display="none"
    }
    if(check_language !== 0 && check_contents !==0 && inputDay.value !== '' && isNaN(inputTime.value) === false && inputTime.value !== ''){
      console.log(inputDay.value)
      recordDisplay();
      console.log(inputTime.value)
    }
  });
});







google.charts.load("current", { packages: ["corechart"] });
google.charts.setOnLoadCallback(drawChart2);
function drawChart2() {
  var data2 = google.visualization.arrayToDataTable([
    ["Task", "Hours per Day"],
    ["N予備校", 2],
    ["ドットインストール", 3],
    ["POSSE課題", 5],
  ]);

  var options = {
    pieHole: 0.5,
    backgroundColor: "transparent",
    legend: "none",
    fontSize: 15,
    colors: ["#1F45FC", "#3090C7", "#00bfff"],
    pieSliceBorderColor: "none",
    chartArea: {left: 0, top: 0, width: "100%", height: "100%"},
  };

  var chart = new google.visualization.PieChart(
    document.getElementById("donutchart2")
  );
  chart.draw(data2, options);
}

google.charts.load("current", { packages: ["corechart"] });
google.charts.setOnLoadCallback(drawChart);
function drawChart() {
  var data = google.visualization.arrayToDataTable([
    ["Task", "Hours per Day"],
    ["HTML", 2],
    ["CSS", 3],
    ["JavaScript", 5],
    ["PHP", 1],
    ["SHELL", 0.5],
    ["SQL", 0.5],
    ["Laravel", 0.2],
    ["情報システム基礎知識(その他)", 0.5],
  ]);

  var options = {
    pieHole: 0.5,
    backgroundColor: "transparent",
    colors: [
      "#1F45FC",
      "#3090C7",
      "#00bfff",
      "#87cefa",
      "#9E7BFF",
      "#893BFF",
      "#6C2DC7",
      "#461B7E",
    ],
    legend: "none",
    fontSize: 15,
    pieSliceBorderColor: "none",
    // 'width': 300,
    // 'height': 300,
    chartArea: {left: 0, top: 0, width: "100%", height: "100%"},
  };

  var chart = new google.visualization.PieChart(
    document.getElementById("donutchart")
  );
  chart.draw(data, options);
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
    datasets: [
      {
        data: [
          2.7, 5, 1, 3.2, 3.2, 4, 4, 7, 1, 4, 5, 6, 9, 2, 4, 6, 4, 3.2, 1, 2, 2,
          4, 5, 3, 5, 3.2, 4.1, 1, 4, 7, 0.7,
        ],
        backgroundColor: "rgba(59,195,255,0.5)",
      },
    ],
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
      xAxes: [
        {
          gridLines: {
            display: false,
          },
        },
      ],
      yAxes: [
        {
          ticks: {
            suggestedMax: 8,
            suggestedMin: 0,
            stepSize: 2,
            callback: function (value, index, values) {
              return value + "h";
            },
          },
          gridLines: {
            display: false,
          },
        },
      ],
    },
  },
});