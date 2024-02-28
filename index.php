<!DOCTYPE html>
<html>
<head>
    <title>Flight Search</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        h2 {
            text-align: center;
            margin-top: 20px;
        }
        form {
            max-width: 500px;
            margin: 0 auto;
            background-color: #fff;
            padding: 70px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 20px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<h2>Search for Flights</h2>
<form method="POST" action="search.php">
    <label for="departure">Departure City:</label>
    <input type="text" name="departure" required>
    <br>
    <label for="destination">Destination City:</label>
    <input type="text" name="destination" required>
    <br>
    <label for="date">Departure Date (yyyy/mm/dd):</label>
    <input type="date" name="date" required>
    <br>
    <input type="submit" value="Search">
</form>
</body>
</html>




