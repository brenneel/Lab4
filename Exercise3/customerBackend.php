<?php

    echo "here is my backend, lol jokes";

    $disney = $_POST['disney'];
    $fett = $_POST['fett'];
    $alpha = $_POST['alpha'];
    $shipping = $_POST['shipping'];
    $shipCost = $_POST['shipCost'];
    $sum = ($disney*1.5) + ($fett*6.5) + ($alpha*20);
    function shippingCost(){
        if($shipping == "Express"){
            $shipCost = 5;
        }
        else if($shipping == "Overnight"){
           $shipCost = 50;
        }
        else{
          $shipCost = 0.00;
        }
    }

    function adder(){
        return($disney*1.5 + $fett*6.5 + $alpha*20);
    }
    

    echo "Hello There! Thank you for your purchase<br><br>";
    echo"Here are your credentials:<br>
        Username:" . $_POST['username'] . "<br> Password:" .  $_POST['password'] . "<br>";
        
    echo "<table>";
    echo "<tr>
            <td> </td>
            <td class = 'title'>Quantity</td>
            <td class = 'title'>Cost Per Item</td>
            <td class = 'title'>Sub Total</td>
        </tr>";

    echo "<tr>
            <td class = 'title'>Item 1</td>
            <td>" . $disney . "</td>
            <td>$1.50</td>
            <td>$" . ($disney * 1.5) . "</td>
    
        </tr>";

    echo "<tr>
            <td class = 'title'>Item 2</td>
            <td>" . $fett . "</td>
            <td>$6.50</td>
            <td>$" . ($fett * 6.5) . "</td>
        </tr>";
    
    echo "<tr>
            <td class = 'title'>Item 3</td>
            <td>" . $alpha . "</td>
            <td>$20.00</td>
            <td>$" . ($alpha * 20) . "</td>
        </tr>";

    echo "<tr>
            <td class = 'title'>Shipping</td>
            <td colspan = '2'>" . $shipping . "</td>
            <td>$" . $shipCost . "</td>
        </tr>";
    echo "<tr>
            <td colspan = '3' class = 'title'>Total Cost</td>
            <td>$" . $sum . "</td>
        </tr>";

    echo"</table>";

?>