<!DOCTYPE html>
<html>

<head>
    <title>PHP Login System</title>
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

        #frm {
            background: #fff;
            padding: 100px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px 0px #000;
        }

        h1 {
            text-align: center;
        }

        label {
            font-weight: bold;
        }

        .form-group {
            margin: 10px 0;
        }

        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        #btn {
            width: 100%;
            padding: 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        #btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
<img class="bg" src="https://images.unsplash.com/photo-1436491865332-7a61a109cc05?auto=format&fit=crop&q=80&w=2074&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D">
<div id="frm">
    <h1>Login</h1>
    <form name="f1" action="authentication.php" onsubmit="return validation()" method="POST">
        <div class="form-group">
            <label for="user">User Name:</label>
            <input type="text" id="user" name="user" />
        </div>
        <div class="form-group">
            <label for="pass">Password:</label>
            <input type="password" id="pass" name="pass" />
        </div>
        <div class="form-group">
            <input type="submit" id="btn" value="Login" />
        </div>
    </form>
    <p>Don't have an account? <a href="signup.php"><button>Sign Up</button></a></p>
</div>

</body>

</html>

