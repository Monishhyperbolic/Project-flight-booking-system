<!DOCTYPE html>
<html>

<head>
    <title>Sign Up</title>
    <style>
        body {
            font-family: "Arial", sans-serif;
            background-color: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .bg {
            width: 100%;
            position: absolute;
            z-index: -1;
        }

        h1 {
            text-align: center;
        }
        form {
            background: #fff;
            padding: 100px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px #000;
            text-align: center;

        }

        label {
            font-weight: bold;
            display: block;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 10px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
<img class="bg" src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?auto=format&fit=crop&q=80&w=2074&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
<form action="signupregd.php" method="post">
    <h1>Sign Up</h1>
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required>
    <br>
    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required>
    <br>
    <input type="submit" value="Sign Up">
</form>
</body>

</html>


