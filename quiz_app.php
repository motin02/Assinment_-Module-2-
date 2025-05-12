<?php

$score = 0;
$question1 = "
What will be the output of the following PHP code?
 <?php
 echo (10 + 5) * 2;
 ?>\na) 20\nb) 30\nc) 15";
$answer1 = "b";

$question2 = "What is the default file extension for PHP files?\na) .php\nb) .html\nc) .css";
$answer2 = "a";

$question3 = "What is 2 + 2?\na) 3\nb) 4\nc) 5";
$answer3 = "b";

echo "🧠 Welcome to the Quiz!\n\n";

// Question 1
echo "$question1\nYour answer: ";
$input = trim(fgets(STDIN));
if ($input == $answer1) {
    echo "✅ Correct!\n";
    $score++;
} else {
    echo "❌ Incorrect. The correct answer is $answer1.\n";
}

// Question 2
echo "\n$question2\nYour answer: ";
$input = trim(fgets(STDIN));
if ($input == $answer2) {
    echo "✅ Correct!\n";
    $score++;
} else {
    echo "❌ Incorrect. The correct answer is $answer2.\n";
}

// Question 3
echo "\n$question3\nYour answer: ";
$input = trim(fgets(STDIN));
if ($input == $answer3) {
    echo "✅ Correct!\n";
    $score++;
} else {
    echo "❌ Incorrect. The correct answer is $answer3.\n";
}

echo "\n🏁🏁You got $score out of 3 correct.\n";

?>

