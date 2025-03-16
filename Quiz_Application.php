<?php

function evaluateQuiz(array $questions, array $answers ):int{
    $score=0;  
    foreach($questions as $key=>$question){
        if($answers[$key]===$question["correct"]){
            $score++;
        }
    }
    return $score;
} 

$questions=[
    ["question"=>"What is 2 + 2?","correct"=>"4"],
    ["question"=> "What is the capital of France?","correct"=> "paris"],
    ["question"=> "Who wrote \"Hamlet\"?","correct"=> "shakespeare"],
];
$answers=[];
foreach( $questions as $key => $question ) {
     echo ($key+1).". ".$question["question"]."\n";
     $answers[]=trim (strtolower(readline("Your answer: ")));
}

$score = evaluateQuiz($questions, $answers);
//echo $answers[1];
echo"You scored $score out of ".count($answers)."\n";
if ($score === count($answers)) {
    echo "Excellent job!\n";
    } elseif ($score > 1) {
    echo "Good effort!\n";
    } else {
    echo "Better luck next time!\n";
    }
    print_r($answers);

