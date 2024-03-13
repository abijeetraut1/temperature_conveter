<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Temperature</title>
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>
    <h2>Temperature</h2>
    <form action="server_side/server_side.php" method="POST">
        <div>
            <label for="name">Name</label><br>
            <input type="text" name="name" id="name"><br>
        </div>

        <label for="inputTemperature">Input Temperature</label><br>
        <input type="number" name="temperature" id="temperature"><br>

        <label for="temperature_type">Temperature Type</label><br>
        <input type="radio" name="temperature_method" id="celsius" value="celsius">
        <label for="celsius">Celsius</label><br>

        <input type="radio" name="temperature_method" id="fahrenheit" value="fahrenheit">
        <label for="fahrenheit">Fahrenheit</label><br>

        <input type="submit" value="Submit">
    </form>



</body>

</html>