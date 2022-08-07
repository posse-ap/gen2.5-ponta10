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






