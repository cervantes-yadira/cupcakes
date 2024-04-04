<!--
Names: Tien Han, Yadira Cervantes
Date: 4/4/2024
URL: https://yadiracervantes.greenriverdev.com/328/cupcakes/index.php

This page displays a cupcake order form that a customer can fill out and submit
-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="process.php" method="post">
    <h3>Cupcake Fundraiser</h3>
    <label for="name">Your Name:</label>
    <input id="name" type="text" name="name"><br>

    <label>Cupcake Flavors</label><br>
    <input id="grasshopper" type="checkbox" name="flavor[]" value="The Grasshopper">
    <label for="grasshopper">The Grasshopper</label><br>

    <input id="whiskey-maple-bacon" type="checkbox" name="flavor[]" value="Whiskey Maple Bacon">
    <label for="whiskey-maple-bacon">Whiskey Maple Bacon</label><br>

    <input id="carrot-walnut" type="checkbox" name="flavor[]" value="Carrot Walnut">
    <label for="carrot-walnut">Carrot Walnut</label><br>

    <input id="salted-caramel" type="checkbox" name="flavor[]" value="Salted Caramel Cupcake">
    <label for="salted-caramel">Salted Caramel Cupcake</label><br>

    <input id="red-velvet" type="checkbox" name="flavor[]" value="Red Velvet">
    <label for="red-velvet">Red Velvet</label><br>

    <input id="lemon-drop" type="checkbox" name="flavor[]" value="Lemon Drop">
    <label for="lemon-drop">Lemon Drop</label><br>

    <input id="tiramisu" type="checkbox" name="flavor[]" value="Tiramisu">
    <label for="tiramisu">Tiramisu</label><br>

    <button type="submit">Order</button>
</form>

</body>
</html>