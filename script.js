const quizData = [
            {
                question: "Q1: HTML stands for?",
                a: "HighText Machine Language",
                b: "HyperText and links Markup Language",
                c: "HyperText Markup Language",
                d: "None of these",
                ans: "ans3"
            },
            {
                question: "Q2: How to inserting the largest heading in HTML?",
                a: "<h3>",
                b: "<h5>",
                c: "<h1>",
                d: "<br>",
                ans: "ans3"
            },
            {
                question: "Q3: How to create a hyperlink in HTML?",
                a: "<a href = 'www.javatpoint.com'> javaTpoint.com </a>",
                b: "<a> www.javatpoint.com <javaTpoint.com /a>",
                c: '<a link = "www.javatpoint.com"> javaTpoint.com </a>',
                d: "HypeText markup Language",
                ans: "ans1"
            },
            {
                question: "Q4:How to create an ordered list in HTML?",
                a: "<ol>",
                b: "<ul>",
                c: "<li>",
                d: "<i>",
                ans: "ans2"
            },
            {
                question:"Q4:How to insert an image in HTML?",
                a: '<img href = "jtp.png" />',
                b:'<img url = "jtp.png" />',
                c:'<img link = "jtp.png"/>',
                d:'<img src = "jtp.png"/>',
                ans: "ans4"
            }
           
];

const question = document.querySelector('.question');
const option1 = document.querySelector('#option1');
const option2 = document.querySelector('#option2');
const option3 = document.querySelector('#option3');
const option4 = document.querySelector('#option4');

const submit = document.querySelector('#submit');

const ShowScore = document.getElementById('ShowScore');
const answers = document.querySelectorAll('.answer');

let questionCount = 0;
let score = 0;

const loadQuestion = () => {
    const questionList = quizData[questionCount];

    question.innerText = questionList.question;

    option1.innerText = questionList.a;
    option2.innerText = questionList.b;
    option3.innerText = questionList.c;
    option4.innerText = questionList.d;
}
loadQuestion();

const getcheckAnswer = () => {
    let answer;
    answers.forEach((CurAnsElm) => {
        if (CurAnsElm.checked) {
            answer = CurAnsElm.id;
        }
    });
    return answer;
};
const deselectall = () =>{
    answers.forEach((CurAnsElm) => CurAnsElm.checked = false);
}
submit.addEventListener('click', () => {
    const checkedAnswer = getcheckAnswer();
    console.log(checkedAnswer);
    if (checkedAnswer == quizData[questionCount].ans) 
    {
        score++;
    };

    questionCount++;
  deselectall();
    if (questionCount < quizData.length) {
        loadQuestion();
    }
    else {
        
        ShowScore.innerHTML = `<h3> Youre scored ${score}/${quizData.length} </h3>
        <button class= "btn" onclick = "location.reload()"> play Again</button>`;

        ShowScore.classList.remove("ScoreArea");    
    }

});
