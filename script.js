var answers = {}

var question_one = document.getElementById('question1');
var question_two = document.getElementById('question2');
var question_three = document.getElementById('question3');

function storeAnswer(question_number, event){

    if(event,target,type === 'radio'){
        console.log(event.target.value);
        answers['question' + question_number] = parseInt(event.target.value);
        console.log(answers);
    }
   
}

//eventClick

question_one.addEventListener('click', function(event){
    storeAnswer(1, event)
})


question_two.addEventListener('click', function(event){
    storeAnswer(2, event)
})


question_three.addEventListener('click', function(event){
    storeAnswer(3, event)
})


function totalScore(){
    var total_score = 
    answers.question1+
    answers.question2+
    answers.question3;
    
    return total_score;
}


function getInfoBasedOnScore(){
    if(totalScore()<3){
        var score_info = "Mantenha-se assim, safe bro";

    }else if(totalScore()>3){
        var score_info = "Tome cuidado, você pode estar apresentando sinais inicais de toxidade";
    
    }else if(totalScore()>=7){
        var score_info = "Voce está sendo toxico, repense suas ações e busquer tonar o local onde está mais agradável"; 

    }

    return score_info;

    
}

 var submit = document.getElementById('submit');
 submit.addEventListener('click',function(){
     document.getElementById("printtotalscore"). innerHTML = totalScore();
     document.getElementById("printscoreinfo"). innerHTML = getInfoBasedOnScore();
 })