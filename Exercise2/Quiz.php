<?php
    $counter = 0;

    function printer(){
        echo "Question 1: What topping does NOT go on a pizza?";
        echo "You answered: " . $_POST["topping"];
        echo "Correct answer: Pineapple";
        if($_POST["topping"] == "Pineapple"){
            $counter = $counter + 1;
        }

        echo "Question 2: What class do EECS students get to skip that others do not?";
        echo "You answered: " . $_POST["class"];
        echo "Correct answer: Engineering Ethics";
        if($_POST["class"] == "Engineering Ethics"){
            $counter = $counter + 1;
        }

        echo "Question 3: What are the primary colors?"
    }

    printer();


?>