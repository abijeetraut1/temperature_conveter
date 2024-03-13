<?php

include 'database.php';


$name = $_POST["name"];
$temperature = $_POST["temperature"];
$method = $_POST["temperature_method"];

echo $name, $method, $temperature;

$name = htmlspecialchars($name);
$temperature = htmlspecialchars($temperature);

if ($method === "celsius") {
    
    $fahrenheit = ($temperature * 9 / 5) + 32;
    $sql = "INSERT INTO temperature (name, temperature_method, celsius) VALUES ('$name', '$method', '$fahrenheit')";
    
} else if ($method === "fahrenheit") {

    $celsius = ($temperature - 32) * 5 / 9;
    $sql = "INSERT INTO temperature (name, temperature_method, celsius) VALUES ('$name', '$method', '$fahrenheit')";

}


$result = mysqli_query($conn, $sql);
if ($result) {
    header("Location: ../table.php");
} else {
    echo mysqli_error($conn);
}
?>;