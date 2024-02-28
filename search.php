<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        h2 {
            color: #007bff;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #007bff;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        form {
            text-align: center;
        }
        input[type="hidden"] {
            display: none;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<?php
include 'db_connection.php';


$selectedDeparture = "";
$selectedDestination = "";
$selectedDate = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $departure = $_POST["departure"];
    $destination = $_POST["destination"];
    $date = $_POST["date"];

    $selectedDeparture = $departure;
    $selectedDestination = $destination;
    $selectedDate = $date;

    $sql = "SELECT * FROM flights WHERE departure = '$departure' AND destination = '$destination' AND date = '$date'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Search Results:</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Flight ID</th><th>Departure</th><th>Destination</th><th>Date</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["departure"] . "</td>";
            echo "<td>" . $row["destination"] . "</td>";
            echo "<td>" . $row["date"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";


        echo '<form action="booking.php" method="POST">';
        echo '<input type="hidden" name="departure" value="' . $selectedDeparture . '">';
        echo '<input type="hidden" name="destination" value="' . $selectedDestination . '">';
        echo '<input type="hidden" name="date" value="' . $selectedDate . '">';
        echo '<input type="submit" value="Book Flight">';
        echo '</form>';




        $insertSql = "INSERT INTO route (departure, destination, date) 
                      VALUES ('$selectedDeparture', '$selectedDestination', '$selectedDate')";

        if ($conn->query($insertSql) === TRUE) {

        } else {
            echo "Error: " . $insertSql . "<br>" . $conn->error;
        }
    } else {
        echo "No flights found for the given criteria.";
    }
}

$conn->close();
?>
</body>
</html>