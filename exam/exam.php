<?php

date_default_timezone_set('Asia/Calcutta');
$dateFormat = "d F Y -- g:i a";
$targetDate = time() + (15 *60);//Change the 25 to however many minutes you want to countdown
$actualDate = time();
$secondsDiff = $targetDate - $actualDate;
$remainingDay     = floor($secondsDiff/60/60/24);
$remainingHour    = floor(($secondsDiff-($remainingDay*60*60*24))/60/60);
$remainingMinutes = floor(($secondsDiff-($remainingDay*60*60*24)-($remainingHour*60*60))/60);
$remainingSeconds = floor(($secondsDiff-($remainingDay*60*60*24)-($remainingHour*60*60))-($remainingMinutes*60));
$actualDateDisplay = date($dateFormat,$actualDate);
$targetDateDisplay = date($dateFormat,$targetDate);
?>

<!DOCTYPE html>
<html>  
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Exam</title>
       
        <style>
            @import url(https://fonts.googleapis.com/css?family=Work+Sans:300,600);

body{
    font-size: 20px;
    font-family: 'Work Sans', sans-serif;
    color: #333;
  font-weight: 300;
  text-align: center;
  background-color: #f8f6f0;
}
h1{
  font-weight: 300;
  margin: 0px;
  padding: 10px;
  font-size: 20px;
  background-color: #444;
  color: #fff;
}
.question{
  font-size: 30px;
  margin-bottom: 10px;
}
.answers {
  margin-bottom: 20px;
  text-align: left;
  display: inline-block;
}
.answers label{
  display: block;
  margin-bottom: 10px;
}
button,#submit{
  font-family: 'Work Sans', sans-serif;
    font-size: 22px;
    background-color: #279;
    color: #fff;
    border: 0px;
    border-radius: 3px;
    padding: 20px;
    cursor: pointer;
    margin-bottom: 20px;
    margin-top: 10px;
}
button:hover{
    background-color: #38a;
}





.slide{
  position: absolute;
  left: 0px;
  top: 0px;
  width: 100%;
  z-index: 1;
  opacity: 0;
  transition: opacity 0.5s;
}
.active-slide{
  opacity: 1;
  z-index: 2;
}
.quiz-container{
  position: relative;
  height: 200px;
  margin-top: 40px;
}
            #contain {
  width: 100%;
  background-color: #68CBE0;
  overflow: auto;
}

#contain a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
  width: 90%; /* Four links of equal widths */
  text-align: center;
}
        </style>
        <script>
            const myQuestions = [<?php require 'backend/questions_script.php';?>];
        </script>
    </head>
   <body onload="setCountDown();">
<div id="contain">
   
 <a href="#"><div id="remain"><?php  echo "$remainingMinutes minutes, $remainingSeconds seconds";?></div></a>
</div>
 
<div class="quiz-container">
  <div id="quiz"></div>
</div>
<button id="previous">Previous Question</button>
<button id="next">Next Question</button>
<input id="submit" type='submit' onclick="window.location='backend/results_script.php'" value='Submit Quiz' form='questions'>
<div id="results"></div>
    </body>
    <script>
        var days = <?php echo $remainingDay; ?>  

  var hours = <?php echo $remainingHour; ?>  

  var minutes = <?php echo $remainingMinutes; ?>  

  var seconds = <?php echo $remainingSeconds; ?> 
function setCountDown ()
{
  seconds--;
  if (seconds < 0){
      minutes--;
      seconds = 59;
  }
  if (minutes < 0){
      hours--;
      minutes = 59;
  }
  if (hours < 0){
      days--;
      hours = 23;
  }
  document.getElementById("remain").innerHTML = minutes+" minutes, "+seconds+" seconds";
  SD=window.setTimeout( "setCountDown()", 1000 );
  if (minutes == '00' && seconds == '00') { seconds = "00"; window.clearTimeout(SD);
   		window.alert("Time is up. Press OK to continue."); // change timeout message as required
  		document.getElementById("submit").click();// Add your redirect url
 	} 

}
  

    (function() { 
    

  function buildQuiz() {
    // we'll need a place to store the HTML output
    const output = [];
    output.push(`<form id='questions' name="myForm" action="backend/results_script.php" method="post">`);
    // for each question...
    myQuestions.forEach((currentQuestion, questionNumber) => {
      // we'll want to store the list of answer choices
      const answers = [];

      
      // and for each available answer...
      for (letter in currentQuestion.answers) {
        // ...add an HTML radio button
        answers.push(
          `<label>
             <input type="radio" name="${questionNumber}" value="${letter}">
              ${letter} :
              ${currentQuestion.answers[letter]}
           </label>`
        );
      }

      // add this question and its answers to the output
      output.push(
        `<div class="slide">
           <div class="question"> ${currentQuestion.question} </div>
           <div class="answers"> ${answers.join("")} </div>
         </div>`
      );
    });
    output.push(`</form>`);
    // finally combine our output list into one string of HTML and put it on the page
    quizContainer.innerHTML = output.join("");
  }

  function showSlide(n) {
    slides[currentSlide].classList.remove("active-slide");
    slides[n].classList.add("active-slide");
    currentSlide = n;
    
    if (currentSlide === 0) {
      previousButton.style.display = "none";
    } else {
      previousButton.style.display = "inline-block";
    }
    
    if (currentSlide === slides.length - 1) {
      nextButton.style.display = "none";
      submitButton.style.display = "inline-block";
    } else {
      nextButton.style.display = "inline-block";
      submitButton.style.display = "none";
    }
  }

  function showNextSlide() {
    showSlide(currentSlide + 1);
  }

  function showPreviousSlide() {
    showSlide(currentSlide - 1);
  }

  const quizContainer = document.getElementById("quiz");
  const submitButton = document.getElementById("submit");

  // display quiz right away
  buildQuiz();

  const previousButton = document.getElementById("previous");
  const nextButton = document.getElementById("next");
  const slides = document.querySelectorAll(".slide");
  let currentSlide = 0;

  showSlide(0);

  // on submit, show results
  //submitButton.addEventListener("click", window.location.href="results.php");
  previousButton.addEventListener("click", showPreviousSlide);
  nextButton.addEventListener("click", showNextSlide);
})();
        </script>
</html>
