<!-- Juan Rodriguez, October 18th, 2025 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mars Tourism Login</title>
    <link rel="stylesheet" href="MarsCSS.css"> <!-- Reuse the same CSS -->
    <style>
        /* Inline styles for the login form for clarity */
        .login-container {
            max-width: 350px;
            margin: 60px auto;
            padding: 30px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.5);
            color: #fff;
        }

        .login-container h2 {
            text-align: center;
            color: #ffcc33;
        }

        .login-container label {
            display: block;
            margin-top: 15px;
            font-weight: bold;
        }

        .login-container input {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 8px;
            margin-top: 5px;
        }

        .login-container input[type="submit"] {
            background-color: #ffcc33;
            color: #1e2950;
            font-weight: bold;
            cursor: pointer;
            margin-top: 20px;
        }

        .login-container input[type="submit"]:hover {
            background-color: #ffe066;
        }

        .error {
            color: #ff6666;
            font-size: 13px;
            margin-top: 5px;
        }

        body {
            background: linear-gradient(to bottom right, #0b0f29, #1e2950);
            font-family: 'Poppins', sans-serif;
        }
    </style>

    <script>
        // JavaScript Validation to ensure userid and password are entered
        function validateLoginForm() {
            const userid = document.getElementById('userid').value.trim();
            const password = document.getElementById('password').value.trim();
            let valid = true;

            document.getElementById('userError').textContent = "";
            document.getElementById('passError').textContent = "";

            if (userid === "") {
                document.getElementById('userError').textContent = "Please enter your User ID.";
                valid = false;
            }

            if (password === "") {
                document.getElementById('passError').textContent = "Please enter your Password.";
                valid = false;
            }

            return valid;
        }
    </script>
</head>
<body>

    <!-- Navigation shared across pages -->
    <nav>
        <ul>
            <li><a href="MarsHome.php">Home</a></li>
            <li><a href="MarsTimer.php">Mars Trip Clock</a></li>
            <li><a href="MarsContact.php">Contact</a></li>
            <li><a href="MarsLogin.php" class="active">Login</a></li>
        </ul>
    </nav>

    <!-- Login Form Section -->
    <div class="login-container">
        <h2>Login to Mars Tourism</h2>
        <form action="process_login.php" method="POST" onsubmit="return validateLoginForm();">
            <label for="userid">User ID:</label>
            <input type="text" id="userid" name="userid" placeholder="Enter your User ID">
            <div id="userError" class="error"></div>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" placeholder="Enter your Password">
            <div id="passError" class="error"></div>

            <input type="submit" value="Login">
        </form>
    </div>

    <footer>
        <p>&copy; 2025 Mars Tourism Exploration.CO</p>
    </footer>

</body>
</html>
