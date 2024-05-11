<?php

$name = $_POST['name'];
$number = $_POST['number'];
$foodName = $_POST['foodName'];
$extraFood = $_POST['extraFood'];
$dateTime = $_POST['datetime'];
$number = $_POST['number']; // This duplicate seems unnecessary
$address = $_POST['address'];
$message = $_POST['message'];

// Database connection
$conn = new mysqli('localhost', 'root', '', 'food-resturant'); // Semicolon added here

if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("insert into order (name, number, foodName, extraFood, dateTime, number, address, message)
  values (?,?,?,?,?,?,?,?)");

    $stmt->bind_param("sissiiss", $name, $number, $foodName, $extraFood, $dateTime, $number, $address, $message);

    echo "registration successfully....";

    $stmt->close();
    $conn->close();
}
