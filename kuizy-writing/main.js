let question_list = [
  ["たかなわ", "こうわ", "たかわ"],
  ["かめいど", "かめと", "かめど"],
  ["こうじまち", "おかとまち", "かゆまち"],
];

function choice(questionNum, selectNum, correctNum) {
  let select = document.getElementById(
    "answer_" + questionNum + "_" + selectNum
  );
  let correct = document.getElementById(
    "answer_" + questionNum + "_" + correctNum
  );

  select.className = "answer_incorrect";
  select.style.backgroundColor = "#FF3333";
  select.style.color = "#fff";
  correct.className = "answer_correct";
  correct.style.backgroundColor = "#1E90FF";
  correct.style.color = "#fff";
  let answerarea = document.getElementById("answerarea_" + questionNum);
  answerarea.style.display = "block";

  let answerbox = document.getElementById("answertext_" + questionNum);
  if (selectNum == correctNum) {
    answerbox.className = "answerarea_correct";
    answerbox.innerHTML = "正解！";
  } else {
    answerbox.className = "answerarea_incorrect";
    answerbox.innerHTML = "不正解！";
  }

  let option = document.getElementsByName("answer_" + questionNum);
  $.each(option, function (number, answerlist) {
    answerlist.style.pointerEvents = "none";
  });
}

function getquestion(questionNum, option_list, correctNum) {
  let quiz =
    `<div class="issue">` +
    `    <h1>${questionNum}. この地名はなんて読む？</h1>` +
    `    <img src="img/${questionNum}.png" >` +
    `    <ul>`;
  $.each(option_list, function (number, select) {
    quiz +=
      `        <li id="answer_${questionNum}_${number}" name="answer_${questionNum}" ` +
      `class="answer" onclick="choice(${questionNum}, ${number}, ${correctNum}),scrollToTop();" >${select}</li>`;
    console.log(number);
  });
  quiz +=
    `    </ul>` +
    ` <p id="answerarea_${questionNum}" class="answerarea" >` +
    `            <span id="answertext_${questionNum}"></span><br>` +
    `            <span id=result>正解は「${option_list[correctNum]}」です!</span>` +
    `        </p>` +
    `</div >`;

  document.getElementById("main").insertAdjacentHTML("beforeend", quiz);
}

function gethtml() {
  $.each(question_list, function (figure, ask) {
    let correct = ask[0];

    for (let i = 0; i < 3; i++) {
      let ramdom = Math.floor(Math.random() * 3);
      let shuffle = ask[i];
      ask[i] = ask[ramdom];
      ask[ramdom] = shuffle;
    }

    getquestion(
      figure + 1,
      ask,
      ask.findIndex((item) => item === correct)
    );
  });
}

gethtml();
