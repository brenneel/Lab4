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
        echo "You answered: " . $_POST["course"] . "<br>";
        echo "Correct answer: Engineering Ethics" . "<br>";

        if($_POST["class"] == "Engineering Ethics"){
            $counter = $counter + 1;
        }

        echo "<br><br>" . "Question 3: What are the primary colors?" . "<br>";
	echo "You answered: " . $_POST["colors"] . "<br>";
	echo "Correct answer: Red Blue Yellow" . "<br>";
	
	if($_POST["colors"] == "Red Blue Yellow"){
            $counter = $counter + 1;
        }

	echo "<br><br>" . "Question 4: 10*2+6/3=? (Hint: PEMDAS)" . "<br>";
        echo "You answered: " . $_POST["exp"] . "<br>";
        echo "Correct answer: 22" . "<br>";

        if($_POST["exp"] == "22"){
            $counter = $counter + 1;
        }
	
	echo "<br><br>" . "Question 5: What is the color of Donald Duck's Bowtie?" . "<br>";
        echo "You answered: " . $_POST["bowColor"] . "<br>";
        echo "Correct answer: Red" . "<br>";

        if($_POST["bowColor"] == "Red"){
            $counter = $counter + 1;
        }
	
    }

    printer();


?>
