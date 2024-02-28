<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectflight";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];


    $confirmation_id = uniqid();


    $sql = "INSERT INTO bookingdetails (name, email, phone, confirmation_id) 
            VALUES ('$name', '$email', '$phone', '$confirmation_id')";

    if ($conn->query($sql) === TRUE) {
        header("Location: https://rzp.io/l/MaoSYm5Jon");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

