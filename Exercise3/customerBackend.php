<?php

    echo "<link rel='stylesheet' href='style.css'>";
    echo "<body>";
    $disney = $_POST['disney'];
    $fett = $_POST['fett'];
    $alpha = $_POST['alpha'];
    $shipping = $_POST['shipping'];
    $shipCost = $_POST['shipCost'];
    $sum = ($disney*1.5) + ($fett*6.5) + ($alpha*20);
   
    echo "<h1>Hello There! <span style = 'color:red;font-style:italic'>Thank you</span> for your purchase!</h1>";
    echo"<h2>Here are your credentials:</h2>
        <div class = 'credentialDiv'>
        <span class = 'credTitle'>Username: </span><span class = 'credentialText'>" . $_POST['username'] . "</span><br> 
        <span class = 'credTitle'>Password: </span><span class = 'credentialText'>" .  $_POST['password'] . "</span><br></div>";
    
    echo "<br><br><br>";
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
    echo"</body>";
?>