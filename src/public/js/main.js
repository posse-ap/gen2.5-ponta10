const modal = document.querySelector('.modal');
const modalReturn = document.querySelector('.modalReturn');
const black = document.querySelector('.black');
const btn = document.querySelector('.record');
const load = document.querySelector('#loader');
const text = document.querySelector('.modal-text');
const passed = document.querySelector('.end');
const closed = document.querySelector('.closeBtn')
const closed2 = document.querySelector('.closeBtn2')
const tweet = document.querySelector('.tweet');
const comment = document.querySelector('.comment');
const checkboxes = document.querySelectorAll('.checkbox');
// const record = document.querySelector('.btnRecord');

//モーダルオープン
function recording(){
  modal.classList.add('trans');
  black.classList.add('blacky');
  btn.classList.add('start');
}

function recording2(){
  modalReturn.classList.add('trans');
  black.classList.add('blacky');
  btn.classList.add('start');
}

//モーダルクローズ
closed2.addEventListener('click',function(){
  modal.classList.remove('trans');
  load.classList.remove('inview');
  black.classList.remove('blacky');
  passed.style.display='none';
  setTimeout(function(){
    text.style.display = "block"
  },500)
})



//記録投稿
function recordDisplay(){
  load.classList.add('inview');
  text.style.display = "none"
  closed2.style.display="none";
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
let inputDay = document.querySelector('input[name="date"]');
let inputTime = document.querySelector('input[name="times"]')
let selectLanguage = document.querySelector('.lan');
let selectContents = document.querySelector('.con');




//記録・投稿 エラー表示
$(function(){
  $('.btnRecord').click(function(){
    if (selectLanguage.value === ""){
      errorLanguage.style.display="inline"
    }else{
      errorLanguage.style.display="none"
    }
    if(selectContents.value === ""){
      errorContents.style.display="inline"
    }else{
      errorContents.style.display="none"
    }
    if(inputDay.value === ''){
      errorDay.style.display ="inline"
    }else{
      errorDay.style.display ="none"
    }
    if(isNaN(inputTime.value) == true || inputTime.value === ''){
      errorTimes.style.display="inline"
      console.log(inputTime.value)
    }else{
      errorTimes.style.display="none"
    }
    if(selectLanguage.value !== "" && selectContents.value !== "" && inputDay.value !== '' && isNaN(inputTime.value) == false && inputTime.value !== ''){
      recordDisplay();
    }
  });
});

const pengin = document.querySelector(".pengin");
const timer = document.querySelector(".time");
pengin.addEventListener("click",function(){
  console.log("aaa")
  timer.style.display = "block";
  black.classList.add('blacky');
})




// const month = document.querySelector('.selectMonth');
// month.addEventListener('click',function(){
//   document.check.submit();
// })



let dat1 = 24 * 60 * 60 * 1000;
let millenium;
let count = 0;
let countSecond = 0;
let study = document.getElementById("study");
let rest = document.getElementById("rest");


function time(value) {
  for (let i = 0; i < 60; i++) {
    let option = `<option value="${i}">${i}</option>`;
    if(i == 25){
         if(value == "study"){
              option = `<option value="${i}" selected>${i}</option>`;
         }
    }else if(i == 5){
         if(value == "rest"){
              option = `<option value="${i}" selected>${i}</option>`;
         }
    } 
    document.getElementById(`${value}`).insertAdjacentHTML("beforeend", option);
  }
}
time("study");
time("rest");


function setLastMinutes(max) {
  millenium = new Date();
  millenium.setMinutes(millenium.getMinutes() + max);
}

function display() {
  let today = new Date();
  // if ( !millenium || (millenium < today) ) setLastMinute(5);
  if (!millenium) {
    setLastMinutes(Number(study.value));
    countSecond+1;
  }
  countSecond++
  if (millenium < today) {
    count++;
    if (count % 2 !== 0) {
      setLastMinutes(Number(rest.value));
    } else {
      setLastMinutes(Number(study.value));
    }
  }

  const language = document.querySelector("#language")
  document.f.language.value = language.value

  
  const content = document.querySelector("#content")
  document.f.contents.value = content.value;

  if (count % 2 !== 0) {
      countSecond--;
      hour = study.value * (count + 1) / (60 * 2);
      document.f.languages.value = "休憩中";
    }else{
             hour = study.value * ((count + 2) / 2) / 60;
    }
  let milliSec = (millenium - today) % dat1;
  time1 = Math.floor(milliSec / (60 * 60 * 1000));
  time2 = Math.floor(milliSec / (60 * 1000)) % 60;
  time3 = (Math.floor(milliSec / 1000) % 60) % 60;

  times2 = ("00" + time2).slice(-2);
  times3 = ("00" + time3).slice(-2);

  document.f.days.value =
    times2 +
    ":" +
    times3
    

    const timeRecord = document.querySelector(".timeRecord");

     document.e.style.display = "none";
     timeRecord.style.display = "block";
     document.f.days.style.display = "block";
     document.f.language.style.display = "block";

  tid = setTimeout("display()", 1000);

  const timerHour = document.querySelector(".timerHour");

  timerHour.setAttribute("value", hour);
}


