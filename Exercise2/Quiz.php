<?php
   

    function printer(){
 	$counter = 0;
        echo "Question 1: What topping does NOT go on a pizza?" . "<br>";
        echo "You answered: " . $_POST["topping"] . "<br>";
        echo "Correct answer: Pineapple";
        if($_POST["topping"] == "Pineapple"){
            $counter = $counter + 1;
        }
	
	echo "<br><br>" . "Question 2: What class do EECS students get to skip that others do not?" . "<br>";
        echo "You answered: " . $_POST["class"] . "<br>";
        echo "Correct answer: Engineering Ethics";

        if($_POST["class"] == "Engineering Ethics"){
            $counter = $counter + 1;
        }

        echo "Question 3: What are the primary colors?";

    }

    printer();


?>
