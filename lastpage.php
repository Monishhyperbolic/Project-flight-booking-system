<!DOCTYPE html>
<html>
<head>
    <title>Ticket Booking Confirmation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            text-align: center;
        }
        .bg {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }
        h1 {
            background-color: #007bff;
            color: #fff;
            padding: 20px;
        }

        h2 {
            font-size: 24px;
        }

        p {
            font-size: 18px;
        }

        .container {
            background: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px #000;
            margin: 20px;
            display: inline-block;
        }
        button {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            margin: 10px;
            cursor: pointer;
            border-radius: 5px;
            font-size: 16px;
        }

        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<h1>Ticket Booking Confirmation</h1>
<img class="bg" src="https://images.unsplash.com/photo-1464037866556-6812c9d1c72e?auto=format&fit=crop&q=80&w=2070&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
<div class="container">
    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "projectflight";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $sql_route = "SELECT * FROM route ORDER BY id DESC LIMIT 1";
    $result_route = $conn->query($sql_route);


    $sql_booking = "SELECT * FROM bookingdetails ORDER BY id DESC LIMIT 1";
    $result_booking = $conn->query($sql_booking);

    if ($result_route->num_rows > 0 && $result_booking->num_rows > 0) {

        $row_route = $result_route->fetch_assoc();
        echo "<h2>Your ticket booking has been confirmed.</h2>";
        echo "Departure: " . $row_route["departure"] . "<br>";
        echo "Destination: " . $row_route["destination"] . "<br>";
        echo "Date: " . $row_route["date"] . "<br>";


        $row_booking = $result_booking->fetch_assoc();
        echo "<h2>Booking Details</h2>";
        echo "Name: " . $row_booking["name"] . "<br>";
        echo "Email: " . $row_booking["email"] . "<br>";
        echo "Phone: " . $row_booking["phone"] . "<br>";
        echo "Confirmation ID: " . $row_booking["confirmation_id"] . "<br>";


        $conn->close();
    } else {
        echo "No route information or booking details found.";
    }
    ?>
    <button onclick="printPage()">Print Ticket </button>
    <script>
        function printPage() {
            window.print();
        }
    </script>
</div>
</body>
</html>
