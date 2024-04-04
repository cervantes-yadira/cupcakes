<!--
Names: Tien Han, Yadira Cervantes
Date: 4/4/2024
URL:

This program processes the cupcake order form and prints a receipt
-->
<?php

$name = $_POST["name"];
$flavor = $_POST["flavor"];

// gets order total and formats it as US currency
$total = 3.50 * count($flavor);
$total = number_format($total, 2);

// echoes selected cupcake flavors
function echoOrder() {
    foreach($_POST['flavor'] as $cupcake) {
        echo "
            <li>$cupcake</li>
        ";
    }
}

// echoes receipt
echo "
    <p>Thank you ". $name .", for your order!</p>
    <p>Order Summary:</p>
    <ul>
    ";


echoOrder();
echo "
    </ul>
    <p>Order Total: $". $total ."</p>
";
?>