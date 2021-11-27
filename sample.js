// 選択肢の配列
let selects=[['たかなわ','こうわ','たかわ'],
['かめいど','かめど','かめと'],
['こうじまち','かゆまち','おかとまち'],
['おなりもん','おかどもん','ごせいもん'],
['とどろき','たたら','たたらき'],
['しゃくじい','せきこうい','いしい'],
['ぞうしき','ざっしき','ざっしょく'],
['おかちまち','みとちょう','ごしきちょう'],
['ししぼね','しかぼね','ろっこつ'],
['こぐれ','こしゃく','こばく']];

// 画像の配列
let picture=["img/kuizy.png","img/亀戸.png","img/麴町.png","img/御成門.png","img/等々力.png","img/石神井.png","img/雑色.png","img/御徒町.png","img/鹿骨.png","img/小榑.png",]


// // 問題のタイトル
// for(let i=1;i<selects.length+1;i++){
// var open=document.getElementById('open');
// var question=document.createElement('div');
// question.className='main'
// var questionText=document.createTextNode(i+".この地名は何と読む？");
// question.appendChild(questionText);
// open.appendChild(question);}

// for(let i=0;i<picture.length;i++){
// var img=document.createElement('img')
// img.src=picture[i]
// // img.alt='高輪の画像です';
// document.getElementById('select').appendChild(img);}

// // 選択肢の変数
// for(let i=0;i<selects.length;i++){
// var div=document.createElement('div');
// div.className='choice';
// document.getElementById('wrong').appendChild(div);
// var divText=document.createTextNode(selects[i][1]);
// div.appendChild(divText);

// var div2=document.createElement('div');
// div2.className='choice';
// var div2Text=document.createTextNode(selects[i][0])
// document.getElementById('correct').appendChild(div2);
// div2.appendChild(div2Text);

// var div3=document.createElement('div');
// div3.className='choice';
// document.getElementById('fault').appendChild(div3);
// var div3Text=document.createTextNode(selects[i][2]);
// div3.appendChild(div3Text);

// // 正解・不正解の表示
// var reply=document.getElementById('reply');
// var answer=document.createElement('p');
// answer.className='answer';
// var answerText=document.createTextNode('正解！');
// answer.appendChild(answerText);
// reply.appendChild(answer);

// var result=document.createElement('span')
// result.className='result';
// var reslutText=document.createTextNode(`正解は「${selects[i][0]}」でした！`);
// result.appendChild(reslutText);
// reply.appendChild(result);

// var error=document.getElementById('error');
// var miss=document.createElement('p');
// miss.className="miss";
// var missText=document.createTextNode('不正解！');
// miss.appendChild(missText);
// error.appendChild(miss);

// var result=document.createElement('span')
// result.className='result';
// var reslutText=document.createTextNode(`正解は「${selects[i][0]}」でした！`);
// result.appendChild(reslutText);
// error.appendChild(result);
// }

// // 正解・不正解選択肢の表示
// 'use strict'
// document.getElementById('correct').addEventListener('click',function(){
// this.style.backgroundColor="#1E90FF"
// this.style.color="#fff" 
// fault.style.pointerEvents="none"
// wrong.style.pointerEvents="none"
// reply.style.display="block";
// correct.style.pointerEvents="none";
// })

// document.getElementById('wrong').addEventListener('click',
// function(){
//     this.style.backgroundColor="#FF3333";
//     this.style.color="#fff";
//     error.style.display="block";
//     fault.style.pointerEvents="none"
//     wrong.style.pointerEvents="none";
//     correct.style.pointerEvents="none";
// })

// document.getElementById('fault').addEventListener('click',
// function(){
//     this.style.backgroundColor="#FF3333";
//     this.style.color="#fff";
//     error.style.display="block";
//     fault.style.pointerEvents="none"
//     wrong.style.pointerEvents="none";
//     correct.style.pointerEvents="none";
// })

// 'use strict';
//     function process(){
//     document.getElementById('correct').style.color="#fff";
//     document.getElementById('correct').style.
//     backgroundColor="#1E90FF";
//     }
//     document.getElementById('wrong').addEventListener('click',process);
    
// 'use strict';
//     function process(){
//     document.getElementById('correct').style.color="#fff";
//     document.getElementById('correct').style.
//     backgroundColor="#1E90FF";
//     }
//     document.getElementById('fault').addEventListener('click',process);


function judgement(question,number){
    document.getElementById('No'+question+'_'+number)
}

let correct=document.getElementById('No'+question+'_'+number)

correct.className="answer"
